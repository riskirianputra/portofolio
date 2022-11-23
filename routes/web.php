<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GallerypageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectpageController;
use App\Http\Controllers\BahasaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\DaftarprojectController;
use App\Http\Controllers\ProjectdetailController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\PengalamankerjaController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\InformasipribadiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\LandingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


Route::group(['middleware' => 'auth'], function () {
	
		Route::prefix('gallery')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
            Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
            Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');
        });
		Route::get('/', [VisitorController::class, 'index']);
		Route::view('/login', 'visitor-page.login');

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

	Route::get('posts/{id}','PostController@index')->name('posts.index');
	
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
	
	
});

Route::get('/landing', function () {
    return view('visitor-page.landing-page');
})->name('landing');

    Route::resource('user', UserController::class);
	Route::resource('posts', PostController::class);	
	
	Route::resource('roles', RolesController::class) ;
    Route::resource('permissions', PermissionsController::class);

	Route::resource('galery', GalleryController::class);
	Route::resource('project', ProjectController::class);
	Route::resource('about', AboutController::class);
	Route::resource('bahasa', BahasaController::class);
	Route::resource('aplikasi', AplikasiController::class);

	Route::resource('projects', ProjectpageController::class);
	Route::resource('gallerys', GallerypageController::class);
	Route::resource('abouts', AboutpageController::class);
	Route::resource('contacts', ContactpageController::class);
	
	Route::resource('pengalamankerja', PengalamankerjaController::class);
	Route::resource('keahlian', KeahlianController::class);
	Route::resource('informasipribadi', InformasipribadiController::class);
	Route::resource('pendidikan', PendidikanController::class);

	Route::post('/contacts', [ContactpageController::class, 'sendMail']);	
		
	Route::put('post/{id}/publish', [PostController::class, 'publish'])->name('post.publish');
	Route::put('post/{id}/unpublish', [PostController::class, 'unpublish'])->name('post.unpublish');
	
	Route::resource('visitor-page.project-page', ProjectpageController::class);
	
	Route::resource('visitor-page.landing-page', VisitorController::class);

	Route::resource('projects-detail', ProjectdetailController::class);
	Route::resource('daftar-projects', DaftarprojectController::class);
	Route::resource('home', LandingController::class);
	
	Route::get('/Project/{project}', [DaftarprojectController::class, 'show'])->name('project.detail');
	Route::get('/Project-bahasa/{bahasa}', [DaftarprojectController::class, 'project_bahasa'])->name('project.bahasa');
	Route::get('/Project-aplikasi/{aplikasi}', [DaftarprojectController::class, 'project_aplikasi'])->name('project.aplikasi');
	
	
	
	
