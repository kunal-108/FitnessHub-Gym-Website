<?php
include ('authentication.php');

include ('config/dbconnection.php');
include ('includes/header.php');
include ('includes/topbar.php');
include ('includes/sidebar.php');
?>

<!-- Order Confirm Modal -->
<div class="modal fade" id="orderDone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Successful</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                The Order has been confirmed successfully !!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include ('message.php'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Order Details
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Pin Code</th>
                                        <th>Total Price</th>
                                        <th>Payment Mode</th>
                                        <th>Created At</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM orders";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $order_item) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $order_item['id']; ?>
                                                </td>
                                                <td>
                                                    <?= $order_item['name']; ?>
                                                </td>
                                                <td>
                                                    <?= $order_item['phone']; ?>
                                                </td>
                                                <td>
                                                    <?= $order_item['address']; ?>
                                                </td>
                                                <td>
                                                    <?= $order_item['pincode']; ?>
                                                </td>
                                                <td>
                                                    $<?= $order_item['total_price']; ?>
                                                </td>
                                                <td>
                                                    <?= $order_item['payment_mode']; ?>
                                                </td>
                                                <td>
                                                    <?= $order_item['created_at']; ?>
                                                </td>
                                                <td>
                                                    <a href="orders.php?product_id=<?= $order_item['id']; ?>"
                                                        class="btn btn-success btn-sm mr-1 px-3" data-toggle="modal"
                                                        data-target="#orderDone">Done</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <input type="hidden" name="order_id" value="<?= $order_item['id']; ?>">
                                                        <button type="submit" name="order_delete_btn"
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