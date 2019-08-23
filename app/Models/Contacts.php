<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

    public $timestamps = false;
    /**
     * Table associated to the model
     *
     * @var string
     */
    protected $table = "contacts";

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Relation Many to one ( many contact for one client)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Clients');
    }
}
