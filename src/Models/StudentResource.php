<?php

namespace MVC\src\Models;

use MVC\src\Core\ResourceModel;

class StudentResource extends ResourceModel
{
    public function __construct()
    {
        parent::_init('students', 'studentId', new StudentModel);
    }
}
