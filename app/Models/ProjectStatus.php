<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{

    public $timestamps = false;
    /**
     * Table associated to the model
     *
     * @var string
     */
    protected $table = "project_status";

    /**
     * @var string
     */
    protected $primaryKey = 'id';

}
