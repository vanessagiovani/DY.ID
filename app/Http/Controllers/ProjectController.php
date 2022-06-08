<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function home()
    {
        $products = Product::orderby('products.id', 'desc')
            ->paginate(6);
        return view('home', compact('products'));
    }

    public function details(Request $request)
    {
        $id = $request->id;
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category')
            ->where('products.id', '=', $id)
            ->get();
        return view('details', compact('products'));
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5',
            'gender' => 'required|in:M,F',
            'address' => 'required|min:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|alpha_num|min:6'
        ]);
        $user = new User();
        $user->name = $validateData['name'];
        $user->gender = $validateData['gender'];
        $user->address = $validateData['address'];
        $user->email = $validateData['email'];
        $user->password = bcrypt($validateData['password']);
        $user->save();
        return redirect()->route('users.login');
    }

    public function viewProduct()
    {
        $products = Product::all();
        return view('viewproduct', compact('products'));
    }

    public function editProduct(Product $product)
    {
        $categories = Category::orderby('name', 'asc')
            ->get();
        return view('editproduct', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, Product $product)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5|unique:products,name,' . $product->id,
            'description' => 'required|min:50',
            'price' => 'required|numeric|min:0|not_in:0',
            'category_id' => 'required',
            'photo' => 'required|mimes:jpg'
        ]);

        unset($validateData['photo']);

        $filename = "public/" . $product->photo;
        Storage::delete($filename);

        $image = $request->file('photo');
        Storage::putFileAs('public', $image, $image->getClientOriginalName());

        $validateData['photo'] = $image->getClientOriginalName();

        Product::where('id', $product->id)
            ->update($validateData);
        return redirect()->route('admin.viewProduct');
    }

    public function addProduct()
    {
        $categories = Category::orderby('name', 'asc')
            ->get();
        return view('addproduct', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5|unique:products',
            'description' => 'required|min:50',
            'price' => 'required|numeric|min:0|not_in:0',
            'category' => 'required',
            'photo' => 'required|mimes:jpg'
        ]);

        $image = $request->file('photo');

        $product = new Product();
        $product->name = $validateData['name'];
        $product->description = $validateData['description'];
        $product->price = $validateData['price'];
        $product->category_id = $validateData['category'];
        $product->photo = $image->getClientOriginalName();

        Storage::putFileAs('public', $image, $image->getClientOriginalName());

        $product->save();
        return redirect()->route('home');
    }

    public function deleteProduct(Product $product)
    {
        $filename = "public/" . $product->photo;
        Storage::delete($filename);
        $product->delete();
        return redirect()->route('admin.viewProduct');
    }

    public function viewCategory()
    {
        $categories = Category::all();
        return view('viewcategory', compact('categories'));
    }

    public function addCategory()
    {
        return view('addcategory');
    }

    public function storeCategory(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:categories|min:2',
        ]);
        $category = new Category();
        $category->name = $validateData['name'];
        $category->save();
        return redirect()->route('admin.viewCategory');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.viewCategory');
    }

    public function editCategory(Category $category)
    {
        return view('editcategory', compact('category'));
    }

    public function updateCategory(Request $request, Category $category)
    {
        $validateData = $request->validate([
            'name' => 'required|min:2|unique:categories,name,' . $category->id,
        ]);

        Category::where('id', $category->id)
            ->update($validateData);
        return redirect()->route('admin.viewCategory');
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'like', "%$request->query_param%")
            ->paginate(6);
        return view('home', compact('products'));
    }

    public function cart()
    {
        $totalprice = 0;
        $totalquantity = 0;

        if (Cart::where('user_id', Auth::user()->id)->exists()) {
            $cart_id = Cart::select('id')
                ->where('user_id', Auth::user()->id)
                ->orderby('id', 'desc')
                ->first()
                ->id;

            $count = CartItem::where('cart_id', $cart_id)
                ->count();

            $cart_items = CartItem::join('carts', 'cart_items.cart_id', '=', 'carts.id')
                ->select('cart_items.*')
                ->where('carts.user_id', Auth::user()->id)
                ->orderby('carts.id', 'desc')
                ->take($count)
                ->get();

            return view('cart', compact('cart_items', 'totalprice', 'totalquantity'));
        } else {
            $cart_items = CartItem::join('carts', 'cart_items.cart_id', '=', 'carts.id')
                ->select('cart_items.*')
                ->where('carts.user_id', Auth::user()->id)
                ->orderby('carts.id', 'desc')
                ->get();

            return view('cart', compact('cart_items', 'totalprice', 'totalquantity'));
        }
    }

    public function storeCartItem(Request $request, Product $product)
    {
        $validateData = $request->validate([
            'quantity' => 'required|min:0|not_in:0',
        ]);

        if (Cart::where('user_id', Auth::user()->id)->doesntExist()) {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->save();
        }

        $cart_id = Cart::select('id')
            ->where('user_id', Auth::user()->id)
            ->orderby('id', 'desc')
            ->first()
            ->id;

        if (CartItem::where([
            ['product_id', $product->id],
            ['cart_id', $cart_id]
        ])->exists()) {
            $originalQuantity = CartItem::select('quantity')
                ->where('product_id', $product->id)
                ->orderby('id', 'desc')
                ->first()
                ->quantity;
            CartItem::where([
                ['product_id', $product->id],
                ['cart_id', $cart_id]
            ])
                ->update([
                    'quantity' => $originalQuantity + $request->input('quantity'),
                    'subtotal' => $product->price * ($originalQuantity + $request->input('quantity'))
                ]);
            return back();
        }

        $cart_item = new CartItem();
        $cart_item->cart_id = $cart_id;
        $cart_item->product_id = $product->id;
        $cart_item->quantity = $validateData['quantity'];
        $cart_item->subtotal = $product->price * $validateData['quantity'];
        $cart_item->save();
        return back();
    }

    public function deleteCartItem(CartItem $cart_item)
    {
        $cart_item->delete();
        return redirect()->route('users.cart');
    }

    public function editCartItem(CartItem $cart_item)
    {
        $cart_items = CartItem::where('id', $cart_item->id)
            ->get();
        return view('editcartitem', compact('cart_items'));
    }

    public function updateCartItem(Request $request, CartItem $cart_item)
    {
        $validateData = $request->validate([
            'quantity' => 'required|min:0|not_in:0'
        ]);

        CartItem::where('id', $cart_item->id)
            ->update([
                'quantity' => $request->input('quantity'),
                'subtotal' => $cart_item->product->price * $request->input('quantity')
            ]);
        return redirect()->route('users.cart');
    }

    public function checkout(Request $request)
    {
        $cart_id = Cart::select('id')
            ->where('user_id', Auth::user()->id)
            ->orderby('id', 'desc')
            ->first()
            ->id;

        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->cart_id = $cart_id;
        $transaction->totalprice = $request->totalprice;
        $transaction->save();

        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
        return redirect()->route('home');
    }

    public function historyTransaction()
    {
        $historytransaction = Transaction::where('user_id', Auth::user()->id)
            ->orderby('id', 'desc')
            ->get();
        return view('historytransaction', compact('historytransaction'));
    }
}
