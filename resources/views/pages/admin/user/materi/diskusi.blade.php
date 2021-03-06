@extends('layouts.user')

@section('content')

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h6 class="section-title bg-white text-center text-primary px-3">Mapels</h6> --}}
                {{-- <h1 class="mb-5">{{ $diskusi->judul}}</h1>
                <h5 class="nav-item" > {{ $diskusi->isi }}</h5> --}}
            </div>
            <div class="row g-4 justify-content-center">
            <div class="card-body">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        {{-- <span class="userimage"><img src="/assets/img/user/user-1.jpg" alt=""></span> --}}
                                        <span class="username">{{ $diskusi->judul }}<small></small></span>

                                    </div>
                                    <div class="timeline-content">
                                        <p>{{$diskusi->isi}}
                                        </p>
                                    </div>
                                    {{-- <span class="stats-text" id="btn-komentar-utama">{{ $jumlah }} Komentar</span> --}}
                                    <div class="timeline-comment-box ">
                                        {{-- <div class="user"><img src="/assets/img/user/user-13.jpg"></div> --}}
                                        <div class="input">
                                            <form action="{{ route('user.jawabandiskusi.jawabanDiskusi', $diskusi->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" name="id_diskusi" value="{{$id}}">
                                                </div>
                                                <div class="form-group">
                                                    {{-- <label>Jawaban Anda</label> --}}
                                                    <input type="text" id="jawaban" name="jawaban" class="form-control rounded-corner" placeholder="Tulis komentar anda . . ." autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                    <span class="stats-text" id="btn-komentar-utama">{{ $jumlah }} Komentar</span>
                                    <br>
                                    @foreach ($jawabandiskusis as $i)

                                        <ul class="media-list media-list-with-divider media-messaging">
                                        <li class="media media-sm">
                                            <a href="javascript:;" class="pull-left">
                                                <img src="/assets/img/user/user-5.jpg" alt="" class="media-object rounded-corner">
                                            </a>
                                            <div class="media-body">
                                                <br>
                                                <b class="media-heading">{{$i->user->name}}</b>
                                                <p class="media-heading">{{$i->user->created_at}}</p>
                                                <p>{{$i->jawaban}}</p>
                                                <br>
                                            </div>
                                        </li>
                                        </ul>
                                    {{-- </div> --}}
                                    @endforeach

                                </div>
                                <!-- end timeline-body -->
                            </li>
                        </ul>
            </div>
            </div>
        </div>
    </div>
</body>
{{--
@section('footer')
<script>
    $(document).ready(funstion){
        $('#btn-komentar-utama').click(function(){
            $('#komentar-utama').toggle('slide');
        })
    }
</script>
@endsection --}}
