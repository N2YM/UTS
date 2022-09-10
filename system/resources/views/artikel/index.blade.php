@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <strong>Artikel</strong>
                        <a href="{{ url('admin/artikel/create') }}" class="btn btn-dark float-right">
                            <i class="fa fa-plus"> </i>
                            Tambah
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Waktu</th>
                               
                            </thead>
                            <tbody>
                                @foreach ($list_artikel as $artikel)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/artikel', $artikel->id) }}" class="btn btn-dark">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('admin/artikel', $artikel->id) }}/edit"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/artikel', $artikel->id),
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $artikel->judul }}</td>
                                        <td>{{ $artikel->penulis }}</td>
                                        <td>{{ $artikel->created_at->diffForHumans() }}</td>
                                        
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
