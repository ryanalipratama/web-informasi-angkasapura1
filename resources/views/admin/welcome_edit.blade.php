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
                                <h3 class="card-title">Form Edit Welcome</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.welcome.update', ['id' => $welcome->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input class="form-control" id="judul" name="judul"  value="{{ old('judul', $welcome->judul) }}"></input>
                                        @error('judul')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konten">Konten</label>
                                        <textarea class="form-control" id="konten" name="konten">{{ old('konten', $welcome->konten) }}</textarea>
                                        @error('konten')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Upload Gambar</label>
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
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
