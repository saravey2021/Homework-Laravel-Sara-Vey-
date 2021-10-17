<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['city', 'country'];
    
    // jg relationship
    public function user(){
        return $this->belongsTo(user::class);
    }
}
