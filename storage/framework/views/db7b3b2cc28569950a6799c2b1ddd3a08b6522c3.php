<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
<head>
<body align = "center">
	<h1>STUDENT DATA</h1>
	  <?php $__empty_1 = true; $__currentLoopData = $degree->students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	  	<p>NIM : <?php echo e($student->NIM); ?></p>
		<p>Name : <?php echo e($student->studentdetails->Name); ?></p>
		<p>Degree : <?php echo e($degree->Name); ?></p>
		<p>Email : <?php echo e($student->studentdetails->Email); ?></p>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	  	<p>No Data</p>
	  <?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\coba1\resources\views/students.blade.php ENDPATH**/ ?>