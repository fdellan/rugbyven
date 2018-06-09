<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vwinicio');
});
Route::get('/insertausuario', function () {
    return view('vwinsertausuario');
});
Route::get('/principal', function () {
    return view('vwprincipal');
});
Route::get('/insertaaler', function () {
    return view('vwinsertaaler');
});
Route::get('/insertaasoc', function () {
    return view('vwinsertaasoc');
});
Route::get('/insertaclub', function () {
    return view('vwinsertaclub');
});
Route::get('/insertafede', function () {
    return view('vwinsertafede');
});
Route::get('/insertalesi', function () {
    return view('vwinsertalesi');
});
Route::get('/insertamiem', function () {
    return view('vwinsertamiem');
});
Route::get('/insertaposi', function () {
    return view('vwinsertaposi');
});
Route :: post('/insertausuario','ctrlusuario@insertarusuario');
Route :: post('/recuperaclave','ctrlusuario@recuperarclave');
Route :: post('/accesositio','ctrlsitio@accesarsitio');
Route :: get('/salidasitio','ctrlsitio@salirsitio');
Route :: get('/recuperarclavev',function (){
  return view('vwrecuperaclave');
});
Route :: post('/recuperaclave','ctrlsitio@mandarclave');

Route :: post('/insertaler','ctrldatasis@insertaraler');
Route :: post('/insertaler','ctrldatasis@insertarasoc');
Route :: post('/insertaler','ctrldatasis@insertarclub');
Route :: post('/insertaler','ctrldatasis@insertarfede');
Route :: post('/insertaler','ctrldatasis@insertarlesi');
Route :: post('/insertaler','ctrldatasis@insertarmiem');
Route :: post('/insertaler','ctrldatasis@insertarposi');

/*Route::get('/elio/{id}', function ($id) {
    return $id.' es el ID.';
});

Route::get('/rafael/{usuario}', function ($usuario) {
    return 'El nombre es: '.$usuario;
});*/

/*Route::get('/rafael/{user}', function ($user) {
    return view('welcome',['user'=>$user]);
});
Route::get('/rafael/{user}/{id}', function ($user,$id) {
    return view('welcome') ->with('user',$user) -> with('id',$id);
});
Route::get('rugby', 'Control1@index');
*/
?>
