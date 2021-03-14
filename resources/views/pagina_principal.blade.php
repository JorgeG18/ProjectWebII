@extends('menu')

@section('title')
    Home
@endsection


@section('content')

<!--SLIDER--->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      
            <div class="carousel-item active">
                <img class="d-block w-100" src="../public/images/1.jpg" alt="First slide">
            </div>
      
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/images/2.jpg" alt="Second slide">
        </div>
      
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/images/3.jpg" alt="Third slide">
        </div>
    </div>
      
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
  </div>

  <!--GRIDS DE LOS PRODUCTOS--->
  <div class="contenedor-category">
      <!--GRIDS--->
  <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center;">
        <div class="title-produc">
            <div class="col-xs-divisor"></div>
                <h4 class="">Categoría<h4>
            <div class="col-xs-divisor-2"></div>

        </div>
       
                <div class="grids1 design_grids_category">
                    <div class="col-text-category">
                        <h4 class="hover">Ver mas</h4>
                        <h4>Computadoras</h4>
                    </div>
                    <div class="col-image-categorys">
                        <img src="../public/images/2.jpg" alt="">
                    </div>
                </div>

                <div class="grids1 design_grids-category">
                    <div class="col-text-category">
                        <h4 class="hover">Ver mas</h4>
                        <h4>Celular</h4>
                    </div>
                    <div class="col-image-category">
                        <img src="https://portajorgepaz.000webhostapp.com/img/monitores/acer6.png" />
                    </div>
                </div>

                <div class="grid1 design_grids-category"> 
                    <div class="col-text-category">
                        <h4  class="hover">Ver mas</h4>
                        <h4>Gaming</h4>
                    </div>
                    <div class="col-image-category">
                        <img src="https://portajorgepaz.000webhostapp.com/img/headsets/hyper8.png" />
                    </div>


                </div>
            </div>
            <!----->
  </div>
</div>
  
@endsection
