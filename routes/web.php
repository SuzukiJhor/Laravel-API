<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminController,
    CourseController,
    UserController,
    DashboardController,
    ModuleController,
    LessonController,
    SupportController
};

Route::group(['middleware' => 'web'], function () {
    
    Route::prefix('admin')->group(function () {
        /**
         * Supports
         */
        Route::get('/supports', [SupportController::class, 'index']);

        /*
        Lessons
        */
        Route::resource('/modules/{moduleId}/lessons',LessonController::class);
        
        /*
        Modules
        */
        Route::resource(
            name: '/courses/{courseId}/modules',
            controller: ModuleController::class
        );

        /*
        Routes Courses
        */
        Route::resource('/courses',CourseController::class);

        /*
        Routes Users
        */
        Route::put('/admins/{id}/update-image', [AdminController::class, 'uploadFile'])->name('admins.update.image');
        Route::get('/admins/{id}/image', [AdminController::class, 'changeImage'])->name('admins.change.image');
        Route::resource('/admins', AdminController::class);

        /*
        Routes Users
        */
        Route::put('/users/{id}/update-image', [userController::class, 'uploadFile'])->name('users.update.image');
        Route::get('/users/{id}/image', [userController::class, 'changeImage'])->name('users.change.image');
        Route::delete('/users/{id}', [UserController::class , 'destroy'])->name('users.destroy');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('users', [UserController::class,'store'])->name('users.store');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');

        Route::get('/', [DashboardController::class, 'index'])-> name('admin.home');
    });
    
    Route::get('/', function() {
        return 'Oi eu Sou Goku web';
    });
});
