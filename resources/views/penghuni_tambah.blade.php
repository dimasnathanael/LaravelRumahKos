@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Penghuni</h1>
            <hr>
            <form action="{{ route('penghuni.store') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">No Hp:</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <textarea class="form-control" id="address" name="address"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary" type="submit" onclick="return confirm('Apakah Anda yakin ingin menambah data?')">Simpan</button>
                    <a href="{{ route('penghuni.index') }}" class="btn btn-sm btn-danger">Kembali</a>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection