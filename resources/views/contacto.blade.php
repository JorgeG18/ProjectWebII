@extends('home')

@section('title')
    Login
@endsection


@section('content')
<h1>Contato</h1>
    
<form method="POST" action={{ route('contacto')}}>
	@csrf
	<input type="text" name="name" placeholder="Nombre"><br>
	{!! $errors->first('name', '<small>:message</small>') !!}<br>

	<input type="email" name="email" placeholder="Correo" ><br>
	{!! $errors->first('email', '<small>:message</small>') !!}<br>

	<input type="text" name="subject" placeholder="Asunto"><br>
	{!! $errors->first('subject', '<small>:message</small>') !!}<br>

	<textarea name="content" placeholder="Mensaje"></textarea><br>
	{!! $errors->first('content', '<small>:message</small>') !!}<br>
	<button>Enviar</button>
</form>
@endsection