<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg bg-transparent navbar-dark header-light fixed-top header-reverse-scroll menu-logo-center mobile-top-space">
        <div class="container-lg nav-header-container">
            <div class="col-6 px-lg-0 menu-logo">
                <a class="navbar-brand" href="{{route('web.home')}}">
                    <img src="{{ url(asset('web/assets/images/logo-black.png')) }}" data-at2x="{{ url(asset('web/assets/images/logo-black@2x.png')) }}" class="default-logo" alt="">
                    <img src="{{ url(asset('web/assets/images/logo.png')) }}" data-at2x="{{ url(asset('web/assets/images/logo.png')) }}" class="alt-logo" alt="">
                    <img src="{{ url(asset('web/assets/images/logo-black.png')) }}" data-at2x="{{ url(asset('web/assets/images/logo-black@2x.png')) }}" class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto col-lg-12 px-lg-0 menu-order">
                <button class="navbar-toggler float-end collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation"
                        aria-expanded="false">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="navbar-collapse justify-content-between collapse" id="navbarNav" style="">
                    <ul class="navbar-nav alt-font navbar-left justify-content-end">

                        <li class="nav-item">
                            <a href="{{route('web.home')}}" class="nav-link">Home</a>
                        </li>

{{--                        <li class="nav-item dropdown megamenu">--}}
{{--                            <a href="javascript:void(0);" class="nav-link">Serviços</a>--}}
{{--                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"--}}
{{--                               aria-hidden="true"></i>--}}
{{--                            <div class="menu-back-div dropdown-menu megamenu-content" role="menu">--}}
{{--                                <div class="d-lg-flex justify-content-center">--}}
{{--                                    <ul class="d-lg-inline-block">--}}
{{--                                        <li class="dropdown-header">Tráfego pago</li>--}}
{{--                                        <li><a href="servicos.html"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <ul class="d-lg-inline-block">--}}
{{--                                        <li class="dropdown-header">Redes Sociais</li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <ul class="d-lg-inline-block">--}}
{{--                                        <li class="dropdown-header">Sites e Sistemas</li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                        <li><a href="#"><i class="ti-layout-accordion-separated"></i>Serviços</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}

                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#" class="nav-link">Serviços</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                               aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{route('web.website')}}">Sites</a>
                                </li>
                                <li>
                                    <a href="{{route('web.system')}}">Sistemas</a>
                                </li>
                                <li>
                                    <a href="{{route('web.trafic')}}">Tráfego Pago</a>
                                </li>
                                <li>
                                    <a href="{{route('web.social')}}">Mídias Sociais</a>
                                </li>
                                <li>
                                    <a href="{{route('web.identity')}}">Identidade Visual</a>
                                </li>
                            </ul>
                        </li>

{{--                        <li class="nav-item dropdown simple-dropdown">--}}
{{--                            <a href="#" class="nav-link">Projetos</a>--}}
{{--                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"--}}
{{--                               aria-hidden="true"></i>--}}
{{--                            <ul class="dropdown-menu" role="menu">--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('web.project')}}">Sites e Sistemas</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('web.projects')}}">Mídias Sociais</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('web.project')}}">Identidade Visual</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                    <ul class="navbar-nav alt-font navbar-right justify-content-start">

                        <li class="nav-item">
                            <a href="{{route('web.clients')}}" class="nav-link">Clientes</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('web.blog') }}" class="nav-link">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('web.contact')}}" class="nav-link">Contato</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
