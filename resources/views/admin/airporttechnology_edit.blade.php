@extends('admin/main')
@section('content')
        <section class="content">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Airport Technology</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.airporttechnology.update', ['id' => $airporttechnology->id]) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input class="form-control" id="judul" name="judul" value="{{ $airporttechnology->judul }}">
                                        @error('judul')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konten">Konten</label>
                                        <textarea class="form-control" id="konten" name="konten">{{ old('konten', $airporttechnology->konten) }}</textarea>
                                        @error('konten')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
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
