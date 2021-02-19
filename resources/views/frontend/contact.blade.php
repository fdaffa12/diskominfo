@extends ('frontend.master')
@section ('title')
<title>Contact Us | Newspaper</title>
@stop
@section ('content')

        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-open-o bg-orange"></i> Contact us</h2>
                    </div><!-- end col -->             
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    @if(Session::has('message'))
                        <div class="col-md-12">
                          <div class="alert alert-success" style="">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                          {{Session('message')}}
                          </div>
                        </div>  
                         @endif 
                    <div class="col-lg-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-7">
                                    <form class="form-wrapper" method="post" action="{{url('sendmessage')}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                                        <input type="text" name="name" class="form-control" placeholder="Your name">
                                        <input type="email" name="email" class="form-control" placeholder="Email address">
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone">
                                        <textarea name="message" class="form-control" placeholder="Your message"></textarea>
                                        <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@stop
