<!DOCTYPE html>
<html>
<head>
    <title>Shipping Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
  <link  rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="sidebar">
        <div class="logo">
            <img src="logo.png" alt="Company Logo" width="150">
            <h4>Company Name</h4>
        </div>
       <a href="#" class="active"><i class="fas fa-bell"></i> What's New</a>
<a href="#"><i class="fas fa-shopping-cart"></i> Place Order</a>
<a href="#"><i class="fas fa-truck"></i> Track Order</a>
<a href="#"><i class="fas fa-chart-bar"></i> Reports</a>
<a href="#"><i class="fas fa-route"></i> Route Tracking</a>
<a href="#"><i class="fas fa-box-open"></i> Parcel Tracking</a>
<a href="#"><i class="fas fa-address-book"></i> Address Book</a>
<a href="#"><i class="fas fa-file-alt"></i> Order Templates</a>
<a href="#"><i class="fas fa-user"></i> User Profile</a>
<a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>

    </div>
    <!-- Main content -->
    <div class="container-fluid my-5">
        <h1>Place Order</h1>
        <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button">Create from Recent Orders</button>
  <button class="btn btn-primary" type="button">Create from Recent Templates</button>
</div>
<hr>
<!-- Form to create new order -->
<div class="NewOrderForm">
<div class="Pickup">
<h2>Pickup</h2>
<p> Enter in the pickup information for this order.</p>
<button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  <!-- Custom button -->
</button>
<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</div>



</div>




        <!-- Add your main content here -->
    </div>
    </div>
</body>
</html> 