<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vuser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'vusers';
    protected $primaryKey = 'id';

    // mutator for usernames
    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = ucwords($value);
    }

    // accessors for date fields
    public function getCreatedatAttribute($date)
    {
        return  date('F j, Y, g:i a', strtotime($date));
    }
}
