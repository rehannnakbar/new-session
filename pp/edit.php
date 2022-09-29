<?php

$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=hospital", 'root', '');
$query = $db->query("select * from user where id=$id ");
$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>update</title>
</head>
<body>
    <form method="POST" action="proedit.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="col-auto">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="username" value="<?= $data['username'] ?>">
        </div>
        <div class="col-auto">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" value="<?= $data['password'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">Role</label>
            <input type="text" name="role" class="form-control" placeholder="role" value="<?= $data['role']?>">
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 80;">.   .Update.   .</button>
            <button type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" action="formc.php" >.   .Batal.   .</button>
            </div>
    </form>

</body>
</html>