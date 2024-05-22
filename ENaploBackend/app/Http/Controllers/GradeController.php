<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeResource;
use App\Models\Grade;
use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
use Illuminate\Support\Facades\Response;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Response::json(
            [
                "data" => [
                    ["grade"=>1],
                    ["grade"=>2],
                    ["grade"=>3],
                    ["grade"=>4],
                    ["grade"=>5],
                ],
                "success" => true,
                "message" => ""
            ], 200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGradeRequest $request)
    {
        $data = $request->validated();

        $grade = Grade::create($data);

        return Response::json([
            'data' => new GradeResource($grade),
                    'success' => true,
                    'message' => 'Created'
            ],201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
