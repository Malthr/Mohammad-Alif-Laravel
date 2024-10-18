@extends('layout.master')
@section('content')
<div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Edit Data Cast</div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <form action="{{ route('simpan_edit', $datas -> id) }}" method="post">
        @csrf
        @method ('put')
        <!--begin::Body-->
        <div class="card-body">
            <div class="mb-3"> <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $datas->nama) }}">
            </div>

            <div class="mb-3"> <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" value="{{ old('umur', $datas->umur) }}">
            </div>

            <div class="mb-3"><label for="bio">Bio</label>
                <textarea class="form-control" aria-label="With textarea" name="bio">{{ old('bio', $datas->bio) }}</textarea>
            </div>
        </div>

        <!--begin::Footer-->
        <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>
        <!--end::Footer-->
    
    </form>
    <!--end::Form-->
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