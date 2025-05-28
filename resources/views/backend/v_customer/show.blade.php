@extends('backend.v_layouts.app')

@section('content')
<!-- contentAwal -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $judul }}</h5>

                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $customer->nama }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $customer->telepon }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $customer->alamat }}</td>
                    </tr>
                    <!-- Tambahkan field lain sesuai kebutuhan -->
                </table>

                <a href="{{ route('backend.customer.index') }}" class="btn btn-primary">Kembali ke Daftar Customer</a>
            </div>
        </div>
    </div>
</div>
<!-- contentAkhir -->
@endsection
