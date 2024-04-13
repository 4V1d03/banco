@extends('layouts.principal') <!-- Recupera todas propiedades de (Principal) -->

@section('hijos')

    
    <h1>Modulo de Retiros de Afiliado: {{$afiliado}} </h1>

    
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>    
            <th>codempleado</th>  
            <th>Codafiliado</th>  
            <th>fecha</th>  
            <th>monto</th>   
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->codafiliado == $afiliado)
        <tr>
            <th>{{$retiro->id}}</th>    
            <th>{{$retiro->codempleado}}</th>  
            <th>{{$retiro->codafiliado}}</th>  
            <th>{{$retiro->fecha}}</th>  
            <th>{{$retiro->monto}}</th>  
    
        </tr>
        @endif
        @endforeach
    </tbody>
</table>



@endsection