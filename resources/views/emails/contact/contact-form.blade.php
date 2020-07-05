{{-- @component('mail::message') --}}

<h1>Llegó un mensaje desde la pagina Web</h1>
<br>
<br>
<strong>Nombre: </strong>{{$data['name']}} 
<br>
<strong>Email: </strong>{{$data['email']}}
<br>
<strong>Mensaje: </strong>{{$data['message']}}

{{-- @endcomponent --}}
