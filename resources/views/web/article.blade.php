@extends('web.master.master')

@section('content')


    <section class="big-section cover-background overlap-height padding-70px-bottom bg-extra-dark-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-sm-8 overlap-gap-section text-center">
                    <div class="d-inline-block text-center text-uppercase margin-25px-bottom color-yellow">
                        <span class="alt-font d-inline-block align-middle color-yellow text-extra-dark-gray-hover">{{$post->created_at}}</span>
                    </div>
                    <h4 class="alt-font text-white font-weight-500 letter-spacing-minus-1px margin-35px-bottom">{{$post->title}}</h4>
                    <div class="d-flex justify-content-center align-items-center alt-font text-uppercase">
                        <img class="rounded-circle w-35px margin-15px-right" src="{{ url($post->user->cover) }}" alt="" data-no-retina="">
                        <span>Por <span class="text-yellow-ochre-light-hover">{{$post->user->name}} {{$post->user->last_name}}</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0" style="margin-top:-50px;z-index: 999 !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 last-paragraph-no-margin margin-6-rem-bottom " data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="row text-center">
                        <img src="{{ url($post->cover) }}">
                    </div>

                    <p class="margin-10px-bottom mt-5">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has suvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.lastArticles')


@endsection

