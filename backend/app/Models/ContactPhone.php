<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactPhone extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'contact_phone';

    public $fillable = [
        'phone_id',
        'contact_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'phone_id' => 'required',
        'contact_id' => 'required'
    ];

    public function phone(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Phone::class, 'phone_id');
    }

    public function contact(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Contact::class, 'contact_id');
    }
}
