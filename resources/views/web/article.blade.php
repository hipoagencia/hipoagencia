@extends('web.master.master')

@section('content')

    <div class="pt-70 pb-40 blog-line-top">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9">
                    <div class="text-uppercase pb-40">
                        <h2 class="color-blue">{{ $post->name }}</h2>
                    </div>
                </div>
                <div class="col col-lg-3 text-right">
                    <img
                        src="{{ url($post->princ->iconWhite) }}" width="37" ><span class="blog-category"
                                                                                style="color:{{ $post->princ->color }};">{{ $post->princ->name }}</span>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <img src="{{ url($post->cover) }}" alt=""/>--}}
{{--            </div>--}}
        </div>
    </div>


    <div class=" pb-70">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-9">
                    <div class="blog-line-bottom">

                        <div class="row mb-5">
                            <img src="{{ url($post->cover) }}" alt=""/>
                        </div>

                        {!! $post->description !!}

                    </div>
                    <div class="container color-gray2">
                        {{ $post->data }} por {{ $post->user->name }}
                    </div>
                </div>
                <div class="col col-12 col-lg-3">
                    <h4 class="color-gray2">Veja também:</h4>

                    <div class="row">

                        @foreach($postsRelated as $post)

                            @include('web.components.post')

                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>





    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title text-left">
                        <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
                            class="bx bxs-chevron-right"></i><span></span></a>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach($posts as $post)
                    <div class="col-lg-4">
                        @include('web.components.post')
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    @include('web.components.newsletter')

@endsection
