@extends ('frontend.master')
@section ('title')
<title>Gallery | DISKOMINFO</title>
@stop
@section ('content')
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

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
                    
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <h3 style="padding-top: 30px;">Gallery</h3>
                            </div><!-- end title -->
                            <div class="blog-grid-system">
                                <div class="row">
                                    @foreach($sliders as $b)
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                    <img src="{{url('public/sliders')}}/{{$b->image}}" alt="" class="img-fluid" style="width: 500px; height: 220px;">
                                                    <div class="hovereffect">
                                                        <span></span>
                                                    </div><!-- end hover -->
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <h4 style="text-align: center;">{{$b->title}}</h4>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                    @endforeach
                                </div><!-- end row -->
                            </div><!-- end blog-grid-system -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis3">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@stop