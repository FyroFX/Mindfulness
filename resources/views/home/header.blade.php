<div class="header_main">
            <div class="">
               <div class="menu_main">
                  <ul>
                     <li class="menu_logo"><img src="Images/logo3.png" alt="logo"></li>
                     
                     @if(Auth::check() && Auth::user()->isAdmin())
                        
                     <li class="active"><a href="{{route('home')}}">Admin Page</a></li>
                        @else
                           <li class="active"><a href="#home">Home</a></li>
                     @endif

                     <li><a href="#about">About</a></li>
                     <li><a href="#menu">Menu</a></li>
                     <li><a href="#contact">Contact Us</a></li>

                     @if (Route::has('login'))

                     @auth
                     <li><x-app-layout></x-app-layout></li>

                     @else
                     <li><a href="{{route('login')}}">Login</a></li>
                     
                     <li><a href="{{route('register')}}">Register</a></li>
                     @endauth

                     @endif
                  </ul>
               </div>
            </div>
         </div>

      
