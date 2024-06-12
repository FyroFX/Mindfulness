<!DOCTYPE html>
<html>
  <head> 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <Style type="text/css">

        .title_deg
        {
            font-size:30px;
            font-weight:bold;
            color:white;
            padding:30px;
            text-align:center;
        }

        .table_deg
        {
            border:1px solid white;
            width:80%;
            text-align:center;
            margin-left:150px;
        }

        .th_deg
        {
            background-color:skyblue;
        }

        .img_deg
        {
            height:100px;
            width:150px;
            padding:10px;   
        }

        </style>
  </head>
  <body>
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    <?php echo $__env->make('admin.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Sidebar Navigation end-->
        <div class="page-content">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <?php echo e(session()->get('message')); ?>

            </div>

            <?php endif; ?>

            <h1 class="title_deg">All Post</h1>
            <table class="table_deg">
                <tr class="th_deg">
                    <th>Menu name</th>
                    <th>Description</th>
                    <th>Posted by</th>
                    <th>Post status</th>
                    <th>UserType</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->description); ?></td>
                    <td><?php echo e($post->name); ?></td>
                    <td><?php echo e($post->post_status); ?></td>
                    <td><?php echo e($post->usertype); ?></td>
                    <td>
                        <img class="img_deg" src="postimage/<?php echo e($post->image); ?>">
                    </td>
                    <td>
                        <a href="<?php echo e(url('delete_menu', $post->id)); ?>" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                    </td>
                    <td>
                        <a href="<?php echo e(url('edit_menu', $post->id)); ?>" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>  
        
    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript">
        function confirmation(ev)
        {
            ev.preventDefault();

            var urlToRedirect=ev.currentTarget.getAttribute('href');
            
            console.log(urlToRedirect);

            swal({
                title:"Are you Sure ",
                text:"You won't be able to revert this change ",
                icon:"warning",
                buttons:true,
                dangerMode:true,
            })

            .then((willcancel)=>
            {
                if(willcancel)
                {
                    window.location.href=urlToRedirect;
                }
            });
        }
    </script>
  </body>
</html><?php /**PATH C:\Users\FyroFX\Mindfulness\resources\views/admin/show_menu.blade.php ENDPATH**/ ?>