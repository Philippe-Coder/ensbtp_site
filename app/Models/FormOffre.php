<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormOffre extends Model
{
    use HasFactory;

    protected $table = 'form_offres';

    protected $fillable = ['name','email','phone','offre_id','pack_id','salary','message'];
}
