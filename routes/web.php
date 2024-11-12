<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OcController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\SiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

//oc routes
//gets the all the dashboards
Route::get('/dashboards', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pulls the list of users view
Route::get('/oc.users', [App\Http\Controllers\OcController::class, 'index'])->name('home');
//pulls the dashboard view
Route::get('/oc.dashboard', [App\Http\Controllers\OcController::class, 'home'])->name('home');

//pulls the list of users view
Route::get('/oc.register_user', [App\Http\Controllers\OcController::class, 'register'])->name('home');
//pulls the list of users view
Route::post('/oc.register_user', [App\Http\Controllers\OcController::class, 'adduser'])->name('home');
//delete user from oc
Route::get('delete-user/{id}', [App\Http\Controllers\OcController::class, 'destroy'])->name('destroy');

//display edit blade
Route::get('/edit-user/{id}', [App\Http\Controllers\OcController::class, 'edit'])->name('edit');
//store data
Route::put('/update-user/{id}', [App\Http\Controllers\OcController::class, 'update'])->name('update');

//projects
Route::get('/oc.projects', [App\Http\Controllers\OcController::class, 'oc_projects'])->name('home');
//gets the developers task
Route::get('/oc.task', [App\Http\Controllers\OcController::class, 'task'])->name('dtask');
//gets the student projects
Route::get('/oc.stud-project', [App\Http\Controllers\OcController::class, 'studpro'])->name('stud-project');
//gets the student classes
Route::get('/oc.class', [App\Http\Controllers\OcController::class, 'list'])->name('class-list');


//developers routes

//gets the developers dashboard
Route::get('/developer.dashboard', [App\Http\Controllers\DeveloperController::class, 'dash'])->name('dashboard');
//shows list of projects
Route::get('/developer.my_projects', [App\Http\Controllers\DeveloperController::class, 'index'])->name('my_projects');
//display add project blade
Route::get('/developer.add_project', [App\Http\Controllers\DeveloperController::class, 'create'])->name('add_project');
//post work in system 
Route::post('/developer.add_project', [App\Http\Controllers\DeveloperController::class, 'store'])->name('add-work');
//display add work blade
Route::get('/edit-system/{id}', [App\Http\Controllers\DeveloperController::class, 'edit'])->name('edit-work');
//update the work in update blade
Route::put('/update-system/{id}', [App\Http\Controllers\DeveloperController::class, 'update'])->name('update');
//delete system
Route::get('/delete-system/{id}', [App\Http\Controllers\DeveloperController::class, 'destroy'])->name('delete');


Route::get('/developer.count', [App\Http\Controllers\TaskController::class, 'count'])->name('home2');
//display task blade
Route::get('/developer.task', [App\Http\Controllers\TaskController::class, 'task'])->name('task_blade');
//store using task blade
Route::post('/developer.task', [App\Http\Controllers\TaskController::class, 'add'])->name('task_blade');
//display alltask blade
Route::get('/developer.alltask', [App\Http\Controllers\TaskController::class, 'index'])->name('task_blade');

//si routes
Route::get('/si.school', [App\Http\Controllers\SiController::class, 'home'])->name('school');
Route::get('/si.users', [App\Http\Controllers\SiController::class, 'index'])->name('users');
Route::get('/si.developersprojects', [App\Http\Controllers\SiController::class, 'developer'])->name('users');

//student
Route::get('/student.project',[App\Http\Controllers\StudentController::class, 'index'])->name('addstudent');
Route::get('/student.addstudent', [App\Http\Controllers\StudentController::class, 'create'])->name('addstudent');
Route::post('/student.addstudent', [App\Http\Controllers\StudentController::class, 'store'])->name('addstudent');
Route::get('/del-system/{id}', [App\Http\Controllers\StudentController::class, 'del'])->name('addstudent');

//class
Route::get('/student.addclass', [App\Http\Controllers\ClassController::class, 'index'])->name('class');
Route::get('/student.classlist', [App\Http\Controllers\ClassController::class, 'list'])->name('class-list');
Route::post('/student.addclass',[App\Http\Controllers\ClassController::class,'store'])->name('addclass');
Route::get('//edit-studclass/{id}', [App\Http\Controllers\ClassController::class, 'edit'])->name('edit-class');
Route::get('/del-studclass/{id}', [App\Http\Controllers\ClassController::class, 'destroy'])->name('del-studclass');
Route::put('/update-studclass/{id}', [App\Http\Controllers\ClassController::class, 'update'])->name('update-studclass');


// reports
Route::get('/report/pdf', [App\Http\Controllers\StudentController::class, 'generatePdfReport'])->name('report.pdf');
//Route::get('/report/word', [App\Http\Controllers\ClassController::class, 'generateWordReport'])->name('report.word');
Route::get('/report/dev_pdf', [App\Http\Controllers\DeveloperController::class, 'generatePdfReport'])->name('report.dev_pdf');
