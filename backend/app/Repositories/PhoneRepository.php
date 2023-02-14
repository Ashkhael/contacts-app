<?php

namespace App\Repositories;

use App\Models\Phone;
use App\Repositories\BaseRepository;

class PhoneRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'phone'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Phone::class;
    }
}
