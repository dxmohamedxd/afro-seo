@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
<div class="col-6 offset-2 mt-4">
  <div class='card'>
      <div class='card-header'>
           <p class="h2 text-center" style='color: #666'> {{__('contact.add_con')}}</p>
      </div>
    <div class='card-body'>
      <form action="{{route('contacts.store')}}" class="" method="post">
       @csrf
    <div class="mb-3">
      <label for="title" class="form-label"> {{__('contact.title')}}</label>
      <input type="text" class="form-control" name="title" id="name" placeholder="{{__('contact.title')}}"  required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">{{__('contact.email')}} </label>
        <input type="email" class="form-control" name="email"  id="email" placeholder="{{__('contact.email')}}"  required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">{{__('contact.phone')}} </label>
        <input type="phone" class="form-control" name="phone" id="address" placeholder="{{__('contact.placeholder')}}"  required>
    </div>

       <div class="mb-3 text-center">
           <button type="submit" class="btn btn-primary"><i class='fa fa-plus ms-1'></i>{{__('contact.add_con')}}</button>
      </div>
   
  </form>
  </div>
</div>
</div>
@endsection