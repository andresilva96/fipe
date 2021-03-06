<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    protected $fillable = ['type','brand','model','fipe','year','observation'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
