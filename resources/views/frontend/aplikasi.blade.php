@extends ('frontend.master')
@section ('title')
<title>Gallery | DISKOMINFO</title>
@stop
@section ('content')
        <section class="section">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <h3 style="padding-top: 30px;">Aplikasi yang Dikelola oleh DISKOMINFO</h3>
                            </div><!-- end title -->
                            <div class="blog-grid-system">
                                <div class="row">
                                    @foreach($aplikasis as $app)
                                    <div class="col col-sm-3 col-xs-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{$app->url}}">
                                                    <img src="{{url('public/aplikasis')}}/{{$app->image}}" alt="" class="img-fluid" style="width: 270px; height: 100px;">
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <a href="{{$app->url}}">
                                                <h4 style="text-align: center;">{{$app->title}}</h4>
                                                </a>
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