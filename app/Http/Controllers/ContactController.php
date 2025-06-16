<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all()->map(fn($contact) => [
                $contact->id,
                $contact->name,
                preg_replace('/^(\d)(\d{4})(\d{4})$/', '$1 $2-$3', $contact->contact),
                $contact->email,
                $contact->created_at->format('d/m/y H:i:s'),
                $contact->created_at == null ? "--/--/----" : $contact->updated_at->format('d/m/y H:i:s')
            ])->toArray();

        return view('list', [
            "rows" => $contacts,
            "columns" => [
                "ID", "Nome", "Contato", "Email", "Criado em", "Atualizado em"
            ],
            "link" => "contact.show",
            "deleteLink" => "contact.destroy"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create-contact");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        // dd($request);
        $validatedRequest = $request->validated();
        Contact::create($validatedRequest);
        return redirect()->route("contact.list");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        if ($contact === null) {
            return redirect()->route("contact.list", ['error' => "Contato não encontrado !"]);
        }
        $contact->delete();
        return redirect()->route("contact.list", ["message" => "Contato removido com sucesso !"]);
    }
}
