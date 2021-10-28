@component('mail::message')
# Olá, você recebeu um novo contato

<p>Nome: <b>{{ $reply_name }}</b></p>
<p>Email: <b>{{ $reply_email }}</b></p>
<p>Telefone: <b>{{ $phone }}</b></p>

<p>Mensagem:</p>
@component('mail::panel')
    {{ $message }}
@endcomponent

Time,<br>
{{ config('app.name') }}
@endcomponent
