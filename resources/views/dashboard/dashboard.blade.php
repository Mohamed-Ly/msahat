<!DOCTYPE html>
<html lang="en">
@section('title')
    {{ 'مساحات' }}
@stop

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('attachments/logo/icoon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.head')
    {{-- @livewireStyles --}}
</head>

<body style="font-family: 'Cairo', sans-serif">

    <div class="wrapper" style="font-family: 'Cairo', sans-serif">

        <!--=================================
 preloader -->
        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-02.svg') }}" alt="">
        </div>
        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">لوحة تحكم</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-info">
                                        <i class="fa fa-envelope highlight-icon"
                                            aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">عدد الإستفسارات</p>
                                    <h3>{{App\Models\contact::count()}}</h3>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{ route('Admin_Contact.index') }}"
                                    target="_blank"><span class="text-danger">عرض البيانات</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fa fa-clock-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">إستفسارات قيد الإنتظار</p>
                                    <h3>{{App\Models\contact::where('seen',0)->count()}}</h3>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{ route('Admin_Contact.index') }}"
                                    target="_blank"><span class="text-danger">عرض البيانات</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-paper-plane highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">إستفسارات تم الرد</p>
                                    <h3>{{App\Models\contact::where('seen',1)->count()}}</h3>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{ route('Admin_Contact.index') }}"
                                    target="_blank"><span class="text-danger">عرض البيانات</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa-solid fa-user-tie highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">المسؤلين</p>
                                    <h3>{{App\Models\User::count()}}</h3>
                                </div>
                            </div>

                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                    <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{ route('Admin_Users.index') }}"
                                        target="_blank"><span class="text-danger">عرض البيانات</span></a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Orders Status widgets-->


            <!-- <div class="row">

                <div style="height: 400px;" class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="tab nav-border" style="position: relative;">
                                <div class="d-block d-md-flex justify-content-between">
                                    <div class="d-block w-100">
                                        <h5 style="font-family: 'Cairo', sans-serif" class="card-title">اخر عمليات
                                            التسجيل
                                            علي النظام</h5>
                                    </div>
                                    <div class="d-block d-md-flex nav-tabs-custom">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active show" id="students-tab" data-toggle="tab"
                                                    href="#students" role="tab" aria-controls="students"
                                                    aria-selected="true"> العملاء</a>
                                            </li>

                                            @if (Auth()->user()->rools != 1)
                                                <li class="nav-item">
                                                    <a class="nav-link" id="teachers-tab" data-toggle="tab"
                                                        href="#teachers" role="tab" aria-controls="teachers"
                                                        aria-selected="false">الموظفين
                                                    </a>
                                                </li>
                                            @endif


                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent">

                                    {{-- students Table --}}
                                    <div class="tab-pane fade active show" id="students" role="tabpanel"
                                        aria-labelledby="students-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center"
                                                class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                    <tr class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>الإسم</th>
                                                        <th>اللقب</th>
                                                        <th>البريد الإلكتروني</th>
                                                        <th>رقم الهاتف</th>
                                                        <th>الجنس</th>
                                                        <th>تاريخ الميلاد</th>
                                                        <th>تاريخ التسجيل</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @forelse(\App\Models\Client::latest()->take(5)->get() as $Client)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $Client->first_name }}</td>
                                                            <td>{{ $Client->last_name }}</td>
                                                            <td>{{ $Client->email }}</td>
                                                            <td>{{ $Client->phone }}</td>

                                                            <td>{{ $Client->gender }}</td>
                                                            <td>{{ $Client->birth_date }}</td>


                                                            <td class="text-success">{{ $Client->created_at }}</td>
                                                        @empty
                                                            <td class="alert-danger" colspan="16">لاتوجد بيانات</td>
                                                        </tr>
                                                    @endforelse --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- teachers Table --}}
                                    <div class="tab-pane fade" id="teachers" role="tabpanel"
                                        aria-labelledby="teachers-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center"
                                                class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                    <tr class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>الأسم</th>
                                                        <th>البريد الإلكتروني</th>
                                                        <th>الحالة</th>
                                                        <th>تاريخ التسجيل</th>

                                                    </tr>
                                                </thead>

                                                {{-- @forelse(\App\Models\User::where('rools',1)->latest()->take(5)->get() as $user)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>
                                                                @if ($user->status == 1)
                                                                    <button type="button"
                                                                        class="btn btn-success btn-sm">مفعل</button>
                                                                @else
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm">غير مفعل</button>
                                                                @endif
                                                            </td>
                                                            <td class="text-success">{{ $user->created_at }}</td>


                                                        @empty
                                                            <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                                                        </tr>
                                                    </tbody>
                                                @endforelse --}}
                                            </table>
                                        </div>
                                    </div>

                                    {{-- parents Table --}}
                                    {{-- <div class="tab-pane fade" id="parents" role="tabpanel" aria-labelledby="parents-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                <tr  class="table-info text-danger">
                                                    <th>#</th>
                                                    <th>اسم ولي الامر</th>
                                                    <th>البريد الالكتروني</th>
                                                    <th>رقم الهوية</th>
                                                    <th>رقم الهاتف</th>
                                                    <th>تاريخ الاضافة</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse(\App\Models\My_Parent::latest()->take(5)->get() as $parent)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$parent->Name_Father}}</td>
                                                        <td>{{$parent->email}}</td>
                                                        <td>{{$parent->National_ID_Father}}</td>
                                                        <td>{{$parent->Phone_Father}}</td>
                                                        <td class="text-success">{{$parent->created_at}}</td>
                                                        @empty
                                                            <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}

                                    {{-- sections Table --}}
                                    {{-- <div class="tab-pane fade" id="fee_invoices" role="tabpanel" aria-labelledby="fee_invoices-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                <tr  class="table-info text-danger">
                                                    <th>#</th>
                                                    <th>تاريخ الفاتورة</th>
                                                    <th>اسم الطالب</th>
                                                    <th>المرحلة الدراسية</th>
                                                    <th>الصف الدراسي</th>
                                                    <th>القسم</th>
                                                    <th>نوع الرسوم</th>
                                                    <th>المبلغ</th>
                                                    <th>تاريخ الاضافة</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse(\App\Models\Fee_invoice::latest()->take(10)->get() as $section)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$section->invoice_date}}</td>
                                                        <td>{{$section->My_classs->Name_Class}}</td>
                                                        <td class="text-success">{{$section->created_at}}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="alert-danger" colspan="9">لاتوجد بيانات</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div style="height: 500px;" class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="tab nav-border" style="position: relative;">
                                <div class="d-block d-md-flex justify-content-between"
                                    style="flex-direction: column; align-items: center;">
                                    <div class="d-block w-100" style="text-align: center;">
                                        <h5 style="font-family: 'Cairo', sans-serif" class="card-title">{{'إحصائيات
                                            الطلبات في النظام لسنة' . ' ' . date('Y')}}</h5>
                                    </div>


                                    <div>

                                        <div>

                                            <canvas id="myChart" width="1000" height="380"></canvas>


                                        </div>

                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                        <script>
                                            const ctx = document.getElementById('myChart');

                                            new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: ['يناير', 'فبراير', 'مارس', 'إبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر',
                                                        'نوفمبر', 'ديسمبر'
                                                    ],
                                                    datasets: [{
                                                            label: '# عدد الزيارات المنزلية',
                                                            data: [
                                                                {{-- {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 1)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 2)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 3)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 4)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 5)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 6)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 7)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 8)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 9)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 10)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 11)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', '.زيارة منزلية')->whereYear('created_at', date('Y'))->whereMonth('created_at', 12)->count() }} --}}
                                                            ],

                                                            borderWidth: 1
                                                        },
                                                        {
                                                            label: '# عدد الزيارات للمعمل',
                                                            data: [
                                                                {{-- {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 1)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 2)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 3)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 4)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 5)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 6)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 7)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 8)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 9)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 10)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 11)->count() }},
                                                                {{ App\Models\Appointment::where('appointment_type', 'زيارة المعمل')->whereYear('created_at', date('Y'))->whereMonth('created_at', 12)->count() }} --}}
                                                            ],

                                                            borderWidth: 1
                                                        }
                                                    ]
                                                },

                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <div style="height: 500px;" class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="tab nav-border" style="position: relative;">
                                <div class="d-block d-md-flex justify-content-between"
                                    style="flex-direction: column; align-items: center;">
                                    <div class="d-block w-100" style="text-align: center;">
                                        <h5 style="font-family: 'Cairo', sans-serif" class="card-title">{{'إحصائيات
                                             عدد العملاء في النظام لسنة' . ' '. date('Y')}}</h5>
                                    </div>


                                    <div>

                                        <div>

                                            <canvas id="combinedChart" width="1000" height="380"></canvas>



                                        </div>

                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const ctx = document.getElementById('combinedChart');

                                                new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: ['يناير', 'فبراير', 'مارس', 'إبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس',
                                                            'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'
                                                        ],
                                                        datasets: [{
                                                                label: 'العملاء',
                                                                data: [
                                                                    {{-- {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 1)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 2)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 3)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 4)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 5)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 6)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 7)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 8)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 9)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 10)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 11)->count() }},
                                                                    {{ App\Models\Client::whereYear('created_at', date('Y'))->whereMonth('created_at', 12)->count() }} --}}
                                                                    // ... باقي الأشهر
                                                                ],
                                                                backgroundColor: 'rgba(255, 99, 100, 0.7)',
                                                                borderColor: 'rgba(255, 99, 100, 1)',
                                                                borderWidth: 1
                                                            },
                                                            
                                                            
                                                        ]
                                                    },
                                                    options: {
                                                        responsive: true,
                                                        scales: {
                                                            y: {
                                                                beginAtZero: true,
                                                                title: {
                                                                    display: true,
                                                                    text: 'العدد'
                                                                }
                                                            },
                                                            x: {
                                                                title: {
                                                                    display: true,
                                                                    text: 'الشهور'
                                                                }
                                                            }
                                                        },
                                                        plugins: {
                                                            title: {
                                                                display: true,
                                                                text: 'إحصائيات النظام السنوية',
                                                                font: {
                                                                    size: 18
                                                                }
                                                            },
                                                            legend: {
                                                                position: 'top',
                                                                rtl: true
                                                            }
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div> -->

            {{-- <livewire:calendar /> --}}

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')
    {{-- @livewireScripts --}}
    @stack('scripts')

</body>

</html>
