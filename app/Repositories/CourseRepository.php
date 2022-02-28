<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $entity;

    public function __construct(Course $course)
    {
        $this->entity = $course;

    }

    // Chamando todos os cursos
    public function getAllCourses()
    {
        return $this->entity->get();
    }
}
