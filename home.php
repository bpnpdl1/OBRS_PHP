<center>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 100%; width: 80%;" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h1 bg-dark border-round shadow">Rent</h5>
        <p>Take a Bike for rent</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h1 bg-dark border-round shadow">Ride</h5>
        <p>Ride your best Bike</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h1 bg-dark border-round shadow">Remember</h5>
        <p>Remember Us for next time</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
  <div class="row text-center h1">
    <label for="cities">Find Bike for <b>Rent </b> </label>
  </div>
  <div class="row">
    <div class="col">
      <label for="cities">Select City</label>
      <select name="cities" id="cities">
        <option value="city">Cities</option>
        <option value="Narayanghat">Narayanghat</option>
        <option value="Bharatpur">Bharatpur</option>
        <option value="Tandi">Tandi</option>
        <option value="Parsa">Parsa</option>
      </select>
    </div>
    <div class="col">
      <label for="bikecc">Select Bike's cc</label>
      <select name="bikecc" id="bikecc">
        <option value="100">100 cc</option>
        <option value="125">upto 125 cc</option>
        <option value="150">upto 150 cc</option>
        <option value="220">upto 220 cc</option>
      </select>
    </div>
    <div class="col">
      <p></p>
      <input type="submit" value="Find" class="btn btn-dark">
    </div>
  </div>

</div>
<br>
</center>