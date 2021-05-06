<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\FilerController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarsController;

use App\Http\Controllers\MailController;


use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;
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
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('newalexey2020@gmail.com')->send(new \App\Mail\SendMail($details));
   
    dd("Email is Sent.");
});


Route::get('sendbasicemail',[MailController::class, 'basic_email']);
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');



Route::get('/', function () {
    return view('welcome');
});


Route::post('ckeditor/upload',[CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::post('ajax_upload_file',[FilerController::class, 'upload'])->name('filer.image-upload');
Route::post('ajax_remove_file',[FilerController::class, 'fileDestroy'])->name('filer.image-remove');

/*Classes Start*/
Route::get('student/home',[ClassesController::class, 'index'])->name('student.home');
Route::get('classes',[ClassesController::class, 'index'])->name('classes.list');
Route::get('class/{slug}',[ClassesController::class, 'detail'])->name('classes.detail');

Route::get('testimonials',[TestimonialsController::class, 'index'])->name('testimonials.list');

/*End Classes*/

/*Teachers Start*/
Route::get('teachers',[TeachersController::class, 'index'])->name('teachers.list');
Route::get('teacher/{slug}',[TeachersController::class, 'detail'])->name('teachers.detail');

/*End Teachers*/

/*Blogs Start*/
Route::get('blog',[BlogsController::class, 'index'])->name('blogs.list');
Route::get('blog/{slug}',[BlogsController::class, 'detail'])->name('blogs.detail');

/*End Blogs*/

/*Cars Start*/
Route::get('cars',[CarsController::class, 'index'])->name('cars.list');

/*End Cars*/

/*Contact Us Start*/
Route::get('contact-us',[ContactusController::class, 'index'])->name('contact.index');
Route::post('contact-us',[ContactusController::class, 'store'])->name('contact.post');

Route::post('booking',[BookingController::class, 'store'])->name('booking.post');

Route::post('news-letter',[NewsLetterController::class, 'store'])->name('newsletter.post');

/*End Contact Us*/

Route::get('/{slug}',[CmsController::class, 'index'])->name('cms.page');

