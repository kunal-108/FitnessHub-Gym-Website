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
                            <h4>Messages
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM contacts";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $msg) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $msg['id']; ?>
                                                </td>
                                                <td>
                                                    <?= $msg['name']; ?>
                                                </td>
                                                <td>
                                                    <?= $msg['email']; ?>
                                                </td>
                                                <td>
                                                    <?= $msg['message']; ?>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <input type="hidden" name="msg_id" value="<?= $msg['id']; ?>">
                                                        <button type="submit" name="msg_delete_btn"
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