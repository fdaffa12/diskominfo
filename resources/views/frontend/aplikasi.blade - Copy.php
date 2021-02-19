@extends ('frontend.master')
@section ('title')
<title>Aplikasi | DISKOMINFO</title>
@stop
@section ('content')

    <div class="wrapper">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Aplikasi Diskominfo</h1>
        </div>

        @foreach($aplikasis as $app)
            <div class="col col-sm-3 col-xs-6">
                       <a href="{{$app->url}}"><img src="{{url('public/aplikasis')}}/{{$app->image}}" class="img-responsive" style="width: 270px; height: 100px;"></a>
                       <a href="{{$app->url}}"><p style="text-align: center;">{{$app->title}}</p></a>
        </div>
        @endforeach
        </div>
    </div>


@stop
<script>
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
