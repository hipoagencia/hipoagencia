@component('mail::message')
Olá {{ $to_name }}!<br>

<h1>Recebemos um novo pedido de nº {{ $id_order }}</h1><br>

@if($message)
    {{ $message }}
@endif

<a href="{{ route('login')}}">Clique aqui</a> para acessar a sua conta.

Obrigado,<br>
Time {{ config('app.name') }}
@endcomponent
