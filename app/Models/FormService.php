<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormService extends Model
{
    use HasFactory;

    protected $table = 'form_services';

    protected $fillable = ['name','email','phone','service_id','pack_id','message'];
}
