<div class="row">
    <div class="col-4">
        <label for="name"> Nombre </label>
        <input class="form-control" type="text" name="name"
            value="{{ isset($operator->name) ? $operator->name : '' }}" id="name">
        <br>

        <label for="last_name"> Apellido </label>
        <input type="text" name="last_name"value="{{ isset($operator->last_name) ? $operator->last_name : '' }}"
            id="last_name">
        <br>

        <label for="post"> Puesto </label>
        <input type="text" name="post" value="{{ isset($operator->post) ? $operator->post : '' }}" id="post">
        <br>

        <input type="submit" id="save_data" value="Guardar">

        <a href="{{ url('operators') }}">Regresar </a>
        <br>
    </div>

</div>
