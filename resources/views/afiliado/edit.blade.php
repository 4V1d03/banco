@extends('layouts.principal') <!-- Recupera todas propiedades de (Principal) -->

@section('hijos')<!-- todo lo que este aqui sera diferente (es propio de esta vista) -->

<h1>Editar Empleado</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado/{{$afiliadoEditado->id}}" method="post"> <!--el motodo post apunta a la funcion store-->
    @csrf
    @method('PUT')

    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codafiliado" class="form-control" value="{{$afiliadoEditado->codafiliado}}">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control" value="{{$afiliadoEditado->nombre}}">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control" value="{{$afiliadoEditado->apellido}}">
    </div>
    <div class="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad"  class="form-control" value="{{$afiliadoEditado->ciudad}}">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control" value="{{$afiliadoEditado->telefono}}">
    </div>
    <div class="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad"  class="form-control" value="{{$afiliadoEditado->edad}}">
    </div>

    <button type="submit">Guardar</button>

</form>

</div>
</div>
</div>


@endsection