<?php

use App\Http\Controllers\ProductoController;

use Illuminate\Support\Facades\Route;

/* Ruta principal */
Route::get('/', function () {
    return view('welcome');


});

/*Rutas con parametros*/

Route::get('/usuario/{nombre}', function ($nombre) {
    return "Hola " . $nombre; 
});

/*Se creo una ruta simple que lleva a la vista de hola.blade.php*/ 
Route::get('/hola', function(){
    return view('hola');
});

/* Se crea una ruta de producto controller*/
Route::get('/productos', [ProductoController::class, 'index']);


/* RUTAS - GET OBTENER/MOSTRAR
Se utiliza para Obtener/Mostrar */

Route::get('/usuarios', function (){
    return "Lista de usuarios";

});

/* RUTAS - POST GUARDAR
Se utiliza para enviar datos y guardarlos, si modifica la base de datos y se utiliza en formularios

FORMULARIO HTML SE UTILIZA ASI:

<form method="POST" action="/usuarios">
    @csrf
    <button type="submit">Guardar</button>
</form>
*/

Route::post('/usuarios', function(){
    return "Usuario Guardado";

});

/* RUTAS - PUT ACTUALIZAR
Se utiliza para modificar datos existentes, No modifica datos de la base de datos.

EN EL FORMULARIO HTML SE UTILIZA ASI:
Cabe mencionar que HTML no soporta PUT pero lo simula con @method ('PUT')
<form method="POST" action="/usuarios/5">
    @csrf
    @method('PUT')
    <button type="submit">Actualizar</button>
</form>
*/

Route::put('/usuarios/{id}', function($id){
    return "Usuarios $id actualizado";
});

/* RUTAS - DELETE
Se utiliza para borrar informacion y elminiar registros.

EN EL FORMULARIO HTML SE UTILIZA ASI:

<form method="POST" action="/usuarios/5">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
*/

Route::delete('/usuarios/{id}', function($id){
    return "Usuario $id eliminado";

});
/*Parametros que SI tienen importancias cuando utilizan $  */

Route::get('/usuario/{id}', function($id = "5"){
    return "Usuario con id: $id";
});

/*Parametros que NO tienen tanta importancia, */
Route::get('/usuario/{nombre?}', function ($nombre = "Invitado") {
    return "Hola $nombre";
});




/*Esta es una ruta al controlador Producto */
Route::get('/productos', [ProductoController::class, 'index']);


/*Esta es una prueba de commit*/
Route::get('/usuarios', function(){
    return "Hola mundo";
});