<div class="row">
    <div class="col-4">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input class="form-control" type="text" name="name" value="{{ isset($operator->name) ? $operator->name : '' }}" id="name">
        </div>

        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" name="last_name" value="{{ isset($operator->last_name) ? $operator->last_name : '' }}" id="last_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="post">Puesto:</label>
            <input type="text" name="post" value="{{ isset($operator->post) ? $operator->post : '' }}" id="post" class="form-control">
        </div>

        <div class="mt-5">
            <button type="submit" id="save_data" class="btn btn-primary">Guardar</button>
            <a href="{{ url('operators') }}" class="btn btn-secondary">Regresar</a>
        </div>

    </div>
</div>
