<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : "/profile/W9MW4348MoHN9SxHwCiJ4r1ZPaCq7X5GxF3w4899.png";

        return '/storage/'.$imagePath;

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
