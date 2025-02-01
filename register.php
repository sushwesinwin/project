<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4 text-center" style="max-width: 600px">
        <h1 class="h4 mb-3">Register</h1>

        <form action="_actions/create.php" method="post" class="mb-2">
            <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
            <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

            <button class="btn btn-primary w-100">Register</button>
        </form>

        <a href="index.php">login</a>
    </div>

</body>

</html>