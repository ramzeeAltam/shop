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
             <a class="nav-link" href={{__( route('members'))}} > {{__("messages.MEMBERS")}} </a>
         </li> 
         <li class="nav-item  " >
             <a class="nav-link" href={{__( route('Catagories'))}} >{{__("messages.CATAGORY")}}<span class="sr-only">(current)</span> </a>
         </li> 
         <li class="nav-item  " >
              <a class="nav-link" href={{__( route('Items'))}} > {{__("messages.ITEMS")}}<span class="sr-only">(current)</span></a>
         </li> 
      </ul>
     <!-- -->
      
      <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link  dropdown-toggle " data-toggle="dropdown" >
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu "  >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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