<?php
$title = "Admin panel";
require 'top.php';
require 'db.php';
require 'header.php';

$id=request('id');
if(!empty($_GET)){
delete('users',$id);
}

?>


<div class="row">
    <h2 class="ml-5">Bike Renters</h2>

    <table class="table border table-stribed table-hover">
        <thead style="background-color: #000000; "  >
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>

        </thead>
        <tbody class="tbody">
            <?php
            $data = all('users');
            foreach ($data as $users) {

            ?>
                <tr>
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['name']; ?></td>
                    <td><a href="show.php?id=<?php echo $users['id']; ?>" class="btn btn-success btn-sm ">Show</a>
                        <a href="edit.php?id=<?php echo $users['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="index.php?id=<?php echo $users['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</div>

<!-- End of Main Content -->
<?php require 'footer.php'; ?>
