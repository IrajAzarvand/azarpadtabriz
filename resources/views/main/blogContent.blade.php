{{--this file will added to blog file in view folder--}}

<div class="main-wrapper">
    <main class="main-container">
        <div class="container mt-120">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
                    <div class="brs-posts-container brs-posts-container_right-divider">
                        @foreach($BlogList as $id=>$data)
                        <div class="mb-60">
                            <div class="brs-post brs-post_simple" data-brk-library="component__blog_css">
                                <div class="brs-post__img-container">
                                    <img src="{{$data['img']}}" alt="{{ Dictionary()['NoImage'][app()->getLocale()] }}" class="brs-post__img">
                                </div>
                                <div class="brs-post__body">
                                    <div class="brs-post__information font__family-montserrat font__weight-semibold font__size-13 line__height-14">
                                        <a href="#" class="brs-post__date">
                                            <i class="fa fa-calendar"></i>{{$data['date']}}
                                        </a>
                                        <a href="#" class="brs-post__comments">
                                            <i class="far fa-comments brs-post__comments-icon"></i> {{$data['CommentsCount']}}
                                        </a>
                                    </div>
                                    <h2 class="brs-post__title font__family-montserrat font__size-24 font__weight-bold line__height-28 text-left">
                                        {{$data['title'][app()->getLocale()]}}</h2>
                                    <p class="brs-post__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26">
                                        {!! nl2br($data['content'][app()->getLocale()]) !!}
                                    </p>
                                    <a href="{{route('showBlog',$data['id'])}}" class="brs-post__more font__family-montserrat font__size-14 font__weight-normal line__height-26 text-left">{{ Dictionary()['More'][app()->getLocale()] }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                        <div class="mt-80 mb-50">--}}
{{--                            <div class="brk-pagination brk-pagination-seven font__family-open-sans" data-brk-library="component__pagination">--}}
{{--                                <nav class="navigation pagination" role="navigation">--}}
{{--                                    <h2 class="screen-reader-text">Навигация по записям</h2>--}}
{{--                                    <div class="nav-links">--}}
{{--                                        <a class="prev page-numbers" href="#">previous page</a>--}}
{{--                                        <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">page </span>1</a>--}}
{{--                                        <span class="page-numbers current"><span class="meta-nav screen-reader-text">page </span>2</span>--}}
{{--                                        <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">page </span>3</a>--}}
{{--                                        <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">page </span>4</a>--}}
{{--                                        <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">page </span>5</a>--}}
{{--                                        <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">page </span>6</a>--}}
{{--                                        <span class="page-numbers dots">&hellip;</span>--}}
{{--                                        <a class="page-numbers" href="javascript:void(0)"><span class="meta-nav screen-reader-text">page </span>7</a>--}}
{{--                                        <a class="next page-numbers" href="#">next page</a>--}}
{{--                                    </div>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-3 order-xs-1 order-lg-2">
                    <div class="brs-sidebar brs-sidebar_right" data-brk-library="component__widgets">


                        <div class="brs-tab brs-tab_dual" data-brk-library="component__widgets">
                            <ul class="nav nav-tabs brs-tab__header" id="news-tab" role="tablist">
                                <li class="nav-item brs-tab__header-item">
                                    <a class="nav-link brs-tab__header-title font__family-montserrat font__size-16 font__weight-bold line__height-18 active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">
                                        <i class="brs-tab__header-title-icon"></i>{{ Dictionary()['Recent'][app()->getLocale()] }}</a>
                                </li>
                            </ul>
                            <div class="tab-content brs-tab__body" id="news-tabContent">
                                <div class="tab-pane brs-tab__body-item fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">

                                    @foreach($RecentBlogs as $id=>$data)
                                    <div class="brs-post brs-post_mini-horizontal" data-brk-library="component__widgets">
                                        <div class="brs-post__img-container">
                                            <a href="{{route('showBlog',$data['id'])}}">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{$data['img']}}" alt="alt" class="brs-post__img lazyload">
                                            </a>
                                        </div>
                                        <div class="brs-post__about">
                                            <a href="#" class="brs-post__date">
                                                <i class="fa fa-calendar"></i>
                                                <span class="font__family-montserrat font__size-13 line__height-14 font__weight-normal">{{$data['date']}}</span>
                                            </a>
                                            <a href="{{route('showBlog',$data['id'])}}">
                                                <h3 class="brs-post__title font__family-montserrat font__size-15 font__weight-normal line__height-18">{{$data['title'][app()->getLocale()]}}</h3>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="brs-sidebar__title">
                            <h3 class="font__family-montserrat font__size-21 font__weight-bold line__height-22">{{ Dictionary()['Tags'][app()->getLocale()] }}</h3>
                        </div>
                        <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                            @isset($tagList[app()->getLocale()])
                            @foreach($tagList[app()->getLocale()] as $item)
                            <li><a href="#" rel="tag">{{$item}}</a></li>
                            @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
