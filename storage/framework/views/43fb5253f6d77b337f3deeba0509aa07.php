<!DOCTYPE html>
<html lang="en">
<link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>
<body>

    <main class="homeContainer">

        <form action="<?php echo e(route('login.action')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <?php if($errors->any()): ?>
                    <div class="alert alert-danger">

                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                    </div>
                <?php endif; ?>
            <div>
               <h2> Login Form</h2>
            </div>

            <div>
                <label for="email">Email</label>
                <input required id="email" name="email" type="text" placeholder="Enter Email">
            </div>

            <div>
                <label for="password">Password</label>
                <input required id="password" name="password" type="password" placeholder="Enter Password">
            </div>
            <button type="submit">LOGIN</button>
        </form>
        
    </main>
    
</body>
</html><?php /**PATH C:\laragon\www\CarManagementSystem\resources\views/pages/loginpage.blade.php ENDPATH**/ ?>