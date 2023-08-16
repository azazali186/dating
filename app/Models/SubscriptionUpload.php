<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionUpload extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'subscription_uploads';

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function pricingTable(){
        return $this->hasOne(PricingTable::class, 'id', 'pricing_table_id');
    }

}
