<div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" required value="{{isset($marca->nombre)?$marca->nombre:''}}">
        
    </div>
    <div class="form-group">
       
        <label for="descripcion">Descripcion</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required >{{isset($marca->descripcion)?$marca->descripcion:''}}</textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">{{ $modo=='crear' ? 'Agregar':'Modificar' }}</button>