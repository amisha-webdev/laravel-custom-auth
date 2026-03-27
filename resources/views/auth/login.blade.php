<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    @include('partials.styles')
</head>

<body>
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-5">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card mx-auto">
                    <div class="card-header text-center ">
                        <h3>Login </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('signin') }}" method="POST">
                            @csrf
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
                            <button type="submit" class="btn btn-success mx-3">Login</button>
                            <a href="{{ route('forgot-pass') }}" class="btn btn-sm btn-light">Forget Password?</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.script')

</body>

</html>
