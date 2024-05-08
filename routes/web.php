<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DomaineInterventionController;

Route::get('/', [HomeController::class, 'index']);

//Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/recentBlogs', [BlogController::class, 'recentBlogs'])->name('blogs.recentBlogs');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');


//Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
//Events
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/recentEvents', [EventsController::class, 'recentEvents'])->name('events.recentEvents');
Route::get('/createev', [EventsController::class, 'create'])->name('events.create');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');
Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventsController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('events.destroy');
//About
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

//Domaine d'intervention
Route::get('/domaines/santenutrition', [DomaineInterventionController::class, 'santenutrition'])->name('domaines.santenutrition');
Route::get('/domaines/urgencehumanitaire', [DomaineInterventionController::class, 'urgencehumanitaire'])->name('domaines.urgencehumanitaire');
Route::get('/domaines/securitealimentaire', [DomaineInterventionController::class, 'securitealimentaire'])->name('domaines.securitealimentaire');
Route::get('/domaines/educationdeveloppement', [DomaineInterventionController::class, 'educationdeveloppement'])->name('domaines.educationdeveloppement');

//testimonials
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
Route::get('/createt', [TestimonialsController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');

//NewsLetter
Route::post('/newsletter', [NewsLetterController::class, 'subscribe'])->name('newsletter.subscribe');


//admin
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('/allblogs', [AdminDashboardController::class, 'allbogs'])->name('admin.allblogs');
Route::get('/createblog', [AdminDashboardController::class, 'create'])->name('admin.create');

// test route

// Route::get('/test', function () {
//     return view('partials.blogs.blog-details');
// });
