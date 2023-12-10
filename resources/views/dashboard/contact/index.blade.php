@extends('dashboard.layout.dashboardMaster')
@section('contact-page')
       <div class="card col-9 offset-1 mt-3">
                       <div class="card-header" >
                          <div class="row">
                            <div class="col-md-2">
                                <a href="{{route('contacts.create')}}" class="btn btn-primary  float-left h-2" style="weight-font:bold "> <i class='fa fa-plus m-1'></i> {{__("contact.add")}}</a>
                             </div>
                              <div class="col-md-5">
                                   <h2 style="weight-font:bold"> {{__('contact.contact')}}</h2> 
                               </div>
                           </div>
                       </div>
                       <div class="card-body">
                      <table class="table">
                            <thead>
                               <tr>
                                <th scope="col">#</th>
                               <th scope="col">{{__('contact.title')}}</th>
                               <th scope="col">{{__('contact.email')}}</th>
                               <th scope="col">{{__('contact.phone')}}</th>
                                <th scope="col">{{__('contact.action')}}</th>
                             </tr>
                           </thead>
                           <tbody>
                           @if(isset($contacts))
                           @foreach ($contacts as $contact )
                            <tr>
                             <th scope="row">{{$contact->id}}</th>
                              <td>{{$contact->title}}</td>
                              <td>{{$contact->email}}</td>
                             <td>{{$contact->phone}}</td>
                              <td> 
                                <div  class='row'>
                                   <div class="col-4 ">
                                      <a href="{{route('contacts.edit',$contact->id)}}"  class="btn btn-sm  btn-outline-success" style="width:68px"><i class='fa fa-edit'></i>{{__('contact.edit')}}</a>
                                   </div>
                              
                                     <form  class="col-4" action="{{route('contacts.destroy',$contact->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                         <button type="submit" class="btn  btn-sm btn-outline-danger"  style="width:68px" onclick="return confirm('Are You Sure Delete','Are You Sure')"><i class='fa fa-trash'></i>{{__('contact.delete')}}</button>
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