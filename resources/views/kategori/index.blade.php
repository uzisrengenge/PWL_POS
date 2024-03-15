@extends('layout.app')


@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Daftar Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Kategori</h3>
                <div class="card-body">
                    {{
                        $dataTable->table()
                    }}
                </div>
            </div>
        </div>
        @endsection


        @push('scripts')
            {{ $dataTable->scripts() }}

        @endpush


