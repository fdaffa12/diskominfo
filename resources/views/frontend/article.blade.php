@extends ('frontend.master')
@section ('title')
<title>{{$data->title}} | DISKOMINFO</title>
@stop
@section('content')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v7.0" nonce="4SLnVn2i"></script>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script> 
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <h3>{{$data->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <i class="fa fa-calendar"></i>
                                    <small><a href="tech-single.html" title="">{{ $data->created_at }}</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> {{ $data->views + 1 }}
                                @if($data->views !=0)
                                Views 
                                @else
                                View
                                @endif</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <div class="fb-share-button" data-href="{{url('article')}}/{{$data->slug}}" data-layout="button" data-size="small"></div>
                                    <span class="tweet-btn">
                                    <a class="twitter-share-button" href="{{url('article')}}/{{$data->slug}}" data-size="small">
                                    Tweet</a>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{url('public/posts')}}/{{$data->image}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p>{!! $data->description !!}</p>

                                </div><!-- end pp -->
                            </div><!-- end content -->

                            <div class="blog-title-area">

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <ul class="list-inline">
                                        <div class="fb-share-button" data-href="{{url('article')}}/{{$data->slug}}" data-layout="button" data-size="small"></div>
                                        <span class="tweet-btn">
                                        <a class="twitter-share-button" href="{{url('article')}}/{{$data->slug}}" data-size="small">
                                        Tweet</a>
                                        </ul>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">You may also like</h4>
                                <div class="row">
                                    @foreach($related->take(2) as $r)
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{url('article')}}/{{$r->slug}}" title="">
                                                    <img src="{{url('public/posts')}}/{{$r->image}}" alt="" class="img-fluid" style=" height: 190px;">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="{{url('article')}}/{{$r->slug}}" title="">{{$r->title}}</a></h4>
                                                <small><a href="blog-category-01.html" title="">{{$r->created_at}}</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                    @endforeach
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">

                            <div class="widget">
                                <h2 class="widget-title">Sering Dikunjungi</h2>
                                <div class="blog-list-widget">
                                    @foreach($populars->take(7) as $popular)
                                    <div class="list-group">
                                        <a href="{{url('article')}}/{{$popular->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{url('public/posts')}}/{{$popular->image}}" alt="" class="img-fluid float-left" style="width: 100%;">
                                                <h5 class="mb-1">{{$popular->title}}</h5>
                                                <i class="fa fa-calendar"></i>
                                                <small>{{$popular->created_at}}  / </small>
                                                <i class="fa fa-eye"></i>
                                                <small>{{ $popular->views + 1 }}
                                                @if($popular->views !=0)
                                                Views 
                                                @else
                                                View
                                                @endif
                                            </small>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Berita Terbaru</h2>
                                <div class="blog-list-widget">
                                    @foreach($latest->take(7) as $last)
                                    <div class="list-group">
                                        <a href="{{url('article')}}/{{$last->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{url('public/posts')}}/{{$last->image}}" alt="" class="img-fluid float-left" style="width: 100%;">
                                                <h5 class="mb-1">{{$last->title}}</h5>
                                                <i class="fa fa-calendar"></i>
                                                <small>{{$last->created_at}}  / </small>
                                                <i class="fa fa-eye"></i>
                                                <small>{{ $last->views + 1 }}
                                                @if($last->views !=0)
                                                Views 
                                                @else
                                                View
                                                @endif
                                            </small>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@stop