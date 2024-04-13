@extends('layouts.principal') <!-- Recupera todas propiedades de (Principal) -->

@section('hijos')<!-- todo lo que este aqui sera diferente (es propio de esta vista) -->

<h1>Modulo de Empleado</h1>

<a href="empleado/create" class="btn btn-primary">Crear Nuevo Empleado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>    
            <th>CodEmpleado</th>  
            <th>Nombre</th>  
            <th>Apellido</th>  
            <th>Nivel</th>  
            <th>Telefono</th>  
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>    
            <td>{{$empleado->codempleado}}</td>  
            <td>{{$empleado->nombre}}</td>  
            <td>{{$empleado->apellido}}</td>  
            <td>{{$empleado->nivel}}</td>  
            <td>{{$empleado->telefono}}</td>
            <!-- <td>
                <a href="/empleado/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                <a href="/afiliado/{{$empleado->id}}" class="btn btn-success">Afiliados</a> apunta al metodo show (por que lleva una variable)
                <button class="btn btn-warning">Eliminar</button>

            </td> -->
            <td>
                <form action="/empleado/{{$empleado->id}}" method="POST">
                    @csrf
                    @method('Delete')
                    <a href="/empleado/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                    <a href="/afiliado/{{$empleado->id}}" class="btn btn-success">Afiliados</a>
                    <button type="submit" class="btn btn-warning">Eliminar</button> 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection