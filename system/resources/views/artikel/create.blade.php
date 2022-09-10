@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <a href="{{ url('admin/artikel') }}" class="btn btn-dark btn-sm "><i class="fas fa-arrow-left">
                        Kembali</i></a>
                <div class="card mt-3">
                    <div class="card-header">
                        <strong>Tambah Artikel</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/artikel') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label">Penulis</label>
                                <input type="text" class="form-control" name="penulis">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea type="text" class="form-control" name="deskripsi"  ></textarea>
                            </div>

                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
