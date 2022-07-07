<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterTable extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'img','receiver_phone','sender_phone'];
}
