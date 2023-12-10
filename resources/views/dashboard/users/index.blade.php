@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
       <div class="card col-8 offset-2 mt-3">
            <div class="card-header" >
                <div class="row">
                  <div class="col-4">
                      <a href="{{route('users.create')}}" class="btn btn-primary  float-left h-2" style="weight-font:bold "> <i class='fa fa-plus m-1'></i> {{__("user.add")}}</a>
                  </div>
                    <h2 class="col-5" style="weight-font:bold"> {{__('user.all_user')}} </h2> 
              </div>
             </div>
      <div class="card-body">
          <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('user.name')}}</th>
                    <th scope="col">{{__('user.email')}}</th>
                    <th scope="col">{{__('action')}}</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($getUser))
                @foreach ($getUser as $user)
                <tr>
                  <th scope="row">{{ $user->id}}</th>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->email}}</td>
                
                  <td> 
                    <div  class='row'>
                    <div class="col-4">
                       @include("dashboard.users.edit")
                    </div>
                        <form  class="col-4" action="{{route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('delete')
                          <button type="submit" class="btn  btn-sm btn-outline-danger" style="width:80px" onclick="return confirm('Are You Sure Delete','Are You Sure')"> <i class='fa fa-trash ms-2'></i>{{__('user.delete')}}</button>
                      
                      </form>
                      </div>
                    </td>
                </tr>
              @endforeach
              @endif
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection