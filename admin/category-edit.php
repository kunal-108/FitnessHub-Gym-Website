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
                            <h4>Edit - Category
                                <a href="category.php" class="btn btn-danger float-right px-3">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST">
                                <?php
                                if (isset($_GET['id'])) {
                                    $category_id = $_GET['id'];
                                    $query = "SELECT * FROM categories WHERE category_id = '$category_id'";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach ($query_run as $item):
                                        ?>
                                        <input type="hidden" name="category_id" value=<?= $item['category_id']; ?>>

                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Category Name</label>
                                                <input type="text" name="name" value="<?= $item['category_name']; ?>"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="description" class="form-control" rows="3"
                                                    required><?= $item['category_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="category_update" class="btn btn-primary">Update</button>
                                        </div>
                                        <?php
                                    endforeach;
                                } else {
                                    echo "<h5>No ID Found...</h5>";
                                }
                                ?>
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