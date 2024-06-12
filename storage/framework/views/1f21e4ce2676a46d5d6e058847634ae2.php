<div class="services_section layout_padding">
   <div id="menu">
         <div class="container">
            <h1 class="services_title">Menu </h1>
            <div class="services_section_2">
               <div class="row">

                  <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-4 mb-5">
                     <h1 class="services_taital"><?php echo e($post->title); ?></h1>
                     <div><img src="/postimage/<?php echo e($post->image); ?>" class="services_img"></div>
                     <h4><?php echo e($post->description); ?></h4>
                     <!-- <div class="btn_main"><a href="#">Read More</a></div> -->
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div><?php /**PATH C:\Users\FyroFX\Documents\GitHub\Mindfulness\resources\views/home/services.blade.php ENDPATH**/ ?>