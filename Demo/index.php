<?php


$username = $_POST["Username"];
$pwd = $_POST["Password"];
$userError = $pwdError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($username)) {
        $userError = "Username is required";
    } else if (empty($pwd)) {
        $pwdError = "Password is required";
    } else {
        $userError = "";
        $pwdError = "";
        login($username,$pwd);
    }
}
function login($userName, $pwd): bool
{
    try {
        $ip = "127.0.0.1";
        $port = 3306;
        $sql_name = "root";
        $sql_pwd = "";
        $db_name = "studentDatabase";
        $connection = mysqli_connect($ip, $sql_name, $sql_pwd, $db_name, $port);
        $query = "SELECT Username FROM `User` WHERE Username = '$userName' AND Password ='$pwd'";
        if (!$connection) {
            echo "Can not connection to MySQL ";
        } else {
            $result = mysqli_query($connection, $query);
            if ($result->num_rows > 0) {
                echo "Login successful";
                return true;
            } else {
                echo "Login unsuccessful";
                return false;
            }
        }
    } catch (Exception $th) {
        echo $th->getMessage();
    }
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="#" method="post" class="mt-5">
        <div class=" container-fluid" style="max-width: 800px;">
            <h2 class="d-flex justify-content-center">Login</h2>
            <div class="row">
                <div class="col col-2"></div>
                <div class="col col-8">
                    <div class="d-block justify-content-center">
                        <div class="mb-2">
                            <label class="form-label">User name</label>
                            <input class="form-control" type="text" name="Username" placeholder="User name">
                            <span class="text-danger"><?php echo $userError ?></span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Password</label>
                            <input type="password" name="Password" class="form-control">
                            <span class="text-danger"> <?php echo $pwdError ?> </span>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary m-2 px-4">Login</button>
                            <button type="submit" class="btn btn-danger m-2 px-2">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col col-2"></div>
            </div>
        </div>
    </form>
</body>
<div>
    <h2>User information</h2>
    <label class="label"></label>
</div>

</html>