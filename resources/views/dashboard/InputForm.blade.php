{{--<div class="row">--}}
{{--    <div class="col-md-12">--}}
{{--        <!-- Custom Tabs -->--}}
{{--        <div class="nav-tabs-custom">--}}
{{--            <ul class="nav nav-tabs">--}}
{{--                @foreach (SiteLang() as $locale => $specs)--}}
{{--                    <li class="@if ($loop->first) active @endif"><a href="#tab_{{ $locale }}_{{ $InputformName ?? '' }}" data-toggle="tab">{{ $specs['name'] }}</a></li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--            <div class="tab-content">--}}
{{--                @foreach (SiteLang() as $locale => $specs)--}}
{{--                    <div class="tab-pane @if ($loop->first) active @endif" id="tab_{{ $locale }}_{{ $InputformName ?? '' }}">--}}

{{--                            <textarea @if ($specs['rtl']) dir="rtl" @else dir="ltr" @endif id="editor1" name="content_{{ $locale }}{{ isset($InputformName) ? '_' . $InputformName : '' }}" style="width: 100%; height: 120px;" required></textarea>--}}

{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <!-- /.tab-pane -->--}}
{{--            </div>--}}
{{--            <!-- /.tab-content -->--}}
{{--        </div>--}}
{{--        <!-- nav-tabs-custom -->--}}
{{--    </div>--}}
{{--    <!-- /.col -->--}}
{{--</div>--}}
{{--<!-- /.row -->--}}

{{-- InputformName var comes from products view file to devide double input box textarea --}}



<div class="col-12 card card-success">
    <div class="card-header">
        <h3 class="card-title"> افزودن اسلایدر جدید (اندازه بهینه ۱۹۵۰*۱۳۰۰ حجم کمتر از ۱۰۰ کیلوبایت)</h3>
    </div>
    <div class="card-body">

        <div>
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
                       <textarea class="textarea" placeholder="لطفا  متن {{ $specs['name'] }} خود را وارد کنید"
                                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $specs['name'] }}</textarea>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>

    </div>
    <!-- /.card-body -->
</div>
