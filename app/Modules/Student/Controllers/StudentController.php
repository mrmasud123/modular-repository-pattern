<?php

namespace App\Modules\Student\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Student\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(
        private StudentService $studentService
    ) {
    }
    public function index()
    {
        return $this->studentService->getAllStudents();
    }
}
