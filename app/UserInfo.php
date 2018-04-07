<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

    protected $table = 'user_info';

    /**
     * Define relationship for App\User
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
