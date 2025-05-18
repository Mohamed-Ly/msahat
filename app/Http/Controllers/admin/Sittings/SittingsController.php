<?php

namespace App\Http\Controllers\admin\Sittings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SittingPublic;
use App\Models\Sitting;
use Illuminate\Support\Str;
use App\Http\Traits\CheckPermissions;

class SittingsController extends Controller
{
    use CheckPermissions;
     
    public function index() {
        $this->CheckPermissions('عرض الإعدادات العامة');
        $Sitting = Sitting::first();
        return view('dashboard.Sittings.sittings',compact('Sitting'));
    }

    public function store(SittingPublic $request) {
    try {
        $this->CheckPermissions('تعديل الإعدادات العامة');

        if($request->hasFile('file')) {

                $file = $request->file('file');
                $originalName = $file->getClientOriginalName(); // اسم الملف الأصلي
                $extension = $file->getClientOriginalExtension(); // امتداد الملف
                $randomName = Str::random(40) . '.' . $extension; // اسم عشوائي للملف
    
                // نقل الملف إلى المسار المحدد
                $file->move(base_path('public/attachments/img'), $randomName);

            $Sitting = Sitting::findorfail($request->id)->update([
                'company_name' => $request->name,
                'facebook_url' => $request->facebook_url,
                'instagram_url' => $request->instagram_url,
                'tiktok_url' => $request->tiktok_url,
                'linkedin_url' => $request->linkedin_url,
                'youtube_url' => $request->youtube_url,
                'company_logo' => $randomName,
            ]);

            toastr()->success('تم تحديث البيانات بنجاح');
            return to_route('sitting.public');
        }else{
            $Sitting = Sitting::findorfail($request->id)->update([
                'company_name' => $request->name,
                'facebook_url' => $request->facebook_url,
                'instagram_url' => $request->instagram_url,
                'tiktok_url' => $request->tiktok_url,
                'linkedin_url' => $request->linkedin_url,
                'youtube_url' => $request->youtube_url,
            ]);
            toastr()->success('تم تحديث البيانات بنجاح');
            return to_route('sitting.public');
        }
        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        
    }
}
