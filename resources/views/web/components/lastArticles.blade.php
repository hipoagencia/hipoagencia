<section class="{{ (!\Illuminate\Support\Facades\Route::is('web.article') ? 'bg-extra-dark-gray' : 'bg-light-gray') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-6 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-medium {{ (\Illuminate\Support\Facades\Route::is('web.article') ? 'text-extra-dark-gray' : 'text-white') }} text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">
                        @if(!\Illuminate\Support\Facades\Route::is('web.article'))
                            Últimos artigos do blog do hipopótamo
                        @else
                            Confira alguns posts que separamos para você
                        @endif
                    </span>


                @if(!\Illuminate\Support\Facades\Route::is('web.article'))
                    <h2 class="alt-font font-weight-900 text-white title-large letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn"
                        data-wow-delay="0.3s">
                        BLOG
                    </h2>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>

                    @foreach($posts as $post)
                        <div class="col-lg-4">
                            @include('web.components.post')
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
