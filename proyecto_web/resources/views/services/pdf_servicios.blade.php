<div >
        <h1>Tabla de servicios</h1>
       
        <table >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Descripción</th>
                    <th>Nombre del operario</th>
                    <th>Cargo del operario</th>
                    <th>Costo del servicio</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    @can('admin.services.edit')
                    <th>Acciones</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($data_services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->user->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->operator->name }}</td>
                        <td>{{ $service->operator->post }}</td>
                        <td>{{ $service->price }}</td>
                        <td>{{ $service->date }}</td>
                        <td>{{ $service->status }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

      
    </div>