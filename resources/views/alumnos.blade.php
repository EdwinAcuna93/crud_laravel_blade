<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listado de alumnos</title>
</head>
<body>
    <div class="containar mt-4 offset-2 col-8 ">
        <p class="h1 center"> listado de alumnos</p>
        <a href="{{route('alumnos.create')}}" class="btn btn-info text-white" >Agregar</a>
        

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

    </div>

    
</body>
</html>