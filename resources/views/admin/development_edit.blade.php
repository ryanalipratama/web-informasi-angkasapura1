@extends('admin.main')
@section('content')
        <section class="content">
            <div class="container pt-5">
                <form action="{{ route('admin.development.update', ['id' => $development->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Data Development Aplikasi / Sistem</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Masukan Judul Baru</label>
                                            <input class="form-control" id="judul" name="judul" value="{{ old('judul', $development->judul) }}">
                                            @error('judul')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>   
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Masukan Deskripsi Baru</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $development->deskripsi) }}</textarea>
                                            @error('deskripsi')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Masukan Tanggal Baru</label>
                                            <input class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $development->tanggal) }}">
                                            @error('tanggal')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>      
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Gambar</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                    <label class="custom-file-label" for="gambar">Ambil Gambar</label>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                </form>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
