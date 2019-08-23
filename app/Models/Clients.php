<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{

    public $timestamps = false;
    /**
     * Table associated to the model
     *
     * @var string
     */
    protected $table = 'clients';

    protected $primaryKey = 'id';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany("App\Models\Contacts");
    }
}
