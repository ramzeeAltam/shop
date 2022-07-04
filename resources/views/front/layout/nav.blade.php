 <body>
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
     <div class="container">
     <a class="navbar-brand" href="dashboard.php"> navbar</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent">
       <span class="navbar-toggler-icon"></span>
   </button>
    <div class="collapse navbar-collapse " id="main-nav">

      <ul class="navbar-nav ">
         <li class="nav-item  " >
             <a class="nav-link" href="members.php?do=manage"> {{__("messages.MEMBERS")}} </a>
         </li> 
         <li class="nav-item  " >
             <a class="nav-link" href="catagorys.php?do=manage">{{__("messages.CATAGORY")}}<span class="sr-only">(current)</span> </a>
         </li> 
         <li class="nav-item  " >
              <a class="nav-link" href="items.php?do=manage"> {{__("messages.ITEMS")}}<span class="sr-only">(current)</span></a>
         </li> 
      </ul>
     <!-- -->
      
      <ul class="navbar-nav ms-auto">
           @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{  route('b.home') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
                    </ul>    
      <ul class="navbar-nav">
         <li class="nav-item dropdown" >
         <a class="nav-link dropdown-toggle " data-toggle="dropdown">  lang</a>
         <div class="dropdown-menu dropdown-menu-right">
          
         @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
         
            <a  class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
         
           @endforeach
         <!-- <a class="dropdown-item" href="logout.php"> dddddd</a> --> 
         </div>
            
           
         </li>
      </ul>
    </div>
    </div>
    </nav>