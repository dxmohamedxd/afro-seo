 
@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
<div class="col-6 offset-2 mt-4">
  <div class='card'>
      <div class='card-header'>
           <p class="h2 text-center" style='color: #666'> {{__('service.add')}}</p>
      </div>
    <div class='card-body'>
      <form action="{{url('dashboard/insert')}}" class="" method="post" enctype="multipart/form-data" >
       @csrf
    <div class="mb-3">
      <label for="title" class="form-label"> {{__('service.name')}}</label>
      <input type="text" class="form-control" name="name" id="name"  required >
    </div>
    <div class="mb-3">
        <label for="des" class="form-label">{{__('service.des')}} </label>
        <input type="text" class="form-control" name="description"    required id="des">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">{{__('service.img')}} </label>
        <input type="file" class="form-control"   name="image" id="image"  required style="display:none">
           <label for="image" class="form-control"></label>
    </div>

       <div class="mb-3 text-center">
           <button type="submit" class="btn btn-primary"><i class='fa fa-plus'></i>{{__('service.add')}}</button>
      </div>
   
  </form>
  </div>
</div>
</div>
@endsection