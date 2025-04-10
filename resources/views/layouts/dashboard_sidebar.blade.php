<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('storage/dashboard_images/admin_img.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="pb-3 mt-3 mb-3 user-panel d-flex">
                <div class="image">

                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                            class="nav-link @if(last(request()->segments())== 'dashboard'){{ 'active' }} @endif">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('MainWebsite') }}" target="_blank" class="nav-link">
                            <i class="nav-icon fa fa-globe"></i>
                            <p>
                                مشاهده در وبسایت اصلی
                            </p>
                        </a>
                    </li>

                    <li
                        class="nav-item has-treeview @if(Str::contains(last(request()->segments()),['slider','AboutUs','productIntroduction','productSamples','usagePage','contactUsPage','productAdvantages'])) {{'menu-open' }} @endif">
                        <a href=" #" class="nav-link">
                            <i class="nav-icon fa fa-book"></i>
                            <p>
                                صفحه اصلی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('indexPageSlider') }}"
                                    class="nav-link @if(last(request()->segments())== 'slider'){{ 'active' }} @endif">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>اسلایدر</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('indexPageAboutUs') }}"
                                    class="nav-link @if(last(request()->segments())== 'AboutUs'){{ 'active' }} @endif">
                                    <i class="fa fa-question nav-icon"></i>
                                    <p>درباره ما</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('productSamplesPage') }}"
                                   class="nav-link @if(last(request()->segments())== 'productSamples'){{ 'active' }} @endif">
                                    <i class="fa fa-file-image-o nav-icon"></i>
                                    <p>نمونه محصولات</p>
                                </a>
                            </li>

                           <li class="nav-item">
                               <a href="{{ route('productIntroductionPage') }}"
                                   class="nav-link @if(last(request()->segments())== 'productIntroduction'){{ 'active' }} @endif">
                                   <i class="fa fa-address-card-o nav-icon"></i>
                                   <p>معرفی محصولات</p>
                               </a>
                           </li>

                           <li class="nav-item">
                               <a href="{{ route('productAdvantagesPage') }}"
                                   class="nav-link @if(last(request()->segments())== 'productAdvantages'){{ 'active' }} @endif">
                                   <i class="fa fa-bookmark-o nav-icon"></i>
                                   <p>مزایای محصول</p>
                               </a>
                           </li>

                            <li class="nav-item">
                               <a href="{{ route('blogPage') }}"
                                   class="nav-link @if(last(request()->segments())== 'blogPage'){{ 'active' }} @endif">
                                   <i class="fa fa-address-card-o nav-icon"></i>
                                   <p>وبلاگ</p>
                               </a>
                           </li>


                           <li class="nav-item">
                               <a href="{{ route('usagePage') }}"
                                   class="nav-link @if(last(request()->segments())== 'usagePage'){{ 'active' }} @endif">
                                   <i class="fa fa-check-square-o nav-icon"></i>
                                   <p>کاربردها</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="{{route('contactUsPage')}}"
                                   class="nav-link  @if(last(request()->segments())== 'contactUsPage'){{ 'active' }} @endif">
                                   <i class="fa fa-volume-control-phone nav-icon"></i>
                                   <p>تماس با ما</p>
                               </a>
                           </li>

                       </ul>
                   </li>

                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <p>
                               ========
                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="pages/widgets.html" class="nav-link">
                           <i class="nav-icon fa fa-th"></i>
                           <p>
                               ویجت‌ها
                               <span class="right badge badge-danger">جدید</span>
                           </p>
                       </a>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-pie-chart"></i>
                           <p>
                               چارت‌ها
                               <i class="right fa fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/charts/chartjs.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>نمودار ChartJS</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/charts/flot.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>نمودار Flot</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/charts/inline.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>نمودار Inline</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-tree"></i>
                           <p>
                               اشیای گرافیکی
                               <i class="fa fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/UI/general.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>عمومی</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/icons.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>آیکون‌ها</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/buttons.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>دکمه‌ها</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/UI/sliders.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>اسلایدر‌ها</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-edit"></i>
                           <p>
                               فرم‌ها
                               <i class="fa fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/forms/general.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>اجزا عمومی</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/forms/advanced.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>پیشرفته</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/forms/editors.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>ویشرایشگر</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-table"></i>
                           <p>
                               جداول
                               <i class="fa fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/tables/simple.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>جداول ساده</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/tables/data.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>جداول داده</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-header">مثال‌ها</li>
                   <li class="nav-item">
                       <a href="pages/calendar.html" class="nav-link">
                           <i class="nav-icon fa fa-calendar"></i>
                           <p>
                               تقویم
                               <span class="badge badge-info right">2</span>
                           </p>
                       </a>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-envelope-o"></i>
                           <p>
                               ایمیل‌ باکس
                               <i class="fa fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/mailbox/mailbox.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>اینباکس</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/mailbox/compose.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>ایجاد</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/mailbox/read-mail.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>خواندن</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-book"></i>
                           <p>
                               صفحات
                               <i class="fa fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/examples/invoice.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>سفارشات</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/examples/profile.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>پروفایل</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/examples/login.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>صفحه ورود</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/examples/register.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>صفحه عضویت</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/examples/lockscreen.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>قفل صفحه</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item has-treeview">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-plus-square-o"></i>
                           <p>
                               بیشتر
                               <i class="fa fa-angle-left right"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/examples/404.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>ارور 404</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/examples/500.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>ارور 500</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/examples/blank.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>صفحه خالی</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="starter.html" class="nav-link">
                                   <i class="fa fa-circle-o nav-icon"></i>
                                   <p>صفحه شروع</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-header">متفاوت</li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-file"></i>
                           <p>مستندات</p>
                       </a>
                   </li>
                   <li class="nav-header">برچسب‌ها</li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-circle-o text-danger"></i>
                           <p class="text">مهم</p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-circle-o text-warning"></i>
                           <p>هشدار</p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-circle-o text-info"></i>
                           <p>اطلاعات</p>
                       </a>
                   </li>
               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
   </div>
   <!-- /.sidebar -->
</aside>
