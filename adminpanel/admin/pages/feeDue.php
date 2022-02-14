  <?php
  if (isset($_POST['sendMessage']) != "") {
    extract($_POST);
    $mobile;
    $loop = 0;
    $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
    $loop = 0;
    if ($selExmne->rowCount() > 0) {
      while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) {
        $bal = 0;
        $stdid = $selExmneRow['exmne_id'];
        $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices where id='$stdid' ORDER BY id ASC ");
        if ($selExmne->rowCount() > 0) {
          while ($selExmneRowfee = $selExmnefee->fetch(PDO::FETCH_ASSOC)) {
            $bal += $selExmneRowfee['ammount'];
          }
          if ($bal < 0) {
            if ($loop === 0) {
              $mobile =  $selExmneRow['tell'];
              $loop = 6;
            } else {
              $mobile = $mobile . ',' . $selExmneRow['tell'];
            }
          }
        }
      }

      //$mobile = "254711971251"; // Bulk messages can be comma separated
      //$message = "This is a test message + = # special characters @ _ -";

      $finalURL = "https://mysms.celcomafrica.com/api/services/sendsms/?apikey=" . urlencode($apikey) . "&partnerID=" . urlencode($partnerID) . "&message=" . urlencode($message) . "&shortcode=$shortcode&mobile=$mobile";
      $ch = curl_init();
      \curl_setopt($ch, CURLOPT_URL, $finalURL);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($ch);
      curl_close($ch);
      // echo "Response: $response";
      $count = 0;
      $messagesucces = '';
      $messageID = 0;
      $failed = 0;
      $success = 0;
      if ($response != null) {
        $responseData = json_decode($response, TRUE);
        foreach ($responseData as $responseItem) {
          foreach ($responseItem as $smsdetails) {
            // $messageID = $responseData['responses'][$count]['messageid'];
            $messagesucces = $responseData['responses'][$count]['response-description'];
            if ($messagesucces === "Success") {
              $success += 1;
            } else {
              $failed += 1;
            }
            $count++;
          }
        }
        $res = "Message sent successfully=" . $success . " and " . "Message failed=" . $failed;
  ?>
        <script>
          Swal.fire(
            "Success",
            "<?php echo $res ?>",
            "success"
          );
        </script>
      <?php
      } else {
        $res = "failed";
      ?>
        <script>
          Swal.fire(
            "Failed",
            "We were not able to send your message, Failed",
            "error"
          );
        </script>
      <?php
      }
    } else { ?>
      <script>
        Swal.fire(
          "Failed",
          "We were not able find contacts in that group, Failed",
          "error"
        );
      </script>
  <?php }
  }
  ?>


  <link rel="stylesheet" type="text/css" href="css/mycss.css">
  <div class="app-main__outer">
    <div class="app-main__inner">
      <div class="app-page-title">
        <div class="page-title-wrapper">
          <div class="page-title-heading">
            <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">MANAGE EXAMINEE</div>
            <label style="color: transparent;">______</label>
            <label style="border-left: 1px solid rgba(2, 145, 240, 0.3);color: transparent;">______</label>

            <div class="search-wrapper">
              <div class="input-holder">
                <button class="search-icon"><span></span></button>
                <form action="home.php" method="get">
                  <input name="exmne_fullname" type="text" class="search-input" placeholder="Type Reg No To Search">
                  <input name="page" type="hidden" value="feeDue">
                </form>
              </div>
              <button class="close"></button>
            </div>
          </div>
        </div>
      </div>
      <form method="post">
        <div class="col-md-12">
          <div class="main-card mb-3 card">
            <div class="card-header">
              Examinee List
            </div>



            <div class="table-responsive">
              <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                <thead>
                  <tr>
                    <th># </th>
                    <th>Reg No </th>
                    <th>Fullname</th>
                    <th>Course</th>
                    <th>Year level</th>
                    <th>status</th>
                    <th>Address</th>
                    <!-- <th>School</th> -->
                    <th>Class</th>
                    <th>Fee Balance</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  @$exmne_fullname = $_GET['exmne_fullname'];


                  if ($exmne_fullname != '') {
                    $selExmne = $conn->prepare("SELECT * FROM examinee_tbl WHERE exmne_fullname LIKE :keyword");
                    $selExmne->execute(['keyword' => '%' . $exmne_fullname . '%']);
                    //$selExmne = $conn->query("SELECT * FROM examinee_tbl where exmne_fullname='$exmne_fullname'  ORDER BY exmne_id DESC ");
                  }
                  // Else to load  home  page display
                  else {
                    $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
                  }

                  // $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
                  $loop = 0;
                  if ($selExmne->rowCount() > 0) {
                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) {

                      $bal = 0;
                      $stdid = $selExmneRow['exmne_id'];
                      $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices where id='$stdid' ORDER BY id ASC ");
                      if ($selExmne->rowCount() > 0) {
                        while ($selExmneRowfee = $selExmnefee->fetch(PDO::FETCH_ASSOC)) {
                          $bal += $selExmneRowfee['ammount'];
                        }
                        if ($bal < 0) {
                          $loop += 1;
                  ?>
                          <tr>
                            <td><?php echo $loop; ?></td>
                            <td><?php echo $selExmneRow['Reg_No']; ?></td>
                            <td><?php echo $selExmneRow['exmne_fullname']; ?></td>
                            <td>
                              <?php
                              $exmneCourse = $selExmneRow['exmne_course'];
                              $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                              echo $selCourse['cou_name'];
                              ?>
                            </td>

                            <td><?php echo $selExmneRow['exmne_year_level']; ?></td>
                            <td><?php echo $selExmneRow['exmne_status']; ?></td>
                            <td><?php echo $selExmneRow['address']; ?></td>
                            <!-- <td><?php echo $selExmneRow['School']; ?></td> -->
                            <td><?php echo $selExmneRow['Class']; ?></td>
                            <td><?php echo 0 - $bal; ?></td>
                            <!-- <td>
                          <a href="home.php?id=<?php echo $selExmneRow['exmne_id']; ?>&page=FeePaymentnow" class="btn btn-sm btn-primary">Statement</a>

                        </td> -->
                          </tr>
                    <?php }
                      }
                    }
                  } else { ?>
                    <tr>
                      <td colspan="3">
                        <h3 class="p-3">No Student Found With Fee Balance</h3>
                      </td>
                    </tr>
                  <?php }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>
        <div class="chat-box">
          <label for="mobile">Enter Message Here</label>
          <textarea placeholder="Write your message here" required id="my-textarea" class=" form-control" name="message" rows="4">
            Hello, you have fee balance which should be paid as soon as possible. Kindly log in to your portal to view your fee balance. @TOPMAX COLLEGE
          </textarea>
          <div class="invalid-feedback">
            You cant Send A blank Message
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" name="sendMessage" class="btn btn-primary">Broadcast</button>
        </div>
      </form>

    </div>