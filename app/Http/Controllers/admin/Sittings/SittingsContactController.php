<?php

namespace App\Http\Controllers\admin\Sittings;

use App\Models\Sitting_contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\sitting_contactRequest;
use  App\Http\Traits\CheckPermissions;
class SittingsContactController extends Controller
{
        use CheckPermissions;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->CheckPermissions('عرض إعدادات بيانات التواصل');
        $sitting_contacts = Sitting_contact::all();
        return view('dashboard.Sittings.sittings_contact',compact('sitting_contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(sitting_contactRequest $request)
    {
        try {
        $this->CheckPermissions('إضافة إعدادات بيانات التواصل');
        Sitting_contact::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        toastr()->success('تم إضافة البيانات بنجاح');
        return to_route('sitting_contact.index');

                }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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
    public function update(sitting_contactRequest $request, string $id)
    {
        try {

            $this->CheckPermissions('تعديل إعدادات بيانات التواصل');
            Sitting_contact::findorfail($request->id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            ]);
            toastr()->success('تم تعديل البيانات بنجاح');
            return to_route('sitting_contact.index');

        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
         try {

            $this->CheckPermissions('حذف إعدادات بيانات التواصل');
            Sitting_contact::findorfail($request->id)->delete();
            toastr()->success('تم حذف البيانات بنجاح');
            return to_route('sitting_contact.index');

        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
