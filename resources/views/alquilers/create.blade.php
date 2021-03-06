@extends('plantilla.layout')

@section('content')


<div class="container">
<h1 class="text-center">Alquilar Pelicula</h1>
<hr>
<form action="{{ route('alquilers.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
            <strong>Pelicula:</strong>
                <select name="id_pelicula" class="custom-select custom-select">
                <option selected>Selecciona una pelicula</option>

                    @foreach ($peliculas as $pelicula)
                <option value="{{$pelicula->id}}">{{$pelicula->nombre}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>Cliente:</strong>
                <select name="id_cliente" class="custom-select custom-select">
                    <option selected>Selecciona un cliente</option>
                    @foreach ($clientes as $cliente)
                        <option  value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>Fecha Alquiler:</strong>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-check"></i></span>
                    </div>
                    <input type="date" name="fecha_alquiler" class="form-control" placeholder="Fecha alquiler" aria-label="Fecha alquiler" aria-describedby="basic-addon1">
                  </div>
            </div>
        </div>
        {{-- <div class="col-md-6">
                <div class="form-group">
                    <strong>Fecha Devolucion:</strong>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="date" name="fecha_dev" value="devolucion" class="form-control" placeholder="Fecha devolucion" aria-label="Fecha devolucion" aria-describedby="basic-addon1">
                      </div>
                </div>
            </div> --}}
        <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ url()->previous()}} " class="btn btn-danger">Atras</a>
        </div>
    </div>
</form>

</div>

@endsection
