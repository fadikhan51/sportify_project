<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_inventory extends Model
{
    use HasFactory;
    protected $table = "product_inventory";
    public $timestamps = false;
}
