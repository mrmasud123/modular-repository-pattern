<?php

namespace App\Modules\Student\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Student\Models\Student;
use App\Modules\Student\Resources\StudentResource;
use App\Modules\Student\Services\StudentService;
use Illuminate\Http\Request;
use Str;

class StudentController extends Controller
{
    public function __construct(
        private StudentService $studentService
    ) {
    }
    public function index()
    {

        return response()->json([
            Str::app_name('student module'),
            StudentResource::collection(Student::all())
        ]);
        // return $this->studentService->getAllStudents();
    }
}
