@extends('layouts.app-admin')
@section('content')
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-11 offset-0">
                <div class="card">
                    <div class="card-header">
                       Daftar Mentor
                       <a href="{{ route('admin.form-add') }}">
                       <button class="btn btn-primary btn-sm " style="float: right;">
                        Tambah Mentor
                        </button>
                    </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Mentor Code</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mentor Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php $i=1 @endphp
                            @foreach ($users as $usr)
                            <tr>
                                <td>MNTR-0{{ $i++ }}</td>
                                <td>{{ $usr->name }}</td>
                                <td>{{ $usr->email }}</td>
                                @if ($usr->is_mentor)
                                <td>Aktif</td>
                                @else
                                <td>Tidak Aktif</td>
                                @endif
                                <td> <a href="{{ route('admin.edit', $usr->id) }}"><button class="btn btn-success btn-sm">
                                    EDIT
                                </button></a>
                                <a href="{{ route('admin.destroy', $usr->id) }}">
                                <button class="btn btn-danger btn-sm">
                                    HAPUS
                                </button></a></td>
                            </tr>
                                
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection