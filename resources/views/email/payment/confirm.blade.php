@component('mail::message')
Olá {{ $to_name }}!<br>

<h1>Recebemos a confirmação de pagamento do pedido nº {{ $message }}<br><br></h1>

<a href="{{ route('login')}}">Clique aqui</a> para acessar a sua conta.


Obrigado,<br>
Time {{ config('app.name') }}
@endcomponent
