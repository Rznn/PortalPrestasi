<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserWorkController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\UserCompetitionController;
use App\Http\Controllers\UserScholarshipController;

Route::get('/', function () {
    return view('landing');
});

// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
// register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// admin dashboard
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

// admin competition index
Route::get('/admin/competition/index', [CompetitionController::class, 'index']);
// admin competition create
Route::get('/admin/competition/create', [CompetitionController::class, 'create'])->name('competition.create');
Route::post('/admin/competition/create', [CompetitionController::class, 'store'])->name('competition.store');
// admin competition see details
Route::get('/admin/competition/details/{id}', [CompetitionController::class, 'detail'])->name('competition.detail');
// admin competition edit
Route::get('/admin/competition/edit/{id}', [CompetitionController::class, 'edit'])->name('competition.edit');
Route::put('/admin/competition/edit/{id}', [CompetitionController::class, 'update'])->name('competition.update');
// admin competition delete
Route::get('/admin/competition/details/{id}/delete', [CompetitionController::class, 'delete'])->name('competition.delete');
// admin competition change status
Route::get('/admin/competition/{id}/to-registration', [CompetitionController::class, 'changeRegistration'])->name('competition.toregistration');
Route::get('/admin/competition/{id}/to-ongoing', [CompetitionController::class, 'changeOngoing'])->name('competition.toongoing');
Route::get('/admin/competition/{id}/to-finished', [CompetitionController::class, 'changeFinished'])->name('competition.tofinished');
// admin competition winner
Route::get('/admin/competition/{id}/select-winner', [CompetitionController::class, 'winner'])->name('competition.winner');
Route::post('/admin/competition/{id}/select-winner', [CompetitionController::class, 'selectwinner'])->name('competition.selectwinner');

// admin scholarship index
Route::get('/admin/scholarship/index', [ScholarshipController::class, 'index']);
// admin scholarship create
Route::get('/admin/scholarship/create', [ScholarshipController::class, 'create'])->name('scholarship.create');
Route::post('/admin/scholarship/create', [ScholarshipController::class, 'store'])->name('scholarship.store');
// admin scholarship see details
Route::get('/admin/scholarship/details/{id}', [ScholarshipController::class, 'detail'])->name('scholarship.detail');
// admin scholarship edit
Route::get('/admin/scholarship/edit/{id}', [ScholarshipController::class, 'edit'])->name('scholarship.edit');
Route::put('/admin/scholarship/edit/{id}', [ScholarshipController::class, 'update'])->name('scholarship.update');
// admin scholarship delete
Route::get('/admin/scholarship/details/{id}/delete', [ScholarshipController::class, 'delete'])->name('scholarship.delete');
// admin scholarship change status
Route::get('/admin/scholarship/{id}/to-registration', [ScholarshipController::class, 'changeRegistration'])->name('scholarship.toregistration');
Route::get('/admin/scholarship/{id}/to-ongoing', [ScholarshipController::class, 'changeOngoing'])->name('scholarship.toongoing');
Route::get('/admin/scholarship/{id}/to-finished', [ScholarshipController::class, 'changeFinished'])->name('scholarship.tofinished');
// admin scholarship awardee
Route::get('/admin/scholarship/{id}/select-awardee', [ScholarshipController::class, 'awardee'])->name('scholarship.awardee');
Route::post('/admin/scholarship/{id}/select-awardee', [ScholarshipController::class, 'selectawardee'])->name('scholarship.selectawardee');

// admin work index
Route::get('/admin/work/index', [WorkController::class, 'index']);
// admin work create
Route::get('/admin/work/create', [WorkController::class, 'create'])->name('work.create');
Route::post('/admin/work/create', [WorkController::class, 'store'])->name('work.store');
// admin work see details
Route::get('/admin/work/details/{id}', [WorkController::class, 'detail'])->name('work.detail');
// admin work edit
Route::get('/admin/work/edit/{id}', [WorkController::class, 'edit'])->name('work.edit');
Route::put('/admin/work/edit/{id}', [WorkController::class, 'update'])->name('work.update');
// admin work delete
Route::get('/admin/work/details/{id}/delete', [WorkController::class, 'delete'])->name('work.delete');


// user dashboard
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

// user competition index
Route::get('/competition', [UserCompetitionController::class, 'index'])->name('user.competition.index');
// user competition details
Route::get('/competition/{id}', [UserCompetitionController::class, 'details'])->name('user.competition.details');
// user competition registration
Route::get('/competition/{id}/registration', [UserCompetitionController::class, 'registration'])->name('user.competition.enroll');
Route::post('/competition/{id}/registration', [UserCompetitionController::class, 'store'])->name('user.competition.store');

// user scholarship index
Route::get('/scholarship', [UserScholarshipController::class, 'index'])->name('user.scholarship.index');
// user scholarship details
Route::get('/scholarship/{id}', [UserScholarshipController::class, 'details'])->name('user.scholarship.details');
// user scholarship registration
Route::get('/scholarship/{id}/registration', [UserScholarshipController::class, 'registration'])->name('user.scholarship.enroll');
Route::post('/scholarship/{id}/registration', [UserScholarshipController::class, 'store'])->name('user.scholarship.store');

// user work index
Route::get('/job-vacancies', [UserWorkController::class, 'index'])->name('user.work.index');

// user activity index
Route::get('/activity', [UserController::class, 'activity'])->name('user.activity.index');
