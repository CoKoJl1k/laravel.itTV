<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'title',
    ];


    public function columns()
    {
        return $this->hasMany(Column::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('tasks.order');
    }


}
