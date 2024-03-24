<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAT</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cats.index') }}">CATs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fishs.index') }}">FISHs</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h1>CATs Create</h1>
        <p>The .table-dark class adds a black background to the table:</p>
        <form action="{{ route('cats.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">name</div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="name" id="" class="form-control"></div>
            </div>
            <br>
            <div class="row">
                <div class="com">
                    <button class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.js'></script>
</body>

</html>
