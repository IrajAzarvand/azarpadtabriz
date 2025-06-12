@extends('layouts.master_layout')

@section('contents')
<div class="main-wrapper">
    <main class="main-container">
        <div class="container mt-80 mb-80">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="brs-posts-container pt-20" data-brk-library="component__blog_page">
                        <div class="brk-post-full">
                            <h2 class="brk-post-full__title font__family-montserrat font__size-lg-36 font__size-26 line-height-1 font__weight-semibold mt-10 mb-35">
                                {{$ApplicationContent['title'][app()->getLocale()]}}
                            </h2>

                            @isset($ApplicationContent['image'])
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{asset($ApplicationContent['image'])}}" class="mb-35" alt="alt">
                                    </div>
                                </div>
                            @endisset

                            <p class="brk-dark-font-color font__family-open-sans font__size-15 font__weight-normal line__height-26 mb-25">
                                {!! nl2br($ApplicationContent['content'][app()->getLocale()]) !!}
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
