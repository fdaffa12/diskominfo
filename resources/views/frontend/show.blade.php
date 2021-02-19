@extends ('frontend.master')
@section ('content')
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left" style="padding-top: 20px">Search Result<i class="fa fa-search"></i></h4>
                            </br>
                                <p style="padding-top: 20px;">  {{ $posts->count() }} result(s) for '{{ request()->input('query') }}'</p>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                @foreach($posts as $post)
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
                                        <h4><a href="{{url('article')}}/{{$post->slug}}">{{ $post->title }}</a></h4>
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
                                @endforeach

                                <div class="d-flex justify-content-center">
                                    {!! $posts->links() !!}
                                </div>

                                <hr class="invis">
                            </div>
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@stop
