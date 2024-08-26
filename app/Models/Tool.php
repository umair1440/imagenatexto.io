<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Tool extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'tool_name', 'tool_slug', 'tool_meta_title',
        'tool_meta_description', 'tool_lang', 'tool_parent', 'tool_content', 'is_home',
    ];

    protected $table = 'tools';



}
