@extends('menu')

@section('title')
    Home
@endsection


@section('content')
<div class="container" style="margin-right: 0">
    <!-- Insert/Drop Grid Row codes below -->
    <div class="row" style="padding-top: 8%;margin-left: 0">
        <!-- Insert/Drop Grid Column codes below-->
        <div class="col-xs-12" style="padding: 0; background: rgba(255, 255, 255, 0.7); height: 480px; width: 800px; box-shadow: 5px 5px 5px 3px rgba(0, 0, 0, 0.5);">
            <div class="col-xs-12 text-center py-2" style="height:125px; padding-top: 25px; background: #337AB7;">
                <h4 style="color: #ffffff; font-size: 30px; "><i class="fa fa-envelope" style="padding-right:8px;"></i>CONTACTANOS</h4>
                <p style="color:#ffffff; font-size:16px">Haz tus consultas y con justo te atenderemos!</p>
            </div>
            <form class="form-row" action="contacto_configuration.php" method="post">
                <div class="form-group col-xs-6" style="margin-top:25px;">
                    <label for="inputNombre3" class="col-sm-2 control-label">Nombre</label>
                    <div class="col">
                        <input type="text" class="form-control" id="inputNombre3" placeholder="Nombre y Apellido" name="nombre">
                    </div>                       
                </div>
                <div class="form-group col-xs-6" style="margin-top:25px;">
                    <label for="inputPhone3" class="col-sm-2 control-label">Telefono</label>
                    <div class="col">
                        <input type="text" class="form-control" id="inputPhone3" placeholder="Numero de Telefono" name="telefono">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-xs-12">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="note3" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-xs-12">
                        <textarea class="form-control" id="note3" rows="3" name="mensaje"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12" style="padding-top: 25px">
                        <button class=" btn btn-default btn-lg btn-block" style="background: #337AB7; color: #ffffff;" onmouseout="this.style.cssText='background: #337AB7; color: #ffffff;'" onmouseover="this.style.cssText='background: #4C94D3; color: #ffffff;'">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection