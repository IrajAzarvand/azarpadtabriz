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
                        class="nav-item has-treeview @if(Str::contains(last(request()->segments()),['slider','AboutUs','productIntroduction','productSamples','usagePage','contactUsPage','productAdvantages','gallery', 'catalog'])) {{'menu-open' }} @endif">
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
                               <a href="{{ route('GalleryPage') }}"
                                   class="nav-link @if(last(request()->segments())== 'gallery'){{ 'active' }} @endif">
                                   <i class="fa fa-th-large nav-icon"></i>
                                   <p>گالری تصاویر</p>
                               </a>
                           </li>

                            <li class="nav-item">
                               <a href="{{ route('catalogPage') }}"
                                   class="nav-link @if(last(request()->segments())== 'catalog'){{ 'active' }} @endif">
                                   <i class="fa fa-edit nav-icon"></i>
                                   <p>کاتالوگ محصولات</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                    <li
                        class="nav-item has-treeview @if(Str::contains(last(request()->segments()),['tags','blogPage'])) {{'menu-open' }} @endif">
                        <a href=" #" class="nav-link">
                            <i class="nav-icon fa fa-file-text"></i>
                            <p>
                                وبلاگ
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('blogTags') }}"
                                    class="nav-link @if(last(request()->segments())== 'tags'){{ 'active' }} @endif">
                                    <i class="fa fa-tags nav-icon"></i>
                                    <p>برچسب ها</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('blogPage') }}"
                                    class="nav-link @if(last(request()->segments())== 'blogPage'){{ 'active' }} @endif">
                                    <i class="fa fa-newspaper-o nav-icon"></i>
                                    <p>مطالب وبلاگ</p>
                                </a>
                            </li>

                       </ul>
                   </li>

                    <li class="nav-item">
                        <a href="{{ route('applicationsPage') }}" class="nav-link @if(last(request()->segments())== 'Applications'){{ 'active' }} @endif">
                            <i class="nav-icon fa fa-braille"></i>
                            <p>
                                کاربردها
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('messages') }}" class="nav-link @if(last(request()->segments())== 'messages'){{ 'active' }} @endif">
                            <i class="nav-icon fa fa-envelope-open-o"></i>
                            <p>
                                پیام ها
                            </p>
                        </a>
                    </li>

               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
   </div>
   <!-- /.sidebar -->
</aside>
