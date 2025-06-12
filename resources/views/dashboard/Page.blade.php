
@extends('dashboard')

@section('contents')

@switch($Page)
@case('اسلایدر')

    <div class="row">

            <!-- input form -->
            @include('dashboard.InputForm')
            <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">اسلایدرها</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($SL as $id=>$item)
                            <tr>
                                <td>{{$id}}</td>
                                <td><img width="40%"  src="{{$item['image']}}" alt="">
                                </td>
                                <td>{{$item['content']}}</td>
                                <td>     <!-- General tools such as edit or delete-->
                                    <div class="tools">

                                        <a href="{{route('editSelectedItem',['ویرایش آیتم','index','slider',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                        <a href="{{route('removeSlider',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                    </div></td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

{{--                    <div class="card-footer">--}}
{{--                        <button type="submit" class="btn btn-primary">ارسال</button>--}}
{{--                    </div>--}}
                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

@break

    {{--    =====================================================--}}

    {{--    =====================================================--}}
@case('درباره ما')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->
    </div>
    @break


    {{--    =====================================================--}}

    {{--    =====================================================--}}

@case('نمونه محصولات')

    <div class="row">

            <!-- input form -->
            @include('dashboard.InputForm')
            <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">نمونه محصولات</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($PS as $id=>$item)
                            <tr>
                                <td>{{$id}}</td>
                                <td><img width="40%"  src="{{$item['image']}}" alt="">
                                </td>
                                <td>{{$item['content']}}</td>
                                <td>     <!-- General tools such as edit or delete-->
                                    <div class="tools">

                                        <a href="{{route('editSelectedItem',['ویرایش آیتم','index','productSamples',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                        <a href="{{route('removeProductSample',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                    </div></td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

{{--                    <div class="card-footer">--}}
{{--                        <button type="submit" class="btn btn-primary">ارسال</button>--}}
{{--                    </div>--}}
                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

@break



    {{--    =====================================================--}}

    {{--    =====================================================--}}

@case('معرفی محصولات')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">معرفی محصولات</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($PI as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td><img width="40%"  src="{{$item['image']}}" alt="">
                                    </td>
                                    <td>{{$item['content']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','index','ProductIntroduction',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            <a href="{{route('removeProductIntroduction',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

    {{--    =====================================================--}}


@case('مزایای محصول')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">مزایای محصول</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($PA as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td><img width="40%"  src="{{$item['image']}}" alt="">
                                    </td>
                                    <td>{{$item['content']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','index','ProductAdvantages',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            <a href="{{route('removeProductAdvantages',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

    {{--    =====================================================--}}


@case('گالری تصاویر')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">گالری تصاویر</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>



                            @foreach($Gallery as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td>
                                        @isset($item['image'])
                                        <img width="40%"  src="{{$item['image'][0]}}" alt="">
                                        @endisset
                                    </td>
                                    <td>{{$item['content']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','index','gallery',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            <a href="{{route('removeGallery',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break


    {{--    =====================================================--}}

    {{--    =====================================================--}}


@case('کاتالوگ')

    <div class="row">

        <!-- input form -->
        <div class="col-12 card card-success">
            <div class="card-header">
                <h3 class="card-title">{{inputformTitle($Page)}}</h3>
            </div>
            <div class="card-body">

                <form method="post" action="{{route($FormSubmitRoute)}}"   enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file col-6 float-right">
                        <input type="file" name="file[]" id="file" multiple>
                        <label class="custom-file-label" for="file">انتخاب فایل</label>
                    </div>

                    <div class="col-6 float-left">
                        <button type="submit" class="btn btn-primary">@isset($selectedItemId) ویرایش @else  ذخیره @endisset</button>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>

        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">کاتالوگ محصولات</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
{{--                                <th style="width:50%;">متن فارسی</th>--}}
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($catalogs as $id=>$item)

                                <tr>
                                    <td>{{$id}}</td>
                                    <td><img width="40%"  src="{{$item['image']}}" alt="">
                                    </td>
{{--                                    <td>{{$item['content']}}</td>--}}
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

{{--                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','index','ProductAdvantages',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>--}}
                                            <a href="{{route('removeCatalog',[last(explode('/', $item['image']))])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

    {{--    =====================================================--}}

@case('پیام ها')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">پیام های کاربران</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">نام</th>
                                <th style="width:50%;">متن پیام</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>



                            @foreach($UserMessages as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td>{{$item['name']}}</td>
                                    <td>{{$item['message']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('showMessages',[$id])}}"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
                                            <a href="{{route('removeMessage',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break



    {{--    =====================================================--}}

@case('برچسب ها')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">معرفی محصولات</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($Tag as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td>{{$item['content']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','blog','tag',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            <a href="{{route('removeTag',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

    {{--    =====================================================--}}


    {{--    =====================================================--}}

@case('وبلاگ')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->
        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">وبلاگ</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blog as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td><img width="40%"  src="{{$item['image']}}" alt="">
                                    </td>
                                    <td>{{$item['content']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','blog','blog',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            <a href="{{route('removeBlog',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

    {{--    =====================================================--}}


    {{--    =====================================================--}}

@case('کاربردها')

    <div class="row">

        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">کاربردها</h3>
                </div>

                <!-- /.card-header -->


                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <table id="simple_paginate" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 5%;">ردیف</th>
                                <th style="width: 25%;">تصویر</th>
                                <th style="width:50%;">متن فارسی</th>
                                <th style="width: 20%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($application as $id=>$item)
                                <tr>
                                    <td>{{$id}}</td>
                                    <td><img width="40%"  src="{{$item['image']}}" alt="">
                                    </td>
                                    <td>{{$item['content']}}</td>
                                    <td>     <!-- General tools such as edit or delete-->
                                        <div class="tools">

                                            <a href="{{route('editSelectedItem',['ویرایش آیتم','application','application',$id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                            <a href="{{route('removeApplication',[$id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>


                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

    {{--    =====================================================--}}

    {{--    =====================================================--}}

@case('ویرایش آیتم')
{{-- for use when edit button pressed in a page elements table--}}
    <div class="row">
        <!-- input form -->
        @include('dashboard.InputForm')
        <!-- /.input form -->

        <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    @unless(Request::segment(2)=='messages')
                    <h3 class="card-title">ویرایش آیتم {{$selectedItemId}}</h3>
                    @endunless
                </div><div class="card-body">
                    @isset($selectedItem['itemImage'])
                    @if(is_array($selectedItem['itemImage']))
                        @foreach($selectedItem['itemImage'] as $item)
                          <a href="{{route('removeGalleryImage',[$selectedItemId,explode('\\', $item)[1] ]) }}"> <img src="{{$item}}" alt=""> </a>

                        @endforeach
                        @else
                    <img src="{{$selectedItem['itemImage']}}" alt="">
                    @endif
                    @endisset
                </div>

                <!-- /.card-header -->

            </div>
            <!-- /.card -->

        </div>

    </div>

    @break

{{--    =====================================================================--}}
{{--    =====================================================================--}}
@default
{{--    for use in dashboard main page--}}
<div class="row">
    <div class="col-md-12">

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> عناصر صفحه اصلی داشبورد در این قسمت خواهد بود</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">آدرس ایمیل</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            placeholder="ایمیل را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="پسورد را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">ارسال فایل</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                    </div>
                </div>
                <!-- /.card-body -->

{{--                <div class="card-footer">--}}
{{--                    <button type="submit" class="btn btn-primary">ارسال</button>--}}
{{--                </div>--}}
            </form>
        </div>
        <!-- /.card -->

    </div>

</div>

@endswitch


@endsection
