<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title> Jain Engineer’s Society</title>
  <!-- <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png" /> -->
  <link rel="preload" href="<?php echo base_url(); ?>assets/css/style.css" as="style" />
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Noto Sans Devanagari', sans-serif;
    }

    .card-body label {
      font-size: 15px;
    }

    .card-header {
      background: #fdf4ec
    }

    main {
      padding: 0
    }
  </style>
</head>

<body class="login_view1">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="middle_header">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xxl-12 col-xl-12 col-lg-12">
                <div class="logo_inline">
                  <div class="logo_box">
                    <img src="<?php echo base_url(); ?>assets/images/crisp-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="logo_text text-center">
                    <h2>Jain Engineer’s Society </h2>
                    <h2>16th National Convention 2023, Bhopal </h2>
                    <h4><span>18th to 20th November, 2023 Venue – Bhopal</span></h4>
                  </div>
                  <div class="rishi_img">
                    <!-- <img src="<?php echo base_url(); ?>assets/images/azadi_g20.png" class="img-fluid" alt=""> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="control_formview">
          <div class="container">
            <div class="row col-md-12  m-5">
              <div class="card mb-4 mt-2">
                <div class="card-body">

                  <form class="" action="<?php echo base_url('Registration/CousellingForm_Save') ?>" method="POST" enctype="multipart/form-data" id="myform">
<div class="row g-3">
                    <div class="col-md-12">
                      <p>To, <br> The Chairman, Conference Committee, <br> Dear Sir,  <br> I/We wish to attend the 16th JES National Convention at Bhopal.  </p>
                    </div>
                    <div class="col-md-3">
                      <label for="Chapter
" class="form-label">Chapter </label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control mandatory" id="Chapter" name="Chapter">
                      <div class="Chapter_msg"></div>
                    </div>

                    <div class="col-md-3">
                      <label for="City" class="form-label">City</label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control mandatory" id="City" name="City">
                      <div class="board_name_msg"></div>
                    </div>

                    <div class="col-md-3">
                      <label for="State" class="form-label">State </label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control mandatory" id="State" name="State">

                    </div>
                    <div class="col-md-3">
                      <label for="member_name" class="form-label">Name of Member </label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control mandatory" id="member_name" name="member_name">

                    </div>
                    <div class="col-md-3">
                      <label for="member_name" class="form-label">Address </label>
                    </div>
                    <div class="col-md-9">
                      <textarea class="form-control mandatory" id="member_name" name="member_name"> </textarea>

                    </div>
                    <div class="col-md-3">
                      <label for="pincode" class="form-label"> Pincode </label>
                    </div>
                    <div class="col-md-3">
                      <input type="number" class="form-control mandatory" id="pincode" name="pincode">
                      <div class="pincode_msg"></div>
                    </div>

                    <div class="col-md-3">
                      <label for="tel_no" class="form-label">Tel. No. </label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control mandatory" id="tel_no" name="tel_no">
                      <div class="tel_no_msg"></div>

                    </div>

                    <div class="col-md-3">
                      <label for="mobile" class="form-label">Mobile No. </label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control mandatory" id="mobile" name="mobile">
                      <div class="mobile_msg"></div>

                    </div>

                    <div class="col-md-3">
                      <label for="email" class="form-label">E-Mail </label>
                    </div>
                    <div class="col-md-3">
                      <input type="email" class="form-control mandatory" id="email" name="email">
                      <div class="email_msg"></div>

                    </div>

                    <div class="col-md-12">
                      <p> <b> I/We wish to register as delegate with my family, details are as under:- </b></p>
                    </div>
                    </div>
                    <div class="row form-group" id="TCForm">

                      <div class="col-12 col-sm-6 col-md-2">
                        <label for="text-input" class=" form-control-label">Name</label>
                        <input type="text" class="form-control" name="fname" id="fname">
                      </div>

                      <div class="col-12 col-sm-6 col-md-2">
                      <label for="text-input" class=" form-control-label">Gender</label>
                        <select name="gender" id="gender" class="form-control mandatory" required>
                          <option value="">Select Gender </option>
                          <option value="Male">Male </option>
                          <option value="Female">Female </option>
                          <option value="Other">Other </option>
                        </select>
                      </div>
                      <div class="col-12 col-sm-6 col-md-2">
                        <label for="text-input" class=" form-control-label">Age</label>
                        <input type="Number" class="form-control" name="Age" id="Age">
                      </div>
                      <div class="col-12 col-sm-6 col-md-2">
                        <label for="text-input" class=" form-control-label">Category</label>

                        <select name="category" id="category" class="form-control ">
                          <option value="">Select Category </option>
                          <option value="Adult">Adult </option>
                          <option value="Minor">Minor </option>
                        </select>
                      </div>


                      <div class="col-12 col-sm-6 col-md-2">
                        <label for="text-input" class=" form-control-label">Total </label>
                        <input type="number" class="form-control" name="total_member" id="total_member">
                      </div>
                      <div class="col-12 col-sm-6 col-md-2">
                        <label for="text-input" class=" form-control-label">Per Head Amount </label>
                        <input type="number" class="form-control" name="per_amount" id="per_amount">
                      </div>
                      <div class="col-12 col-sm-6 col-md-2">
                        <label for="text-input" class=" form-control-label">Total Amount </label>
                        <input type="number" class="form-control" name="total_amount" id="total_amount">
                      </div>

                      <div class="col-12 col-sm-6 col-md-2">
                        <br>
                        <button type="button" class="btn-addrow btn-sm btn-primary mt-2"><i class="fa fa-plus"></i> Add Member</button>

                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <table class="myTable table mt-2 table-bordered" id="AddMembers">
                          <thead>
                            <tr class="bg-info">
                              <th>Name </th>
                              <th>Gender</th>
                              <th>Age</th>
                              <th>Category</th>
                              <th>Total</th>
                              <th>Per Head Amount</th>
                              <th>Total Amount</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-12 col-sm-6 col-md-12"> <h5><b> I would Like to Avail Accommodation </b></h5></div>
                    <div class="col-12 col-sm-6 col-md-4">
                     <label for="text-input" class=" form-control-label">1st Preference</label>
                        <select name="gender" id="gender" class="form-control mandatory" required>
                          <option value="">Select </option>
                          <option value="A">Option A </option>

                        </select>
                     </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <label for="text-input" class=" form-control-label">2nd Preference</label>
                        <select name="gender" id="gender" class="form-control mandatory" required>
                          <option value="">Select </option>
                          <option value="B">Option B </option>

                        </select>
                      </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <label for="text-input" class=" form-control-label">3rd Preference</label>
                        <select name="gender" id="gender" class="form-control mandatory" required>
                          <option value="">Select </option>
                          <option value="C">Option C </option>

                        </select>
                      </div>

                    </div>


                    <div class="row mt-3">
                    <div class="col-md-12 mb-3">
                    <h5 class="center_head">Detail of Arrival at Bhopal</h5>
                    </div>

                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Arrival Date </label>
                        <input type="date" class="form-control" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Arrival Time </label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Train/Bus/Flight Name :No </label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>

                    </div>
                    <div class="row">
                    <div class="col-md-12 mb-3">
                    <h5 class="center_head">Detail of Departure at Bhopal</h5>
                    </div>


                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Departure  Date </label>
                        <input type="date" class="form-control" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Departure Time </label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Train/Bus/Flight Name :No </label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12 mb-3">
                    <h5 class="center_head">If You are Coming by your own Vehicle</h5>
                    </div>


                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Departure  Date </label>
                        <input type="date" class="form-control" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Departure Time </label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="text-input" class=" form-control-label">Train/Bus/Flight Name :No </label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>

                    </div>

                    <!--  -->

                    <div class="col-md-12 mb-3">
                    <h5 class="center_head">Bank Details</h5>
                    </div>
                    <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                      <div class="border_line text-center">

                    <p>  Send your Registration Charges by <br><b>PAY ORDER/ DEMAND DRAFT/ AT PARCHEQUES/ Cash </b><br>Please send cheque In favor of </p>

                      <h3><b>JAIN ENGINEERS SOCIETY BHOPAL </b></h3>
<p>
Bank of India....T T Nagar, Bhopal <br>
A/C no...900810110000873 <br>

IFSC.....BKID0009001</p>
                    </div>
                    </div>
                    <div class="col-lg-5">
                      <img src="<?php echo base_url()?>assets/images/QR_code.jpg" class="img-fluid" width="200px">
                    </div>
                    </div>

                    <hr>
<div class="row">
                    <div class="col-12">
                      <input type="button" value="Save & Continue" id="btn-disable" class="btn btn-success btn-sm submit2" onclick="saveData(); oneclick();" style="float: right;">
                      <input type="submit" style="display:none;" id="submit_main">
                    </div>
</div>
                  </form>

                </div>
              </div>


            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="copyright_div mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="">Copyright &copy;. <span id="currentYear"></span>.</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              Design and Developed by <a href="#"> CRISP</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- back to top start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.3.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/SmoothScroll.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/backToTop.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

  <?php include(APPPATH . 'views/iti/counselling_form_js.php'); ?>


  <script>
    $(document).ready(function() {
      $("#AddMembers").hide();
      $('.btn-addrow').click(function() {
        $("#AddMembers").show();
        var fname = $('#fname').val();
        var gender = $('#gender').val();
        var Age = $('#Age').val();
        var category = $('#category').val();
        var total_member = $('#total_member').val();
        var per_amount = $('#per_amount').val();
        var total_amount = $('#total_amount').val();

        //alert(fname);return false;

        $('.myTable tbody').append("<tr><td>" + fname + "</td> <td>" + gender + "</td><td>" + Age + "</td><td>" + category + "</td><td>" + total_member + "</td><td>" + per_amount + "</td><td>" + total_amount + "</td><td><a href='javascript:void(0);' class='btn btn-sm btn-danger remCF'><i <i class='fa fa-trash'></i></i></a></td></tr>");

        $('#fname').val('');
        $('#gender').val('');
        $('#Age').val('');
        $('#category').val('');
        $('#total_member').val('');
        $('#per_amount').val('');
        $('#total_amount').val('');

      });
    });

    $("#AddMembers").on('click', '.remCF', function() {
      $(this).parent().parent().remove();
    });


    /* This event will fire on 'Delete Row' button click */
    $("#delete-btn").on("click", function() {
      //calling method to delete the last row
      deleteRow();
    });

    /* This method will delete a row */
    function deleteRow(ele) {
      var table = $('.myTable')[0];
      var rowCount = table.rows.length;
      if (rowCount <= 1) {
        alert("There is no row available to delete!");
        return;
      }
      if (ele) {
        //delete specific row
        $(ele).parent().parent().remove();
      } else {
        //delete last row
        table.deleteRow(rowCount - 1);
      }
    }
  </script>



</body>

</html>