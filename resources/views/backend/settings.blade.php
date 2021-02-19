@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Settings</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))

			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
			@endif
			<h3>Website Settings</h3>
			@if(count($data) < 1)
			<form method="post" action="{{url('addsettings')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<div class="form-group">
					<label>Address</label>
					<textarea name="about" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="phone" name="phone" class="form-control" placeholder="Enter your phone number">	
				</div>
				<div class="form-group">
					<input type="fax" name="fax" class="form-control" placeholder="Enter your fax number">	
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Enter your email">	
				</div>
				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10"></textarea>
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="about" class="form-control"></textarea>
				</div>
				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						<input type="url" name="social[]" class="form-control" >
						<p class="text-muted">e.g https://www/facebook.com/webtrickshome</p>
					</div>
				</div>
				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> You've reached the social fields limit.
					</div>
				</div>				
				<div class="form-group">
					<button class="btn btn-primary">Add Settings</button>
				</div>
			</form>
			<script>
				var socialCounter = 1;
				$('#addSocialField').click(function(){
					socialCounter++;
					if(socialCounter > 5){
						$('#socialAlert').removeClass('noshow');
						return;
					}
						newDiv = $(document.createElement('div')).attr("class","form-group");
						newDiv.after().html('<input type="url" name="social[]" class="form-control" ></div>');
						newDiv.appendTo("#socialFieldGroup");
					})
				</script>
			@else
			<form method="post" action="{{url('updatesettings')}}/{{$data->sid}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<input type="hidden" name="sid" value="{{$data->sid}}">
				<div class="form-group">
					<label>Addres</label>
					<textarea name="address" class="form-control">{{$data->address}}</textarea>
				</div>
				<div class="form-group">
					<input type="phone" name="phone" class="form-control" placeholder="Enter number phone" value="{{$data->phone}}">
				</div>
				<div class="form-group">
					<input type="fax" name="fax" class="form-control" placeholder="Enter your fax number" value="{{$data->fax}}">	
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{$data->emails}}">	
				</div>
				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10">{{$data->about}}</textarea>
				</div>
				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						@foreach($data->social as $social)
						<div class="form-group" >
							<input type="url" name="social[]" class="form-control socialCount" value="{{$social}}">
						</div>
						@endforeach
					</div>
				</div>
				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> You've reached the social fields limit.
					</div>
				</div>				
				<div class="form-group">
					<button class="btn btn-primary">Update Settings</button>
				</div>
			</form>
			<script>
				socialCounter = $('.socialCount').length;
				$('#addSocialField').click(function(){
					socialCounter++;
					if(socialCounter > 5){
						$('#socialAlert').removeClass('noshow');
						return;
					}
						newDiv = $(document.createElement('div')).attr("class","form-group");
						newDiv.after().html('<input type="url" name="social[]" class="form-control" ></div>');
						newDiv.appendTo("#socialFieldGroup");
					})
				</script>
			@endif	
		</div>
	</div>
</div>
<style>
	.noshow{display: none;}
</style>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>


@stop