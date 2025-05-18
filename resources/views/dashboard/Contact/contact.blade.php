@extends('layouts.master')
@section('css')

@section('title')
    بريد التواصل
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
بريد التواصل   
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">


    @if ($errors->any())
        <div class="error">{{ $errors->first('Name') }}</div>
    @endif



    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
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



                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ 'الإسم' }}</th>
                                <th>{{ 'البريد الإلكتروني' }}</th>
                                <th>{{ 'الموضوع' }}</th>
                                <th>{{ 'الرسالة' }}</th>
                                <th>{{ 'الحالة' }}</th>
                                <th>{{ 'العمليات' }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                            
                                    <td><textarea class="form-control" id="" cols="30" rows="1">{{ $contact->msg }}</textarea></td>
                                    <td>
                                        @if ($contact->seen == 1)
                                        <button type="button" class="btn btn-success btn-sm" 
                                            data-target="#delete{{ $contact->id }}"
                                            title="{{ 'الرد على الرسالة' }}">تم الرد</button>
                                        @else
                                        <button type="button" class="btn btn-warning btn-sm" 
                                            data-target="#delete{{ $contact->id }}"
                                            title="{{ 'الرد على الرسالة' }}">قيد الإنتظار</button>
                                        
                                    @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#reply{{ $contact->id }}"
                                            title="{{ 'الرد على الرسالة' }}"><i
                                                class="fa fa-reply"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{ $contact->id }}"
                                            title="{{ 'الرد على الرسالة' }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_Grade -->
                                <div class="modal fade" id="reply{{ $contact->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{ 'الرد على رسالة' . ' ' . $contact->name }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- add_form -->
                                                <form action="{{ route('submit', 'test') }}"
                                                    method="post">

                                                    @csrf
                                                    <input type="hidden" value="{{ $contact->id }}" name="id">
                                                    <input type="hidden" value="{{ $contact->email }}" name="email">
                                                    <input type="hidden" value="{{ $contact->name }}" name="name">

                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">البريد الإلكتروني
                                                                 </label>
                                                            <input id="Name" readonly type="text" value="{{ $contact->email }}" name="first_name"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">الموضوع
                                                                 </label>
                                                            <input id="Name" readonly type="text" value="{{ $contact->subject }}" name="subject"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">الرد
                                                                : <span class="text-danger">*</span></label>
                                                            <textarea name="reply_msg" placeholder="يرجى كتابة الرد على رسالة {{ $contact->name }}" class="form-control" id="" cols="30" rows="8"></textarea>
                                                        </div>
                                                    </div>
                            
                                                  
                            


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">{{ 'إلغاء' }}</button>
                                                        <button type="submit" class="btn"
                                                            style="background: #018783;color:#fff">{{ 'الرد' }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- delete_modal_Grade -->
                                <div class="modal fade" id="delete{{ $contact->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{ 'حذف رسالة ' . ' ' . $contact->name }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('Admin_Contact.destroy', 'test') }}"
                                                    method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    {{ trans('هل انت متاكد من عملية الحذف ؟') }}
                                                    <input id="id" type="hidden" name="id"
                                                        class="form-control" value="{{ $contact->id }}">


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">{{ trans('إلغاء') }}</button>
                                                        <button type="submit"
                                                            class="btn btn-danger">{{ trans('حذف') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- add_modal_Grade -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        {{ 'إضافة عميل جديد' }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form  action="{{ route('Admin_Clints.store') }}" method="POST" 
                        enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">الإسم
                                    : <span class="text-danger">*</span></label>
                                <input id="Name" required type="text" name="first_name"
                                    class="form-control">
                            </div>

                            <div class="col">
                                <label for="Name" class="mr-sm-2">اللقب
                                    : <span class="text-danger">*</span></label>
                                <input id="Name" required type="text" name="last_name"
                                    class="form-control">
                            </div>

                        </div>
                        <br>


                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">البريد الإلكتروني
                                    : <span class="text-danger">*</span></label>
                                <input  id="Name" required type="email" name="email"
                                    class="form-control">
                            </div>

                            <div class="col">
                                <label for="Name" class="mr-sm-2">رقم الهاتف
                                    : <span class="text-danger">*</span></label>
                                <input id="Name" required type="number" name="phone"
                                    class="form-control">
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">الجنس
                                    : <span class="text-danger">*</span></label>
                                <select name="gender" id="" style="padding: 1px" class="form-control">
                                    <option value="ذكر">ذكر</option>
                                    <option value="أنثى">انثى</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="Name" class="mr-sm-2">تاريخ الميلاد
                                    : <span class="text-danger">*</span></label>
                                <input id="Name" required type="date" name="birth_date"
                                    class="form-control">
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">كلمة السر
                                    : <span class="text-danger">*</span></label>
                                <input id="Name" required type="password" name="password"
                                    class="form-control">
                            </div>

                            <div class="col">
                                <label for="Name" class="mr-sm-2">تأكيد كلمة السر
                                    : <span class="text-danger">*</span></label>
                                <input id="Name" required type="password" name="confirm_password"
                                    class="form-control">
                            </div>

                        </div>
                        <br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                                data-dismiss="modal">{{ 'إلغاء' }}</button>
                            <button type="submit" class="btn"
                                style="background: #018783;color:#fff">{{ 'إضافة' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div> --}}

    <!-- row closed -->
@endsection
{{-- @section('js')
    @toastr_js
    @toastr_render
@endsection --}}
