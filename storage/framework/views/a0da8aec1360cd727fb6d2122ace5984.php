<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AutoDealzz</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">AutoDealzz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                      
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('cars')); ?>">Cars</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('dealers')); ?>">Dealers</a></li>
                        
                    </ul>
                    <a class="btn btn-outline-dark" href="<?php echo e(route('logout')); ?>">
                            Logout
                           
                     </a>
                </div>
            </div>
        </nav>
        <!-- Header-->


        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Unleashing Power and Performance</h1>
                    <p class="lead fw-normal text-white-50 mb-0">A Comprehensive Guide to High-Performance Cars</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
          
            <div class="container px-4">
            <h3 class="mb-5">Available Cars</h3>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    

               
                
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img height="180" src="<?php echo e(asset('storage/carscontainer/' . $car->image)); ?>" alt="Image">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo e($car->model_name); ?></h5>
                                    <!-- Prod   uct price-->
                                    <span>$<?php echo e($car->price); ?></span>
                                        
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <!-- <a  class="btn btn-outline-dark mt-auto" href="<?php echo e(route('cardetial',['id' => $car->inventory_id])); ?>">View options</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; AutoDealzz 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\CarManagementSystem\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>