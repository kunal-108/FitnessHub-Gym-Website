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
                            <h4>Products
                                <a href="product-add.php" class="btn btn-primary float-right px-3">Add</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Offer Price</th>
                                        <th>Created At</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM products";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $product_item) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $product_item['product_id']; ?>
                                                </td>
                                                <td>
                                                    <?= $product_item['product_name']; ?>
                                                </td>
                                                <td>
                                                    <?= $product_item['product_brand']; ?>
                                                </td>
                                                <td>
                                                    $<?= $product_item['product_price']; ?>
                                                </td>
                                                <td>
                                                    $<?= $product_item['product_offer_price']; ?>
                                                </td>
                                                <td>
                                                    <?= $product_item['created_at']; ?>
                                                </td>
                                                <td>
                                                    <a href="product-edit.php?product_id=<?= $product_item['product_id']; ?>"
                                                        class="btn btn-success btn-sm mr-1 px-3">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <input type="hidden" name="product_delete_id"
                                                            value="<?= $product_item['product_id']; ?>">
                                                        <button type="submit" name="product_delete_btn"
                                                            class="btn btn-danger btn-sm mr-1 px-3">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="6">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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