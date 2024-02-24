<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/password', [ProfileController::class, 'passwordChange'])->name('password');
    Route::put('/password/update', [ProfileController::class, 'changePasswordSave'])->name('postChangePassword');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        //Login Route
        Route::get('/login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store'])->name('adminlogin');
        
    });
    
        Route::middleware('admin')->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
        //admin connectu
        Route::get('/Connectus', [App\Http\Controllers\Admin\ConnectusController::class, 'index'])->name('Connectus');
        Route::get('/Connectus/{Connectus_id}/delete', [App\Http\Controllers\Admin\ConnectusController::class, 'destroy'])->name('Connectus.destroy');
        
        //admin about

        Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about');
        Route::get('/about/{about_id}/delete', [App\Http\Controllers\Admin\AboutController::class, 'destroy'])->name('about.destroy');
        Route::get('/about/add', [App\Http\Controllers\Admin\AboutController::class, 'addmission'])->name('about.add');
        Route::post('/about/add', [App\Http\Controllers\Admin\AboutController::class, 'store']);
        Route::get('/about/{about}/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about/update/{id}', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');
        Route::get('/about/{about}/editvistion', [App\Http\Controllers\Admin\AboutController::class, 'editvistion'])->name('about.editvistion');
        Route::put('/about/updatevistion/{id}', [App\Http\Controllers\Admin\AboutController::class, 'updatevistion'])->name('about.updatevistion');


        //admin branch 

        Route::get('/branch', [App\Http\Controllers\Admin\BranchController::class, 'index'])->name('branch');
        Route::get('/branch/{about_id}/delete', [App\Http\Controllers\Admin\BranchController::class, 'destroy'])->name('branch.destroy');
        Route::get('/branch/add', [App\Http\Controllers\Admin\BranchController::class, 'addbranch'])->name('branch.add');
        Route::post('/branch/add', [App\Http\Controllers\Admin\BranchController::class, 'store']);
        Route::get('/branch/{branch}/edit', [App\Http\Controllers\Admin\BranchController::class, 'edit'])->name('branch.edit');
        Route::put('/branch/update/{id}', [App\Http\Controllers\Admin\BranchController::class, 'update'])->name('branch.update');

        //commonquestions
        Route::get('/questions', [App\Http\Controllers\Admin\QuestionController::class, 'index'])->name('questions');
        Route::get('/questions/{questions_id}/delete', [App\Http\Controllers\Admin\QuestionController::class, 'destroy'])->name('questions.destroy');
        Route::get('/questions/add', [App\Http\Controllers\Admin\QuestionController::class, 'addquestions'])->name('questions.add');
        Route::post('/questions/add', [App\Http\Controllers\Admin\QuestionController::class, 'store']);
        Route::get('/questions/{question}/edit', [App\Http\Controllers\Admin\QuestionController::class, 'edit'])->name('questions.edit');
        Route::put('/questions/update/{id}', [App\Http\Controllers\Admin\QuestionController::class, 'update'])->name('questions.update');
        
        //slider
        Route::get('/slider', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('slider');
        Route::get('/slider/{slider_id}/delete', [App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('slider.destroy');
        Route::get('/slider/add', [App\Http\Controllers\Admin\SliderController::class, 'addslider'])->name('slider.add');
        Route::post('/slider/add', [App\Http\Controllers\Admin\SliderController::class, 'store']);
        Route::get('/slider/{slider}/edit', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('slider.edit');
        Route::put('/slider/update/{id}', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('slider.update');
        //slider teacher
        Route::get('/sliderteacher/add', [App\Http\Controllers\Admin\SliderController::class, 'addsliderteacher'])->name('sliderteacher.add');
        Route::get('/sliderteacher/{slider}/editteacher', [App\Http\Controllers\Admin\SliderController::class, 'editteacher'])->name('sliderteacher.edit');
        Route::get('/sliderteacher', [App\Http\Controllers\Admin\SliderController::class, 'indexteacher'])->name('sliderteacher');
        Route::post('/sliderteacher1/add', [App\Http\Controllers\Admin\SliderController::class, 'storeteacher']);
        Route::put('/sliderteacher/update/{id}', [App\Http\Controllers\Admin\SliderController::class, 'updateteacher'])->name('slider.update');

         //teacher 
         Route::get('/teacher', [App\Http\Controllers\Admin\TeacherController::class, 'index'])->name('teacher');
         Route::get('/teacher/add', [App\Http\Controllers\Admin\TeacherController::class, 'viweaddteacher'])->name('teacher.viweaddteacher');
         Route::post('/teacher/add', [App\Http\Controllers\Admin\TeacherController::class, 'store']);
         Route::get('/teacher/{teacher_id}/delete', [App\Http\Controllers\Admin\TeacherController::class, 'destroy'])->name('teacher.destroy');
         Route::get('/teacher/{teacher}/edit', [App\Http\Controllers\Admin\TeacherController::class, 'edit'])->name('teacher.edit');
         Route::put('/teacher/update/{id}', [App\Http\Controllers\Admin\TeacherController::class, 'update'])->name('teacher.update');

         //courses
         Route::get('/courses', [App\Http\Controllers\Admin\CoursesController::class, 'index'])->name('courses');
         Route::get('/courses/{courses}/edit', [App\Http\Controllers\Admin\CoursesController::class, 'updateviwe'])->name('courses.edit');
         Route::put('/courses/update/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'update'])->name('courses.update');
         Route::get('/courses/add', [App\Http\Controllers\Admin\CoursesController::class, 'viweaddcourses'])->name('courses.viweaddcourses');
         Route::post('/courses/add', [App\Http\Controllers\Admin\CoursesController::class, 'store']);
         Route::post('/courses/active', [App\Http\Controllers\Admin\CoursesController::class, 'active'])->name('courses.active');
         Route::get('/courses/{courses_id}/delete', [App\Http\Controllers\Admin\CoursesController::class, 'destroy'])->name('courses.destroy');

        //chabter
         Route::get('/chabter/{chabter_id}/delete', [App\Http\Controllers\Admin\CoursesController::class, 'destroychabtar'])->name('chabter.destroy');
         Route::get('/courseschabtar/{id?}', [App\Http\Controllers\Admin\CoursesController::class, 'courseschabtar'])->name('courses.courseschabtar');
         Route::get('/chabter/{chabters}/edit', [App\Http\Controllers\Admin\ChabterController::class, 'updatechabterviwe'])->name('chabter.edit');
         Route::put('/chabter/update/{id}', [App\Http\Controllers\Admin\ChabterController::class, 'update'])->name('chabter.update');
         Route::get('/courseschabtar/{chabtar_id}/delete', [App\Http\Controllers\Admin\CoursesController::class, 'destroychabtar'])->name('chabtar.destroy');
         Route::get('/courseschabtaradd{id}', [App\Http\Controllers\Admin\CoursesController::class, 'courseschabtaradd'])->name('courses.courseschabtaradd');
         Route::post('/courseschabtar/add', [App\Http\Controllers\Admin\ChabterController::class, 'store'])->name('courses.courseschabtaraddstore');

        //lesson
         Route::get('/lesson/{id?}', [App\Http\Controllers\Admin\LessonController::class, 'index'])->name('courses.lesson');
         Route::get('/lessonadd/{id?}', [App\Http\Controllers\Admin\LessonController::class, 'lessonadd'])->name('courses.lessonadd');
         Route::get('/lesson/viwe1/{id?}', [App\Http\Controllers\Admin\LessonController::class, 'lessonviwe'])->name('courses.lesson.viwe1');
         Route::post('/lesson/add/{id?}', [App\Http\Controllers\Admin\LessonController::class, 'store'])->name('courses.lessonadd1');
         Route::get('/lesson/{lesson}/edit', [App\Http\Controllers\Admin\LessonController::class, 'edit'])->name('lesson.edit');
         Route::put('/lesson/update/{id}', [App\Http\Controllers\Admin\LessonController::class, 'update'])->name('lesson.update');
         Route::get('/lesson/{lesson_id}/delete', [App\Http\Controllers\Admin\LessonController::class, 'destroy'])->name('lesson.destroy');

         
        });

       


        Route::post('/logout', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

        
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/courses', [App\Http\Controllers\coursesController::class, 'index'])->name('courses');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/Connectus', [App\Http\Controllers\ConnectusController::class, 'index'])->name('Connectus');
Route::post('/Connectus', [App\Http\Controllers\ConnectusController::class, 'store'])->name('Connectus');


// course

Route::get('/courses/{id}', [App\Http\Controllers\coursesController::class, 'indexcourse'])->name('front.FrontCourcse');
Route::get('/coursesditels/{id}/{branchid?}', [App\Http\Controllers\coursesController::class, 'detalescourse'])->name('front.DitalesCourse');


require __DIR__.'/auth.php';
