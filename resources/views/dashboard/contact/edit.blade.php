@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
<a  class=" ms-3 mt-3  col-1 btn btn-primary" href="{{route("contacts.index")}}" > << {{__('service.back')}} </a>

<div class="col-6 offset-2 mt-3">
<div class='card'>
   <div class='card-header'>
      <h2 class='text-center'  style="weight-font:bold;color: #666">{{__("contact.con_edit")}}</h2>   
   <div>
   <div class='card-body'>
 <form action="{{route('contacts.update',$contact->id)}}" method="post">
   @csrf
   @method('put')
    <div class="mb-3">
      <input type="text" class="form-control p-4"  value="{{$contact->title}}" name="title" id="title" placeholder="{{__("contact.title")}}">
    </div>
    <div class="mb-3">
        <input type="email" class="form-control p-4" value="{{$contact->email}}"  name="email"  id="email" placeholder="{{__('contact.email')}}">
    </div>
    <div class="mb-3">
           <input type="phone" class="form-control p-4" value="{{$contact->phone}}"  name="phone" id="address" placeholder="{{__("contact.placeholder")}}">
    </div>
   <div class='card-footer'>
    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-primary"><i class="fa fa-edit m-1"></i>{{__('contact.edit')}}</button>
    </div>
   </div>
  </form>
  </div>
</div>
</div>
</div>
</div>
@endsection