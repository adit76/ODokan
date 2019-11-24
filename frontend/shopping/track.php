<?php
  $page_title = "Track Order";
  require 'includes/nav_old.php';
?>

<!-- NOT NAV -->
<main class="not-nav">

  <div class="container jumbotron">
    <div class="col-xs-6 col-xs-offset-3 text-center">
      <h3>TRACK ORDER</h3>
      <div class="col-xs-12">
        <input class="col-xs-10 input-lg" style="box-shadow: none !important; border: 1px solid #DEDEDE; border-radius: 0;" type="text" placeholder="Track Code"></input>
        <div class="col-xs-2 input-lg btn btn-primary" style="display: flex; justify-content: center; align-items: center; border-radius: 0;"><i class="fa fa-search"></i></div>
      </div>
    </div>
  </div>

  <div class="container table-responsive">
    <table class="table table-responsive">
      <thead class="bg-warning">
        <tr>
          <th>Order By:</th>
          <th>Date:</th>
          <th>Status:</th>
          <th>Total Quanity:</th>
          <th>Total Price:</th>
          <th>Delivery Boy:</th>
          <th class="text-center">Cancel Order </th>
        </tr>
      </thead>

      <tbody class="bg-info">
        <tr>
          <td>John Doe</td>
          <td>2018 Dec 10</td>
          <td>On The Way</td>
          <td>6</td>
          <td>Rs.8500</td>
          <td>Richards Charles</td>
          <td class="text-center"><i class="fa fa-close"></i></td>
        </tr>
      </tbody>
    </table>
  </div>

  <?php
    include 'includes/footer.php';
  ?>

</main>
