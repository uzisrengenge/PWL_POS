@extends('layout.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/tambah') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="kategori_id" class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">- Semua -</option>
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->kategori_id }}">{{ $kat->kategori_nama }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_kategori">
            <thead>
                <tr>
                    <th>barang_kode</th>
                    <th>barang_nama</th>
                    <th>harga_beli</th>
                    <th>harga_jual</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        var dataKategori = $('#table_kategori').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('barang/list') }}",
                "dataType": "json",
                "type": "POST",
                "data": function (d) {
                    d.kategori_id = $('select[name="kategori_id"]').val();
                }
            },
            columns: [
                { data: "barang_kode", className: "", orderable: true, searchable: true },
                { data: "barang_nama", className: "", orderable: true, searchable: true },
                { data: "harga_beli", className: "", orderable: true, searchable: true },
                { data: "harga_jual", className: "", orderable: true, searchable: true },
                { data: "action", className: "text-center", orderable: false, searchable: false }
            ]
        });

        $('select[name="kategori_id"]').on('change', function() {
            dataKategori.columns(0).search($(this).val()).draw();
        });
    });
</script>

@endpush
