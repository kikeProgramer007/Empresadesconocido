@extends('layouts.plantillabase');
@section('contenido')


<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="{{route('empresa.create')}}" class="btn btn-primary">CREAR</a>


<table class="table table-blue table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Id </th>
      <th scope="col">razonsocial</th>
      <th scope="col">nit</th>
      <th scope="col">telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($dato as $empresa)
    <tr>
        <td>{{$empresa->id}}</td>
        <td>{{$empresa->razonsocial}}</td>
        <td>{{$empresa->nit}}</td>
        <td>{{$empresa->telefono}}</td>
        <td> 
          <a href="{{asset('')}}empresa/eliminar/{{$empresa->id}}" class="btn btn-info">delete</a>   
          <a href="{{asset('')}}empresa/edit/{{$empresa->id}}" class="btn btn-info">Edit</a>   
        </td>
              
    </tr>
    @endforeach
  </tbody>
</table>
@endsection