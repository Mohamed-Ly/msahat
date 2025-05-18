<?php

namespace App\Http\Controllers\admin\Contact;

use App\Mail\ReplyMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use  App\Http\Traits\CheckPermissions;
class ContactController extends Controller
{
    use CheckPermissions;
    /**
     * Display a listing of the resource.
     */
     
    public function index()
    {
        $this->CheckPermissions('عرض إدارة بريد التواصل');
        $contacts = Contact::OrderBy('id','Desc')->get();
        return view('dashboard.Contact.contact',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg,
        ]);
        toastr()->success('تم الإرسال بنجاح سيتم التواصل معك قريبا');
        return redirect()->back();

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

    public function submitForm(Request $request)
    {
        
        $this->CheckPermissions('الرد على رسائل بريد التواصل');
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'reply_msg' => 'required|string',
        ]);

        // Send email
        Mail::to($request->email)->send(new ReplyMail($validated));
        Contact::findorfail($request->id)->update(['seen'=>1]);
        toastr()->success('تم الرد  بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $this->CheckPermissions('حذف بريد التواصل');
        $contacts = Contact::findorfail($request->id)->delete();
        toastr()->success('تم حذف الرسالة بنجاح');
        return to_route('Admin_Contact.index');

    }
}
