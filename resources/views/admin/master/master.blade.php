 add <!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8"/>
    <title>{{ env('APP_NAME') }} - Painel de Controle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <!-- Lightbox css -->
    <link href="{{ url(asset('backend/assets/libs/magnific-popup/magnific-popup.css')) }}" rel="stylesheet"
          type="text/css"/>

    <!-- Sweet Alert-->
    <link href="{{ url(asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')) }}" rel="stylesheet"
          type="text/css"/>

    <!-- Select2 -->
    <link href="{{ url(asset('backend/assets/libs/select2/css/select2.min.css')) }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url(asset('backend/assets/libs/select2/css/select2.min.css')) }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url(asset('backend/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')) }}"
          rel="stylesheet" type="text/css">
    <link href="{{ url(asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.css')) }}" rel="stylesheet"
          type="text/css">
    <link href="{{ url(asset('backend/assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css')) }}"
          rel="stylesheet" type="text/css">
    <link href="{{ url(asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')) }}"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ url(asset('backend/assets/libs/@chenfengyuan/datepicker/datepicker.min.css')) }}">

    <!-- DataTables -->
    <link href="{{ url(asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')) }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ url(asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')) }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ url(asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')) }}"
          rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{ url(asset('backend/assets/css/bootstrap.min.css')) }}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ url(asset('backend/assets/css/icons.min.css')) }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ url(asset('backend/assets/css/app.min.css')) }}" id="app-style" rel="stylesheet" type="text/css"/>

    <style>div.dataTables_wrapper div.dataTables_processing {
            background-color: #343a40 !important;
            color: #FFFFFF !important;
        }</style>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

</head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ url(asset(env('INFO_FAVICON'))) }}" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{ url(asset(env('INFO_LOGO'))) }}" alt="" height="55">
                                </span>
                    </a>

                    <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ url(asset(env('INFO_FAVICON'))) }}" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{ url(asset(env('INFO_LOGO_WHITE'))) }}" alt="" height="55" class="mt-4">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                           aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>


                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                            <span key="t-profile">Perfil</span></a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href={{ route('logout') }}><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                key="t-logout">Logout</span></a>
                    </div>
                </div>


            </div>
        </div>
    </header>


    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-starter-page">Início</span>
                        </a>
                    </li>


                    @can('user-list')
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                <i class="bx bx-envelope"></i>
                                <span key="user">Usuários</span>
                            </a>
                            <ul class="sub-menu mm-collapse">
                                <li><a href="{{ route('admin.users.index',['adm'=>'0']) }}" key="user">Usuário</a>
                                </li>

                                @role('superAdmin')
                                <li><a href="{{ route('admin.users.index',['adm'=>'1']) }}" key="admin">Administrador</a>
                                </li>
                                <li><a href="{{ route('admin.roles.index')}}" key="roles">Perfil</a></li>
                                @endrole
                            </ul>
                        </li>
                    @endcan



                    @canany(['blog-list','content-list','gallery-list'])
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                <i class="bx bx-envelope"></i>
                                <span key="t-email">Institucional</span>
                            </a>
                            <ul class="sub-menu mm-collapse">
                                @can('blog-list')
                                    <li><a href="{{ route('admin.posts.index') }}" key="t-blog">Blog</a></li>
                                @endcan
                                @can('content-list')
                                    <li><a href="{{ route('admin.content.index') }}" key="t-read-email" >Páginas</a>
                                    </li>
                                @endcan
                                @can('gallery-list')
                                    <li><a href="{{ route('admin.gallery.index') }}" key="t-read-email">Galeria</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @canany(['order-list','product-list'])
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                <i class="bx bx-envelope"></i>
                                <span key="t-email">Vendas</span>
                            </a>
                            <ul class="sub-menu mm-collapse">
                                @can('order-list')
                                    <li><a href="{{ route('admin.orders.index') }}" key="orders">Pedidos</a>
                                    </li>
                                @endcan
                                @can('product-list')
                                    <li><a href="{{ route('admin.products.plans') }}" key="t-blog">Assinaturas</a></li>
                                    <li><a href="{{ route('admin.products.index') }}" key="t-blog">Produtos</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan


                    @canany(['eadModule-list','eadContent-list'])
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                <i class="bx bx-envelope"></i>
                                <span key="t-email">EAD</span>
                            </a>
                            <ul class="sub-menu mm-collapse">
                                @can('eadModule-list')
                                    <li><a href="{{ route('admin.ead-module.index') }}" key="orders">Módulos</a>
                                    </li>
                                @endcan
                                @can('eadContent-list')
                                    <li><a href="{{ route('admin.ead-content.index') }}" key="t-blog">Conteúdos</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan


                    @canany(['order-list','product-list'])
                        <li class="menu-title" key="t-pages">Sessões</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                                <i class="dripicons-gear"></i>
                                <span key="t-email">Sistema</span>
                            </a>
                            <ul class="sub-menu mm-collapse">
                                @can('category-list')
                                    <li><a href="{{ route('admin.categories.index') }}" key="t-inbox">Categorias</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    <li class="menu-title" key="t-pages">Visão Usuário</li>

                    <li>
                        <a href="{{ route('web.home') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>Website</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user.dashboard') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>Painel do Usuário</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>


    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                @yield('content')


            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © {{ env('app_name') }}.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Desenvolvimento <a href="https://hipoagencia.com.br">Hipo Agência</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="{{ url(asset('backend/assets/libs/jquery/jquery.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/metismenu/metisMenu.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/simplebar/simplebar.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/node-waves/waves.min.js')) }}"></script>

<!-- Select 2 -->
<script src="{{ url(asset('backend/assets/libs/select2/js/select2.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/@chenfengyuan/datepicker/datepicker.min.js')) }}"></script>

<!-- form mask init -->
<script src="{{ url(asset('backend/assets/libs/inputmask/min/jquery.inputmask.bundle.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/pages/form-mask.init.js')) }}"></script>

<!-- Datatable init js -->
<script src="{{ url(asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/jszip/jszip.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')) }}"></script>
<script
    src="{{ url(asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')) }}"></script>
<script
    src="{{ url(asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/pages/datatables.init.js')) }}"></script>

<script src="{{ url(asset('backend/assets/js/pages/form-advanced.init.js')) }}"></script>

<!--tinymce js-->
<script src="{{ url(asset('backend/assets/libs/tinymce/tinymce.min.js')) }}"></script>

<!-- init js -->
<script src="{{ url(asset('backend/assets/js/pages/form-editor.init.js')) }}"></script>

<!-- Magnific Popup-->
<script src="{{ url(asset('backend/assets/libs/magnific-popup/jquery.magnific-popup.min.js')) }}"></script>
<!-- lightbox init js-->
<script src="{{ url(asset('backend/assets/js/pages/lightbox.init.js')) }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ url(asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/pages/sweet-alerts.init.js')) }}"></script>

<script src="{{ url(asset('backend/assets/js/app.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/custom.js')) }}"></script>


@hasSection('js')
    @yield('js')
@endif

</body>
</html>
