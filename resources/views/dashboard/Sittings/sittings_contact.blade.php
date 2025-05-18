@extends('layouts.master')
@section('css')

@section('title')
    إعداد بيانات التواصل
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
إعداد بيانات التواصل    
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

                <button type="button" class="button x-small" style="background: #018783;" data-toggle="modal"
                    data-target="#exampleModal">
                    {{ 'إضافة بيانات التواصل' }}
                </button>
                <br><br>

                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ 'البريد الإلكتروني' }}</th>
                                <th>{{ 'رقم الهاتف' }}</th>
                                <th>{{ 'العنوان' }}</th>
                                <th>{{ 'العمليات' }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sitting_contacts as $value)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->phone }}</td>
                                    <td>
                                        <textarea name="" id="" class="form-control" cols="30" rows="1">{{ $value->address }}</textarea>
                                    </td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#edit{{ $value->id }}"
                                            title="{{ trans('Grades_trans.Edit') }}"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{ $value->id }}"
                                            title="{{ trans('Grades_trans.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_Grade -->
                                <div class="modal fade" id="edit{{ $value->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    {{ 'تعديل البيانات'  }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- add_form -->
                                                <form action="{{ route('sitting_contact.update', 'test') }}"
                                                    method="post">
                                                    {{ method_field('patch') }}
                                                    @csrf
                                                    <input type="hidden" value="{{ $value->id }}" name="id">

                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">البريد الإلكتروني
                                                                : <span class="text-danger">*</span></label>
                                                            <input id="Name" value="{{ $value->email }}"
                                                                required type="email" name="email"
                                                                class="form-control">
                                                        </div>

                                                    </div>
                                                    <br>


                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">رقم الهاتف
                                                                : <span class="text-danger">*</span></label>
                                                            <input id="Name" value="{{ $value->phone }}"
                                                                required type="phone" name="phone"
                                                                class="form-control">
                                                        </div>

                                                    </div>
                                                    <br>


                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">العنوان
                                                                : <span class="text-danger">*</span></label>
                                                            <textarea name="address" id="" class="form-control" cols="30" rows="3">{{ $value->address }}</textarea>
                                                        </div>

                                                    </div>
                                                    <br>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">{{ 'إلغاء' }}</button>
                                                        <button type="submit" class="btn"
                                                            style="background: #018783;color:#fff">{{ 'تعديل' }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- delete_modal_Grade -->
                                <div class="modal fade" id="delete{{ $value->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('sitting_contact.destroy', 'test') }}"
                                                    method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    {{ trans('هل انت متاكد من عملية الحذف ؟') }}
                                                    <input id="id" type="hidden" name="id"
                                                        class="form-control" value="{{ $value->id }}">


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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        {{ 'إضافة بيانات التواصل' }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('sitting_contact.store') }}" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">البريد الإلكتروني
                                    : <span class="text-danger">*</span></label>
                                <input id="Name"  type="email" name="email"
                                    class="form-control">
                            </div>

                        </div>
                        <br>


                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">رقم الهاتف
                                    : <span class="text-danger">*</span></label>
                                <input id="Name"  type="phone" name="phone"
                                    class="form-control">
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">العنوان
                                    : <span class="text-danger">*</span></label>
                                <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
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

    </div>

    <!-- row closed -->
@endsection
@section('js')
    {{-- @toastr_js
    @toastr_render --}}
@endsection
