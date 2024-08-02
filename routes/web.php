<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes sont chargées par le RouteServiceProvider au sein d'un groupe
| qui contient le groupe de middleware "web". Créez quelque chose de grand !
|
*/

// Rediriger la route de base vers la page de connexion
Route::get('/', function () {
    return redirect()->route('login'); 
});

Route::get('/login', function () {
    return view('layouts.login'); // Assurez-vous que le fichier 'login.blade.php' existe dans 'resources/views/layouts'
})->name('login');

Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');

Route::get('/home', function () {
    $user = Auth::user(); // Obtenez l'utilisateur authentifié
    return view('layouts.auth', compact('user')); // Passez l'utilisateur à la vue
})->middleware('auth')->name('home');

Route::get('/register', function () {
    return view('layouts.register'); // Assurez-vous que le fichier 'register.blade.php' existe dans 'resources/views/layouts'
})->name('register');

Route::post('/register', [AdminAuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('layouts.myprofil'); // Assurez-vous que le fichier 'profile.blade.php' existe dans 'resources/views/layouts'
})->name('profile');

Route::get('/edit-profile', function () {
    return view('layouts.myprofil'); // Assurez-vous que le fichier 'profile.blade.php' existe dans 'resources/views/layouts'
})->name('edit-profile');

Route::get('/settings.html', function () {
    return view('layouts.settings'); // Assurez-vous que le fichier 'settings.blade.php' existe dans 'resources/views/layouts'
})->name('settings.html');

Route::get('/index', function () {
    return view('layouts.index'); // Assurez-vous que le fichier 'index.blade.php' existe dans 'resources/views/layouts'
})->name('index');

Route::get('/all-teachers', function () {
    return view('layouts.allteachers'); // Assurez-vous que le fichier 'allteachers.blade.php' existe dans 'resources/views/layouts'
})->name('all-teachers');

Route::get('/add-teacher', function () {
    return view('layouts.addteacher'); // Assurez-vous que le fichier 'addteacher.blade.php' existe dans 'resources/views/layouts'
})->name('add-teacher');

Route::get('/edit-teacher', function () {
    return view('layouts.editteacher'); // Assurez-vous que le fichier 'editteacher.blade.php' existe dans 'resources/views/layouts'
})->name('edit-teacher');

Route::get('/users.html', function () {
    return view('layouts.users'); // Assurez-vous que le fichier 'users.blade.php' existe dans 'resources/views/layouts'
})->name('users');

Route::get('/exam-list.html', function () {
    return view('layouts.examlist'); // Assurez-vous que le fichier 'examlist.blade.php' existe dans 'resources/views/layouts'
})->name('examlist');

Route::get('/exam-detail.html', function () {
    return view('layouts.examdetail'); // Assurez-vous que le fichier 'examdetail.blade.php' existe dans 'resources/views/layouts'
})->name('exam-detail');

Route::get('/payments', function () {
    return view('layouts.payments'); // Assurez-vous que le fichier 'payments.blade.php' existe dans 'resources/views/layouts'
})->name('payments');

Route::get('/salary', function () {
    return view('layouts.salary'); // Assurez-vous que le fichier 'salary.blade.php' existe dans 'resources/views/layouts'
})->name('salary');

Route::get('/salary-view', function () {
    return view('layouts.salaryview'); // Assurez-vous que le fichier 'salaryview.blade.php' existe dans 'resources/views/layouts'
})->name('salary-view');

Route::get('/salary-settings', function () {
    return view('layouts.salarysettings'); // Assurez-vous que le fichier 'salarysettings.blade.php' existe dans 'resources/views/layouts'
})->name('salary-settings');

Route::get('/invoices', function () {
    return view('layouts.invoices'); // Assurez-vous que le fichier 'invoices.blade.php' existe dans 'resources/views/layouts'
})->name('invoices');

Route::get('/activities', function () {
    return view('layouts.activities'); // Assurez-vous que le fichier 'activities.blade.php' existe dans 'resources/views/layouts'
})->name('activities');

Route::get('/chat', function () {
    return view('layouts.chat'); // Assurez-vous que le fichier 'chat.blade.php' existe dans 'resources/views/layouts'
})->name('chat');

Route::get('/inbox', function () {
    return view('layouts.inbox'); // Assurez-vous que le fichier 'inbox.blade.php' existe dans 'resources/views/layouts'
})->name('inbox');

Route::get('/compose', function () {
    return view('layouts.compose'); // Assurez-vous que le fichier 'compose.blade.php' existe dans 'resources/views/layouts'
})->name('compose');

Route::get('/notifications-settings', function () {
    return view('layouts.notificationssettings'); // Assurez-vous que le fichier 'notificationssettings.blade.php' existe dans 'resources/views/layouts'
})->name('notifications-settings');

Route::get('/forgot-password', function () {
    return view('layouts.forgotpassword'); // Assurez-vous que le fichier 'forgotpassword.blade.php' existe dans 'resources/views/layouts'
})->name('password.request');
