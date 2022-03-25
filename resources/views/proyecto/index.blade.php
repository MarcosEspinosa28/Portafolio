@extends('layouts.app')

    @section('template_title')
        Proyecto 
    @endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Admin de Proyectos</title>
    </head>
    <body>

    
    @include('layouts.Admin.navbar.navbar')
    @extends('layouts.Admin.sidebar.sidebar')
    
    @section('content')
    
        <div class="container-fluid">
          
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
    
                                <span id="card_title">
                                    {{ __('Proyecto') }}
                                </span>
    
                                 <div class="float-right">
                                    <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                      {{ __('Crear Nuevo Proyecto') }}
                                    </a> 
                                  </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Imagen</th>
                                            <th>Descripcion</th>
                                            <th>Url</th>
    
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proyectos as $proyecto)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $proyecto->nombre }}</td>
                                                <td>{{ $proyecto->imagen }}</td>
                                                <td>{{ $proyecto->descripcion }}</td>
                                                <td>{{ $proyecto->Url }}</td>
    
                                                <td>
                                                    <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $proyectos->links() !!}
                </div>
            </div>
        </div>
   @endsection
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/js/scripts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script src="assets/assets/demo/chart-area-demo.js"></script>
 <script src="assets/assets/demo/chart-bar-demo.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
 <script src="js/js/datatables-simple-demo.js"></script>    
  
</body>
</html>


