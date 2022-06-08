
<?php $__env->startSection('content'); ?>
   <?php
      $nilai = 90;
      echo "<h3>IF</h3>";
   ?>
   <?php if(($nilai >= 0) and ($nilai < 50)): ?>
      <div class = "alert alert-danger d-inline-block">
         Oh no, you didn't pass, Jarell :(
      </div>
   <?php else: ?>
      <div class = "alert alert-success d-inline-block">
         Yayyyy, you passed, Jarell :)
      </div>
   <?php endif; ?>
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('LA02.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/if.blade.php ENDPATH**/ ?>