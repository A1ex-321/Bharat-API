<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $gallery = Contact::all();

        return view('admin.contact.contact-as', [
            'galleries' => $gallery,
            'header_title' => "Add New Gallery",
        ]);
    }

    public function destroy($id)
    {
        // $gallery->delete();
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('allcontact.index')->with('success', 'gallery deleted successfully');
    }
}
