<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'phones';

    public $fillable = [
        'phone',
        'label'
    ];

    protected $casts = [
        'phone' => 'string',
        'label' => 'string'
    ];

    public static array $rules = [
        'phone' => 'required|string|max:255',
        'label' => 'required|string|max:255'
    ];

    public function contactPhones(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\ContactPhone::class, 'phone_id');
    }
}
