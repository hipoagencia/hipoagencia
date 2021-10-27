@extends('web.master.master')

@section('content')


    <div class="pt-70 pb-70 about-what-find blog-line-top">
        <div class="container">
            <div class="section-title text-uppercase pb-70">
                <h2>Políticas de Privacidade</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">

                {!! $content->description !!}

            </div>
        </div>
    </div>



    @include('web.components.newsletter')

@endsection
