@extends('layout.app')

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'wellcome')

@section('content_body')
    <p> welcome</p>
@stop

@push('css')

@endpush

@push('js')
    <script>
        console.log('Welcome to the Laravel AdminLTE Starter Kit');
    </script>
@endpush
