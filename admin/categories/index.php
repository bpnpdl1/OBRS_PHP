<?php
$title = "Categories";
require "../../db.php";
require "../top.php";
require "../header.php";
?>


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data=all('categories');
        foreach ($data as $users) {
        ?>
            <tr>
                <td><?php echo $users["id"]; ?></td>
                <td><?php echo $users["name"]; ?></td>
                <td><a href="show.php?id=<?php echo $users['id']; ?>" class="btn btn-success">Show</a>
                    <a href="edit.php?id=<?php echo $users['id']; ?>" class="btn btn-dark">Edit</a>
                    <a href="delete.php?id=<?php echo $users['id']; ?>" class="btn btn-danger" onclick="confirmdelete()">Delete</a>
                </td>
            </tr>

        <?php }; ?>

    </tbody>
</table>


<?php
require "../footer.php";
?>
<script>
    function confirmdelete() {
        if (confirm('Are you sure to delete this data!')) {
            href.location("index.php");
        }
    }
</script>