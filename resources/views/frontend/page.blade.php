@extends ('frontend.master')
@section ('title')
<title>{{$data->title}} | DISKOMINFO</title>
@stop
@section('content')
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <h3>{{$data->title}}</h3>
                            </div><!-- end title -->

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

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->
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