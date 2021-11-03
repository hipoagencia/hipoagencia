<article class="blog-post">
    <div class="blog-post-title" style="background-color: {{ $post->princ->color }};">
        <h5 class="font-light"><img
                src="{{ url($post->princ->iconWhite) }}" width="37" class="ico-img"> {{ $post->princ->name }}
        </h5>
    </div>

    <img src="{{ url($post->cover) }}" style="height:350px;" alt="{{ $post->title }}"/>
    <h3 class="mt-3" style="color: {{ $post->princ->color }};">{{ $post->title }}</h3>

    <p>{!! $post->preview() !!}</p>

    <div class="row read-more">
        <a href="{{ route('web.article', ['slug' =>  $post->slug ]) }}"
           class="text-right">Continue lendo</a>
    </div>

</article>

