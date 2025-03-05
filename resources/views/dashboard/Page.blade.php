
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

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
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

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
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

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
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
                    <h3 class="card-title">ویرایش اسلایدر {{$selectedItemId}}</h3>
                </div><div class="card-body">
                    <img src="{{$selectedItem['itemImage']}}" alt="">
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

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>

</div>

@endswitch


@endsection
