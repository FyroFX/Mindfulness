<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      <?php echo $__env->make('home.homecss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
               $(document).ready(function(){
                  $('a[href^="#"]').on('click', function(event) {
                     var target = $(this.getAttribute('href'));
                     if(target.length) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                           scrollTop: target.offset().top
                        }, 100); // Duration in milliseconds
                     }
                  });
               });
            </script>
   </head>
   <body>
      <!-- header section start -->
         <div class="header_section">
         <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- banner section start -->
         <?php echo $__env->make('home.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- banner section end -->
         </div>
      <!-- header section end -->
      <!-- about section start -->
      <?php echo $__env->make('home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- about section end -->
      <!-- services section start -->
      <?php echo $__env->make('home.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- services section end -->
      <!-- footer section start -->
      <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- footer section end -->
      <!-- copyright section start -->
      <?php echo $__env->make('home.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- copyright section end -->
      
   </body>
</html><?php /**PATH C:\Users\FyroFX\Documents\GitHub\Mindfulness\resources\views/home/homepage.blade.php ENDPATH**/ ?>