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
        <div><h1>Single Admin</h1></div>
        @foreach ($admin as $item )
            <h3>Name: {{ $item->admin_name }}</h3>        
            <h3>Email: {{ $item->email }}</h3>        
        @endforeach
    </div>
</body>

</html>