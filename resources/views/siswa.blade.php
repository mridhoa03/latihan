@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                    <div class="form-group">
                        <label>masukan nama</label>
                        <input type="text" name="namasiswa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <center>
                        <th>Nama Siswa</th>
                        <th style="text-align: center;">Aksi</th>
                        </center>
                    </tr>
                    <tbody class="data-siswa">
                    
                    </tbody>
            
                    </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection