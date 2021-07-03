@component('mail::message')
<h1>Troca de Senha</h1>
    Olá {{ $to_name }}, para resetar a sua senha, clique no link abaixo ou copie e cole no navagedor:

<br><br>
@component('mail::panel')
<a href="{{ env('APP_URL') }}/nova-senha?token={{ $message }}" class="btn btn-success">{{ env('APP_URL') }}/nova-senha?id={{ $message }}</a>
<br>
@endcomponent
<br>

<br>

Obrigado,<br>
Time {{ config('app.name') }}
@endcomponent
