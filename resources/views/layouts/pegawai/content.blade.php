        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pegawai</li>
                        </div><!-- /.col -->
                        </ol>
                    </div><!-- /.col -->
                    <div class="container">
                        <a class="btn btn-success" href="{{ route('pegawai.create') }}"
                            style="margin-left: 20cm; margin-bottom: 5px;">Tambah Data Pegawai</a>
                        <h2 style="text-align: left;">Pegawai</h2>
                        <br>
                        <form class="form-right my-2" method="get" action="{{ route('searchPegawai') }}">
                            <div class="tombol-cari mb-4">
                                <input type="text" name="searchPegawai" class="form-control w-50 d-inline p-2"
                                    id="searchPegawai" placeholder="Masukkan Nama Pegawai">
                                <button type="submit" class="btn btn-primary mb1 px-3 py-2">Cari</button>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                                <th width="220px">Action</th>
                            </tr>
                            @foreach ($pegawai as $pgw)
                                <tr>
                                    <td>{{ $pgw->idPegawai }}</td>
                                    <td>{{ $pgw->namaPegawai }}</td>
                                    <td>{{ $pgw->alamatPegawai }}</td>
                                    <td>{{ $pgw->telpPegawai }}</td>
                                    <td>{{ $pgw->fotoPegawai }}</td>
                                    <td>
                                        <form action="{{ route('pegawai.destroy', $pgw->idPegawai) }}" method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('pegawai.show', $pgw->idPegawai) }}">Show</a>
                                            <a class="btn btn-primary"
                                                href="{{ route('pegawai.edit', $pgw->idPegawai) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteConfirmation{{ $pgw->idPegawai }}">Delete</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteConfirmation{{ $pgw->idPegawai }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationLabel{{ $pgw->idPegawai }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationLabel{{ $pgw->idPegawai }}">
                                                                Konfirmasi Hapus</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus pegawai ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $pegawai->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pegawai</h3>
                            <a href="{{ route('pegawai.create') }}" class="btn btn-success float-right">Tambah Data Pegawai</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-right my-2" method="get" action="{{ route('searchPegawai') }}">
                                <div class="input-group">
                                    <input type="text" name="searchPegawai" class="form-control" placeholder="Masukkan Nama Pegawai">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-striped mt-3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Foto</th>
                                        <th width="220px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $pgw)
                                        <tr>
                                            <td>{{ $pgw->idPegawai }}</td>
                                            <td>{{ $pgw->namaPegawai }}</td>
                                            <td>{{ $pgw->alamatPegawai }}</td>
                                            <td>{{ $pgw->telpPegawai }}</td>
                                            <td>{{ $pgw->fotoPegawai }}</td>
                                            <td>
                                                <form action="{{ route('pegawai.destroy', $pgw->idPegawai) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('pegawai.show', $pgw->idPegawai) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('pegawai.edit', $pgw->idPegawai) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {!! $pegawai->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
