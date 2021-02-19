@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Application <a href="{{url('add-app')}}" class="btn btn-sm btn-default">Add New</a></h1>
    </div>
    <div class="col-sm-12">
      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
      {{Session('message')}}
      </div>
      @endif
    </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search Application">
      </div>
    </div>  

    <div class="clearfix"></div>

    <div class="filter-div">
      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('aplikasis')}}">
      <input type="hidden" name="tblid" value="{{encrypt('apid')}}">
      <div class="col-sm-3 text-right">
      </div>
    </div>  
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th>Title</th>
              <th>Link</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data) > 0)
            @foreach($data as $d)
            <tr>
              <td>{{$d->title}}</td>
              <td>{{$d->url}}</td>
              <td><img src="{{url('public/aplikasis')}}/{{$d->image}}" width="200"></td>
              <td>{{$d->status}}</td>
              <td>
                <a href="{{url('editapp')}}/{{$d->apid}}"><button type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button></a>
                <a href="{{url('deleteapps')}}/{{$d->apid}}"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
              </td>           
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="4">No Data Found.</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop