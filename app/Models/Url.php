<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;


    protected $table = "urls";

    protected $fillable = [
        "url_full",
        "url_cut",
        "cod_url",
        "view"
    ];
}
