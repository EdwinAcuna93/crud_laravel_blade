      @extends('layouts.plantilla')

      @section('contenido')

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  
       <div class="container-fluid">
            <form action="{{route('alumnos.store')}}" method="post" class="col-6 offset-3">
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    <h4 class="h4 mt-4">Formulario para agregar registro</h4>
                        <br>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control">
                        <br>
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" class="form-control">
                        <br>
                        <label for="direccion">Direccion:</label>
                        <input type="text" name="direccion" class="form-control">
                        <br>
                        <label for="fecha">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="" class="form-control">
                        <br>
                        <label for="altura">Altura:</label>
                        <input type="number" name="altura" step="0.01" id="" class="form-control">
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="{{route('alumnos.index')}}"  class="btn btn-danger">Regresar</a>
                        </div>
                        
               
                </form>
       </div>
       @endsection