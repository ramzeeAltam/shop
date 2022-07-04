 

@extends('admin/layout/master')
@section('content')

<div class="container home-stat">
<h1 class="text-center mb-md-5">" ffffffffff"</h1>
    <div class="row text-center">
       <div class="col-md-3 col-sm-6">
          <div class="statstic total-mem"> Total Members
             echo   <span>{{__(LaravelLocalization::setLocale())}}</span>
          </div>                 
       </div> 
       <div class="col-md-3 col-sm-6 ">
          <div class="statstic pending"> Pending Members
          <span> 8</span>
          </div>
           
       </div> 
       <div class="col-md-3 col-sm-6">
          <div class="statstic total-item" > Total    Items 
          <span>88</span>
          </div>                  
       </div> 
       <div class="col-md-3 col-sm-6 ">
          <div class="statstic total-comm">  Total Comments
          <span>200</span>
          </div>                  
       </div>  
    </div>  
    </div> 

 <!--        -->
    <div class="container leastat"> 
    <div class="row text-center">
        <div class="col-md-6 col-sm-12">
            <div class="toast show" data-authide="false"   >   
                <div class="toast-header">   
                    <strong>header</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" >&times;</button>
                </div> 
                <div class="toast-body">   
                    <ul class="list-group list-group-flush leta_ul">
                        
                    </ul>
                </div> 
            </div>                  
        </div>

       <div class="col-md-6 col-sm-12">
             <div class="toast show" data-authide="false">   
                    <div class="toast-header">   
                        <strong>header</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                    </div> 
                    <div class="toast-body">   
                        <p> body</p>
                    </div> 
                </div>  
       </div> 
    </div>
</div>      
@stop