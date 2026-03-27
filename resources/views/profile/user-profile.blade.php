@extends('layouts.master')

@section('content')
    <div class="container  mt-5 bg-light ">
        <h2>Profile</h2>
        </hr>
        <div class="row ">
            <div class="col-10 ">
                <hr>
                <h4 class="text-dark">Profile Information</h4>
                <hr>
                <h5>Update your profile information and email address</h5>

                <div>
                    <form action="{{ route('update.profile') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="username" class="form-label">Name:</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control"
                                id="username">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email:</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                class="form-control" id="useremail">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <button type="submit" class="btn btn-primary mx-3 ">Update Profile</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-5">
                @if (session('status'))
                    <div class="alert alert-primary">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row ">
            <div class="col-10">
                <hr>
                <h4 class="text-dark">Update Password</h4>
                <hr>
                <h5>Choose a strong and random password</h5>

                <div>
                    <form action="{{ route('update.password') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="current-pass" class="form-label">Current Password:</label>
                            <input type="password" name="current_password" class="form-control" id="current-pass">
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new-password" class="form-label">New Password:</label>
                            <input type="password" name="password" class="form-control" id="new-password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror


                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password:</label>
                            <input type="password" name="password_confirmation" class="form-control" id="confirm-password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                <button type="submit" class="btn btn-primary mx-3 mb-4">Update Password</button>
                </form>

                @if (session('success'))
                    <div class="alert alert-primary">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
        </div>


    </div>
@endsection
