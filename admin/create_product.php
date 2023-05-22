<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('location: login.php');
}

include('layouts/header.php');


if (isset($_POST['login_btn'])) {
    $product_id = $_POST['id'];
    $product_name = $_POST['name'];
    $product_brand = $_POST['brand'];
    $product_category = $_POST['category'];
    $product_description = $_POST['desc'];
    $product_criteria = $_POST['criteria'];
    $product_image1 = $_POST['img1'];
    $product_image2 = $_POST['img2'];
    $product_image3 = $_POST['img3'];
    $product_image4 = $_POST['img4'];
    $product_price = $_POST['price'];
    $special_offer = $_POST['offer'];
    $product_color = $_POST['color'];


    //     // $query = "INSERT INTO products values ('');

    //     // $stmt_login = $conn->prepare($query);
    //     // $stmt_login->bind_param('ss', $email, $password);

    // --     if ($stmt_login->execute()) {
    // --         $stmt_login->bind_result($admin_id, $admin_name, $admin_email, $admin_phone, $admin_password, $admin_photo, $admin_photo2);
    // --         $stmt_login->store_result();

    // --         if ($stmt_login->num_rows() == 1) {
    // --             $stmt_login->fetch();

    // --             $_SESSION['admin_id'] = $admin_id;
    // --             $_SESSION['admin_name'] = $admin_name;
    // --             $_SESSION['admin_email'] = $admin_email;
    // --             $_SESSION['admin_phone'] = $admin_phone;
    // --             $_SESSION['admin_photo'] = $admin_photo;
    // --             $_SESSION['admin_photo2'] = $admin_photo2;
    // --             $_SESSION['admin_logged_in'] = true;

    // --             header('location: index.php?message=Logged in successfully');
    // --         } else {
    // --             header('location: login.php?error=Could not verify your account');
    // --         }
    // --     } else {
    // --         // Error
    // --         header('location: login.php?error=Something went wrong!');
    // --     }
    // -- }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Products</h1>
        <nav class="mt-4 rounded" aria-label="breadcrumb">
            <ol class="breadcrumb px-3 py-2 rounded mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                <li class="breadcrumb-item active">Create Product</li>
            </ol>
        </nav>
        <form class="user" id="login-form" enctype="multipart/form-data" method="POST" action="product.php">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="ID">Product ID</label>
                        <input type="text" class="form-control " name="ID" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="brand">Product Brand</label>
                        <input type="text" class="form-control" name="brand" placeholder="brand">
                    </div>
                    <div class="form-group">
                        <label for="category">Product Category</label>
                        <input type="text" class="form-control" name="category" placeholder="category">
                    </div>
                    <div class="form-group">
                        <label for="desc">Product Desc</label>
                        <textarea type="text" class="form-control" name="desc" placeholder="desc"> </textarea>

                    </div>


                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="criteria">Product Criteria</label>
                        <input type="text" class="form-control " name="criteria" placeholder="criteria">
                    </div>

                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control " name="price" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="offer">Special offer </label>
                        <input type="text" class="form-control" name="offer" placeholder="offer">
                    </div>
                    <div class="form-group">
                        <label for="color">Product Color</label>
                        <input type="text" class="form-control" name="color" placeholder="color">
                    </div>

                </div>

            </div>
    </div>
    <div class="container text-left">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="formFile" class="form-label">Image 1</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Image 2</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="formFile" class="form-label">Image 3</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Image 4</label>
                    <input class="form-control" type="file" id="formFile">
                    <br>
                </div>
            </div>

        </div>
    </div>

</body>

</html>