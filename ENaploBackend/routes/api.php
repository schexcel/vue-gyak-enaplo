<?php
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::apiResource('grades', GradeController::class)
    ->only(['index', 'store'])
    ->missing(function(Request $request){
        return Response::json([
            'data' => null,
            'success' => false,
            'message' => 'Grade not exists'
        ],404);
    });

Route::apiResource('students', StudentController::class)
    ->only(['index', 'show'])
    ->missing(function(Request $request){
        return Response::json([
            'data' => null,
            'success' => false,
            'message' => 'Student not exists'
        ],404);
    });
