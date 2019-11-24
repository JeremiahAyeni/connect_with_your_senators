<?php

use spearhead\Classes\SMS;

include('./includes/header.php');
require('./class/DB.php');


$senators = new DB();
$getSenators = $senators->getValues();

if (isset($_POST['sendsms'])) {
  $sendSMS = new SMS();

  $recipient = $_POST['recipient'];
  $sender = $_POST['sender'];
  $message = $_POST['message'];

  $response = $sendSMS->sendSMS($recipient, $sender, $message);
  if ($response == 'success') {
    $sendSMS->responseAlert('Message Successfully Sent');
  } else {
    $sendSMS->responseAlert('Message Not Sent');
  }
}
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Connect With Your Senators in a Click</h1>
      <p class="lead">A project intiated by @unicodeveloper (Designed by @ayenijeremiaho)</p>
	  <small><b>Link to project: <a href=https://github.com/JeremiahAyeni/connect_with_your_senators>HERE</a></b></small>
      <br> <br>
    </div>

    <div class="col-lg-12 sm-12">
      <table id="senatorsList" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>State</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // output data of each row
          while ($row = $getSenators->fetch_assoc()) {
            ?>

            <tr>
              <td><?php echo $row["name"] ?></td>
              <td><?php echo $row["state"] ?></td>
              <!-- <td>Text <span style="float:right;"><i class="fa fa-toggle-on"></i></span></td> -->
              <td>
                <div class="hidden-sm hidden-xs action-buttons">

                  <!-- should receive id, and display full information of the senator -->
                  <a href="/includes/viewsenator.php" class="showModal">
                    <i class="fas fa-eye" style="font-size:20px; color:black; padding-right: 5px;"></i>
                  </a>

                  <a href="/includes/sendnewsms.php?phoneno=<?php echo $row["phone"] ?>" class="showModal">
                    <i class="fas fa-comment-dots" style="font-size:20px;color:red; padding-right: 5px;"></i>
                  </a>

                  <a href="tel:<?php echo $row["phone"] ?>">
                    <i class="fas fa-phone" style="font-size:20px;color:black; padding-right: 5px;"></i>
                  </a>

                  <a href="mailto:<?php echo $row["email"] ?>?subject=To Senator: <?php echo $row["name"] ?> ">
                    <i class="fas fa-mail-bulk" style="font-size:20px;color:red"></i>
                  </a>

                </div>
              </td>
            </tr>
          <?php     } //end of while loop
          mysqli_free_result($getSenators);
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>State</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>


<div class="modal fade" id="defaultModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
<script src="vendor/scripts.js"></script>

</body>

</html>