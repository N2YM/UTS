@extends('fontend.base')

@section('client_content')
    <div class="container px-4 px-lg-5">

        @foreach ($list_artikel as $artikel)
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col">
                    <!-- Post preview-->
                
                    <div class="post-preview">
                        <a href="{{ url('artikel', $artikel->id) }}">
                            <div class="card-header " style="border-radius: 5%">
                            <h3 class="post-title" >{{ $loop->iteration }}. {{ $artikel->judul }}</h3><br>
                            </div>
                            <div class="card-body">
                            <h4 class="post">{!! nl2br($artikel->deskripsi)!!}</h4>
                        </a>
                        <p>
                            <strong> Penulis : {{ $artikel->penulis }} </strong>
                            <br>
                            <strong> Waktu : {{ $artikel->created_at->diffForHumans() }} </strong>
                        </p>
                           </div>
                    </div>
                
                </div>
            </div>
        @endforeach


    </div>
@endsection
