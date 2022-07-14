@extends('layouts.app-admin')
@section('content')
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-11 offset-0">
                <div class="card">
                    <div class="card-header">
                     Form Add Mentor Codev8
                    </div>
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-12">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                </div>
                                <div class="col-lg-8 col-12">
                                    <form action="{{ route('admin.add') }}" class="basic-form" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-4">
                                            <label class="form-label">Name</label>
                                            <input name="name" type="text" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control" id="password" required>
                                            <input type="checkbox" onclick="myFunction()">Show Password
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Mentor Code</label>
                                            <select name="is_mentor" id="is_mentor" class="form-control" readonly="readonly">
                                                @foreach ($users as $usr)
                                                <option value="{{ $usr->is_mentor }}">{{ $usr->is_mentor }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="submit" class="w-100 btn btn-primary">
                                    </form>
                                    <br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            const input = document.querySelector("#password");
            // When an input is checked, or whatever...
            if (input.getAttribute("type") === "password") {
            input.setAttribute("type", "text");
            } else {
            input.setAttribute("type", "password");
            }
            }
    </script>
@endsection