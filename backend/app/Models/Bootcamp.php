<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    protected $table = "bootcaps";
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "webside",
        "phone",
        "user_id",
        "average_cost",
        "average_rating"
    ];
}
