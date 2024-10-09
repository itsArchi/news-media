@extends('frontend.layout')

@section('content')
<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="single-post">
                    <div class="post-header mb-5">
                        <a class="post-category" href="post-category-1.html">{{$news_detail->name_category}}</a>
                        <h2 class="post-title">
                            {{$news_detail->news_title}}
                        </h2>
                    </div>
                    <div class="post-body">
                        <div class="post-featured-image">
                            <img src="/image/{{$news_detail->image}}" class="img-fluid" alt="featured-image">
                        </div>
                        <div class="entry-content">
                            <p>
                                {{$news_detail->news_content}}
                            </p>
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