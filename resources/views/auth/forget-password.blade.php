<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @include('partials.styles')

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card mx-auto">
                    <div class="card-header text-center">
                        <h3>Forget Password </h3>
                    </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('store.forgot-pass') }}" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter Your Email:">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button type="submit" class=" btn btn-success">Password Reset</button>
                            </div>

                        </form>

                    </div>


                </div>
            </div>

        </div>
    </div>
    </div>
    @include('partials.script')

</body>

</html>
