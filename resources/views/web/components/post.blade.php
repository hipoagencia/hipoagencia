<li class="grid-item wow animate__fadeIn">
    <div class="blog-post border-radius-5px bg-white box-shadow-medium">
        <div class="blog-post-image bg-medium-slate-blue">
            <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}" title=""><img
                    src="{{ url($post->cover) }}" alt=""
                    data-no-retina=""></a>
            {{--            <a href="#" class="blog-category alt-font">Creative</a>--}}
        </div>
        <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
            <a href="#"
               class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom">
                {{$post->created_at}}
            </a>
            <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}"
               class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">
                {{ $post->name }}
            </a>
            <p>{!! $post->preview() !!}...</p>
            <div class="d-flex align-items-center">
                <img class="avtar-image avatar-image" src="{{ url($post->user->cover) }}"
                     alt="" data-no-retina="">
                <span class="alt-font text-small me-auto">Por <a href="#"
                                                                 class="text-shamrock-green-hover">{{$post->user->name}} {{$post->user->last_name}}</a></span>
            </div>
        </div>
    </div>
</li>

{{--<article class="blog-post">--}}
{{--    <div class="blog-post-title" style="background-color: {{ $post->princ->color }};">--}}
{{--        <h5 class="font-light"><img--}}
{{--                src="{{ url($post->princ->iconWhite) }}" width="37" class="ico-img"> {{ $post->princ->name }}--}}
{{--        </h5>--}}
{{--    </div>--}}

{{--    <img src="" style="height:280px;" alt=""/>--}}
{{--    <h3 class="mt-3" style="color: {{ $post->princ->color }};">{{ $post->title }}</h3>--}}

{{--    <p></p>--}}

{{--    <div class="row read-more">--}}
{{--        <a href=""--}}
{{--           class="text-right">Continue lendo</a>--}}
{{--    </div>--}}

{{--</article>--}}
