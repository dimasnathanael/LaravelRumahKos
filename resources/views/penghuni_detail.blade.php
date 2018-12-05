@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Detail Penghuni</h1>
            <hr>
            @foreach($dataPenghunis as $dataPenghuni)
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $dataPenghuni->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $dataPenghuni->email }}">
            </div>
            <div class="form-group">
                <label for="phone">No Hp:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $dataPenghuni->phone }}">
            </div>
            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea class="form-control" id="address" name="address">{{ $dataPenghuni->address }}</textarea>
            </div>
            <div class="form-group">
                <a href="{{ route('penghuni.index') }}" class="btn btn-sm btn-danger">Kembali</a>
            </div>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
