@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori
                    <button class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modalTambah">Tambah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama kategori</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="data-kategori">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('kategori.create')
@include('kategori.edit')
@endsection


@push('scripts')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var alamat = '/api/kategori'
        // Get Data kategori
        $.ajax({
            url: alamat,
            method: "GET",
            dataType: "json",
            success: function (berhasil) {
                console.log(berhasil)
                $.each(berhasil.data, function (key, value) {
                    $("#data-kategori").append(
                        `
                        <tr>
                            <td>${value.nama_kategori}</td>
                            <td>${value.slug}</td>
                            
                        </tr>
                        `
                    )
                })
            },
            error: function () {
                console.log('data tidak ada');
            }
        });
    });
    // Tambah Data
    $('#createData').submit(function(e){
        var formData    = new FormData($('#createData')[0]);
        e.preventDefault();
        $.ajax({
            url: "/api/kategori",
            type:'POST',
            data:formData,
            cache: true,
            contentType: false,
            processData: false,
            async:false,
            dataType: 'json',
            success:function(formData){
                $('#modalTambah').modal('hide');
                alert(formData.message)
                location.reload();
            },
            complete: function() {
                $("#createData")[0].reset();
            }
        });
    });
    // Edit Data
    function Edit(id){
    }
    // Hapus Data
    $(".table").on('click', '#hapus-data', function () {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: '/api/kategori/'+id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function (berhasil) {
                alert(berhasil.message)
                location.reload();
            },
            error: function (gagal) {
                console.log(gagal)
            }
        })
    })
</script>
@endpush