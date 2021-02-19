@extends ('frontend.master')
@section ('title')
<title>Hasil Pencarian | DISKOMINFO</title>
@stop
@section ('content')
	<div class="wrapper">

		<h1>Search Result</h1>
		<p>{{ $posts->count() }} result(s) for '{{ request()->input('query') }}'</p>
		<div class="col-md-8">
		@foreach($posts as $post)
			<div><h4 style="padding-left: 0px;"><a href="{{url('article')}}/{{$post->slug}}">{{ $post->title }}</a></h4>
				<div class="text-right view-count" style="text-align: left;">
					<h3>
						<i class="fa fa-calendar"></i>
						{{ $post->created_at }}
					</h3>
				</div>
			</div>
			<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;"></div>
		@endforeach
		</div>

		<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">LATEST NEWS</span></h3>
					@foreach($latest->take(10) as $l)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
								<a href="{{url('article')}}/{{$l->slug}}"><img src="{{url('public/posts')}}/{{$l->image}}" width="100%" style="margin-left:-15px;" />
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4><a href="{{url('article')}}/{{$l->slug}}">{{$l->title}}</a></h4>
							</div>
						</div>
					</div>
					@endforeach
				</div> 
			</div>
		</div> 
	</div>


@stop
