<?php
if (isset($_POST['sendMessage']) != "") {
    extract($_POST);

    //$mobile = "254711971251"; // Bulk messages can be comma separated
    //$message = "This is a test message + = # special characters @ _ -";

    $finalURL = "https://mysms.celcomafrica.com/api/services/sendsms/?apikey=" . urlencode($apikey) . "&partnerID=" . urlencode($partnerID) . "&message=" . urlencode($message) . "&shortcode=$shortcode&mobile=$mobile";
    $ch = curl_init();
    \curl_setopt($ch, CURLOPT_URL, $finalURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    echo "Response: $response";
    $count = 0;
    $messagesucces = '';
    $messageID = 0;
    if ($response != null) {
        $responseData = json_decode($response, TRUE);
        foreach ($responseData as $responseItem) {
            foreach ($responseItem as $smsdetails) {
                // $messageID = $responseData['responses'][$count]['messageid'];
                $messagesucces = $responseData['responses'][$count]['response-description'];
                $count++;
            }
        }
        if ($messagesucces === "Success") {
            $res = "success";
?>
            <script>
                Swal.fire(
                    "Success",
                    "Message sent successfully",
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
}

?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="col-md-12">
            <div style="margin: 0%;padding:0%" class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>Here You Can Send You Message Messages</div>
                    </div>
                </div>
                <div style="border-top: 1px solid rgba(2, 145, 240, 0.3);" class="main-card mb-3 card">
                    <div align='right'>
                        <a style="color: white;" href="home.php?page=messages">
                            <button class="mb-2 mr-2 btn btn-primary">Messages Count: <span class="badge badge-pill badge-light">
                                    3
                                    <?php

                                    ?>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat Box
                    </div>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="pe-7s-menu btn-icon-wrapper"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <h6 tabindex="-1" class="dropdown-header">Send SMS</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-area-lg">
                    <div class="scrollbar-container ps ps--active-y">
                        <div class="p-2">
                            <form class="needs-validation" novalidate method="post">
                                <div style="width: 95%;" class="chat-wrapper p-1">
                                    <div class="chat-box-wrapper">
                                        <div>
                                            <div class="avatar-icon-wrapper mr-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                </div>
                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                    <?php $image = (!empty($selExmneeData['photo'])) ? 'images/' . $selExmneeData['photo'] : 'images/profile.jpg';
                                                    echo  '<img src="' . $image . '"  alt="User Image"> ' ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-box">
                                            <label for="mobile">Enter Message Here</label>
                                            <textarea placeholder="Write your message here" required id="my-textarea" class=" form-control" name="message" rows="4"></textarea>
                                            <div class="invalid-feedback">
                                                You cant Send A blank Message
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 95%;" class="chat-wrapper p-1">
                                    <div class="chat-box-wrapper">
                                        <div>
                                            <div class="avatar-icon-wrapper mr-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                </div>
                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                    <?php $image = (!empty($selExmneeData['photo'])) ? 'images/' . $selExmneeData['photo'] : 'images/profile.jpg';
                                                    echo  '<img src="' . $image . '"  alt="User Image"> ' ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-box">
                                            <label for="mobile">Enter Mobile Number</label>
                                            <hr>
                                            <input required placeholder="Enter Mobile Number Starting with 2547xxx etc" class=" form-control" type="number" name="mobile" id="tel">
                                            <div class="invalid-feedback">
                                                You have to enter a valid phone number
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="sendMessage" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 265px;"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div style='display: none;' class="loader-wrapper d-flex justify-content-center align-items-center">
                        <div style='display: none;' class="loader">
                            <div class="ball-grid-pulse">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>