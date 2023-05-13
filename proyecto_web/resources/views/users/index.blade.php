<h1>Usuarios Registrados</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </tr>
        @endforeach
    </tbody>
</table>
