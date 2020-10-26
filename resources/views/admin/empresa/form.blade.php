<div class="form-group row">
    <label for="email-gestion" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="email-gestion" name="email-gestion" aria-describedby="email" required value="{{isset($email->emailcontacto)?$email->emailcontacto:''}}">
    </div>
</div>

<div class="form-group row">
    <label for="nombre-gestion" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="nombre-gestion" name="nombre-gestion" aria-describedby="nombre" required value="{{isset($empresa->nombre)?$empresa->nombre:''}}">
    </div>
</div>

<div class="form-group row">
    <label for="direccion-gestion" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="direccion-gestion" name="direccion-gestion" aria-describedby="direccion" required value="{{isset($empresa->direccion)?$empresa->direccion:''}}">
    </div>
</div>

<div class="form-group row">
    <label for="telefono-gestion" class="col-sm-2 col-form-label">Telefono</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="telefono-gestion" name="telefono-gestion" aria-describedby="telefono" required value="{{isset($empresa->telefonocontacto)?$empresa->telefonocontacto:''}}">
    </div>
</div>

<div class="form group row">
    <label for="presentacion-gestion" class="col-sm-2 col-form-label">Quienes somos</label>
    <div class="col-sm-10">
        <textarea type="text"  class="form-control" id="presentacion-gestion" name="presentacion-gestion" rows="5" required >{{isset($empresa->quienessomos)?$empresa->quienessomos:''}}</textarea>
    </div>
</div>

<div class="form group row">
    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="twitter" name="twitter" aria-describedby="twitter" required value="{{isset($empresa->twitter)?$empresa->twitter:''}}">
    </div>
</div>


<div class="form-group row">
    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="facebook" name="facebook" aria-describedby="facebook" required value="{{isset($empresa->facebook)?$empresa->facebook:''}}">
    </div>
</div>


<div class="form-group row">
    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="instagram" name="instagram" aria-describedby="instagram" required value="{{isset($empresa->instagram)?$empresa->instagram:''}}">
    </div>
</div>


<button type="submit" class="btn btn-primary">{{ $modo=='crear' ? 'Agregar':'Modificar' }}</button>