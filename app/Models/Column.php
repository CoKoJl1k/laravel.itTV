<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Column extends Model
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
        'board_id',
    ];

    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
