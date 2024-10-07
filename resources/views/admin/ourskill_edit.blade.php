@extends('admin/main')
@section('content')
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Persentase Skill</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.ourskill.update', ['id' => $ourskill->id]) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Skill</label>
                                        <input class="form-control" id="skill" name="skill" value="{{ $ourskill->skill }}" placeholder="Skill">
                                        @error('skill')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konten">Persentase</label>
                                        <input class="form-control" id="persentase" name="persentase" value="{{ $ourskill->persentase }}" placeholder="Perentase Skill">
                                        @error('persentase')
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
