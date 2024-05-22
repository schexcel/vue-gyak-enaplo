<?php

namespace App\Http\Resources;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentDetailedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'eduid' => $this->eduid,
                'grades' => new GradeCollection($this->grades)
            ],
            'success' => true,
            'message' => ''
        ];
    }
}
