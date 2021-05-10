<?php
function productsCard($productImage, $productName, $productDescription, $productPreviousPrice, $productCurrentPrice, $productId)
{
    $element = "
<div class='col-md-3 col-sm-6 my-3-md-0 mt-3'>
                <form action='php/manageBasket.php' method='POST'>
                    <div class='card shadow text-center' data-toggle='tooltip' data-placement='left' title='Click for more Info!' onclick='getProductInfo($productId)'>
                        <div>
                            <img src='$productImage' alt='Product Image' class='img-fluid card-img-top cardImageStyle'>
                        </div>
                        <div class='card-body'>
                            <h4 class='card-title'>$productName</h4>
                            <p class='card-text'>$productDescription</p>
                            <h5>
                                <small><s class='text-secondary'>€$productPreviousPrice</s></small>
                                <span class='price'>€$productCurrentPrice</span>
                            </h5>
                            <button type='submit' class='btn btn-warning my-3' name='addToBasket'>Add to Basket <i class='fas fa-shopping-basket'></i>
                            </button>
                            <input type='hidden' name='productImage' value='$productImage'>
                            <input type='hidden' name='productName' value='$productName'>
                            <input type='hidden' name='productPrice' value='$productCurrentPrice'>
                        </div>
                    </div>
                </form>
            </div>
";
    echo $element;
}

function basketElement($productImage, $productName, $productCurrentPrice, $productId)
{
    $element = "
    <form action='basket.php?action=remove&productId=$productId' method='post'>
    <div class='border rounded'>
        <div class='row bg-white'>
            <div class='col-md-3'>
                <img src='$productImage' alt='product Image' class='img-fluid'>
            </div>
            <div class='col-md-6 py-4'>
                <h5 class='mt-2'>$productName</h5>
                <h5 class='mt-2'>€$productCurrentPrice</h5>
                <button type='submit' class='btn btn-danger mt-2' name='remove'>Remove</button>
            </div>
            <div class='col-md-3 py-5'>
                <div>
                <button type='submit' class='btn bg-light border rounded-circle'><i class='fas fa-minus'></i></button>
                <input type='text' value='1' class='form-control w-25 d-inline'>
                <button type='submit' class='btn bg-light border rounded-circle'><i class='fas fa-plus'></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
";
    echo $element;
}

function emptyInputRegister($name, $email, $username, $password, $passwordRepeat)
{
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat)
{
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function usernameEmailExists($connection, $username, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($connection, $name, $email, $username, $password)
{
    $sql = "INSERT INTO users (userRealName, userEmail, username, userpassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtFailed");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
    exit();
}

function emptyInputLogin($usernameOrEmail, $password)
{
    $result;
    if (empty($usernameOrEmail) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($connection, $username, $password)
{
    $userExists = usernameEmailExists($connection, $username, $username);

    if ($userExists == false) {
        header("location: ../login.php?error=wrongUsernameEmail");
        exit();
    }

    $passwordHashed = $userExists["userPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword == false) {
        header("location: ../login.php?error=wrongPassword");
        exit();
    } else if ($checkPassword == true) {
        session_start();
        $_SESSION["userId"] = $userExists["userId"];
        $_SESSION["username"] = $userExists["username"];
        header("location: ../home.php");
        exit();
    }
}
