<?php

namespace App\Modules\Teacher\Repositories;
use App\Modules\Teacher\Interfaces\TeacherRepositoryInterface;


class TeacherRepository implements TeacherRepositoryInterface
{
    public function getAllTeachers()
    {
        return [
            (object) [
                'name' => 'Teacher 1',
                'age' => 30,
                'subject' => 'Math'
            ],
            (object) [
                'name' => 'Teacher 2',
                'age' => 35,
                'subject' => 'Science'
            ],
            (object) [
                'name' => 'Teacher 3',
                'age' => 40,
                'subject' => 'History'
            ]
        ];
    }
}