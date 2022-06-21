<li class="grid-item wow animate__fadeIn">
    <div class="blog-post border-radius-5px bg-white box-shadow-medium">
        <div class="blog-post-image bg-medium-slate-blue">
            <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}" title=""><img
                    src="" alt=""
                    data-no-retina=""><img src="{{ url($post->cover) }}"></a>
                        <a href="#" class="blog-category alt-font">Creative</a>
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

