    <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\VistasController;
use App\Http\Controllers\MailController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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
        if(\Auth::check()){
            return redirect('/home');
        } else{
            return redirect() ->route('sitio.index');
        }
        return view('welcome');
    });

Route::group(['prefix' => 'sitio'], function(){
    Route::get('/index', [
        'as' => 'sitio.index',
        'uses' => 'VistasController@index'
    ]);


    Route::get('/about', [
        'as' => 'sitio.about',
        'uses' => 'VistasController@about'
    ]);



    Route::get('/chat', [
        'as' => 'sitio.chat',
        'uses' => 'VistasController@chat'
    ]);

    Route::get('/contactanos', [
        'as' => 'sitio.contactanos',
        'uses' => 'VistasController@contactanos'

    ]);

    Route::view('emails','TestEmail');

  ///  Route::get('/send-email', [MailController::class, 'sendEmail']);


   //Route::get('/contactactanos','sitio.contactanos')->name('contact');


///envio de contratacion
    Route::post('/contact','MailController@store')->name('details.sendEmail');
///envio de quejas
    Route::post('/contacto','QuejasController@store')->name('enviar.peticion');


});








