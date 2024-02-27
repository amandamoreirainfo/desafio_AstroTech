<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoListModel extends Model
{
    use HasFactory;

    protected $table = "to_do_list";
    protected $fillable = [
        'title',
        'completed',
    ];
}
