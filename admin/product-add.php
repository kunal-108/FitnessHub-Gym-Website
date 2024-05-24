<?php
include ('authentication.php');

include ('config/dbconnection.php');
include ('includes/header.php');
include ('includes/topbar.php');
include ('includes/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include ('message.php'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Products - Add
                                <a href="products.php" class="btn btn-danger float-right px-3">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Select Category</label>
                                        <?php
                                        $query = "SELECT * FROM categories";
                                        $query_run = mysqli_query($connection, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            ?>
                                            <select name="category_id" class="form-control">
                                                <option selected disabled>Select Category</option>
                                                <?php foreach ($query_run as $item) { ?>
                                                    <option value="<?= $item['category_id'] ?>"><?= $item['category_name'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Product Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Brand</label>
                                            <input type="text" name="brand" class="form-control"
                                                placeholder="Enter Brand Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Small Description</label>
                                            <textarea name="small_description" class="form-control"
                                                placeholder="Enter Small Description" required rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Long Description</label>
                                            <textarea name="long_description" class="form-control"
                                                placeholder="Enter Long Description" required rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control"
                                                placeholder="Enter Price">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Offer Price</label>
                                            <input type="text" name="offer_price" class="form-control"
                                                placeholder="Enter Offer Price">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" name="quantity" class="form-control"
                                                placeholder="Enter Quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Click to Save Product</label><br>
                                            <button type="submit" name="product_save"
                                                class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
include ('includes/script.php');
include ('includes/footer.php');
?>