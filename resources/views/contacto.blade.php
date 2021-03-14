@extends('menu')

@section('title')
    Home
@endsection


@section('content')
<div class="container">
    <form role="form" id="Formulario">
        <center><h1 style="background: royalblue; color: #fff; padding: 10px">CONTACTO</h1></center>
        <div class="form-group" style="padding-top: 10px">
            <label class="control-label" for="Nombre">Nombres</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduzca su nombre" required autofocus />
        </div>            
        <div class="form-group">
            <label class="control-label" for="Motivo">Motivo de Contacto</label>
            <select name="Motivo" class="form-control">
                <option value="Indefinido"> </option>
                <option value="Consulta General">Consulta General</option>
                <option value="Realizar Pedido">Realizar Pedido</option>
                <option value="Informe un problema">Informe un problema</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="Correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Introduzca su correo electrónico" required />
        </div>
        <div class="form-group">
            <label class="control-label" for="Mensaje">Mensaje</label>
            <textarea rows="5" cols="30" class="form-control" id="Mensaje" name="Mensaje" placeholder="Introduzca su mensaje" required ></textarea>
        </div>
        <div class="form-group">                
            <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
        <div id="respuesta" style="display: none;"></div>
    </form>
</div>       
</div>
@endsection