@component('mail::message')
<h1>Troca de Senha</h1>
    Olá {{ $to_name }}, para resetar a sua senha, clique no link abaixo ou copie e cole no navagedor:

<br><br>
@component('mail::button', ['url' => '#'])
http://blablabla.com.br?id={{ $message }}
@endcomponent
<br>

Obrigado,<br>
Time {{ config('app.name') }}
@endcomponent
