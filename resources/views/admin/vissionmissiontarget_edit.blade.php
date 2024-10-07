@extends('admin/main')
@section('content')
        <section class="content">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Vission Mission Target</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.vissionmissiontarget.update', ['id' => $vissionmissiontarget->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input class="form-control" id="judul" name="judul" value="{{ $vissionmissiontarget->judul }}" placeholder="Masukan Judul">
                                        @error('judul')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konten">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $vissionmissiontarget->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Upload Icon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="icon" name="icon">
                                                <label class="custom-file-label" for="gambar">Ambil icon</label>
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
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
