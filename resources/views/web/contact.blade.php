@extends('web.master.master')

@section('content')


    <section class="half-section wow animate__fadeIn page-title-colorful" data-backgroundcolor="#1c1c1c,#363636,#1c1c1c,#363636">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-end extra-small-screen">
                <div class="w-100 w-md-50 align-self-end page-title-extra-small">
                    <h1 class="alt-font text-white position-relative padding-85px-left padding-15px-right sm-padding-55px-left margin-30px-bottom sm-margin-20px-bottom"><span class="page-title-separator-line bg-white w-70px sm-w-40px"></span>Contato</h1>
                </div>
                <div class="w-100 w-md-50 align-self-end">
                    <h4 class="alt-font text-white font-weight-500 margin-30px-bottom">É hora de tornar sua<br>empresa incrível</h4>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.form')


@endsection

