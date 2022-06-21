{{--<li class="grid-item wow animate__fadeIn">--}}
{{--    <div class="blog-post border-radius-5px bg-white box-shadow-medium">--}}
{{--        <div class="blog-post-image bg-medium-slate-blue">--}}
{{--            <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}" title=""><img--}}
{{--                    src="" alt=""--}}
{{--                    data-no-retina=""></a>--}}
{{--            --}}{{--            <a href="#" class="blog-category alt-font">Creative</a>--}}
{{--        </div>--}}
{{--        <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">--}}
{{--            <a href="#"--}}
{{--               class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom">--}}
{{--                {{$post->created_at}}--}}
{{--            </a>--}}
{{--            <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}"--}}
{{--               class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">--}}
{{--                {{ $post->name }}--}}
{{--            </a>--}}
{{--            <p>{!! $post->preview() !!}...</p>--}}
{{--            <div class="d-flex align-items-center">--}}
{{--                <img class="avtar-image avatar-image" src="{{ url($post->user->cover) }}"--}}
{{--                     alt="" data-no-retina="">--}}
{{--                <span class="alt-font text-small me-auto">Por <a href="#"--}}
{{--                                                                 class="text-shamrock-green-hover">{{$post->user->name}} {{$post->user->last_name}}</a></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</li>--}}


<div
    class="col-12 blog-post-content border-all border-color-medium-gray border-radius-6px overflow-hidden text-center p-0 margin-4-half-rem-bottom wow animate__fadeIn"
    style="visibility: visible; animation-name: fadeIn;">
    <div class="blog-image"><a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}"><img
                src="{{ url($post->cover) }}"
                alt="" data-no-retina=""></a>
    </div>
    <div class="blog-text d-inline-block w-100">
        <div
            class="content padding-5-half-rem-all lg-padding-4-half-rem-all xs-padding-20px-lr xs-padding-40px-tb position-relative mx-auto w-90 lg-w-100">
            <h6 class="alt-font font-weight-500"><a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}"
                                                    class="text-extra-dark-gray">
                    {{$post->title}}
                </a></h6>
            <p>
                {!! $post->preview() !!}...
            </p>
            <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}"
               class="btn btn-small btn-transparent-dark-gray btn-round-edge btn-slide-up-bg margin-10px-top">Continuar
                Lendo <span class="bg-extra-dark-gray"></span></a>
        </div>
        <div
            class="row row-cols-1 author border-top border-color-extra-medium-gray text-medium-gray text-very-small text-uppercase alt-font m-0">
            <div
                class="col col-sm blog-hover-btn padding-20px-tb border-right border-color-extra-medium-gray xs-no-border-right xs-border-bottom">
               Por {{$post->user->name}} {{$post->user->last_name}}
            </div>
            <div
                class="col col-sm blog-hover-btn padding-20px-tb border-right border-color-extra-medium-gray xs-no-border-right xs-border-bottom">
                Criado em {{$post->created_at}}
            </div>
        </div>
    </div>
</div>
