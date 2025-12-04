<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div>
            <h1>All Admin</h1>
        </div>
        <table class="table table-striped table-bordered border-solid">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Admin Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admin as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ $item->admin_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td><a href="{{ route('admin.view', $item->id) }}">View</a>
                            <a href="{{ route('admin.delete', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>