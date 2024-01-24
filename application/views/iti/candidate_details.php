<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Registration - ITI Online Admission</title>
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
    <!-- =============== Css Edition =============== -->
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/style.css" as="style" />
    <link rel="preload" href="<?php echo base_url(); ?>assets/css/style1.css" as="style" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style1.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <header id="Home_One">
        <div class="middle_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="logo_inline">
                            <div class="logo_box">
                                <img src="<?php echo base_url(); ?>assets/images/crisp-logo.png" class="img-fluid" alt="">
                            </div>
                            <div class="logo_text text-center">
                                <h2><span class="hindi_font"> आईटीआई ऑनलाईन प्रवेश 2023-24 हेतु आवेदन पत्र </span></h2>
                            </div>
                            <div class="rishi_img">
                                <img src="<?php echo base_url(); ?>assets/images/azadi_g20.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="mainview_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2">

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm ">



                            <tr>
                                <th><label class="form-label">Registration No.</label></th>
                                <td><?php echo $nd['Registration_no']; ?></td>

                                <th><label class="form-label">Roll No.</label></th>
                                <td><?php echo $nd['roll_no']; ?></td>
                            </tr>

                            <tr>
                                <th><label class="form-label">Samagra ID</label></th>
                                <td><?php echo $nd['samagra_id']; ?></td>

                                <th><label class="form-label">Board Name</label></th>
                                <td><?php echo $nd['board_name']; ?></td>
                            </tr>


                            <tr>

                                <th><label class="form-label">Student Name</label></th>
                                <td><?php echo ucwords($nd['applicant_name_eg']); ?></td>

                                <th><label class="form-label">Quota Type</label></th>
                                <td><?php if ($nd['rank_type'] == 1) {
                                        echo "All India";
                                    } else if ($nd['rank_type'] == 2) {
                                        echo "State";
                                    } ?></td>
                            </tr>

                            <tr>
                                <th><label class="form-label">Email ID</label></th>
                                <td><?php echo ucwords($nd['u_email']); ?></td>

                                <th><label class="form-label">Mobile</label></th>
                                <td><?php echo $nd['u_mobile']; ?></td>
                            </tr>

                            <tr>
                                <th><label class="form-label">Institute Name</label></th>
                                <td><?php echo ucwords($nd['institute_name']); ?></td>

                                <th><label class="form-label">Subject Name</label></th>
                                <td><?php echo $nd['subject_name']; ?></td>
                            </tr>
                            <tr>
                                <th> <label class="form-label">Father Name</label></th>
                                <td><?php echo $nd['father_name']; ?></td>

                                <th><label class="form-label">Mother Name</label></th>
                                <td><?php echo $nd['mother_name']; ?></td>
                            </tr>

                            <tr>
                                <th> <label class="form-label">Category</label></th>
                                <td><?php echo $nd['cat_name']; ?></td>

                                <th><label class="form-label">Quota</label></th>
                                <td><?php echo $nd['quota_name']; ?></td>
                            </tr>
                        </table>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <?php include(APPPATH . 'views/footer_include.php'); ?>
</body>

</html>