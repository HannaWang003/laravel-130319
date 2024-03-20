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

        <h1>CATs</h1>
        <p>The .table-dark class adds a black background to the table:</p>
        <div class="text-end">
            <button class="btn btn-outline-secondary"><a href="{{ route('cats.create') }}">Add</a></button>
            <button class="btn btn-outline-info"><a href="{{ route('cats.excel') }}">Excel</a></button>
        </div>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>operate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td>
                        <button type="button" class="btn btn-outline-success">修改</button>
                        <button type="button" class="btn btn-outline-secondary">刪除</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Moe</td>
                    <td>
                        <button type="button" class="btn btn-outline-success">修改</button>
                        <button type="button" class="btn btn-outline-secondary">刪除</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dooley</td>
                    <td>
                        <button type="button" class="btn btn-outline-success">修改</button>
                        <button type="button" class="btn btn-outline-secondary">刪除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.js'></script>
</body>

</html>
