<?php
use App\Http\Controllers\MahasiswaDesemberController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Middleware\AdminAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home/en');
});

Route::get('/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
         abort(404); 
    }
    session(['locale' => $locale]);
    app()->setLocale($locale); 
    return view('home', ['locale' => $locale]);
});

Route::get('/proses-form/{locale}',[MahasiswaDesemberController::class,'formPendaftaran']);

Route::get('/home/{locale}', [PageController::class, 'home_local'])->name('home');

Route::get('/about/{locale}', [PageController::class, 'about_local'])->name('about');

Route::get('/mahasiswas_desember', 
    [MahasiswaDesemberController::class, 'index'])
    ->name('mahasiswa_desembers.index');

Route::get('/mahasiswas_desember/create', 
    [MahasiswaDesemberController::class, 'create'])
    ->name('mahasiswa_desembers.create');

Route::post('/mahasiswas_desember', 
    [MahasiswaDesemberController::class, 'store'])
    ->name('mahasiswa_desembers.store');

// Route::middleware(['check.user.session'])->group(function () {
//     Route::get('/home', [MiddlewareController::class, 'index']);
// });
// Route::post('/admin/login', [AdminAuthController::class, 'adminLogin']);

Route::get('/login', function () {
    return redirect()->route('adminLogin');
})->name('login');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
        Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
        Route::get('/adminpage', function () {
            return view('admin.auth.adminpage'); // Render the adminpage.blade.php file
        })->name('adminpage');
    });
});

