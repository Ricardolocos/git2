<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>List de productos</title>
</head>
<body>
    <h1>Lista de productos CRUD</h1>


        <ul>
           <!-- Se muestran las variable productos y se piden los siguientes datos, "precio" y "nombre" haciendo uso 
            de foreach que es un Ciclo-->

            @foreach($productos as $producto)
                <li>
                    {{$producto['nombre']}} - ${{ $producto['precio'] }}
                </li>
            @endforeach
        </ul>
</body>
</html>

