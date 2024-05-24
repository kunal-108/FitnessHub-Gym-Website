<?php
session_start();
include ('authentication.php');
include ('config/dbconnection.php');


// Order Delete Code
if (isset($_POST['order_delete_btn'])) {
    $order_id = $_POST['order_id'];
    $query = "DELETE FROM orders WHERE id = '$order_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Order Deleted successfully...";
        header('Location: orders.php');
    } else {
        $_SESSION['status'] = "Order Deletion Failed...";
        header('Location: orders.php');
    }
}
// Order Delete Code


// Message Delete Code
if (isset($_POST['msg_delete_btn'])) {
    $msg_id = $_POST['msg_id'];
    $query = "DELETE FROM contacts WHERE id = '$msg_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Message Deleted successfully...";
        header('Location: contact_messages.php');
    } else {
        $_SESSION['status'] = "Message Deletion Failed...";
        header('Location: contact_messages.php');
    }
}
// Message Delete Code


// Product Delete Code
if (isset($_POST['product_delete_btn'])) {
    $product_id = $_POST['product_delete_id'];
    $query = "DELETE FROM products WHERE product_id = '$product_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Product Deleted successfully...";
        header('Location: products.php');
    } else {
        $_SESSION['status'] = "Product Deletion Failed...";
        header('Location: products.php');
    }
}
// Product Delete Code



// Product Update Code
if (isset($_POST['product_update'])) {
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $small_description = $_POST['small_description'];
    $long_description = $_POST['long_description'];
    $price = $_POST['price'];
    $offer_price = $_POST['offer_price'];
    $quantity = $_POST['quantity'];

    $image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if ($image != '') {
        $update_filename = $_FILES['image']['name'];
        $allowed_extension = array('png', 'jpg', 'jpeg', 'webp');
        $file_extension = pathinfo($update_filename, PATHINFO_EXTENSION);
        $filename = time() . '.' . $file_extension;

        if (!in_array($file_extension, $allowed_extension)) {
            $_SESSION['status'] = "You are allowed with only jpg, png, jpeg, and webp images.";
            header('Location : product-add.php');
            exit(0);
        }
        $update_filename = $filename;
    } else {
        $update_filename = $old_image;
    }

    $query = "UPDATE products SET category_id='$category_id', product_name='$name',product_brand='$brand', product_small_description='$small_description', product_long_description='$long_description', product_price='$price', product_offer_price='$offer_price',product_quantity='$quantity', product_image='$update_filename' WHERE product_id='$product_id' ";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        if ($image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], './assets/products/' . $filename);
            if (file_exists('./assets/products/' . $old_image)) {
                unlink('./assets/products/' . $old_image);
            }
        }
        $_SESSION['status'] = "Product Updated Successfully...";
        header('Location : product-edit.php?product_id=' . $product_id);
        exit(0);

    } else {
        $_SESSION['status'] = "Product Updation Failed...";
        header('Location : product-edit.php?product_id=' . $product_id);
        exit(0);
    }
}
// Product Update Code


// Product Save Code
if (isset($_POST['product_save'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $small_description = $_POST['small_description'];
    $long_description = $_POST['long_description'];
    $price = $_POST['price'];
    $offer_price = $_POST['offer_price'];
    $quantity = $_POST['quantity'];
    $image = $_FILES['image']['name'];

    $allowed_extension = array('png', 'jpg', 'jpeg', 'webp');
    $file_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $file_extension;

    if (!in_array($file_extension, $allowed_extension)) {
        $_SESSION['status'] = "You are allowed with only jpg, png, jpeg, and webp images.";
        header('Location : product-add.php');
        exit(0);
    } else {
        $query = "INSERT INTO products (category_id,product_name,product_brand,product_small_description,product_long_description,product_price,product_offer_price,product_quantity,product_image) VALUES ('$category_id','$name','$brand','$small_description','$long_description','$price','$offer_price','$quantity','$filename')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            move_uploaded_file($_FILES['image']['tmp_name'], './assets/products/' . $filename);
            $_SESSION['status'] = "Product Added Successfully...";
            header('Location : product-add.php');
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong...";
            header('Location : product-add.php');
            exit(0);
        }
    }
}
// Product Save Code


// Category Save Code
if (isset($_POST['category_save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $category_query = "INSERT INTO categories (category_name,category_description) VALUES ('$name','$description')";
    $category_query_run = mysqli_query($connection, $category_query);
    if ($category_query_run) {
        $_SESSION['status'] = "Category Inserted successfully...";
        header('Location: category.php');
    } else {
        $_SESSION['status'] = "Category Insertion Failed...";
        header('Location: category.php');
    }
}
// Category Save Code



// Category Update Code
if (isset($_POST['category_update'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query = "UPDATE categories SET category_name='$name',category_description='$description' WHERE category_id ='$category_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Category Updated successfully...";
        header('Location: category.php');
    } else {
        $_SESSION['status'] = "Category Updation Failed...";
        header('Location: category.php');
    }
}
// Category Update Code


// Category Delete Code
if (isset($_POST['category_delete_btn'])) {
    $category_id = $_POST['category_delete_id'];
    $query = "DELETE FROM categories WHERE category_id = '$category_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Category Deleted successfully...";
        header('Location: category.php');
    } else {
        $_SESSION['status'] = "Category Deletion Failed...";
        header('Location: category.php');
    }
}
// Category Delete Code



// Logout Button Code
if (isset($_POST['logout_btn'])) {
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status'] = "Logged out successfully...";
    header('Location: login.php');
    exit(0);
}
// Logout Button Code



// Email Check Code
if (isset($_POST['check_email_btn'])) {
    $email = $_POST['email'];

    $checkEmail = "SELECT user_email FROM users WHERE user_email='$email' ";
    $checkEmail_run = mysqli_query($connection, $checkEmail);

    if (mysqli_num_rows($checkEmail_run) > 0) {
        echo "Email is already taken...";
    } else {
        echo "Available";
    }
}
// Email Check Code


// Add User Code
if (isset($_POST['addUser'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    if ($password == $confirm_password) {

        $checkEmail = "SELECT user_email FROM users WHERE user_email='$email' ";
        $checkEmail_run = mysqli_query($connection, $checkEmail);

        if (mysqli_num_rows($checkEmail_run) > 0) {
            $_SESSION['status'] = "Email is already taken...";
            header("Location: registered.php");
            exit;
        } else {
            $user_query = "INSERT INTO users (user_name, user_phone,user_email,user_password) VALUES ('$name','$phone','$email','$password')";
            $user_query_run = mysqli_query($connection, $user_query);

            if ($user_query_run) {
                $_SESSION['status'] = "User Added Successfully...";
                header("Location: registered.php");
            } else {
                $_SESSION['status'] = "User Registration Failed...";
                header("Location: registered.php");
            }
        }
    } else {
        $_SESSION['status'] = "Passwords do not match...";
        header("Location: registered.php");
    }


}
// Add User Code



// Update User Code
if (isset($_POST['updateUser'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];

    $query = "UPDATE users SET user_name='$name',user_phone='$phone',user_email='$email',user_password='$password',role_as='$role_as' WHERE user_id='$user_id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "User Updated Successfully...";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "User Updation Failed...";
        header("Location: registered.php");
    }
}
// Update User Code



// Delete User Code
if (isset($_POST['deleteUserBtn'])) {

    $user_id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE user_id='$user_id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "User Deleted Successfully...";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "User Deletion Failed...";
        header("Location: registered.php");
    }
}
// Delete User Code

?>