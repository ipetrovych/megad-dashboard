<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lights';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $appends = array('value');
    protected $value;

    public function getValueAttribute()
    {
        return $this->value;
    }

    public function setValueAttribute($value)
    {
        $this->value = $value;
    }
}
