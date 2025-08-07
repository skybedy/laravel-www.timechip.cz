@component('mail::message')
Ahoj,

Právě ti přišla zpráva z kontaktního formuláře na webové stránce **{{ config('app.name') }}** (`{{ config('app.url') }}`).

---

**Email odesílatele:** {{ $user }}

@component('mail::panel')
{{ $message }}
@endcomponent

> Pokud chceš odpovědět, klikni na „Odpovědět“ v e-mailu. Odpověď bude odeslána uživateli.

Díky za přečtení!<br>
{{ config('app.name') }}
@endcomponent
