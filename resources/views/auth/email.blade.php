<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @include('partials.styles')

</head>

<body>
    <div class="container mt-5">
        <div class="row ">
            <div class="col">

                <h1>Forget password Link</h1>
                <p>You can reset your password from given below link.</p>

                <a href="{{ route('show.reset-pass', ['token' => $token]) }}" class="btn btn-success">Reset Password</a>
            </div>
        </div>
    </div>

    @include('partials.script')

</body>

</html>
