

<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('home') }}">
                <div class="pull-left"><i class="fa-solid fa-house"></i><span class="right-nav-text">لوحة تحكم</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">شركة مساحات</li>




        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Contact">
                <div class="pull-left"><i class="fa fa-envelope" aria-hidden="true"></i></i><span
                        class="right-nav-text">بريد التواصل (<span class="text-danger">{{App\Models\Contact::where('seen',0)->count()}}</span>)</span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Contact" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{ route('Admin_Contact.index') }}">إدارة بريد التواصل (<span class="text-danger">{{App\Models\Contact::where('seen',0)->count()}}</span>)</a> </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Sittings">
                <div class="pull-left"><i class="fa-solid fa-gear"></i></i><span
                        class="right-nav-text">الإعدادات </span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Sittings" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{ route('sitting.public') }}">الإعدادات العامة </a> </li>
                <li> <a href="{{ route('sitting_contact.index') }}">إعداد بيانات التواصل </a> </li>

            </ul>
        </li>

                <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Admin_RoleAndPerimissions">
                <div class="pull-left"><i class="fa fa-universal-access"></i></i><span
                        class="right-nav-text">الأدوار والصلاحيات </span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Admin_RoleAndPerimissions" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{ route('Admin_RoleAndPerimissions.index') }}">إدارة الأدوار والصلاحيات</a> </li>

            </ul>
        </li>

                        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#users">
                <div class="pull-left"><i class="fa fa-users"></i></i><span
                        class="right-nav-text">المستخدمين </span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="users" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{ route('Admin_Users.index') }}">إدارة المستخدمين</a> </li>

            </ul>
        </li>




        </ul>
    </div>






