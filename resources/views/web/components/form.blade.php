<section class="home-freelancer-bg-img wow animate__fadeIn pd-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-8 d-flex flex-column md-margin-50px-bottom wow animate__fadeIn"
                 data-wow-delay="0.2s">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-2px mb-lg-auto md-margin-5-rem-bottom">
                    Vamos trabalhar <span class="text-border text-border-color-black text-border-width-2px opacity-3"> juntos?</span>
                </h1>
                <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray text-uppercase d-block margin-25px-bottom">Atendemos</span>
                <p class="mb-0">Santos/SP<br>Riviera de São Lourenço</p>

                <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray text-uppercase d-block margin-25px-bottom mt-5">Informações</span>
                <p><span class="font-weight-500 text-extra-dark-gray">Tel:</span> (13) 3027-4731 <br>
                    <span class="font-weight-500 text-extra-dark-gray">Email:</span> <a
                        href="mailto:falecom@hipoagencia.com.br" class="text-extra-dark-gray-hover">falecom@hipoagencia.com.br</a>
                </p>
                <div class="social-icon-style-02">
                    <ul class="medium-icon">
                        <li class="m-0"><a class="facebook text-start" href="https://www.facebook.com/hipoagencia"
                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="m-0"><a class="instagram text-start" href="https://www.instagram.com/hipoagencia/"
                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 col-md-8 wow animate__fadeIn" data-wow-delay="0.4s"
                 style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-5-rem-bottom letter-spacing-minus-1px">
                    Deixe sua mensagem que em breve entraremos em contato!</h5>

                @if($errors->all())
                    @foreach($errors->all() as $error)
                        @component('admin.components.message',['type' => 'danger'])
                            {{ $error }}
                        @endcomponent
                    @endforeach
                @endif

                <form action="{{route('web.sendMail')}}" method="post">
                    @csrf

                    <input class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required"
                           type="text" name="name" placeholder="Nome">

                    <input class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required"
                           type="email" name="email" placeholder="E-mail">

                    <input class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px"
                           type="tel" name="phone" placeholder="Celular">

                    <textarea
                        class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-35px-bottom border-radius-0px"
                        name="message" rows="5" placeholder="Como podemos te ajudar?"></textarea>

                    {!! NoCaptcha::renderJs() !!} {!! NoCaptcha::display() !!}<br>

                    <button class="btn btn-medium btn-fancy btn-black mb-0" type="submit">enviar mensagem
                    </button>

                    <div class="form-results d-none"></div>
                </form>

            </div>
        </div>
    </div>
</section>
