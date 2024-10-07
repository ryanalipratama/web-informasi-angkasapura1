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
                                <h3 class="card-title">Form Edit Paragraf Our Service</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.ourservice.update', ['id' => $ourservice->id]) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Masukan Paragraf Baru</label>
                                        <textarea class="form-control" id="paragraf" name="paragraf">{{ old('paragraf', $ourservice->paragraf) }}</textarea>
                                        @error('paragraf')
                                            <small>{{ $message }}</small>
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
