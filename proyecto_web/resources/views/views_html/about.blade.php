@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="jumbotron">
            <h1>Quienes somos</h1>
        </div>

        <nav style="--bs-breadcrumb-divider: '>'"; aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Quienes somos</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h2>Ilumina tu camino con Electrimotos</h2>

        </div>

        <div class="d-flex flex-wrap">
            <div class="card-prod d-flex flex-column justify-content-between">

                <p>En Electrimotos, somos un taller especializado en la reparación y mantenimiento de motocicletas, con un
                    enfoque en la parte eléctrica. Ofrecemos una amplia gama de servicios, desde la solución de problemas
                    eléctricos hasta la realización de reparaciones y mantenimientos mecánicos.</p>
                <p>Nuestro equipo está formado por expertos en electrónica y mecánica, y todos ellos son apasionados por las
                    motocicletas y están comprometidos con brindar un servicio excepcional. Además de nuestros servicios
                    principales, también ofrecemos una variedad de servicios adicionales.</p>
                <p>Si estás buscando proteger tu moto contra robos, ofrecemos la venta e instalación de alarmas y GPS de
                    alta calidad. Para mejorar la iluminación de tu motocicleta, ofrecemos venta e instalación de
                    bombillería y exploradoras LED. Estos productos te brindarán una iluminación más eficiente, segura y
                    moderna.</p>
                <p>En Electrimotos, nos enorgullece ofrecer soluciones innovadoras para todas tus necesidades de
                    motocicletas. Si estás buscando un servicio de alta calidad y atención al cliente personalizada, no
                    dudes en visitarnos. Estamos comprometidos en proporcionar un servicio excepcional para asegurarnos de
                    que tu moto esté en las mejores condiciones.</p>
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

@endsection
