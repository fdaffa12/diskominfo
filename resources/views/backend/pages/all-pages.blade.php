@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All pages <a href="{{url('add-page')}}" class="btn btn-sm btn-default">Add New</a></h1>
    </div>
    <div class="col-sm-12">
      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
      {{Session('message')}}
      </div>
      @endif
    </div>
    <div class="search-div">
      <div class="col-sm-9">
        All({{($allposts)}}) | <a href="#">Published ({{$published}})</a>
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>

    <div class="filter-div">
      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('pages')}}">
      <input type="hidden" name="tblid" value="{{encrypt('pageid')}}">
      <div class="col-sm-3 text-right">
      </div>
    </div>  
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th width="50%">Title</th>
              <th width="15%">Status</th>
              <th width="10%">Date</th>
              <th width="15%">Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($posts) > 0)
            @foreach($posts as $post)
            <tr>
              <td>{{$post->title}}
              </td>
              <td>{{$post->status}}</td>
              <td>{{$post->created_at}}</td>
              <td>
                <a href="{{url('editpage')}}/{{$post->pageid}}"><button type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button></a>
                <a href="{{url('deletepgs')}}/{{$post->pageid}}"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              </td>           
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="4">No Pages Found.</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
</div>

@stop