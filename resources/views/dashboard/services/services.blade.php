
@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
  <a href="{{url('dashboard/create')}}" class=" btn btn-primary mx-3" style='margin:20px 0'>
    <i class="fa fa-plus ms-2"> </i>{{__('service.add')}}</a>
<div class="m-5">
 <div class="row">
   @foreach ($rows  as $row)
    <div class="col-sm-12 col-md-4 ">
       <div class="card" style="width: 18rem">
        <img src="{{asset('imgUpload/'.$row->image)}}" class="card-img-top" alt="..." style='height:150px'>
          <div class="card-body">
            <h5 class="card-title">{{$row->name}}</h5>
            <p class="card-text">{{$row->description}}</p>
            <a href="{{url('dashboard/delete',$row->id)}}" class="btn btn-danger  float-right m-1" onclick="return confirm('Are You Sure Delete','Are You Sure')"> <i class="fa fa-trash"></i>{{__('service.delete')}}</a>
            <a href='{{url('dashboard/edit',$row->id)}}' class="btn btn-primary  m-1">  <i class="fa fa-edit"></i> {{__('service.edit')}}</a>
          </div>
      </div>
    </div>
  @endforeach
 </div>
<div>
</div>
</div>
@endsection

