@extends('layout')

@section('page-title', 'DropZone')

@section('body-end')
    <script src="{{ asset('/js/vendor/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('/js/dropzone.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/js/vendor/dropzone/dropzone.css') }}"/>
    <script>
        Dropzone.autoDiscover = false;
    </script>
@endsection

@section('content')
    <h2>Example</h2>
    <div class="text-center">

        <form action="{{ url('upload') }}"
              class="dropzone"
              id="my-awesome-dropzone">
            <input type="file" name="file"  style="display: none;">
        </form>
        <small>Works only in Chrome</small>
        <ul id="file-upload-list" class="list-unstyled">

        </ul>
    </div>
@endsection
