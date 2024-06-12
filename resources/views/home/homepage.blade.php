<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      @include('home.homecss')
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
         @include('home.header')
         <!-- banner section start -->
         @include('home.banner')
         <!-- banner section end -->
         </div>
      <!-- header section end -->
      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->
      <!-- services section start -->
      @include('home.services')
      <!-- services section end -->
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      @include('home.copyright')
      <!-- copyright section end -->
      
   </body>
</html>