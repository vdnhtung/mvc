<?php

namespace MVC\src\Models;

use MVC\src\Core\ResourceModel;

class TaskResourceModel extends ResourceModel
{
    public function __construct($table, $id, TaskModel $task)
    {
        $this->_init($table, $id, $task);
    }
}
