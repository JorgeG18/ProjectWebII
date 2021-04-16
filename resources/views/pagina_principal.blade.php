@extends('home')

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
                <img class="d-block w-100" src="../public/images/1.png" alt="First slide">
            </div>
      
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/images/2.png" alt="Second slide">
        </div>
      
        <div class="carousel-item">
            <img class="d-block w-100" src="../public/images/3.png" alt="Third slide">
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
            <div class="title-produc">
                    <div class="row-xs-divisor"></div>
                        <h4 class="">Categoría<h4>
                    <div class="col-xs-divisor-2"></div>

            </div>
        <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center;">
                
                <div class="grids1 design_grids-category">
                    <div class="col-text-category">
                        <h4 class="hover">Ver mas</h4>
                        <h4>Computadoras</h4>
                    </div>
                    <div class="col-image-category">
                        <img src="https://portajorgepaz.000webhostapp.com/img/monitores/acer6.png" alt=""/>
                    </div>
                </div>

                <div class="grids1 design_grids-category">
                    <div class="col-text-category">
                        <h4 class="hover">Ver mas</h4>
                        <h4>Celular</h4>
                    </div>
                    <div class="col-image-category">
                        <img src="https://portajorgepaz.000webhostapp.com/img/monitores/acer6.png" alt=""/>
                    </div>
                </div>

                <div class="grids1 design_grids-category">
                    <div class="col-text-category">
                        <h4 class="hover">Ver mas</h4>
                        <h4>Gaming</h4>
                    </div>
                    <div class="col-image-category">
                        <img src="https://portajorgepaz.000webhostapp.com/img/headsets/hyper8.png" alt=""/>                   
                    </div>
                </div>
        </div>
    </div>

    <!--GRIDS PRODUCTOS EN OFERTA-->

    <div class="contenedor">


         <div class="title-produc">
                    <div class="row-xs-divisor"></div>
                        <h4 class="">Productos en oferta<h4>
                    <div class="col-xs-divisor-2"></div>

            </div>

        <!-- Grids-->
        <div class="grids" style="display: flex; flex-wrap: wrap; justify-content: center">
            
            <div class="grids1 desing_grids">
                <div class="col-image">
                    <img src="https://portajorgepaz.000webhostapp.com/img/teclado/razer1.png" />
                </div>
                <div class="col-text">
                    <h4>Razer Huntsaman Mini</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>
            </div>
            <div class="grids2 desing_grids"  >
                <div class="col-image">
                    <img src="https://portajorgepaz.000webhostapp.com/img/teclado/razer7.png"/>
                </div>
                <div class="col-text">
                    <h4>Razer BlackWidow TE</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>

            </div>
            <div class="grids3 desing_grids"  >
                <div class="col-image">
                    <img src="https://portajorgepaz.000webhostapp.com/img/mouse/logitech1.png" />
                </div>
                <div class="col-text">
                    <h4>Mouse Logitech G502</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>

            </div>

            <div class="grids4 desing_grids"  >
                <div class="col-image">
                    <img src="https://cdn11.bigcommerce.com/s-hvhcbznkl4/images/stencil/2000x2000/products/7580/47411/api9ulubv__43596.1592328531.jpg?c=2" />
                </div>
                <div class="col-text">
                    <h4>Motorola Edge</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>

            </div>

            <div class="grids5 desing_grids"  >
                <div class="col-image">
                    <img src="https://media.revistagq.com/photos/5eba5ee15663621a3c7fc8f3/16:9/w_1920,c_limit/iphone-12-pro.jpg"/>
                </div>
                <div class="col-text">
                    <h4>Razer Blade</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>

            </div>

            <div class="grids6 desing_grids"  >
                <div class="col-image">
                    <img src="https://i.pinimg.com/originals/9c/be/db/9cbedb919772c0519b8b63d2ddef27b7.jpg" />
                </div>
                <div class="col-text">
                    <h4>Nokia Laptop</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>

            </div>
            <div class="grids7 desing_grids"  >
                <div class="col-image">
                    <img src="https://www.itsitio.com/wp-content/uploads/2019/05/2019-05-15-image-3.jpg" />
                </div>
                <div class="col-text">
                    <h4>Iphone 12</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href = 'login'">Agregar al carrito</button>

            </div>
            <div class="grids8 desing_grids"  >
                <div class="col-image">
                    <img src="https://www.newegg.com/insider/wp-content/uploads/2018/12/Building-beginner-PC-header.jpg" />
                </div>
                <div class="col-text">
                    <h4>Machenike</h4>
                </div>
                <button  class="btn btn-primarys" role="link" onclick="window.location.href ='login' ">Agregar al carrito</button>

            </div>
        </div>
    </div>
    
  
@endsection
