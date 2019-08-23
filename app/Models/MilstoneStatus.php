<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MilstoneStatus extends Model
{

    public $timestamps = false;
    /**
     * Table associated to the model
     *
     * @var string
     */
    protected $table = "milstoneStatus";

    /**
     * @var string
     */
    protected $primaryKey = 'id';

}
