
<div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                            <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link <?php echo e(Request::route()->getName() == 'home' ? 'active' : ''); ?>">Home</a>
                            <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link <?php echo e(Request::route()->getName() == 'about' ? 'active' : ''); ?>">About</a>
                            <a href="<?php echo e(route('gallery')); ?>" class="nav-item nav-link <?php echo e(Request::route()->getName() == 'gallery' ? 'active' : ''); ?>">Gallery</a>
                                
                                <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link <?php echo e(Request::route()->getName() == 'contact' ? 'active' : ''); ?>">Contact</a>
                            </div>
                            <div class="ml-auto">

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            
<?php /**PATH /Users/donnyimmanda/Documents/laravel/tuliplparung/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>