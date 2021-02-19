@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Welcome to Dashboard</h2>
				<p class="welcome-text">We,ve assembled some links for you to get started.</p>
				<div class="row">
					<div class="col-sm-4 quick-links">
						<h4>View Records</h4>
						<p><a href="{{'all-post'}}"><i class="fa fa-bookmark-o"></i> View All Posts</a></p>
						<p><a href="{{'all-sliders'}}"><i class="fa fa-image"></i> View All Galleries</a></p>
						<p><a href="{{'all-pages'}}"><i class="fa fa-file"></i> View All Pages</a></p>
						<p><a href="{{'all-advs'}}"><i class="fa fa-image"></i> View All Advertisements</a></p>
						<p><a href="{{'all-app'}}"><i class="fa fa-desktop"></i> View All Aplications</a></p>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Add Records</h4>
						<p><a href="{{'add-post'}}"><i class="fa fa-bookmark-o"></i> Add Posts</a></p>
						<p><a href="{{'add-slider'}}"><i class="fa fa-image"></i> Add Galleries</a></p>
						<p><a href="{{'add-page'}}"><i class="fa fa-file"></i> Add Pages</a></p>
						<p><a href="{{'add-adv'}}"><i class="fa fa-image"></i> Add Advertisements</a></p>
						<p><a href="{{'add-app'}}"><i class="fa fa-desktop"></i> Add Aplications</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@stop