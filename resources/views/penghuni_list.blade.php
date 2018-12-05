@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Daftar Penghuni</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <a href="{{ route('penghuni.create') }}" class="btn btn-sm btn-success">Tambah Penghuni</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($dataPenghunis as $dataPenghuni)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dataPenghuni->name }}</td>
                        <td>{{ $dataPenghuni->email }}</td>
                        <td>{{ $dataPenghuni->phone }}</td>
                        <td>{{ $dataPenghuni->address }}</td>
                        <td>
                            <form action="{{ route('penghuni.destroy', $dataPenghuni->id) }}" method="post">
                                <a href="{{ route('penghuni.show', $dataPenghuni->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('penghuni.edit', $dataPenghuni->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}                                
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
    <!-- <script>
        function tempAlert(msg,duration)
        {
            var alert = document.getElementsByClassName("alert-success");
            setTimeout(function() {
                alert.parentNode.removeChild(alert);
            },duration);
            document.body.appendChild(alert);
        }
    </script> -->
@endsection