@extends('layout')

@section('page-title', 'Resumable')

@section('body-end')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script>
    <script src="{{ asset('/js/resumable.js') }}"></script>
@endsection

@section('content')
    <h2>Example</h2>
    <div class="text-center" >
        <div id="resumable-error" style="display: none">
            Resumable not supported
        </div>
        <div id="resumable-drop" style="display: none">
            <p><button id="resumable-browse" data-url="{{ url('upload') }}" >Upload</button> or drop here
            </p>
            <p>Uses `api/upload` endpoint which uses `browser` data instead of session (session is not inited in api routes). This is automatically detected.</p>
        </div>
        <ul id="file-upload-list" class="list-unstyled"  style="display: none">

        </ul>
        <br/>
    </div>
@endsection
