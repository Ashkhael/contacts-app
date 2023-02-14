<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
use App\Models\Contact;
use App\Models\ContactPhone;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = Contact::select('id')->get();
        foreach ($contacts as $contact) {
            $phones = Phone::factory()->count(random_int(1, 5))->create();
            foreach ($phones as $phone) {
                ContactPhone::factory()->state([
                        'contact_id' => $contact->id,
                        'phone_id' => $phone->id,
                    ])->create();
            }
        }
    }
}
