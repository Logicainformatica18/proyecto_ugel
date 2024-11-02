<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

//    //   return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sistema', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');







Route::get('/Administrador', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
/////////////////////////////////////////

Route::group(['middleware' => ['role:Administrador']], function () {

    Route::resource('categorias', App\Http\Controllers\CategoryController::class);
   Route::post('categoryStore',[App\Http\Controllers\CategoryController::class, 'store']);
   Route::post('categoryEdit',[App\Http\Controllers\CategoryController::class, 'edit']);
   Route::post('categoryUpdate',[App\Http\Controllers\CategoryController::class, 'update']);
   Route::post('categoryDestroy',[App\Http\Controllers\CategoryController::class, 'destroy']);
   Route::post('categoryShow',[App\Http\Controllers\CategoryController::class, 'show']);






   Route::resource('usuarios', App\Http\Controllers\UserController::class);
   Route::post('userCreate', 'UserController@create');
   Route::post('userStore', [App\Http\Controllers\UserController::class, 'store']);
   Route::post('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
   Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit']);
   Route::post('userUpdate', [App\Http\Controllers\UserController::class, 'update']);
   Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
   Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);

   Route::post('userRoleStore',[App\Http\Controllers\UserController::class, 'userRoleStore']);
   Route::post('userRoleEdit',[App\Http\Controllers\UserController::class, 'userRoleEdit']);
   Route::post('userRoleDestroy',[App\Http\Controllers\UserController::class, 'userRoleDestroy']);

   Route::resource("roles", App\Http\Controllers\RoleController::class);
   Route::post('roleStore',[App\Http\Controllers\RoleController::class, 'store']);
   Route::post('roleEdit',[App\Http\Controllers\RoleController::class, 'edit']);
   Route::post('roleUpdate',[App\Http\Controllers\RoleController::class, 'update']);
   Route::post('roleDestroy',[App\Http\Controllers\RoleController::class, 'destroy']);
   Route::post('roleShow',[App\Http\Controllers\RoleController::class, 'show']);

   Route::post('rolePermissionStore',[App\Http\Controllers\RolePermissionController::class,'store']);
   Route::post('rolePermissionEdit',[App\Http\Controllers\RolePermissionController::class,'edit']);
   Route::post('rolePermissionDestroy',[App\Http\Controllers\RolePermissionController::class,'destroy']);




  Route::resource("tipos", App\Http\Controllers\TypeController::class);
   Route::post('typeStore',[App\Http\Controllers\TypeController::class, 'store']);
   Route::post('typeEdit',[App\Http\Controllers\TypeController::class, 'edit']);
   Route::post('typeUpdate',[App\Http\Controllers\TypeController::class, 'update']);
   Route::post('typeDestroy',[App\Http\Controllers\TypeController::class, 'destroy']);


   Route::resource("pagos", App\Http\Controllers\PayController::class);
   Route::post('payStore',[App\Http\Controllers\PayController::class, 'store']);
   Route::post('payEdit',[App\Http\Controllers\PayController::class, 'edit']);
   Route::post('payUpdate',[App\Http\Controllers\PayController::class, 'update']);
   Route::post('payDestroy',[App\Http\Controllers\PayController::class, 'destroy']);
   Route::post('payCompare',[App\Http\Controllers\PayController::class, 'compare']);





});


//// social media
   Route::post('socialMediaShare',[App\Http\Controllers\SocialMediaController::class, 'share']);

//




 Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('auth/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);
 
use App\Models\User;


Route::get('/auth/google/callback', function () {
   try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // if the user exits, use that user and login
            $finduser = User::where('email', $user->email)->first();
            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/home');
            }else{
                //user is not yet created, so create first
                $newUser = User::create([
                    'names' => $user->name,
                     'firstname' => '',
                      'lastname' => '',
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('encuestador123')
                ]);
              
                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                $newUser->assignRole('Encuestador');
                //
              //  $newUser->createToken(request()->device_name)->plainTextToken ;
                // go to the dashboard
                return redirect('/home');
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }

});

