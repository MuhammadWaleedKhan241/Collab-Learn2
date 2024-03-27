<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


//Admins
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as AdminAuth;
use App\Http\Controllers\Admin\Auth\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\Auth\ChangePasswordController as AdminChangePassword;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CasestudiesController;
use App\Http\Controllers\Admin\ManagesessionController;
use App\Http\Controllers\Admin\ManagestudentController;
use App\Http\Controllers\Admin\ManagetutorController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\AddResourcesController;
use App\Http\Controllers\Admin\AddSessionController;
use App\Http\Controllers\Admin\FeedbackDetailController;



//Teachers
use App\Http\Controllers\Teacher\Auth\AuthenticatedSessionController as TeacherAuth;
use App\Http\Controllers\Teacher\Auth\NewPasswordController as TeacherAuthNewPass;
use App\Http\Controllers\Teacher\Auth\PasswordResetLinkController as TeacherAuthPassReset;
use App\Http\Controllers\Teacher\Auth\RegisteredUserController as TeacherAuthReg;
use App\Http\Controllers\Teacher\Auth\ConfirmablePasswordController as TeacherAuthConfirm;
use App\Http\Controllers\Teacher\Auth\ChangePasswordController as TeacherChangePassword;
use App\Http\Controllers\Teacher\Auth\ProfileController as TachereProfileController;
use App\Http\Controllers\Teacher\TeacherAddSesionController;
use App\Http\Controllers\Teacher\TeacherAllCaseStudyController;
use App\Http\Controllers\Teacher\TeacherCommentController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\Teacher\TeacherResourceController;
use App\Http\Controllers\Teacher\TeacherSessionController;
use App\Http\Controllers\Teacher\AuthTeacherController;


//Students
use App\Http\Controllers\Student\Auth\AuthenticatedSessionController as StudentAuth;
use App\Http\Controllers\Student\Auth\NewPasswordController as StudentAuthNewPass;
use App\Http\Controllers\Student\Auth\PasswordResetLinkController as StudentAuthPassReset;
use App\Http\Controllers\Student\Auth\RegisteredUserController as StudentAuthReg;
use App\Http\Controllers\Student\Auth\ConfirmablePasswordController as StuentdAuthConfirm;
use App\Http\Controllers\Student\Auth\ProfileController as StudentProfileController;
use App\Http\Controllers\Student\Auth\ChangePasswordController as StudentChangePassword;
use App\Http\Controllers\Student\StudentAllcasestudyController;
use App\Http\Controllers\Student\StudentFeedbackController;
use App\Http\Controllers\Student\StudentMyCaseStudyCommentController;
use App\Http\Controllers\Student\StudentMyCaseStudyController;
use App\Http\Controllers\Student\AuthStudentController;


Route::get('/', [HomeController::class, 'show'])->name('home');

//ADMIN

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminAuth::class, 'create'])->name('admin.login');
    Route::post('login', [AdminAuth::class, 'store'])->name('admin.submit-login');
    Route::get('profile', [AdminProfileController::class, 'show'])->name('admin.profile.show');
    Route::get('/change-password', [AdminChangePassword::class, 'show'])->name('admin.password.change');
    Route::post('/change-password', [AdminChangePassword::class, 'update'])->name('password.update');
    Route::POST('logout', [AdminAuth::class, 'destroy'])->name('admin.logout');


    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'show'])->name('admin.dashboard');
        Route::get('casestudy', [CasestudiesController::class, 'show'])->name('admin.casestudy');

        // Route::get('sessions', [ManagesessionController::class, 'show'])->name('admin.managesession');
        Route::get('sessions', [ManagesessionController::class, 'show'])->name('admin.managesession');
        Route::get('add-session', [AddSessionController::class, 'show'])->name('admin.add-session');
        Route::post('store', [AddSessionController::class, 'store'])->name('admin.session-store');

        Route::get('add-resource/{id}', [ResourceController::class, 'show'])->name('admin.resource');
        // Route::get('/add-resources', [AddResourcesController::class, ''])->name('add_resources.create');
        Route::post('/add-resources', [AddResourcesController::class, 'store'])->name('add.resources.store');
        // Route for editing a resource
        Route::get('/admin/resource/edit/{id}', [ResourceController::class, 'edit'])->name('admin.edit.resource');
        // Route for deleting a resource
        Route::get('/admin/resource/delete/{id}', [ResourceController::class, 'delete'])->name('admin.delete.resource');
        Route::put('/admin/resource/{id}', [ResourceController::class, 'update'])->name('admin.update.resource');

        Route::get('managestudent', [ManagestudentController::class, 'show'])->name('admin.managestudent');
        //Route::post('/submit-form', [ManagestudentController::class, 'store'])->name('student.submit.form');
        Route::get('managestudents', [ManagestudentController::class, 'students'])->name('admin.managestudent');
        Route::post('/managestudents', [ManagestudentController::class, 'store'])->name('admin.student_submit');
        Route::get('managestudent/edit/{id}', [ManagestudentController::class, 'edit'])->name('admin.edit.student');
        Route::post('managestudent/update/{id}', [ManagestudentController::class, 'update'])->name('admin.update.student');
        Route::get('managestudent/delete/{id}', [ManagestudentController::class, 'delete'])->name('admin.delete.student');

        // Route::get('managetutor', [ManagetutorController::class, 'tutor'])->name('admin.managetutor');
        Route::get('managetutor', [ManagetutorController::class, 'show'])->name('admin.managetutor');
        Route::post('/managetutor', [ManagetutorController::class, 'store'])->name('admin.tutor.submit');
        Route::get('managetutor/edit/{id}', [ManagetutorController::class, 'edit'])->name('admin.edit.tutor');
        Route::post('managetutor/update/{id}', [ManagetutorController::class, 'update'])->name('admin.update.tutor');
        Route::get('managetutor/delete/{id}', [ManagetutorController::class, 'delete'])->name('admin.delete.tutor');

        Route::get('feedback', [FeedbackController::class, 'show'])->name('admin.feedback');
        Route::get('feedback-details/{id}', [FeedbackDetailController::class, 'show'])->name('feedback-detail');
        Route::get('feedback-details/{id}', [FeedbackDetailController::class, 'show'])->name('admin.feedback-detail');
        Route::get('comments', [CommentController::class, 'show'])->name('admin.comment');
    });
});

//TEACHER

Route::prefix('teacher')->group(function () {
    Route::get('register', [TeacherAuthReg::class, 'create'])->name('teacher.register');
    Route::post('register', [TeacherAuthReg::class, 'store'])->name('teacher.submit-register');
    Route::get('/', [TeacherAuth::class, 'create'])->name('teacher.login');
    Route::post('login', [TeacherAuth::class, 'store'])->name('teacher.submit-login');
    Route::get('profile', [TachereProfileController::class, 'show'])->name('teacher.profile.show');
    Route::get('change-password', [TeacherChangePassword::class, 'show'])->name('teacher.password.change');
    Route::post('change-password', [TeacherChangePassword::class, 'update'])->name('password.update');
    Route::post('logout', [TeacherAuth::class, 'destroy'])->name('teacher.logout');

    // Route::get('forgot-password', [TeacherAuthPassReset::class, 'create'])->name('password.request');
    // Route::post('forgot-password', [TeacherAuthPassReset::class, 'store'])->name('password.email');
    // Route::get('reset-password/{token}', [TeacherAuthNewPass::class, 'create'])->name('password.reset');
    // Route::post('reset-password', [TeacherAuthNewPass::class, 'store'])->name('password.store');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/dashboard', [TeacherDashboardController::class, 'show'])->name('teacher.dashboard');
        Route::get('/casestudies', [TeacherAllCaseStudyController::class, 'show'])->name('teacher.casestudy');
        Route::get('/sessions', [TeacherSessionController::class, 'show'])->name('teacher.session');
        Route::get('/createsession', [TeacherAddSesionController::class, 'show'])->name('teacher.addsession');
        Route::post('/submit', [TeacherAddSesionController::class, 'store'])->name('teacher.session-store');

        Route::get('/viewResources', [TeacherResourceController::class, 'show'])->name('teacher.viewResources');

        Route::post('/add-resources', [TeacherResourceController::class, 'store'])->name('add_resources');

        Route::get('/teacher/resource/{id}/edit', [TeacherResourceController::class, 'edit'])->name('teacher.edit.resource');

        Route::delete('/teacher/resource/{id}', [TeacherResourceController::class, 'destroy'])->name('teacher.delete.resource');

        Route::put('/teacher/resource/{id}', [TeacherResourceController::class, 'update'])->name('teacher.update.resource');


        Route::get('/readComments', [TeacherCommentController::class, 'show'])->name('teacher.comments');
        // Route::post('/form-submit', [TeacherResourceController::class, 'store'])->name('form.submit');


        //Route::get('/readComments/{session}/{studentId}', [TeacherCommentController::class, 'show'])->name('teacher.comments');

    });
});

//STUDENT
Route::prefix('student')->group(function () {

    Route::get('register', [StudentAuthReg::class, 'create'])->name('student.register');
    Route::post('register', [StudentAuthReg::class, 'store'])->name('student.submit-register');
    Route::get('/', [StudentAuth::class, 'create'])->name('student.login');
    Route::post('login', [StudentAuth::class, 'store'])->name('student.submit-login');
    Route::get('profile', [StudentProfileController::class, 'show'])->name('student.profile');
    Route::get('change-password', [StudentChangePassword::class, 'show'])->name('student.password.change');
    Route::post('change-password', [StudentChangePassword::class, 'update'])->name('password.update');
    Route::post('logout', [StudentAuth::class, 'destroy'])->name('student.logout');

    // Route::get('forgot-password', [StudentAuthPassReset::class, 'create'])->name('password.request');
    // Route::post('forgot-password', [StudentAuthPassReset::class, 'store'])->name('password.email');
    // Route::get('reset-password/{token}', [StudentAuthNewPass::class, 'create'])->name('password.reset');
    // Route::post('reset-password', [StudentAuthNewPass::class, 'store'])->name('password.store');

    Route::middleware('auth')->group(function () {
        Route::get('/casestudies', [StudentMyCaseStudyController::class, 'show'])->name('student.casestudy');
        Route::post('/submit', [StudentMyCaseStudyController::class, 'store'])->name('student.submit.casestudy');
        Route::get('/all-casestudies', [StudentAllcasestudyController::class, 'show'])->name('student.allcasestudies');
        Route::get('/feedback', [StudentFeedbackController::class, 'show'])->name('student.feedback');
        Route::get('/comment', [StudentMyCaseStudyCommentController::class, 'show'])->name('student.casestudy.comment');
        Route::post('/comment', [StudentMyCaseStudyCommentController::class, 'store'])->name('student.casestudy.comment-submit');
        Route::post('/store', [StudentFeedbackController::class, 'store'])->name('feedback.store');

        // Route::get('/submitted-case-studies', [StudentMyCaseStudyController::class, 'showSubmittedCaseStudies'])->name('submitted.case.studies');

        // Route::get('profile',[StudentProfileController::class, 'show'])->name('auth.profile');
        // Route::get('/profile', [StudentProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [StudentProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [StudentProfileController::class, 'destroy'])->name('profile.destroy');

    });
});

// require __DIR__ . '/auth.php';
