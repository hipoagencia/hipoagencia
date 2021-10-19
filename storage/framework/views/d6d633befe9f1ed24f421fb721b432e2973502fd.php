<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="<?php echo e(route('web.home')); ?>">
                        <img src="<?php echo e(url(asset('web/assets/images/logo.png'))); ?>" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?php echo e(route('web.home')); ?>">
                    <img src="<?php echo e(url(asset('web/assets/images/logo.png'))); ?>" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">


                        <li class="nav-item">
                            <a href="<?php echo e(route('web.home')); ?>"
                               class="nav-link <?php echo e((request()->route()->getName() == 'web.home' ? 'active' : '')); ?>">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Especialidades
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">


                                <li class="nav-item">
                                    <a href="<?php echo e(route('web.specialtyHeart')); ?>" class="nav-link">Sistema Nervoso</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('web.specialtyHeart')); ?>" class="nav-link">Coração</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('web.specialtyHeart')); ?>" class="nav-link">Sistema Urinário</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('web.specialtyHeart')); ?>" class="nav-link">Cânceres e Tumores</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('web.specialtyHeart')); ?>" class="nav-link">Saúde Sexual</a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('web.about')); ?>"
                               class="nav-link <?php echo e((request()->route()->getName() == 'web.about' ? 'active' : '')); ?>">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('web.blog')); ?>"
                               class="nav-link <?php echo e((request()->route()->getName() == 'web.blog' ? 'active' : '')); ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contato</a>
                        </li>


                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="#"> <i class='bx bx-search-alt' style="font-size:50px;"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/master/header.blade.php ENDPATH**/ ?>