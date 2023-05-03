@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="jumbotron">
            <h1>Contacto</h1>
        </div>

        <nav style="--bs-breadcrumb-divider: '>'"; aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
            </ol>
        </nav>


        <h1>Dejame tu comentario</h1>

        <form>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group col-sm-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
                </div>
            </div>


            <div class="form-group col-sm-6">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" placeholder="Ingrese su telefono">
            </div>

            <div class="form-group col-sm-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
            </div>

            <div class="form-group col-sm-3">
                <label for="texto">Deja tu:</label>
                <select id="texto" class="form-control">
                    <option selected> ...</option>
                    <option>Comentario</option>
                    <option>Cotizacion</option>
                    <option>Personalizacion</option>
                    <option>Duda</option>

                </select>
            </div>

            <div class="mb-3 col-sm-6">
                <label for="comentario" class="form-label"></label>
                <textarea class="form-control" id="comentario" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Quiero que me contacten
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"> Enviar</button>


        </form>

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



@endsection
