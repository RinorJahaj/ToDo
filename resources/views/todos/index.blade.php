<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Todos</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">TODOS PAGE</h1>
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>

            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                    <li class="list-group-item">
                        {{ $todo->name }}
                        <!-- {{ $todo->description }} -->
                        <button class="btn btn-primary btn-sm float-right">View</button>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>