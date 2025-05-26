@extends('layouts.master')
@section('css')
    
    @section('title')
        الإعدادات العامة
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
    الإعدادات العامة
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->



    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <section style="background-color: #eee;">
            <div class="row">
               
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{route('sitting.public.store')}}" method="post" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <input type="hidden" name="id" value="{{$Sitting->id}}" >
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">أسم الشركة</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="name"
                                                   value="{{$Sitting->company_name}}"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">رابط صفحة فيسبوك</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="facebook_url"
                                                   value="{{$Sitting->facebook_url}}"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">رابط صفحة انستقرام</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="instagram_url"
                                                   value="{{$Sitting->instagram_url}}"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">رابط صفحة لينكد إن</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="linkedin_url"
                                                   value="{{$Sitting->linkedin_url}}"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">رابط صفحة تيك توك</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="tiktok_url"
                                                   value="{{$Sitting->tiktok_url}}"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">رابط قناة اليوتيوب</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="youtube_url"
                                                   value="{{$Sitting->youtube_url}}"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                
                                    <div class="col-sm-3">
                                        <p class="mb-0">شعار الشركة</p>
                                        
                                    </div>
                                    
                                    
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="file" name="file"
                                                   
                                                   class="form-control">
                                        </p>
                                        @if ($Sitting->company_logo)
                                    <img src="{{ asset('attachments/img/' . $Sitting->company_logo) }}" style="width: 250px;" class="form-control" alt="">
                                    @endif
                                    </div>

                                    
                                </div>
                                
                                <hr>
                                <button type="submit" class="button x-small" style="background: #018783;">تعديل البيانات</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    
    {{-- @toastr_render --}}
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
