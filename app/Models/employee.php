<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table ='employees';
    // protected $fillabe=[
    //     'FirstName',
    //     'LastName',
    //     'dob',
    //     'age',
    //     'created_at',
    //     'updated_at',
    // ];
    protected $guarded = [];
}
