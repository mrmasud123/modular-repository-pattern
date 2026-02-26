<?php

namespace App\Modules\Teacher\Controllers;

use App\Modules\Teacher\Models\Teacher;
use App\Modules\Teacher\Resources\TeacherResource;
use App\Modules\Teacher\Services\TeacherService;
use Str;

class TeacherController
{
    public function __construct(protected TeacherService $teacherService)
    {
    }
    public function index()
    {
        return response()->json([
            Str::app_name("teacher module"),
            TeacherResource::collection(Teacher::all())
        ]);
    }
}
