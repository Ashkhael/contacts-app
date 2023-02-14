<?php

namespace App\Repositories;

use App\Models\ContactPhone;
use App\Repositories\BaseRepository;

class ContactPhoneRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'phone_id',
        'contact_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ContactPhone::class;
    }
}
