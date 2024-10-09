@extends('frontend.layout')

@section('content')
<section class="featured-posts">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-md-3 mr-lg-3">
                    <div class="item" style="background-image:url(/image/{{$list_headline_news[0]['image']}})">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-primary">{{$list_headline_news[0]['name_category']}}</a>
                            <h2 class="slider-post-title">
                                <a href="/detail/{{$list_headline_news[0]['id']}}">{{$list_headline_news[0]['news_title']}}</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline_news[0]['created_at']}}</span>
                                <span class="post-author">
                                    by
                                    <a href="/detail/{{$list_headline_news[0]['id']}}">Administrator</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-lg-3">
                    <div class="item" style="background-image:url(/image/{{$list_headline_news[1]['image']}})">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-danger">{{$list_headline_news[1]['name_category']}}</a>
                            <h2 class="slider-post-title">
                                <a href="/detail/{{$list_headline_news[1]['id']}}">{{$list_headline_news[1]['news_title']}}</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline_news[1]['created_at']}}</span>
                                <span class="post-author">
                                    <span> by </span>
                                    <a href="/detail/{{$list_headline_news[1]['id']}}">Administrator</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-4">
                <div class="row mt-3 mt-lg-0">
                    <div class="col-lg-12 col-xs-12 col-sm-6 col-md-6">
                        <div class="post-featured-style" style="background-image:url(/image/{{$list_headline_news[2]['image']}})">
                            <div class="post-content">
                                <a href="#" class="post-cat bg-success">{{$list_headline_news[2]['name_category']}}</a>
                                <h2 class="post-title">
                                    <a href="/detail/{{$list_headline_news[2]['id']}}">{{$list_headline_news[2]['news_title']}}</a>
                                </h2>
                                <div class="post-meta mt-2">
                                    <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline_news[2]['created_at']}}</span>
                                    <span class="post-author">
                                        <span> by </span>
                                        <a href="/detail/{{$list_headline_news[2]['id']}}">Administrator</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-xs-12 col-sm-6 col-md-6">
                        <div class="post-featured-style" style="background-image:url(/image/{{$list_headline_news[3]['image']}})">
                            <div class="post-content">
                                <a href="#" class="post-cat bg-info">{{$list_headline_news[3]['name_category']}}</a>
                                <h2 class="post-title">
                                    <a href="/detail/{{$list_headline_news[3]['id']}}">{{$list_headline_news[3]['news_title']}}</a>
                                </h2>
                                <div class="post-meta mt-2">
                                    <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>{{$list_headline_news[3]['created_at']}}</span>
                                    <span class="post-author">
                                        <span> by </span>
                                        <a href="/detail/{{$list_headline_news[3]['id']}}">Administrator</a>>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="news-style-one">
                </div>
				<div class="py-40"></div>
				<div class="news-style-two">
                    <h3 class="news-title">
                        <span>Latest News</span>
                    </h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="post-list-block m-top-0">
                                @foreach ($list_latest_news as $news)
                                <div class="post-block-wrapper post-float clearfix">
                                    <div class="post-thumbnail col-4">
                                        <a href="/detail/{{$news->id}}">
                                            <img class="img-fluid" src="/image/{{$news->image}}" alt="post-thumbnail"/>
                                        </a>
                                    </div>

                                    <div class="post-content col-8">
                                        <h2 class="post-title title-sm">
                                            <a href="/detail/{{$news->id}}">{{$news->news_title}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$news->created_at}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="widget">
                        <h3 class="news-title">
                            <span>Stay in touch</span>
                        </h3>

                        <ul class="list-inline social-widget">
                            <li class="list-inline-item">
                                <a class="social-page youtube" href="#">
                                    <i class="fa fa-play"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page facebook" href="#">
                                <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page pinterest" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        
                            <li class="list-inline-item">
                                <a class="social-page youtube" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                        <div class="widget">
                            <h3 class="news-title">
                                <span>Hot News</span>
                            </h3>

                            <div class="post-list-block">
                                @foreach ($list_featured_news as $news)
                                <div class="post-block-wrapper post-float ">
                                    <div class="post-thumbnail">
                                        <a href="/detail/{{$news->id}}">
                                            <img class="img-fluid" src="/image/{{$news->image}}" alt="post-thumbnail"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="/detail/{{$news->id}}">{{$news->news_title}}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-1"></i>{{$news->created_at}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection