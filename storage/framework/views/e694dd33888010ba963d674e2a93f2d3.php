<div class="header_main">
            <div class="">
               <div class="menu_main">
                  <ul>
                     <li class="menu_logo"><img src="Images/logo3.png" alt="logo"></li>
                     
                     <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                        
                     <li class="active"><a href="<?php echo e(route('home')); ?>">Admin Page</a></li>
                        <?php else: ?>
                           <li class="active"><a href="#home">Home</a></li>
                     <?php endif; ?>

                     <li><a href="#about">About</a></li>
                     <li><a href="#menu">Menu</a></li>
                     <li><a href="#contact">Contact Us</a></li>

                     <?php if(Route::has('login')): ?>

                     <?php if(auth()->guard()->check()): ?>
                     <li><?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?></li>

                     <?php else: ?>
                     <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                     
                     <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                     <?php endif; ?>

                     <?php endif; ?>
                  </ul>
               </div>
            </div>
         </div>

      
<?php /**PATH C:\Users\FyroFX\Documents\GitHub\Mindfulness\resources\views/home/header.blade.php ENDPATH**/ ?>