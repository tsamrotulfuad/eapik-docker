@extends('layout.app', ['titleMenu' => 'Inovasi Daerah'])

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="d-flex justify-content-end">
            <div class="text-right">
                <button class="btn btn-success">Import</button>
                <button class="btn btn-info">Export</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Inovasi</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Inovasi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Inisiator</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="card-footer text-left">
                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Inovasi</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>Task Name</th>
                                <th>Progress</th>
                                <th>Members</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection