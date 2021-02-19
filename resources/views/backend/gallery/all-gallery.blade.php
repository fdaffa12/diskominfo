@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> All Sliders <a href="{{url('form')}}" class="btn btn-sm btn-default">Add New</a></h1>
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
        <input type="text" id="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>

    <form method="post" action="{{url('multipledelete')}}">
    <div class="filter-div">
      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('forms')}}">
      <input type="hidden" name="tblid" value="{{encrypt('id')}}">
        <div class="col-sm-2">
          <select name="bulk-action" class="form-control">
            <option value="0">Bulk Action</option>
            <option value="1">Move to Trash</option>
          </select>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
      <div class="col-sm-3 text-right">
      </div>
    </div>  
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"> Image</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data) > 0)
            @foreach($data as $d)
            <tr>
              <td>
                <input type="checkbox" name="select-data[]" value="{{$d-id}}"> 
                <a href="{{url('editgallery')}}/{{$d->id}}">{{$d->title}}</a>
              </td>
              <td>{{$d->url}}</td>
              <td><img src="{{url('public/images')}}/{{$d->image}}" width="200"></td>
              <td>{{$d->status}}</td>              
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
  </form>
  </div>
</div>

@stop