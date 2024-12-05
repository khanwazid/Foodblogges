<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'p_id';
    public $incrementing = true;
    protected $fillable = [
        'title',
        'description',
        'header_pic',
        'read_time',
        'categories',
        'cook_time',
        'prep_time',
        'serves',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'p_id');
    }
}
