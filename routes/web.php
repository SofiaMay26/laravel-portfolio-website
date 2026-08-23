<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes (PROTECTED)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/messages', function () {
        $messages = Contact::latest()->get();
        return view('admin.messages', compact('messages'));
    })->name('admin.messages');

    Route::get('/admin/messages/read/{id}', function ($id) {
        $msg = Contact::findOrFail($id);
        $msg->update(['is_read' => true]);

        return back();
    })->name('admin.messages.read');

});

Route::middleware(['auth', 'is_admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/messages', function () {
        $messages = \App\Models\Contact::latest()->get();
        return view('admin.messages', compact('messages'));
    });

});