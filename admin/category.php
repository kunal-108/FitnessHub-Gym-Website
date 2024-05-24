<?php
include ('authentication.php');

include ('config/dbconnection.php');
include ('includes/header.php');
include ('includes/topbar.php');
include ('includes/sidebar.php');
?>

<!-- Modal -->
<div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="category_save" class="btn btn-primary">Save</button>
                </div>
            </form>
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
                            <h4>Category
                                <a href="#" data-toggle="modal" data-target="#CategoryModal"
                                    class="btn btn-primary float-right px-3">Add</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM categories";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $category_item) {
                                            // echo $category_item['id'];
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $category_item['category_id']; ?>
                                                </td>
                                                <td>
                                                    <?= $category_item['category_name']; ?>
                                                </td>
                                                <td>
                                                    <?= $category_item['created_at']; ?>
                                                </td>
                                                <td>
                                                    <a href="category-edit.php?id=<?= $category_item['category_id']; ?>"
                                                        class="btn btn-success btn-sm mr-1 px-3">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <input type="hidden" name="category_delete_id"
                                                            value="<?= $category_item['category_id']; ?>">
                                                        <button type="submit" name="category_delete_btn"
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