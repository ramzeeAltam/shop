 
@extends('admin.layout.master')
@section("content")
<div class="container">
           <h1 class="text-center">{{__('messages.MMambers')}}</h1>
           <div class="show-table">
           <table class="table table-responsive  table-striped text-center t-show "> 
             <thead class="font-weight-lighter thead-dark"> 
               <th>{{ __('messages.ID')}}</th>
               <th>{{__('messages.NAME')}}</th>
               <th>{{__('messages.EMAIL')}}</th>
               <th>{{__("messages.FNAME")}}</th>
               <th>{{__("messages.RDate")}}</th>
               <th>{{__("messages.Control")}}</th>
             </thead>
             <tbody>                 
                
                     
                     @foreach($users as $user)
                     <tr> 
                     <td>{{ $user->id}}</td>
                      <td>{{ $user->name}}</td>
                      <td>{{ $user->email}}</td>
                      <td>{{ $user->name}}</td>
                      <td>{{ $user->created_at}}</td>
                     <td><a class='btn btn-success btn-sm  ' href= ''>{{__('EDITE')}}</a>
                     <a class='btn btn-danger btn-sm mt-x1-3 confirm' data={{__('SURE')}}  href=' '>{{__('DELET')}}</a> 
                       @if($user=='0'){
                         <a class='btn btn-info btn-sm btn-sm mt-x1-3  ' href=''>{{__('REG')}}</a></td>
                        }
                         @endif       
                        
                     </tr>
                     @endforeach 
             </tbody>
            
           </table>
           <a  class="btn btn-add"href='?do=add'> {{ __('AddNEW')}}</a> 
                  </div>
                
         </div>
@stop