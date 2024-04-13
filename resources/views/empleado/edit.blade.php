@extends('layouts.principal') <!-- Recupera todas propiedades de (Principal) -->

@section('hijos')<!-- todo lo que este aqui sera diferente (es propio de esta vista) -->

<h1>Editar Empleado</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$empleadoEditado->id}}" method="post"> <!--el motodo post apunta a la funcion store-->
    @csrf
    @method('PUT')

    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codempleado" class="form-control" value="{{$empleadoEditado->codempleado}}">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control" value="{{$empleadoEditado->nombre}}">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control" value="{{$empleadoEditado->apellido}}">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel"  class="form-control" value="{{$empleadoEditado->nivel}}">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control" value="{{$empleadoEditado->telefono}}">
    </div>

    <button type="submit">Guardar</button>

</form>

</div>
</div>
</div>


@endsection