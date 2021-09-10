@extends('user.master.master')

@section('content')


    @if($type == "Assinatura")
        <livewire:payment.recurrent/>
    @endif


@endsection
