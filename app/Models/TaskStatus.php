<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{

    public $timestamps = false;
    /**
     * Table associated to the model
     *
     * @var string
     */
    protected $table = "tasksStatus";

    /**
     * @var string
     */
    protected $primaryKey = 'id';

}
