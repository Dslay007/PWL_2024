<?php

namespace App\Models;

use App\Http\Controllers\LevelController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['username', 'nama', 'password', 'level_id', 'foto', 'created_at', 'updated_at', 'image'];

    protected $hidden = ['password'];
    protected $casts = ['password' => 'hashed'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    /**
     * Mendapatkan nama role
     */
    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }

    /**
     * Cek apakah user memiliki role tertentu
     */
    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }

    /**
     * Mendapatkan kode role
     */
    public function getRole()
    {
        return $this->level->level_kode;
    }

    public function barang(): HasMany
    {
        return $this->hasMany(StokModel::class, 'stok_id', 'stok_id');
    }

    /**
     * Accessor for the image URL
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => url('/storage/posts/' . $image),
        );
    }

    /**
     * Accessor for the foto URL
     */
    protected function foto(): Attribute
    {
        return Attribute::make(
            get: fn($foto) => url('/storage/foto/' . $foto),
        );
    }
}
