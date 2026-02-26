<?php

namespace App\Modules\Student\Repositories;

use App\Modules\Student\Interfaces\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAllStudentsInterface()
    {
        return [
            ['id' => 1, 'name' => 'Student 1'],
            ['id' => 2, 'name' => 'Student 2'],
            ['id' => 3, 'name' => 'Student 3'],
        ];
    }
}