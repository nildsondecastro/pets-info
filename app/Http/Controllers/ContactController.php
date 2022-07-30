<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'checkadmin']);
    }

    public function index()
    {
        $contacts = Contact::paginate();

        $admin_active = 'active';
        $title = 'Contatos do Sistema';
        
        return view('contact.index', compact('contacts', 'admin_active', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * $contacts->perPage());
    }

    public function create()
    {
        $contact = new Contact();
        $admin_active = 'active';
        $title = 'Adicionar Contato do Sistema';

        return view('contact.create', compact('contact', 'admin_active', 'title'));
    }

    public function store(Request $request)
    {
        request()->validate(Contact::$rules);

        $contact = Contact::create($request->all());

        return redirect()->route('contacts.index')
            ->with('success', 'Adicionado com Sucesso');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        $admin_active = 'active';
        $title = 'Contato do Sistema';

        return view('contact.show', compact('contact', 'admin_active', 'title'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        $admin_active = 'active';
        $title = 'Editar Contato do Sistema';

        return view('contact.edit', compact('contact', 'admin_active', 'title'));
    }

    public function update(Request $request, Contact $contact)
    {
        request()->validate(Contact::$rules);

        $contact->update($request->all());

        return redirect()->route('contacts.index')
            ->with('success', 'Atualizado com Sucesso');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id)->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Deletado com Sucesso');
    }
}
