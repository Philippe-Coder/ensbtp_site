<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAccompagnement extends Model
{
    use HasFactory;

    protected $table = 'form_accompagnements';

    protected $fillable = ['name','email','phone','pack_id','message'];
}
