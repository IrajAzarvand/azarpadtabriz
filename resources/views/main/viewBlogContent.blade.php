{{--this file will added to blog file in view folder--}}

<div class="main-wrapper">
    <main class="main-container">
        <div class="container mt-80 mb-80">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="brs-posts-container pt-20" data-brk-library="component__blog_page">
                        <div class="brk-post-full">
                            <div class="brk-post-full__meta font__family-montserrat font__weight-semibold font__size-13 line__height-14 text-uppercase">
                                <a href="#" class="brk-post-full__meta-date">
                                    <i class="fa fa-calendar"></i>
                                    <span>{{$blogContents['date']}}</span>
                                </a>
                                <a href="#" class="brk-post-full__meta-comments">
                                    <i class="far fa-comments"></i>
                                    <span>{{$blogContents['CommentsCount']}}</span>
                                </a>
                            </div>
                            <h2 class="brk-post-full__title font__family-montserrat font__size-lg-36 font__size-26 line-height-1 font__weight-semibold mt-10 mb-35">
                                {{$blogContents['title']}}
                            </h2>
                            @isset($blogContents['image'])
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{$blogContents['image']}}" class="mb-35" alt="alt">
                                </div>
                            </div>
                            @endisset

                            <p class="brk-dark-font-color font__family-open-sans font__size-15 font__weight-normal line__height-26 mb-25">
                                {!! nl2br($blogContents['content']) !!}
                            </p>

                            <div class="d-flex align-items-start mb-10">
                                <span class="font-dark-color-2 font__Family-montserrat font__size-15 line-height-1-5 my-2 font__weight-semibold text-uppercase mr-10 brk-post-full__fixed-width">{{ Dictionary()['Tags'][app()->getLocale()] }}:</span>
                                <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                    @foreach($blogTags as $tag)
                                    <li><a href="#" rel="tag">{{$tag}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            </div>
                            <div class="mb-40">
                                <div class="brk-reply mt-40" data-brk-library="component__forum_post">
                                <h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">{{ Dictionary()['LeaveAComment'][app()->getLocale()] }}</h3>
                                <form method="post" action="{{route('saveBlogComment')}}" class="brk-reply__form brk-form-strict" data-brk-library="component__form">
                                    @csrf
                                    <input type="hidden" name="blogId" value="{{$blogId}}" >

                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input name="name" type="text" required placeholder="{{ Dictionary()['Name'][app()->getLocale()] }}">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <input name="email" type="email" required placeholder="{{ Dictionary()['Email'][app()->getLocale()] }}">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="Message" required placeholder="{{ Dictionary()['Message'][app()->getLocale()] }}"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
                                        <i class="fas fa-long-arrow-alt-right icon-inside"></i>
                                        <span class="before">{{ Dictionary()['Send'][app()->getLocale()] }}</span><span class="text">{{ Dictionary()['Send'][app()->getLocale()] }}</span><span class="after">{{ Dictionary()['Send'][app()->getLocale()] }}</span>
                                    </button>
                                </form>
                                </div>
                            </div>
                            <h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 mb-10">{{ Dictionary()['Comments'][app()->getLocale()] }}</h3>
                            <div>

                                @foreach($blogContents['comments'] as $name=>$comment)

                                <div class="brk-reply-item" data-brk-library="component__blog_page_css">
                                <a href="#" class="brk-reply-item__user">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('storage/Main_images/person.jpg')}}" alt="alt" class="lazyload">
                                </a>
                                <div class="brk-reply-item__content">
                                    <div class="d-sm-flex justify-content-sm-between">

                                        <a href="#" class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">{{$name}}</a>
                                    </div>
                                    <div class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
                                        {!! nl2br($comment) !!}
                                    </div>
                                </div>
                                </div>
                                @endforeach

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

