
<?php $__env->startSection('content'); ?>
   <?php
      $nilai = 80;
      echo "<h3>IF ELSE</h3>";
   ?>
   <?php if(($nilai >= 90) and ($nilai <= 100)): ?>
      <div class = "alert alert-success d-inline-block">
         What a high score! So proud of you, Jarell :))
      </div>
   <?php elseif($nilai >= 50): ?>
      <div class = "alert alert-success d-inline-block">
         Not bad, Jarell :)
      </div>         
   <?php else: ?>
      <div class = "alert alert-danger d-inline-block">
         Oh no, you didn't pass, Jarell :(
      </div>        
   <?php endif; ?>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('LA02.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/elseif.blade.php ENDPATH**/ ?>