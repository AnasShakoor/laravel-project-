<!doctype html>
<html lang="en">

<head>
    <title>customer-view page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include('header');

    <table class="table">
        <thead>
            <tr>

                <th>my-id</th>
                <th>name</th>
                <th>password</th>
                <th>email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $item)
                <tr>
                    <td>{{ $item->my_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('registar.delete', ['id' => $item->my_id]) }}"><button
                                class="btn btn-primary">Delete</button></a>
                        <a href="{{ route('registar.edit', ['id' => $item->my_id]) }}"><button
                                class="btn btn-primary">Edit</button></a>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('registar.page') }}">
        <button class="btn btn-danger">ADD</button></a>
</body>

</html>
