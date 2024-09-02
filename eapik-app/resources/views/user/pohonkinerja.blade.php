@extends('layout.app', ['titleMenu' => 'Pohon Kinerja'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Pohon Kinerja</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" aria-label="Nama">
                    </div>
                    <div class="col">
                        <label for="indikator" class="form-label">Indikator</label>
                        <input type="text" class="form-control" name="indikator" aria-label="Indikator">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
            </div>
            <div class="card-footer text-left">
                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-start">
    <div class="text-left">
        <button class="btn btn-info">Lihat Data</button>
    </div>
</div>
@endsection