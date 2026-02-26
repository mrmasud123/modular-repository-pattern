<?php

namespace App\Modules\Teacher\Services;
use App\Modules\Teacher\Interfaces\TeacherRepositoryInterface;
class TeacherService
{
    public function __construct(protected TeacherRepositoryInterface $teacherRepositoryInterface)
    {
    }

    public function getAllTeachersService()
    {
        return $this->teacherRepositoryInterface->getAllTeachers();
    }
}