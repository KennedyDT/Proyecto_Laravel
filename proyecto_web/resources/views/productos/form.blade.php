<div class="row">
    <div class="col-4">
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input class="form-control" type="text" name="Nombre" value="{{ isset($producto->Nombre) ? $producto->Nombre : '' }}" id="Nombre">
        </div>

        <div class="form-group">
            <label for="Marca">Marca:</label>
            <input class="form-control" type="text" name="Marca" value="{{ isset($producto->Marca) ? $producto->Marca : '' }}" id="Marca">
        </div>

        <div class="form-group">
            <label for="Descripcion">Descripción:</label>
            <input type="text" name="Descripcion" value="{{ isset($producto->Descripcion) ? $producto->Descripcion : '' }}" id="Descripcion" class="form-control">
        </div>

        <div class="form-group">
            <label for="Cantidad">Cantidad:</label>
            <input type="text" name="Cantidad" value="{{ isset($producto->Cantidad) ? $producto->Cantidad : '' }}" id="Cantidad" class="form-control">
        </div>

        <div class="form-group">
            <label for="Precio">Precio:</label>
            <input type="text" name="Precio" value="{{ isset($producto->Precio) ? $producto->Precio : '' }}" id="Precio" class="form-control">
        </div>

        <div class="mt-5">
            <button type="submit" id="save_data" class="btn btn-primary">Guardar</button>
            <a href="{{ url('productos') }}" class="btn btn-secondary">Regresar</a>
        </div>


    </div>
</div>
