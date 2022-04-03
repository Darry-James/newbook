
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>{{ $pageTitle }}</title>
    <!-- Main Quill library -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

    <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">
    <link href="{{asset('/front/css/sweetalert.min.css')}}" type="text/css" rel="stylesheet" />
    <style>
        .workspace-img.alt{
            background: linear-gradient(to right, #5870fb, #8866fd);
            padding: 6px;
            font-size: 14px;
            color: #fff;
        }
        .slide-prod-input{
            font-weight: 600 !important;
            color: #000 !important;
        }
    </style>
    @yield('extra_css')
</head>


<body>
    <div class="container-fluid px-0">
        @include('front.layouts.frontHeader')

        <div class="flex-main-wrap">
            @include('front.layouts.frontSidebar')

            @yield('content')
            
        </div>
    </div>

    @yield('extra_div')




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- <script src="https://cdn.tiny.cloud/1/s63i07jv6zzmjbvh1jnemybwthrhjcju5p3n1jsagq3wsp25/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    

    <script src="{{asset('/front/js/sweetalert.min.js')}}"> </script>


   
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
  

    <script src="{{asset('/front/js/main.js')}}"></script>
    
    {{-- <script src="/front/js/editor-config.js"></script> --}}
    
    @include('sweetalert::alert')
    @yield('extra_js')
</body>

</html>