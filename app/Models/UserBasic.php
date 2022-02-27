<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBasic extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo("App\Models\User", "userId");
    }
    public function sml()
    {
        return $this->hasMany("App\Models\UserSML", "userBasicId");
    }
    public function basicPhoto()
    {
        return $this->hasMany("App\Models\basicPhoto", "userBasicId");
    }
}
