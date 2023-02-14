<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'contacts';
    
    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'profile_photo',
        'favorite'
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'profile_photo' => 'string',
        'favorite' => 'boolean'
    ];

    public static array $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'profile_photo' => 'nullable|string|max:255',
        'favorite' => 'required|boolean'
    ];

    public function contactPhones(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\ContactPhone::class, 'contact_id');
    }
}
