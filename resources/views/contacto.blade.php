@extends('home')

@section('title')
    Login
@endsection


@section('content')
<form method="POST" action={{route('contacto')}}>
	@csrf
	<div class="titulo" style="text-align: center">
		<br>			
	<h2>Contactanos</h2>
	<h4>Cualquier consulta sobre nuestros productos puedes preguntar</h4>
	</div>
	<div class="container contact">
	<div class="row">
		<div class="col-md-3" style="background-image: url('https://www.estafeta.com/-/media/Images/Estafeta/Contacto/contacto.jpg?la=es&hash=9F778E19A6564ED63315CE717570C95D03AE203F');background-size: cover" >
			<div class="contact-info">
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2">Nombre:</label>
				  <div class="col-sm-10">          
					<input class="form-control" type="text" placeholder="Ingrese su Nombre" name="name" >
					{!! $errors->first('name', '<small>:message</small>') !!}<br>
				</div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2">Correo:</label>
				  <div class="col-sm-10">          
					<input class="form-control" type="email" placeholder="Ingrese su correo" name="email">
					{!! $errors->first('email', '<small>:message</small>') !!}<br>  
				</div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2">Asunto:</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" placeholder="Ingrese el asunto" name="subject">
					{!! $errors->first('subject', '<small>:message</small>') !!}<br>  
				</div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2">Mensaje:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" name="content" placeholder="Mensaje"></textarea>
					{!! $errors->first('content', '<small>:message</small>') !!}<br>  
				</div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
@endsection