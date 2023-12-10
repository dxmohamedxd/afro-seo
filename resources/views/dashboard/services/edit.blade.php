@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
<a  class=" ms-3 mt-3  col-1 btn btn-primary" href="{{route('dashSerivces')}}" > << {{__('service.back')}} </a>
<div class="col-6 offset-2 mt-3">
<div class='card'>
   <div class='card-header'>
        <h5 class="modal-title">{{__('service.edit')}}</h5>
    </div>
    <div class="card-body">
              <form  class='d-block m-auto'  method="POST"  action="{{url('dashboard/update/'.$row->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                  <div class="form-group">
                    <label for="name">{{__('service.name')}}</label>
                    <input type="text" class="form-control p-4" value='{{$row->name}}' id="name"  name="name" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="des">{{__('service.des')}}</label>
                    <input type="text" class="form-control p-4" value='{{$row->description}}' name="description" id="des" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>{{__('service.img')}}</label>
                    <div class="input-group">
                      <label for='img' name="image"><img src='{{asset('imgUpload/'.$row->image)}}' height='150px' width='100%'></label>
                      <div class="custom-file">
                        <input type="file"  name="image" class="form-group" value="{{$row->image}}" id="img" style='display:none'>
                      </div>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->

              <div class="card-footer">
                  <button type="submit" class="d-block m-auto text-center btn btn-primary btn-lg">{{__('service.edit')}}</button>
                </div>
              </form>   
        </div>   
    </div>
  </div>
</div>
@endsection

