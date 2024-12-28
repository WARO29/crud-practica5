<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7689f1bd39.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center p-5">Crud con Laravel.</h1>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">CANTIDAD</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $key)
                            
                        <tr>
                            <th scope="row">{{$key->id_producto}}</th>
                            <td>{{$key->nombre}}</td>
                            <td><b>$ </b>{{$key->precio}}</td>
                            <td>{{$key->cantidad}}</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                </div>
                            </div>    
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>