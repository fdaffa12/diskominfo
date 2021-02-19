@extends ('frontend.master')
@section ('content')

        <section class="section" style="padding: 0px;"> 
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach($banners as $key => $banner)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img src="{{asset('public/posts/'.$banner->image)}}" alt="{{$banner->title}}" style="width: 100%; height: 500px;">
                            <div class="carousel-caption">
                                <a href="{{url('article')}}/{{$banner->slug}}"><h3>{{$banner->title}}</h3></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
        </section>

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                            <div class="blog-top clearfix" style="margin-top: 10px;">
                                <h4 class="pull-left" style="margin-left: 20px;">Featured <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                    @if(count($featured) > 0)
                    <div class="first-slot">
                    @foreach($featured as $key=>$f)
                    @if($key == 0)
                        <div class="masonry-box post-media">
                             <img src="{{url('public/posts')}}/{{$f->image}}" alt="" class="img-fluid" style="height: 504px;">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <h4><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    @endif
                    @endforeach
                    </div><!-- end first-side -->

                    <div class="col-sm-12">
                    @foreach($featured as $key=>$f)
                    @if($key > 0 && $key < 5)
                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('public/posts')}}/{{$f->image}}" width="100%" /></a>
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <h4><a href="{{url('article')}}/{{$f->slug}}">{{$f->title}}</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                    @endif
                    @endforeach
                    </div>
                @endif
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                @foreach($beritas as $key=>$berita)
                                @if($key > 0 && $key < 6)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{url('article')}}/{{$berita->slug}}" title="">
                                                <img src="{{url('public/posts')}}/{{$berita->image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{url('article')}}/{{$berita->slug}}">{{$berita->title}}</a></h4>
                                        <p>{!! substr($berita->description,0,300) !!}</p>
                                        <a href="{{url('article')}}/{{$berita->slug}}"></a>
                                        <i class="fa fa-calendar"></i>
                                        <small>{{ $berita->created_at }}</small>
                                        <i class="fa fa-eye"></i>
                                        <small>{{ $berita->views + 1 }}
                                            @if($berita->views !=0)
                                            Views 
                                            @else
                                            View
                                            @endif
                                        </small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                @endif
                                @endforeach

                                <div class="d-flex justify-content-center">
                                    {!! $beritas->links() !!}
                                </div>

                                <hr class="invis">
                            </div>
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">

                            <div class="widget">
                                <h2 class="widget-title">Pengumuman</h2>
                                <div class="blog-list-widget">
                                    @foreach($pengumumans->take(4) as $pengumuman)
                                    <div class="list-group">
                                        <a href="{{url('article')}}/{{$pengumuman->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{url('public/posts')}}/{{$pengumuman->image}}" alt="" class="img-fluid float-left" style="width: 100%;">
                                                <h5 class="mb-1">{{$pengumuman->title}}</h5>
                                                <small>{{$pengumuman->created_at}}</small>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Sering Dikunjungi</h2>
                                <div class="blog-list-widget">
                                    @foreach($populars->take(4) as $popular)
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
                                <h2 class="widget-title">Gallery</h2>
                                <div class="trend-videos">
                                    <div class="blog-box">
                                        @foreach($sliders->take(5) as $b)
                                        <div class="post-media">
                                            <a href="{{url('gallery')}}"><img src="{{url('public/sliders')}}/{{$b->image}}"/></a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="{{url('gallery')}}" title="">{{$b->title}}</a></h4>
                                        </div><!-- end meta -->
                                        @endforeach
                                    </div><!-- end blog-box -->

                                    <hr class="invis">
                                </div><!-- end videos -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@stop
