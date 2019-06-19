<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="container-fluid">
            <form action="{{route('alumnos.update',$alumno->id)}}" method="POST" class="col-6 offset-3">
                    {{ csrf_field() }}
                    @method('PUT')
                 
                  
                    <h4 class="h4 mt-4">Formulario para agregar registro</h4>
                        <br>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{{$alumno->nombre}}">
                        <br>
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" class="form-control" value="{{$alumno->apellido}}">
                        <br>
                        <label for="direccion">Direccion:</label>
                        <input type="text" name="direccion" class="form-control" value="{{$alumno->direccion}}">
                        <br>
                        <label for="fecha">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="" class="form-control"  value="{{$alumno->fecha_nacimiento}}">
                        <br>
                        <label for="altura">Altura:</label>
                        <input type="number" name="altura" step="0.01" id="" class="form-control"  value="{{$alumno->altura}}">
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="{{route('alumnos.index')}}"  class="btn btn-danger">Regresar</a>
                        </div>
                        
               
                </form>
       </div>
 
   </div>
</body>
</html>