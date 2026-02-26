<?php

namespace App\Modules\Student\Services;

use App\Modules\Student\Interfaces\StudentRepositoryInterface;

class StudentService
{
    public function __construct(protected StudentRepositoryInterface $studentRepository)
    {
    }
    public function getAllStudents()
    {
        return $this->studentRepository->getAllStudentsInterface();
    }
}