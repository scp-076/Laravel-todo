<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers;

    Route::get('/', [Controllers\TasksController::class, 'index'])->name('tasks.index');

    Route::get('/create', [Controllers\TasksController::class, 'create'])->name('tasks.create');

    Route::post('/store', [Controllers\TasksController::class, 'store'])->name('tasks.store');

    Route::get('/{id}/edit', [Controllers\TasksController::class, 'edit'])->name('tasks.edit');

    Route::put('/{id}/update', [Controllers\TasksController::class, 'update'])->name('tasks.update');

    Route::get('/{id}/show', [Controllers\TasksController::class, 'show'])->name('tasks.show');

    Route::delete('/{id}/delete', [Controllers\TasksController::class, 'delete'])->name('tasks.delete');
