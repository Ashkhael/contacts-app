<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Repositories\ContactRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\Contact;
use App\Models\Phone;
use App\Models\ContactPhone;

/**
 * Class ContactAPIController
 */
class ContactAPIController extends AppBaseController
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepo)
    {
        $this->contactRepository = $contactRepo;
    }

    /**
     * Display a listing of the Contacts.
     * GET|HEAD /contacts
     */
    public function index(Request $request): JsonResponse
    {
        $contacts = $this->contactRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($contacts->toArray(), 'Contacts retrieved successfully');
    }

    /**
     * Store a newly created Contact in storage.
     * POST /contacts
     */
    public function store(CreateContactRequest $request): JsonResponse
    {
        $input = $request->all();

        $phones = $input['phones'];

        $contact = $this->contactRepository->create($input);

        if (!empty($phones)) {
            foreach ($phones as $ph) {
                $phone = new Phone;
                $phone->phone = $ph['number'];
                $phone->label = $ph['label'];
                $phone->save();
                $contact_phone = new ContactPhone;
                $contact_phone->contact_id = $contact->id;
                $contact_phone->phone_id = $phone->id;
                $contact_phone->save();
            }
        }

        return $this->sendResponse($contact->toArray(), 'Contact saved successfully');
    }

    /**
     * Display the specified Contact.
     * GET|HEAD /contacts/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Contact $contact */
        $contact = $this->contactRepository->find($id);
        $contactPhones = ContactPhone::select(
            'contact_phone.phone_id as phone_id',
            'phones.phone as phone_number',
            'phones.label as label',
        )
        ->join('phones', 'contact_phone.phone_id', '=', 'phones.id')
        ->where('contact_id','=', $id)
        ->get();

        if (empty($contact)) {
            return $this->sendError('Contact not found');
        }

        $data = ['contact'=>$contact, 'phones'=>$contactPhones];

        return $this->sendResponse($data, 'Contact retrieved successfully');
    }

    /**
     * Update the specified Contact in storage.
     * PUT/PATCH /contacts/{id}
     */
    public function update($id, UpdateContactRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Contact $contact */
        $contact = $this->contactRepository->find($id);

        if (empty($contact)) {
            return $this->sendError('Contact not found');
        }

        $contact = $this->contactRepository->update($input, $id);

        return $this->sendResponse($contact->toArray(), 'Contact updated successfully');
    }

    /**
     * Remove the specified Contact from storage.
     * DELETE /contacts/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Contact $contact */
        $contact = $this->contactRepository->find($id);

        if (empty($contact)) {
            return $this->sendError('Contact not found');
        }
        $contact_phones = ContactPhone::where('contact_id', $id)->get();
        foreach ($contact_phones as $contact_phone) {
            $phone = Phone::where('id', $contact_phone->id)->first();
            $phone->delete();
            $contact_phone->delete();
        } 

        return $this->sendSuccess('Contact deleted successfully');
    }
}
