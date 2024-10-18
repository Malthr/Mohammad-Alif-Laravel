@extends('layout.master')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Data Cast</h3>
        <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"></div> <!-- /.card-tools -->
    </div> <!-- /.card-header -->
    <div class="card-body" style="display: block; box-sizing: border-box;">Nama : {{ $data-> nama }}</div>
    <div class="card-body" style="display: block; box-sizing: border-box;">Umur : {{ $data-> umur }}</div>
    <div class="card-body" style="display: block; box-sizing: border-box;">Bio : {{ $data-> bio }}</div>

    <div class="card-footer">
        <a href="{{ route('edit_data', $data -> id) }}" type="submit" class="btn btn-warning">Edit</a> 
        <a type="submit" class="btn btn-secondary">Back</a> 
    </div>
        <!--end::Footer-->
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