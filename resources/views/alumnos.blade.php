        @extends('layouts.plantilla')

        @section('contenido')
            
        
        <p class="h1 center"> listado de alumnos</p>
        <a href="{{route('alumnos.create')}}" class="btn btn-info text-white" >Agregar</a>

        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br />
      @endif
        
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Direccion</th>
              <th scope="col">Fecha Nacimiento</th>
              <th scope="col">Altura</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          
          <tbody>
            @foreach ($alumnos as $fila) 
            <tr>
              <td>{{$fila['id']}}</td>
              <td>{{$fila['nombre']}}</td>
              <td>{{$fila['apellido']}}</td>
              <td>{{$fila['direccion']}}</td>
              <td>{{$fila['fecha_nacimiento']}}</td>
              <td>{{$fila['altura']}}</td>
              <td><a href="{{route('alumnos.edit',$fila['id'])}}" class="btn btn-warning text-white" >Editar</a> </td>
              <td><form action="{{ route('alumnos.destroy',$fila->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
              </td>
              
            </tr>
            
            @endforeach
          </tbody>
        </table>
        
        @endsection
        
        
        