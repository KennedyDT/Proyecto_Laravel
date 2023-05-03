@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="jumbotron">
            <h1>Electrimotos</h1>
        </div>

        <nav class="breadcrumb-nav">
            <ol class="breadcrumb" >
                <li class="breadcrumb-item active" aria-current="page" >Home</li>
            </ol>
        </nav>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/banner3.png" class="d-block w-100" alt="Responsive image">

                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/banner2.png" class="d-block w-100" alt="Responsive image">
                </div>
                <div class="carousel-item">
                    <img src="images/banner5.png" class="d-block w-100" alt="Responsive image">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="jumbotron">
            <h2>Categorias</h2>
        </div>

        <div class="justify-content-center row mt-5 mb-5">

            <div class="card bg-secondary bg-gradient text-white m-2 col-lg-10" style="width: 18rem;">

                <div class="card-body">

                    <h4 class="card-title">Iluminacion</h4>
                    <p class="card-text">Las exploradoras LED y bombillos LED son una alternativa eficientes y popular para
                        los motociclistas que buscan una iluminación adicional en la carretera o para mejorar la visibilidad
                        de su moto. </p>
                </div>

                <div>
                    <a class="btn btn-primary btn-lg" href="{{ url('/items') }}">Catalogo </a>
                </div>
            </div>

            <div class="card bg-secondary bg-gradient text-white m-2 col-lg-10" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">Seguridad</h4>
                    <p class="card-text">Un GPS antirobo o alarmas de seguridad son dispositivos que se utiliza para
                        monitorear y proteger un vehículo o una motocicleta de los riesgos de robo.</p>

                </div>

                <div>
                    <a class="btn btn-primary btn-lg" href="{{ url('/items') }}">Catalogo </a>
                </div>
            </div>

            <div class="card bg-secondary bg-gradient text-white m-2 col-lg-10" style="width: 18rem;">
                <div class="card-body">

                    <h4 class="card-title">Servicios de mantenimiento</h4>
                    <img class="card-img-top rounded-left" src="images/Moto-mantenimiento.jpg" alt="Responsive image">
                    <p class="card-text"></p>
                </div>

                <div>
                    <button type="button" class="btn btn-primary btn-lg link" data-bs-toggle="modal"
                        data-bs-target="#form_cotiza" id="btn_cotiza">Cotiza</button>
                </div>


            </div>

            <div class="card bg-secondary bg-gradient text-white m-2 col-lg-10" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">Personalizacion e innovacion</h4>
                    <img class="card-img-top" src="images/choper morada.jpg">
                    <p class="card-text"></p>
                </div>

                <div>
                    <button type="button" class="btn btn-primary btn-lg link" data-bs-toggle="modal"
                        data-bs-target="#form_cotiza" id="btn_cotiza">Cotiza</button>
                </div>
            </div>


        </div>
    </div>

    <div class="modal fade" id="form_cotiza" tabindex="-1" role="dialog" aria-labelledby="cotizaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cotizaModalLabel"> Cotiza</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="formulario">
                        <div class="form-group">
                            <label for="modal_nombre" class="col-form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre"
                                class="form-control" onfocusout="validar()" title="Ingrese su nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="modal_numero" class="col-form-label">Tu numero de contacto</label>
                            <input type="number" class="form-control" id="contacto" placeholder="3214567890"
                                onfocusout="validar()" title="Ingrese su numero de contacto" required>
                        </div>
                        <div class="form-group">
                            <label for="modal_moto" class="col-form-label">Marca y modelo de tu motocicleta</label>
                            <input type="text" class="form-control" id="moto"
                                placeholder="GATO 200 modelo 2023 " id="moto" onfocusout="validar()" required>
                        </div>
                        <div class="form-group">
                            <label for="modal-texto" class="col-form-label">Descripcion</label>
                            <textarea type="text" class="form-control" id="descripcion"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Enviar</button>
                    </form>


                </div>


            </div>
        </div>

    </div>


    <footer>
        <div class="row">
            <div class="card-footer">
                <h3>CONTACTANOS</h3>
                <address>
                    <p>Manizales, Caldas, Colombia</p>
                    <p>+57 310 861 7258</p>
                    <p>electrimotos.manizales@gmail.com</p>
                </address>

            </div>
            <div class="card-footer">
                <address>
                    <h3>INFORMACION</h3>
                    <p>Quienes somos</p>
                    <p>Preguntas frecuentes</p>
                    <p>Contacto</p>
                </address>
            </div>

            <div class="card-footer">
                <h3>SOBRE NOSOTROS</h3>
                <p>Nuestra historia</p>


            </div>
        </div>
    </footer>

    <script>
        var carouselItems = document.querySelectorAll(
        ".carousel-item"); // seleccionar todos los elementos con la clase "carousel-item"

        carouselItems.forEach(function(item) {
            item.setAttribute("data-bs-interval", "2000");
        });
    </script>
@endsection
