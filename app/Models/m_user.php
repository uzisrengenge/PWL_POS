<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as UserAuthenticate;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;



class m_user extends Authenticatable implements JWTSubject

{
    use HasFactory;
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }
    protected $table = "m_user";
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'level_id',
        'username',
        'nama',
        'password',
        'image'
    ];

    public function level() {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
