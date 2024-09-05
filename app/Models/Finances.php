<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finances extends Model
{
    protected $table = "finances";

    protected $fillable = [
        "id",
        "value",
        "type",
    ];
}
