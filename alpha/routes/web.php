<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/password', [ProfileController::class, 'passwordChange'])->name('password');
    Route::put('/password/update', [ProfileController::class, 'changePasswordSave'])->name('postChangePassword');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/dashbord/coures/serach1', [ProfileController::class, 'couresserch'])->name('dashbord.serchscoures1');
});
//Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
// Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        //Login Route

        Route::get('/login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/profile/{id}', [App\Http\Controllers\Admin\HomeController::class, 'profile'])->name('dashboard.profile');
        Route::put('/profile/update/{id}', [App\Http\Controllers\Admin\HomeController::class, 'update'])->name('profile.update');
        Route::get('/profile/password', [App\Http\Controllers\Admin\HomeController::class, 'passwordChange'])->name('password');
        Route::put('/password/update', [App\Http\Controllers\Admin\HomeController::class, 'changePasswordSave1'])->name('postChangePasswordadmin');
        Route::put('/password/admin/update/{id}', [App\Http\Controllers\Admin\HomeController::class, 'postChangePasswordadminrouel'])->name('postChangePasswordadminrouel');


        Route::put('admin/password/update/{id}', [App\Http\Controllers\Admin\HomeController::class, 'changePasswordSave2'])->name('postChangePassworduses');
        //admin rouel
        Route::get('/dashboard/admin/add', [App\Http\Controllers\Admin\HomeController::class, 'addAdmin'])->name('addAdmin');
        Route::get('/dashboard/admin/addstore', [App\Http\Controllers\Admin\HomeController::class, 'addAdminStore'])->name('addAdminStore');
        Route::post('/admin/dashbord/addadmin', [App\Http\Controllers\Admin\HomeController::class, 'addAdminPost'])->name('addAdminPost');
        Route::get('/admin/{admin_id}/delete', [App\Http\Controllers\Admin\HomeController::class, 'destroyadmin'])->name('useradmin.destroy');
        Route::get('/dashbord/admin/edit/{id}', [App\Http\Controllers\Admin\HomeController::class, 'editpasswordadmin'])->name('admineditpassword.edit');

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
        Route::get('/about/vistion/add', [App\Http\Controllers\Admin\AboutController::class, 'addvistion'])->name('about.add.vistion');
        Route::post('/about/vistion/add', [App\Http\Controllers\Admin\AboutController::class, 'storevistion'])->name('about.vistion.store');
        Route::get('/about/{about}/editvistion', [App\Http\Controllers\Admin\AboutController::class, 'editvistion'])->name('about.editvistion');
        Route::put('/about/updatevistion/{id}', [App\Http\Controllers\Admin\AboutController::class, 'updatevistion'])->name('about.updatevistion');
        Route::get('/about/aboutalpha/add', [App\Http\Controllers\Admin\AboutController::class, 'aboutalpha'])->name('aboutalpha.add');
        Route::get('/about/{aboutalpha}/aboutalpha', [App\Http\Controllers\Admin\AboutController::class, 'aboutalphaedit'])->name('about.aboutalpha');
        Route::put('/about/aboutalpha/{id}', [App\Http\Controllers\Admin\AboutController::class, 'aboutalphaupdate'])->name('about.updateaboutalpha');


        //admin branch 

        Route::get('/branch', [App\Http\Controllers\Admin\BranchController::class, 'index'])->name('branch');
        Route::get('/branch/{about_id}/delete', [App\Http\Controllers\Admin\BranchController::class, 'destroy'])->name('branch.destroy');
        Route::get('/branch/add', [App\Http\Controllers\Admin\BranchController::class, 'addbranch'])->name('branch.add');
        Route::post('/branch/add', [App\Http\Controllers\Admin\BranchController::class, 'store']);
        Route::get('/branch/{branch}/edit', [App\Http\Controllers\Admin\BranchController::class, 'edit'])->name('branch.edit');
        Route::put('/branch/update/{id}', [App\Http\Controllers\Admin\BranchController::class, 'update'])->name('branch.update');

        //commonquestions
        Route::get('/CommonQuestions', [App\Http\Controllers\Admin\CommonQuestionsController::class, 'index'])->name('CommonQuestions');
        Route::get('/CommonQuestions/{questions_id}/delete', [App\Http\Controllers\Admin\CommonQuestionsController::class, 'destroy'])->name('CommonQuestions.destroy');
        Route::get('/CommonQuestions/add', [App\Http\Controllers\Admin\CommonQuestionsController::class, 'addquestions'])->name('CommonQuestions.add');
        Route::post('/CommonQuestions/add', [App\Http\Controllers\Admin\CommonQuestionsController::class, 'store']);
        Route::get('/CommonQuestions/{question}/edit', [App\Http\Controllers\Admin\CommonQuestionsController::class, 'edit'])->name('CommonQuestions.edit');
        Route::put('/CommonQuestions/update/{id}', [App\Http\Controllers\Admin\CommonQuestionsController::class, 'update'])->name('CommonQuestions.update');

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
        //Favoriteicon
        Route::get('/Favoriteicon', [App\Http\Controllers\Admin\FavoriteiconController::class, 'index'])->name('Favoriteicon');
        Route::get('/Favoriteicon/{favoriteicon}/edit', [App\Http\Controllers\Admin\FavoriteiconController::class, 'edit'])->name('Favoriteicon.edit');
        Route::put('/favoriteicon/update/{id}', [App\Http\Controllers\Admin\FavoriteiconController::class, 'update'])->name('Favoriteicon.update');
        //sochial
        Route::get('/socials', [App\Http\Controllers\Admin\SocialController::class, 'index'])->name('socials');
        Route::get('/socials/{socials}/edit', [App\Http\Controllers\Admin\SocialController::class, 'edit'])->name('socials.edit');
        Route::put('/socials/update/{id}', [App\Http\Controllers\Admin\SocialController::class, 'update'])->name('socials.update');
        //ConnectWithUsController
        Route::get('/ConnectWithUs', [App\Http\Controllers\Admin\ConnectWithUsController::class, 'index'])->name('ConnectWithUs');
        Route::get('/ConnectWithUs/{connectWithUs}/edit', [App\Http\Controllers\Admin\ConnectWithUsController::class, 'edit'])->name('ConnectWithUs.edit');
        Route::put('/ConnectWithUs/update/{id}', [App\Http\Controllers\Admin\ConnectWithUsController::class, 'update'])->name('ConnectWithUs.update');
        //courses 
        Route::get('/courses', [App\Http\Controllers\Admin\CoursesController::class, 'index'])->name('courses');
        Route::get('/courses/{courses_id}/on', [App\Http\Controllers\Admin\CoursesController::class, 'oncoures'])->name('courses.on');
        Route::get('/courses/{courses_id}/off', [App\Http\Controllers\Admin\CoursesController::class, 'offcoures'])->name('courses.off');
        Route::get('/courses/{courses_id}/fav', [App\Http\Controllers\Admin\CoursesController::class, 'fav'])->name('courses.fav');
        Route::get('/courses/{courses_id}/notfav', [App\Http\Controllers\Admin\CoursesController::class, 'notfav'])->name('courses.notfav');

        Route::get('/courses/{courses}/edit', [App\Http\Controllers\Admin\CoursesController::class, 'updateviwe'])->name('courses.edit');
        Route::put('/courses/update/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'update'])->name('courses.update');
        Route::get('/courses/add', [App\Http\Controllers\Admin\CoursesController::class, 'viweaddcourses'])->name('courses.viweaddcourses');
        Route::post('/courses/add', [App\Http\Controllers\Admin\CoursesController::class, 'store']);
        Route::post('/courses/active', [App\Http\Controllers\Admin\CoursesController::class, 'active'])->name('courses.active');
        Route::get('/courses/{courses_id}/delete', [App\Http\Controllers\Admin\CoursesController::class, 'destroy'])->name('courses.destroy');

        //chabter
        Route::get('/chabter/{chabter_id}/delete', [App\Http\Controllers\Admin\CoursesController::class, 'destroychabtar'])->name('chabter.destroy');
        Route::get('/courseschabtar/{id?}', [App\Http\Controllers\Admin\CoursesController::class, 'courseschabtar'])->name('courses.courseschabtar');
        Route::get('/chabter/edit/{chabters}/{course}', [App\Http\Controllers\Admin\ChabterController::class, 'updatechabterviwe'])->name('chabter.edit');
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

        //codegenaret codesend
        Route::get('/codegenaret', [App\Http\Controllers\Admin\CodecardController::class, 'index'])->name('codegenaret');
        Route::get('/codegenaret/add', [App\Http\Controllers\Admin\CodecardController::class, 'create'])->name('codegenaret.add');
        Route::post('/codegenaret/save', [App\Http\Controllers\Admin\CodecardController::class, 'store'])->name('codegenaret.add.save');
        Route::get('/codegenaret/{codecard}/edit', [App\Http\Controllers\Admin\CodecardController::class, 'show'])->name('codegenaret.edit');
        Route::put('/codegenaret/update/{id}', [App\Http\Controllers\Admin\CodecardController::class, 'update'])->name('codegenaret.update');
        Route::get('/codegenaret/{codecard_id}/delete', [App\Http\Controllers\Admin\CodecardController::class, 'destroy'])->name('codegenaret.destroy');

        //questionscours QuestionscoursController questionscoursadd

        Route::get('/questionscours', [App\Http\Controllers\Admin\QuestionscoursController::class, 'index'])->name('questionscours');
        Route::get('/questionscours/{id?}', [App\Http\Controllers\Admin\QuestionscoursController::class, 'show'])->name('courses.questionscours');
        Route::get('/questionscoursadd{id}', [App\Http\Controllers\Admin\QuestionscoursController::class, 'questionscoursadd'])->name('courses.questionscoursadd');
        Route::post('/questionscoursaddstore/add', [App\Http\Controllers\Admin\QuestionscoursController::class, 'store'])->name('courses.questionscoursaddstore');
        Route::get('/questionscours/{questionscours}/edit', [App\Http\Controllers\Admin\QuestionscoursController::class, 'edit'])->name('questionscours.edit');
        Route::put('/questionscours/update/{id}', [App\Http\Controllers\Admin\QuestionscoursController::class, 'update'])->name('questionscours.update');
        Route::get('/questionscours/{questions_id}/delete', [App\Http\Controllers\Admin\QuestionscoursController::class, 'destroy'])->name('questionscours.destroy');

        // categories
        // Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);

        // questionsdestroy
        Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories.index');
        Route::post('/categoriess', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('categories.store');
        Route::put('/categoriesu/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categories.update');
        Route::delete('categories_mass_destroy', [\App\Http\Controllers\Admin\CategoryController::class, 'massDestroy'])->name('categories.mass_destroy');
        Route::get('/categoriesc', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categories.create');
        Route::get('/categoriesed/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('categories.edit');
        Route::delete('categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categories.destroy');





        Route::get('questions/{category_id?}', [App\Http\Controllers\Admin\QuestionController::class, 'index'])->name('questions.index');
        Route::post('questionss/{category_id?}', [App\Http\Controllers\Admin\QuestionController::class, 'store'])->name('questions.store');
        Route::put('questionssu/{question}/{category_id?}', [App\Http\Controllers\Admin\QuestionController::class, 'update'])->name('questions.update');
        Route::get('questionssc/{category_id?}', [App\Http\Controllers\Admin\QuestionController::class, 'create'])->name('questions.create');
        Route::get('questionssed/{question}/{category_id?}', [App\Http\Controllers\Admin\QuestionController::class, 'edit'])->name('questions.edit');
        Route::DELETE('questionssess/{question}', [App\Http\Controllers\Admin\QuestionController::class, 'destroy'])->name('questions.destroy');
        Route::get('questions_mass_destroy', [App\Http\Controllers\Admin\QuestionController::class, 'massDestroy'])->name('questions.mass_destroy');

        // options
        Route::get('options/{id?}', [App\Http\Controllers\Admin\OptionController::class, 'index'])->name('options.index');
        Route::post('optionss/{id?}', [App\Http\Controllers\Admin\OptionController::class, 'store'])->name('options.store');
        Route::put('optionsu/{option}/{questionsid?}', [App\Http\Controllers\Admin\OptionController::class, 'update'])->name('options.update');
        Route::get('optionsuc/{questionsid?}', [App\Http\Controllers\Admin\OptionController::class, 'create'])->name('options.create');
        Route::get('optionsue/{option}/{id?}', [App\Http\Controllers\Admin\OptionController::class, 'edit'])->name('options.edit');
        Route::get('optionsud/{option}', [App\Http\Controllers\Admin\OptionController::class, 'destroy'])->name('options.destroy');
        Route::delete('options_mass_destroy', [App\Http\Controllers\Admin\OptionController::class, 'massDestroy'])->name('options.mass_destroy');

        //policies 
        Route::get('policies/', [App\Http\Controllers\Admin\PoliciesController::class, 'index'])->name('policies');
        Route::get('/policies/add', [App\Http\Controllers\Admin\PoliciesController::class, 'create'])->name('policies.add');
        Route::post('/policies/add', [App\Http\Controllers\Admin\PoliciesController::class, 'store']);
        Route::get('/policies/{policies}/edit', [App\Http\Controllers\Admin\PoliciesController::class, 'edit'])->name('policies.edit');
        Route::put('/policies/update/{id}', [App\Http\Controllers\Admin\PoliciesController::class, 'update'])->name('policies.update');
        Route::get('/policies/{policies}/delete', [App\Http\Controllers\Admin\PoliciesController::class, 'destroy'])->name('policies.destroy');

        //dashbord tetchaer
        Route::get('/teacher/dashbord', [App\Http\Controllers\Admin\TeacherController::class, 'indexdashbord'])->name('teacher.dashbord');
        Route::get('/teacher/dashbord/add', [App\Http\Controllers\Admin\TeacherController::class, 'create'])->name('teacher.dashbord.add');
        Route::post('/teacher/dashbord/add', [App\Http\Controllers\Admin\TeacherController::class, 'storeteacherdahbord']);
        Route::get('/teacher/dashbord/{dashbord}/edit', [App\Http\Controllers\Admin\TeacherController::class, 'editdashbord'])->name('teacherdashbord.edit');
        Route::put('/teacher/dashbord/update/{id}', [App\Http\Controllers\Admin\TeacherController::class, 'updatedashbord'])->name('teacher.dashbord.update');
        Route::get('/teacher/dashbord/{teacher_id}/delete', [App\Http\Controllers\Admin\TeacherController::class, 'destroydashbord'])->name('teacherdashbord.destroy');

        //chart
        Route::get('/dashbord/sudant', [App\Http\Controllers\Admin\HomeController::class, 'studantdetales'])->name('dashbord.studant');
        Route::post('/dashbord/sudant/serach', [App\Http\Controllers\Admin\HomeController::class, 'studantserch'])->name('dashbord.serchstudant');
        Route::get('/dashbord/coures', [App\Http\Controllers\Admin\HomeController::class, 'couresstauet'])->name('dashbord.coures');
        Route::get('/dashbord/count/studant', [App\Http\Controllers\Admin\HomeController::class, 'countstudant'])->name('dashbord.countstudant');
        Route::post('/dashbord/coures/serach', [App\Http\Controllers\Admin\HomeController::class, 'codesarch'])->name('dashbord.codesarch');
        Route::post('/dashbord/coures/serach1', [App\Http\Controllers\Admin\HomeController::class, 'couresserch'])->name('dashbord.serchscoures');
        Route::get('/dashbord/user/edit/{id}', [App\Http\Controllers\Admin\HomeController::class, 'editpassword'])->name('usereditpasseord.edit');
        Route::post('/dashbord/order/serach', [App\Http\Controllers\Admin\HomeController::class, 'orderserch'])->name('dashbord.orderserch');


        //order
        Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order');
        Route::get('/order/{order_id}/delete', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('order.destroy');
        Route::get('/order/{order_id}/todelevary', [App\Http\Controllers\Admin\OrderController::class, 'todelevary'])->name('order.todelevary');
        Route::get('/order/{order_id}/tosucsses', [App\Http\Controllers\Admin\OrderController::class, 'tosucsses'])->name('order.tosucsses');
        Route::get('/order/{order_id}/toorder', [App\Http\Controllers\Admin\OrderController::class, 'toorder'])->name('order.toorder');

        //aboutmore
        Route::get('/aboutmore', [App\Http\Controllers\Admin\HomeController::class, 'aboutmore'])->name('aboutmore');
        Route::get('/aboutmore/add', [App\Http\Controllers\Admin\HomeController::class, 'aboutmoreadd'])->name('aboutmore.add');
        Route::post('/aboutmore/add', [App\Http\Controllers\Admin\HomeController::class, 'aboutmorestore'])->name('aboutmore.store');
        Route::get('/aboutmore/edit/{id}', [App\Http\Controllers\Admin\HomeController::class, 'aboutmoreedit'])->name('aboutmore.show');
        Route::get('/aboutmore/{aboutmore_id}/delete', [App\Http\Controllers\Admin\HomeController::class, 'aboutmoredestroy'])->name('aboutmore.destroy');
        Route::put('/aboutmore/update/{id}', [App\Http\Controllers\Admin\HomeController::class, 'aboutmoreupdate'])->name('aboutmore.update');



        // results

        // //quiz
        // Route::get('/quiz', [App\Http\Controllers\Admin\QuizController::class, 'index'])->name('quiz');
        // Route::get('/quiz/add', [App\Http\Controllers\Admin\QuizController::class, 'create'])->name('quiz.add');
        // Route::post('/quizadd/add', [App\Http\Controllers\Admin\QuizController::class, 'store'])->name('quiz.store');
        // Route::get('/quizadd/{quizadd}/edit', [App\Http\Controllers\Admin\QuizController::class, 'edit'])->name('quizadd.edit');
        // Route::put('/quizadd/update/{id}', [App\Http\Controllers\Admin\QuizController::class, 'update'])->name('quizadd.update');
        // Route::get('/quiz/{quiz_id}/delete', [App\Http\Controllers\Admin\QuizController::class, 'destroy'])->name('quiz.destroy');

        // //qustionquizzes
        // Route::get('/quizzes/qustion/{id}', [App\Http\Controllers\Admin\qustionquizzesController::class, 'index'])->name('quiz.qustionquizzes');
        // Route::get('/qustion/add', [App\Http\Controllers\Admin\qustionquizzesController::class, 'create'])->name('qustionquizzes.add');
        // Route::post('/qustion/add', [App\Http\Controllers\Admin\qustionquizzesController::class, 'store'])->name('qustionquizzes.store');
        // Route::get('/qustion/{qustion}/edit', [App\Http\Controllers\Admin\qustionquizzesController::class, 'edit'])->name('qustion.edit');
        // Route::put('/qustion/update/{id}', [App\Http\Controllers\Admin\qustionquizzesController::class, 'update'])->name('qustion.update');
        // Route::get('/qustion/{qustion_id}/delete', [App\Http\Controllers\Admin\qustionquizzesController::class, 'destroy'])->name('qustion.destroy');

        // // answers
        // Route::get('/answers/{id}', [App\Http\Controllers\Admin\AnswerquizController::class, 'index'])->name('quiz.answers');
        // Route::get('/answersadd/add', [App\Http\Controllers\Admin\AnswerquizController::class, 'create'])->name('answers.add');
        // Route::post('/answersadd/add', [App\Http\Controllers\Admin\AnswerquizController::class, 'store'])->name('answersadd.store');
        // Route::get('/answers/{answerquiz}/edit', [App\Http\Controllers\Admin\AnswerquizController::class, 'edit'])->name('answers.edit');
        // Route::put('/answers/update/{id}', [App\Http\Controllers\Admin\AnswerquizController::class, 'update'])->name('answers.update');
        // Route::get('/answers/{answers_id}/delete', [App\Http\Controllers\Admin\AnswerquizController::class, 'destroy'])->name('answers.destroy');
        // categories
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
Route::get('/coursessecand/{id}', [App\Http\Controllers\coursesController::class, 'indexcourse1'])->name('front.FrontCourcse1');
Route::get('/coursesditels/{id}', [App\Http\Controllers\coursesController::class, 'detalescourse'])->name('front.DitalesCourse');
Route::get('/courseshow/{id}/{vidoe}', [App\Http\Controllers\coursesController::class, 'showcourse'])->name('front.courseshow');
Route::get('/endles/{id}/{vidoe}/{idnew}', [App\Http\Controllers\coursesController::class, 'endles'])->name('front.endles');
Route::put('/codesend/{user}', [App\Http\Controllers\coursesController::class, 'codesend'])->name('codesend');
Route::get('/download/{id}', [App\Http\Controllers\coursesController::class, 'download'])->name('front.download');


//order
Route::post('/order', [App\Http\Controllers\Admin\OrderController::class, 'store'])->name('order.store');
Route::post('/markofcourse/{id}', [App\Http\Controllers\MarkcourseController::class, 'store'])->name('markofcourse.store');
Route::get('/quiz/{id}/{course}', [App\Http\Controllers\CoursesController::class, 'showquiz'])->name('quiz');
//Route::post('test', [\App\Http\Controllers\Admin\QuizController::class, 'storequiz'])->name('client.test.store');
Route::post('/test/{id}', [App\Http\Controllers\CoursesController::class, 'storequiz'])->name('client.test.store');
Route::get('results/{result_id}', [\App\Http\Controllers\ResultController::class, 'show'])->name('client.results.show');


require __DIR__ . '/auth.php';
