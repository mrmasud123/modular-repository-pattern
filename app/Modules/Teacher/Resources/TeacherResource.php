<?php

namespace App\Modules\Teacher\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'module_name' => "Teacher Module",
            'name' => $this->name,
            'age' => $this->age,
            'subject' => $this->subject
        ];
    }
}