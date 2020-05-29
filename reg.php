<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>泰山職訓中心</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1>
Register</h1>
    <div class="container ">
        <form action="api/reg.php" method="post">
        <ul class="list-group mx-auto col-md-5 mt-5">
            <li class="list-group-item">帳號：<input type="text" name="acc" id="acc"></li>
            <li class="list-group-item">密碼：<input type="password" name="pw" id="pw"></li>
            <li class="list-group-item">email：<input type="text" name="email" id="email"></li>
            <li class="list-group-item"><input type="submit" value="confirm" class="btn btn-primary"></li>
        </ul>
        </form>
    </div>
</body>
</html>