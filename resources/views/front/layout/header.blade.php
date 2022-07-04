 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="UTF-8" >
         <meta   http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no" >
         <title>default</title>
         <link  rel="stylesheet" href={{URL::asset('css/font-awesome.min.css')}}>
         <link rel="stylesheet" href={{URL::asset('css/bootstrap.css.map')}}>   
         <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}}>  
         @if( LaravelLocalization::setLocale() =='en') 
         <link  href={{URL::asset('css/cssen.css')}} rel="stylesheet">
         @else
         <link  href={{URL::asset('css/cssar.css')}} rel="stylesheet">
         @endif
 
 




