<?php include_once 'header.php'; ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center mb-4">Delivery Information</h2>
        <form>
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
          </div>
          <div class="mb-3">
            <label for="notes" class="form-label">Additional Notes</label>
            <textarea class="form-control" id="notes" rows="3" placeholder="Any additional notes or instructions"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Place Order</button>
          </div>
        </form>
      </div>
    </div>
  </div>
