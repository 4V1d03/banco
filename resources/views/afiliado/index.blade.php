@extends('layouts.principal') <!-- Recupera todas propiedades de (Principal) -->

@section('hijos')<!-- todo lo que este aqui sera diferente (es propio de esta vista) -->

<h1>Modulo de Afiliado</h1>

<a href="afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>    
            <th>Codafiliado</th>  
            <th>Nombre</th>  
            <th>Apellido</th>  
            <th>Ciudad</th>  
            <th>Telefono</th>
            <th>Edad</th>    
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($afiliados as $afiliado)
        <tr>
        <td>{{$afiliado->id}}</td>    
            <td>{{$afiliado->codafiliado}}</td>  
            <td>{{$afiliado->nombre}}</td>  
            <td>{{$afiliado->apellido}}</td>  
            <td>{{$afiliado->ciudad}}</td>  
            <td>{{$afiliado->telefono}}</td>
            <td>{{$afiliado->edad}}</td>
            <td>
                <form action="/afiliado/{{$afiliado->id}}" method="POST">
                    @csrf
                    @method('Delete')
                    <a href="/afiliado/{{$afiliado->id}}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-warning">Eliminar</button> 
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection