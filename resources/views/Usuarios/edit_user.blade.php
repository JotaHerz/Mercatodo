@extends('structure')

@section('title','Usuarios')


@section('content')

  <div class="container">

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form "bg-white shadow rounded py-3 px-4" method="POST" action="{{route('update.usuarios',$usuario)}}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <label for="exampleInputEmail1"><strong>Actualizar Nombre</strong></label>
                  <input name="name" type="text" class="form-control bg-light shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{$usuario->name}}">
                </div>
                <div class="form-group form-check">
                  <input name="enabled_user" type="checkbox" class="form-check-input" id="exampleCheck1" @if ($usuario->enabled_user)
                  checked @endif>
                  <label class="form-check-label" for="exampleCheck1">Habilitado</label>
                </div>
                <button type="submit" class="btn btn-danger">Modificar</button>
                <a class="btn btn-success" href="{{ URL::previous() }}">Salir</a>
              </form>
        </div>
    </div>
  </div>



@endsection
