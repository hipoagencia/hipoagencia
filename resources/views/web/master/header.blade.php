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
                            <a href="{{ route('web.home') }}"
                               class="nav-link {{ (request()->route()->getName() == 'web.home' ? 'active' : '') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <a href="#" class="nav-link {{ (request()->routeIs(['web.specialtyNervous','web.specialtyHeart','web.specialtyUrinary','web.specialtyCancer','web.specialtySexual']) ? 'active' : '') }}">
                                Especialidades
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" style="width:1100px;left:-500px;padding:30px;">


                               <div class="container">
                                   <div class="row">


                                       <div class="col">
                                           <ul>
                                               <li class="nav-item">
                                                   <h5 style="font-size:14px;margin-bottom:20px;" class="co-blue">Sistema Nervoso</h5>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.avcNervoso') }}" class="nav-link">AVC</a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.parkinson') }}" class="nav-link">Parkinson</a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.dorCronica') }}" class="nav-link">Dor Crônica</a>
                                               </li>


                                           </ul>
                                       </div>

                                       <div class="col">
                                           <ul>
                                               <li class="nav-item">
                                                   <h5 style="font-size:14px;margin-bottom:20px;" class="co-red">Coração</h5>
                                               </li>



                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.arritmiaArtrial') }}" class="nav-link">Arritmia Atrial</a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.arritmiaVentricular') }}" class="nav-link">Arritmia Ventricular</a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.avc') }}" class="nav-link">AVC</a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.fibrilacaoArterial') }}" class="nav-link">Fibrilação Atrial</a>
                                               </li>



                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.morteSubita') }}" class="nav-link">Morte Súbita</a>
                                               </li>
                                           </ul>
                                       </div>

                                       <div class="col">
                                           <ul>
                                               <li class="nav-item">
                                                   <h5 style="font-size:14px;margin-bottom:20px;" class="co-green">Sistema Urinário</h5>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.incontinenciaUrinaria') }}" class="nav-link">Incontinência Urinária</a>
                                               </li>

                                           </ul>
                                       </div>

                                       <div class="col">
                                           <ul>
                                               <li class="nav-item">
                                                   <h5 style="font-size:14px;margin-bottom:20px;" class="co-orange">Cânceres e Tumores</h5>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.colorretal') }}" class="nav-link">Colorretal</a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.hiperplasia') }}" class="nav-link">Hiperplasia Prostática Benigna</a>
                                               </li>


                                           </ul>
                                       </div>

                                       <div class="col">
                                           <ul>
                                               <li class="nav-item">
                                                   <h5 style="font-size:14px;margin-bottom:20px;" class="co-purple">Saúde Sexual</h5>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="{{ route('web.page.disfuncaoEretil') }}" class="nav-link">Disfunção Erétil</a>
                                               </li>

                                           </ul>
                                       </div>



                                   </div>
                               </div>




                            </ul>
                        </li>

                        <li class="nav-item d-block d-sm-none">
                            <a href="#" class="nav-link">
                                Especialidades
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Sistema Nervoso
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a href="{{ route('web.page.avcNervoso') }}" class="nav-link">AVC</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('web.page.parkinson') }}" class="nav-link">Parkinson</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('web.page.dorCronica') }}" class="nav-link">Dor Crônica</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Coração
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('web.page.arritmiaArtrial') }}" class="nav-link">Arritmia Artrial</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('web.page.arritmiaVentricular') }}" class="nav-link">Arritmia Ventricular</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('web.page.avc') }}" class="nav-link">AVC</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('web.page.fibrilacaoArterial') }}" class="nav-link">Fibrilação Arterial</a>
                                        </li>


                                        <li class="nav-item">
                                            <a href="{{ route('web.page.morteSubita') }}" class="nav-link">Morte Súbita</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Sistema Urinário
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('web.page.incontinenciaUrinaria') }}" class="nav-link">Incontinência Urinária</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Cãnceres e Tumores
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('web.page.hiperplasia') }}" class="nav-link">Hiperplasia Prostática Benigna</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Saúde Sexual
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('web.page.disfuncaoEretil') }}" class="nav-link">Disfunção Erétil</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.about') }}"
                               class="nav-link {{ (request()->route()->getName() == 'web.about' ? 'active' : '') }}">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.blog') }}"
                               class="nav-link {{ (request()->routeIs(['web.blog','web.article']) ? 'active' : '') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('web.contact') }}" class="nav-link {{ (request()->route()->getName() == 'web.contact' ? 'active' : '') }}">Contato</a>
                        </li>



                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#search" > <i class='bx bx-search-alt' style="font-size:50px;"></i></a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

