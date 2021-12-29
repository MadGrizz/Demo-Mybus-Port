<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=['pd_id','pd_name','pd_type','pd_img','pd_price','pd_stock'];
}
