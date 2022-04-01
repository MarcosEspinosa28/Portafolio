@extends('layouts.app')

    @section('template_title')
        Proyecto 
    @endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
         <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
         <!-- Font Awesome icons (free version)-->
         <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
         <!-- Google fonts-->
         <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
         <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/css/styles.css" rel="stylesheet" />
        <link href="{{ asset('css/css/app.css') }}" rel="stylesheet">
    <title>Admin de Proyectos</title>
    </head> 
    <body>

    
    @include('layouts.Admin.components.navbar')
    @extends('layouts.Admin.components.sidebar')
    
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
        @include('layouts.Admin.components.footer') 
  
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/assets/demo/chart-area-demo.js"></script>
        <script src="assets/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/js/datatables-simple-demo.js"></script>
         <!-- Bootstrap core JS-->
         <!-- Core theme JS-->
         <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
         <!-- * *                               SB Forms JS                               * *-->
         <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
         <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
         <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
 @endsection
</body>
</html> 



