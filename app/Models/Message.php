<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'messages';

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function seller(){
        return $this->hasOne(Seller::class, 'id', 'seller_id');
    }
}
