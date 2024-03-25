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
use App\Http\Controllers\Student\StudentMycasestudyController;
use App\Http\Controllers\Student\AuthStudentController;



// Route::get ('/admin-dashboard',[DashboardController:: class, 'show']);
// Route::get ('/admin-login',[AuthAdminController:: class, 'show']);
// Route::get ('/admin-login',[AuthAdminController:: class, 'show']);
// Route::get ('/casestudy',[CasestudiesController:: class, 'show']);
// Route::get ('/managestudent',[ManagestudentController:: class, 'show']);
// Route::get ('/managesession',[ManagesessionController:: class, 'show']);
// Route::get ('/managetutor',[ManagetutorController:: class, 'show']);
// Route::get ('/feedback',[FeedbackController:: class, 'show']);
// Route::get ('/feedback-details/{id}',[FeedbackDetailController:: class, 'show']);
// Route::get('/feedback',[FeedbackController:: class, 'show']); 
// Route::get ('/comment',[CommentController:: class, 'show']);
// Route::get ('/resource',[ResourceController:: class, 'show']);
// Route::get ('/add-session',[AddSessionController:: class, 'show']);
// Route::get('feedback',[StudentFeedbackController::class,'show']);

// Route::get ('/teacher-addsession',[TeacherAddSesionController:: class, 'show']);
// Route::get ('/teacher-casestudies',[TeacherAllCaseStudyController:: class, 'show']);
// Route::get ('/teacher-comment',[TeacherCommentController:: class, 'show']);
// Route::get ('/teacher-dashboard',[TeacherDashboardController:: class, 'show']);
// Route::get ('/teacher-resource',[TeacherResourceController:: class, 'show']);
// Route::get ('/teacher-session',[TeacherSessionController:: class, 'show']);
// Route::get ('/teacher-admin' ,[AuthTeacherController:: class, 'show']);

// Route::get('/student-admin', [AuthStudentController::class, 'show']);
// Route::get('/s-case-studies', [StudentMycasestudyController::class, 'show']);
// Route::get('/s-allcasestudy', [StudentAllcasestudyController::class, 'show']);
// Route::get('/s-feedback', [StudentFeedbackController::class, 'show']);
// Route::get('/s-comment', [StudentMyCaseStudyCommentController::class, 'show']);
// Route::post('store_data', [StudentFeedbackController::class, 'store_data']);

Route::get('/', [HomeController::class, 'show'])->name('home');

//ADMIN

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminAuth::class, 'create'])->name('admin.login');
            
    Route::post('login', [AdminAuth::class, 'store'])->name('admin.submit-login');
            
    Route::get('profile', [AdminProfileController::class, 'show'])->name('admin.profile.show');

    Route::get('/change-password', [AdminChangePassword::class, 'show'])->name('admin.password.change');
            
    Route::post('/change-password', [AdminChangePassword::class, 'update'])->name('password.update');
    
    // Route::delete('logout', [AdminAuth::class, 'logout'])->name('admin.logout');   
    
    Route::POST('logout', [AdminAuth::class, 'destroy'])->name('admin.logout');     


Route::middleware('auth:admin')->group(function () {    
    Route::get('dashboard', [DashboardController::class, 'show'])->name('admin.dashboard');
                
    Route::get('casestudy', [CasestudiesController::class, 'show'])->name('admin.casestudy');
                
    Route::get('sessions', [ManagesessionController::class, 'show'])->name('admin.managesession');
                
    Route::get('managestudent', [ManagestudentController::class, 'show'])->name('admin.managestudent');
                
    Route::get('managetutor', [ManagetutorController::class, 'show'])->name('admin.managetutor');
                
    Route::get('feedback', [FeedbackController::class, 'show'])->name('admin.feedback');
    
    Route::get('feedback-details/{id}', [FeedbackDetailController::class, 'show'])->name('feedback-detail');

    // Route::get('feedback-details/{id}', [FeedbackDetailController::class, 'show'])->name('feedback-detail');
                
    Route::get('comments', [CommentController::class, 'show'])->name('admin.comment');
                
    Route::get('resource', [ResourceController::class, 'show'])->name('admin.resource');
                
    Route::get('add-session', [AddSessionController::class, 'show'])->name('admin.session.add-session');
                  
    });
});

//TEACHER

Route::prefix('teacher')->group(function () {
    Route::get('register', [TeacherAuthReg::class, 'create'])->name('teacher.register');
            
    Route::post('register', [TeacherAuthReg::class, 'store'])->name('teacher.submit-register');
    
    Route::get('/', [TeacherAuth::class, 'create'])->name('teacher.login');

    Route::post('login', [TeacherAuth::class, 'store'])->name('teacher.submit-login');
    
    Route::get('profile',[TachereProfileController::class, 'show'])->name('teacher.profile.show');

    Route::get('change-password', [TeacherChangePassword::class, 'show'])->name('teacher.password.change');
            
    Route::post('change-password', [TeacherChangePassword::class, 'update'])->name('password.update');
    
    // Route::get('forgot-password', [TeacherAuthPassReset::class, 'create'])->name('password.request');
            
    // Route::post('forgot-password', [TeacherAuthPassReset::class, 'store'])->name('password.email');
            
    // Route::get('reset-password/{token}', [TeacherAuthNewPass::class, 'create'])->name('password.reset');
            
    // Route::post('reset-password', [TeacherAuthNewPass::class, 'store'])->name('password.store');
    
    Route::post('logout', [TeacherAuth::class, 'destroy'])->name('teacher.logout');
             
            
Route::middleware('auth:teacher')->group(function () {
    Route::get('/dashboard', [TeacherDashboardController::class, 'show'])->name('teacher.dashboard');
            
    Route::get ('/casestudies',[TeacherAllCaseStudyController:: class, 'show'])->name('teacher.casestudy');
            
    Route::get ('/sessions',[TeacherSessionController:: class, 'show'])->name('teacher.session');
            
    Route::get('/readComments', [TeacherCommentController::class, 'show'])->name('teacher.comments');
            
    Route::post('/form-submit', [TeacherResourceController::class, 'store'])->name('form.submit');
            
    Route::get('/viewResources', [TeacherResourceController::class, 'show'])->name('teacher.viewResources');
       
    Route::get('/createSession', [TeacherAddSesionController::class, 'show'])->name('teacher.addsession');

    // Route::get('/createSession', [TeacherAddSessionController::class, 'show'])->name('teacher.addsession');

    // Route::get('/createSession/{classId}', [TeacherAddSessionController::class, 'show'])->name('createSession');
    
  //Route::get('/viewCaseStudies/{subject}', [TeacherAllCaseStudyController::class, 'show'])->name('viewCaseStudies');
  
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
    
    // Route::get('forgot-password', [StudentAuthPassReset::class, 'create'])->name('password.request');
    
    // Route::post('forgot-password', [StudentAuthPassReset::class, 'store'])->name('password.email');
            
    // Route::get('reset-password/{token}', [StudentAuthNewPass::class, 'create'])->name('password.reset');
            
    // Route::post('reset-password', [StudentAuthNewPass::class, 'store'])->name('password.store');
            
    Route::post('logout', [StudentAuth::class, 'destroy'])->name('student.logout');

    
    Route::middleware('auth')->group(function () {
        
    Route::get('/casestudies', [StudentMycasestudyController::class,'show'])->name('student.casestudy');

    Route::get('/submit-case-study', [StudentMycasestudyController::class, 'create'])->name('student.casestudy.create');

    Route::post('/submit-case-study', [StudentMycasestudyController::class, 'store'])->name('student.casestudy.store');
    
    Route::get('/all-casestudies', [StudentAllcasestudyController::class,'show'])->name('student.allcasestudies');
            
    Route::get('/feedback', [StudentFeedbackController::class, 'show'])->name('student.feedback');
            
    Route::get('/comment', [StudentMyCaseStudyCommentController::class, 'show'])->name('casestudiescomment');
            
    Route::post('/store_data', [StudentFeedbackController::class, 'store_data'])->name('feedback.store');
            
    // Route::get('profile',[StudentProfileController::class, 'show'])->name('auth.profile');
            
    // Route::get('/profile', [StudentProfileController::class, 'edit'])->name('profile.edit');
            
    // Route::patch('/profile', [StudentProfileController::class, 'update'])->name('profile.update');
            
    // Route::delete('/profile', [StudentProfileController::class, 'destroy'])->name('profile.destroy'); 
    });
});

// Route::middleware('student')->group(function () {
//     Route::middleware('verified')->group(function () {
//     });
// });


// Route::middleware('auth')->group(function () {
//     Route::middleware('verified')->group(function () {
//         Route::get('/dashboard', function () {
//             return view('dashboard');
//         })->name('dashboard');;
//     });

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';