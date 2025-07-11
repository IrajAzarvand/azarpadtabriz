<div class="col-12 card card-success">
    <div class="card-header">
        <h3 class="card-title">{{inputformTitle($Page)}}</h3>
    </div>
    <div class="card-body">

<form method="post" action="{{route($FormSubmitRoute)}}"   enctype="multipart/form-data">
    @csrf
    @isset($selectedItemId)
    <input type="hidden" name="editedItemId" value="{{$selectedItemId}}" >
    @endisset
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills ml-auto p-2">
                        @foreach (SiteLang() as $locale => $specs)
                            <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" href="#tab_{{ $specs['name'] }}" data-toggle="tab">{{ $specs['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        @foreach (SiteLang() as $locale => $specs)
                            <div class="tab-pane @if ($loop->first) active @endif" id="tab_{{ $specs['name'] }}">
                       <textarea name="content_{{$locale}}" @if ($specs['rtl']) dir="rtl" @else dir="ltr" @endif class="textarea" placeholder="لطفا  متن {{ $specs['name'] }} خود را وارد کنید"
                                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@isset($selectedItem[$locale]){{$selectedItem[$locale]}}@endisset</textarea>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->

            </div>
            <!-- ./card -->
            @if($Page=='وبلاگ')
                <div class="form-group">
                    <label>انتخاب تگ های مربوطه: </label>
                    @foreach($Tag as $id=>$item)
                    <label>
                        <input name="tags[]" type="checkbox" class="minimal" value="{{$id}}">
                        {{$item}}
                    </label>
                    @endforeach
                </div>
             @endif
    @unless(Request::segment(2)=='messages')
                <div class="custom-file col-6 float-right">
                    <input type="file" name="file[]" id="file" multiple>
                    <label class="custom-file-label" for="file">انتخاب فایل</label>
                </div>
                <div class="col-6 float-left">
                    <button type="submit" class="btn btn-primary">@isset($selectedItemId) ویرایش @else  ذخیره @endisset</button>
                </div>
    @endunless
</form>

    </div>
    <!-- /.card-body -->
</div>
