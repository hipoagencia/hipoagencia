<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('web.home') }}">
                        <img src="{{ url(asset('web/assets/images/logo.png')) }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('web.home') }}">
                    <img src="{{ url(asset('web/assets/images/logo.png')) }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">


                        <li class="nav-item">
                            <a href="{{ route('web.home') }}" class="nav-link {{ (request()->route()->getName() == 'web.home' ? 'active' : '') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Especialidades</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.blog') }}" class="nav-link {{ (request()->route()->getName() == 'web.blog' ? 'active' : '') }}">Blog</a>
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
