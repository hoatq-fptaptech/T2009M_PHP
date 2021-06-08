<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <form action="?route=luusv" method="post">
            <div class="form-group">
                <label>Tên SV</label>
                <input type="text" class="form-control" name="name" placeholder="Name.."/>
            </div>
            <div class="form-group">
                <label>age</label>
                <input type="number"  class="form-control" name="age" placeholder="age.."/>
            </div>
            <div class="form-group">
                <label>DT</label>
                <input type="tel" class="form-control" name="tel" placeholder="Tel.."/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm sinh viên</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>