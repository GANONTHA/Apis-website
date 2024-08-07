<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'blog_id',
        'comment',
    ];
    // relationship between User and Comment
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
