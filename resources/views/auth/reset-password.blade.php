@include('partials.styles')

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card mx-auto ">
                    <div class="card-header text-center">
                        <h3>Forget Password </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('store.reset-pass') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mb-3">
                                <label for="useremail" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="useremail">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="userpassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="userpassword">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="userconfirm-password" class="form-label">Confirm-Password:</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="userconfirm-password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success mx-3">Update Password</button>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>

    @include('partials.script')
