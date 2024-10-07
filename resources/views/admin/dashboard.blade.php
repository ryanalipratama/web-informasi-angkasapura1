@extends('admin/main')
@section('content')

<div class="welcome-container" style="text-align: center; padding: 50px; background-image: url('{{ asset('images/internship.png') }}'); background-size: cover; background-position: center; color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    <h1 style="font-size: 2.5rem; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Selamat Datang, Admin!</h1>
    <p style="font-size: 1.2rem; margin-top: 20px; color: white ;">Kami senang Anda kembali. Mari kelola website dengan penuh semangat!</p>
    <a href="{{ route('admin.login') }}" class="btn btn-danger mt-4" style="padding: 10px 20px; font-size: 1rem; border-radius: 5px;">Logout</a>
</div>

@endsection