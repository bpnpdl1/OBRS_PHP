<?php
$p=password_hash('1234567890',PASSWORD_DEFAULT);

echo password_verify('password','$2y$10$p1.0XO8KTVT73bUGj7CHZuA/A/lD8uNDP/iMYgXO.8M');


?>


<div class="card border round shadow" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-center h3">Pulsar 150</h5>
    </div>
    <img class="card-img-top" src="./images/pulsar150.jpg" alt="Card image cap">
    <div class="card-body">
    <p class="card-text"><b>Station name: </b> ABC Bike rentals</p>
    <div>
        <p><b>Price</b> per hour is 100</p>
        <p><b>Time duration</b> in hours: </p><input type="number">
    </div><br>
    <input type="button" value="Book" class="btn btn-dark round ">
    </div>
</div>
