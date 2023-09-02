<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class OntimePassword extends Model
{
    use HasFactory ;

    protected $guarded = ['id'];
    protected $table = 'ontime_passwords';

}
