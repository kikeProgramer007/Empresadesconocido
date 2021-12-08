@extends('layouts.plantillabase');
@section('contenido')

<h2>EDITAR REGISTROS</h2>

<form action="{{asset('')}}empresa/update/{{$dato->id}}" method="POST">
    @csrf    
  <div class="mb-3">
    <label for="" class="form-label">RAZON SOCIAL</label>
    <input id="razonsocial" name="razonsocial" type="text" class="form-control" value="{{$dato->razonsocial}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NIT</label>
    <input id="nit" name="nit" type="text" class="form-control" value="{{$dato->nit}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$dato->telefono}}">
  </div>
  <a href="{{route('empresa')}}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection