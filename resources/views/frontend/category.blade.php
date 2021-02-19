@extends ('frontend.master')
@section ('title')
<title>{{$cat->title}} | DISKOMINFO</title>
@stop
@section ('content') 
	<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left" style="padding-top: 20px;">{{$cat->title}}<a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                @foreach($posts as $key=>$post)
                                @if($key > 0 && $key < 6)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{url('article')}}/{{$post->slug}}" title="">
                                                <img src="{{url('public/posts')}}/{{$post->image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{url('article')}}/{{$post->slug}}">{{$post->title}}</a></h4>
                                        <p>{!! substr($post->description,0,300) !!}</p>
                                        <a href="{{url('article')}}/{{$post->slug}}"></a>
                                        <i class="fa fa-calendar"></i>
                                        <small>{{ $post->created_at }}</small>
                                        <i class="fa fa-eye"></i>
                                        <small>{{ $post->views + 1 }}
                                            @if($post->views !=0)
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
                                    {!! $posts->links() !!}
                                </div>

                                <hr class="invis">
                            </div>
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">

                            <div class="widget">
                                <h2 class="widget-title" style="padding-top: 22px;">Sering Dikunjungi</h2>
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
