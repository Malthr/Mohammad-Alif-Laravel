@extends('layout.master')
@section('content')

<div class="new">
    <a href="/cast/create" class="btn btn-primary">Tambah Data</a>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Umur</th>
                    <th style="text-align: center;">Bio</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $data -> nama }}</td>
                        <td style="text-align: center;">{{ $data -> umur }}</td>
                        <td>{{ $data -> bio }}</td>
                        <td align="center">
                            <a class="btn btn-warning" href="{{ route('detail_data', $data-> id) }}">Edit</a>
                            <form action="{{ route('delete_data', $data -> id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Memastikan jQuery dimuat -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example1').DataTable(); // Menginisialisasi DataTable
});
</script>
@endpush

@push('tableStyle')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush