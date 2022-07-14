@extends('layouts.app-mentor')
@section('content')
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-11 offset-0">
                <div class="card">
                     <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                    <div class="card-header">
                     List Camps Codev8
                     <a href="{{ route('mentor.form-add') }}">
                     <button class="btn btn-primary btn-sm " style="float: right;">
                        Add List Camps
                        </button>
                    </a>
                    </div>
                     <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Code Camp </th>
                                    <th>Title</th>
                                    <th>Feed</th>
                                    <th>Image</th>
                                    <th>Camp ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($camp_feeds as $cf)
                                    <tr>
                                        <td>CF-0{{ $cf->id }}</td>
                                        <td width="20%">{{ $cf->title }}</td>
                                        <td width="30%">{{ $cf->feed }}</td>
                                        <td width="12%"><img src="{{ $cf->image }}" width="100%"></td>
                                        <td width="12%">{{ $cf->camp_id }}</td>
                                        <td>
                                            {{-- <form action="{{ route('mentor.camp.destroy', $cf->id) }}" method="POST"> --}}
                                               <a href="{{ route('mentor.destroy', $cf->id) }}">
                                                <button class="btn btn-danger btn-sm">
                                                    Delete
                                                </button></a>
                                                <a href="{{ route('mentor.edit', $cf->id) }}">
                                                <button class="btn btn-primary btn-sm">
                                                    Edit
                                                </button>
                                            </a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Camps Registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection