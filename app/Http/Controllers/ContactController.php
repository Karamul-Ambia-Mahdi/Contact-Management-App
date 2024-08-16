<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\FormVRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->search) {
            $contacts = Contact::when($request->sort, function ($query, $sort) {
                $query->orderBy($sort);
            })->get();
        } else {

            $searchItem = "%".$request->search."%";

            $contacts = Contact::where('name', 'LIKE', $searchItem)
                ->orWhere('email', 'LIKE', $searchItem)
                ->get();
        }

        return view('index', compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(FormVRequest $request)
    {
        Contact::create($request->input());

        return redirect(route("contacts.create"))->with([
            "success" => "Form Submitted Successfully."
        ]);
    }

    public function show(Contact $contact)
    {
        return view('show', ['contact' => $contact]);
    }

    public function edit(Contact $contact)
    {
        return view('edit', ['contact' => $contact]);
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('contacts')->ignore($contact->id)],
            'phone' => 'nullable',
            'address' => 'nullable'
        ]);

        $contact->update($request->input());

        return redirect()->back()->with([
            "success" => "Form Submitted Successfully."
        ]);
    }

    public function destroy(Contact $contact)
    {
        Contact::where('id', $contact->id)->delete();

        return redirect()->back();
    }
}
