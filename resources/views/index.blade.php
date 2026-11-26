<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <th scope="row">{{ $d->id }}</th>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>