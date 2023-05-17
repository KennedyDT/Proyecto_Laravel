<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        /* Estilos CSS para el reporte */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Reporte de Servicios</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Descripción</th>
                <th>Operario</th>
                <th>Costo del servicio</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->user->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->operator->name }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->date }}</td>
                    <td>{{ $service->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
