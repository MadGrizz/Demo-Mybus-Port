<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['or_cus_name','or_cus_address','or_cus_tel','or_price','or_product_id','or_quantity','or_approve','or_cancel'];
}
