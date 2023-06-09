@include('layouts.header')

@include('layouts.footer')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title">Detail Profile</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Id pegawai:</b> {{ $pegawai->idPegawai }}</li>
                        <li class="list-group-item"><b>Nama pegawai:</b> {{ $pegawai->namaPegawai }}</li>
                        <li class="list-group-item"><b>Email pegawai:</b> {{ $pegawai->email }}</li>
                        <li class="list-group-item"><b>Alamat pegawai:</b> {{ $pegawai->alamatPegawai }}</li>
                        <li class="list-group-item"><b>No Telepon pegawai:</b> {{ $pegawai->telpPegawai }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('home') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
