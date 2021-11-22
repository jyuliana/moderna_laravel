<!DOCTYPE html>
<html lang="en">
<head> 
    <meta content="{{ $description }}" name="description" />
     
    @include('layouts.styles')
 
</head>
<body>
        @include('layouts/header')
 
        @yield('content')
        
        @include('layouts/footer')
     
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('layouts/scripts')
     
</body>
</html>