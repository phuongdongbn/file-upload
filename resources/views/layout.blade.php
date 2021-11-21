<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Laravel chunked upload')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css"/>
    @yield('head')
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                @yield('page-title', 'Laravel chunked upload')
            </div>
            {{ csrf_field() }}
            <ol>
                <li><a href="{{ url('jquery-file-upload') }}">jQuery-File-Upload example</a></li>
                <li><a href="{{ url('dropzone') }}">DropZone</a></li>
                <li><a href="{{ url('resumable') }}">Resumable</a></li>
              </ol> 
            @yield('content')
        </div>
    </div>
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @yield('body-end')

    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
