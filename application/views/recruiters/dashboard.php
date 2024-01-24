<?php foreach ($recruiters_details as $rd) {
    extract($rd);
} ?>
<!DOCTYPE html>
<html lang="en">

<!---Head Start--->

<head>


    <?php include(APPPATH . 'views/include/head.php'); ?>
</head>
<!---Head Start--->

<body class="sb-nav-fixed">
    <!---Navigation Start--->

    <?php include(APPPATH . 'views/include/header.php'); ?>
    <!---Navigation End--->

    <div id="layoutSidenav">

        <!---Sidebar Start--->

        <?php include(APPPATH . 'views/include/sidebar.php'); ?>
        <!---Sidebar End--->

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <?php if ($this->session->flashdata('message')) { ?>
                        <div class="alert alert-success flashhide">
                            <?php echo $this->session->flashdata('message') ?>
                        </div>
                    <?php } ?>

                    <!------------------Candidate Registration List ---------------------------------->
                   <!-- <h2>Dashboard</h2> -->

                    <div class="card mb-4">
                        <div class="card-header"> Recruiter/Company Profile
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-lg-12 mb-3">
                                    <div class="profile_boxed">
                                        <div class="profile_cover">
                                            <div class="profile_img">
                                                <img src="<?php echo base_url(); ?>assets/recruitment/<?php echo $rd['company_image']; ?>" alt="Profile Photo" class="img-fluid" />

                                            </div>
                                            <div class="profile_intro">
                                                <h3 class="" id=""><?php echo $rd['name_of_company']; ?></h3>
                                                <h5>
                                                    Year of Inception - <?php echo $rd['year_of_inception']; ?>
                                                </h5>

                                            </div>
                                            <div class="back_btn">
                                                <a href="<?php echo base_url(); ?>Recruiters/Update_CompanyProfile" class="btn btn-sm btn-outline-success "> <i class="fa fa-edit "></i> Update Company Profile</a>
                                            </div>
                                        </div>
                                        <div class="profile_tabledetails">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">


                                                    <tr>
                                                        <th><label class="form-label">Website</label></th>
                                                        <td><?php echo $rd['website']; ?></td>

                                                        <th><label class="form-label">Type of Company</label></th>
                                                        <td><?php echo $rd['type_title']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Nature of Business</label></th>
                                                        <td><?php echo $rd['business_title']; ?></td>

                                                        <th><label class="form-label">GST/TIN Number</label></th>
                                                        <td><?php echo $rd['gst_tin_number']; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th><label class="form-label">Affiliation</label></th>
                                                        <?php if ($rd['affiliation'] == 1) { ?>
                                                            <td><?php echo "In-House HR"; ?></td>
                                                        <?php } else if ($rd['affiliation'] == 0) { ?>
                                                            <td><?php echo "RPO (Recruitment Process Outsourcing) personnel"; ?></td>
                                                        <?php } ?>

                                                        <th><label class="form-label">In-House HR Name</label></th>
                                                        <td><?php echo $rd['inhouse_hr_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Mobile</label></th>
                                                        <td><?php echo $rd['mobile']; ?></td>

                                                        <th><label class="form-label">Alternate Mobile</label></th>
                                                        <td><?php echo $rd['alternate_mobile']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Email</label></th>
                                                        <td><?php echo $rd['email']; ?></td>

                                                        <th><label class="form-label">Alternate Email</label></th>
                                                        <td><?php echo $rd['alternate_email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-label">Postal Code</label></th>
                                                        <td><?php echo $rd['postal_code']; ?></td>

                                                        <th><label class="form-label">Declaration</label></th>
                                                        <?php if ($rd['diclaration_YN'] == 1) { ?>
                                                            <td><?php echo "Yes"; ?></td>
                                                        <?php } else if ($rd['diclaration_YN'] == 0) { ?>
                                                            <td><?php echo "No"; ?></td>
                                                        <?php } ?>

                                                    </tr>

                                                    <tr>
                                                        <th><label class="form-label">Does your company have an office at MP?</label></th>
                                                        <td> <?php if ($rd['office_iitm_YN'] == 1) { ?>
                                                                <?php echo "Yes"; ?>
                                                            <?php } else if ($rd['office_iitm_YN'] == 0) { ?>
                                                                <?php echo "No"; ?>
                                                            <?php } ?></td>

                                                        <th><label class="form-label">Are you a registered company in India?</label></th>
                                                        <td><?php if ($rd['registerd_company_YN'] == 1) { ?>
                                                                <?php echo "Yes"; ?>
                                                            <?php } else if ($rd['registerd_company_YN'] == 0) { ?>
                                                                <?php echo "No"; ?>
                                                            <?php } ?></td>
                                                    </tr>

                                                    <tr>
                                                    <th><label class="form-label">Address</label></th>
                                                    <td colspan="3"><?php echo $rd['address']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-12 mb-3">
                                    <div class="row">
                                        <h3 class="h3style_heading"> Upcoming Events</h3>

                                        <?php $i = 1;
                                        foreach ($event_data as $ed) { ?>
                                            <div class="col-lg-4 mb-3">
                                                <div class="event_flex">
                                                    <div class="event_img">
                                                        <img src="<?php echo base_url(); ?>assets/events/<?php echo $ed['event_invite']; ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="event_content">
                                                        <h3>
                                                            <a class="ViewEvent" data-id="<?php echo $ed['event_id']; ?>">
                                                                <?php echo $ed['event_title']; ?> </a>
                                                        </h3>
                                                        <span class="publish_date">
                                                            <?php if ($ed['published_date'] != "") echo date("d-m-Y", strtotime($ed['published_date'])) ?> </span>
                                                        <p><?php echo mb_substr($ed['event_description'], 0, 50); ?></p>


                                                    </div>
                                                    <span class="align_btn_view">
                                                        <a class="btn btn-sm btn-warning ViewEvent" data-id="<?php echo $ed['event_id']; ?>">View Event </a> </span>
                                                </div>

                                            </div>
                                        <?php $i++;
                                            if ($i > 3) break;
                                        } ?>


                                    </div>
                                </div> -->
                            </div>

                        </div>
                    </div>

                    <!---------------Modal------------------>


                    <!-- Button trigger modal -->
                    <button type="hidden" class="btn btn-primary" id="click_model" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display:none;">
                        View
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document" style="max-width: 600px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Event Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body datashow">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->



                </div>
            </main>




            <!-- Footer -->

            <?php include(APPPATH . 'views/include/footer.php'); ?>
            <!-- Footer -->
        </div>
    </div>

    <!-- back to top start -->

    <!-- Footer Script -->

    <?php include(APPPATH . 'views/include/footer_script.php'); ?>
    <script>
        $(document).on('click', '.ViewEvent', function() {
            var event_id = $(this).attr('data-id');

            //alert(event_id);return false;

            $.ajax({

                url: "<?php echo base_url(); ?>Events/View_Event",
                method: "POST",
                data: {
                    "event_id": event_id
                },


                success: function(data) {

                    //  alert(data);return false;

                    $(".datashow").html(data);
                    $("#click_model").click();
                    return false;

                }
            });

        });
    </script>


    <script>
        $(document).on('click', '#search', function() {

            //var date=$("#date_slot").val();
            var candidate_type = $("#candidate_type").val();
            var rank_type = $("#rank_type").val();
            var phase = $("#phase").val();
            var seat = $("#seat").val();
            var date_slot = $("#date_slot").val();

            if (candidate_type == "") {
                $(candidate_type).focus();
                $("#candidate_type").css('border', '2px solid #ec000069');
                $("#error").text('Please Select Counselling Type');
                return false;
            }
            $("#candidate_type").css('border', '1px solid #cacfe7');

            if (rank_type == "") {
                $(rank_type).focus();
                $("#rank_type").css('border', '2px solid #ec000069');
                $("#error").text('Please Select Quota');
                return false;
            }
            $("#rank_type").css('border', '1px solid #cacfe7');

            if (phase == "") {
                $(phase).focus();
                $("#phase").css('border', '2px solid #ec000069');
                $("#error").text('Please Select Counselling Phase');
                return false;
            }
            $("#phase").css('border', '1px solid #cacfe7');

            /* if(seat=="")
            {
            $(seat).focus();
            $("#seat").css('border','2px solid #ec000069');
            $("#error").text('Please Provide Seat');
            return false;
            }
            $("#seat").css('border','1px solid #cacfe7'); */

            // return flase;

            //if(date=="")


            $.ajax({
                url: "<?php echo base_url(); ?>admin/Dashboard/AjaxCountData",
                type: "POST",
                //data: {"date":date},
                data: {
                    "candidate_type": candidate_type,
                    "rank_type": rank_type,
                    "phase": phase
                },
                success: function(res) {
                    $(".pmajaxshow").html('');
                    $(".pmajaxshow").html(res);
                    $(".allcount").hide();
                    //return false;
                }
            });

            return false;
        });
    </script>

    <script>
        $(document).on('click', '.recordsearch', function() {

            var candidate_type = $("#candidate_type1").val();
            var rank_type = $("#rank_type1").val();
            var phase = $("#phase1").val();
            /* var seat=$("#seat").val();
            var date_slot=$("#date_slot").val(); */

            if (candidate_type == "") {
                $(candidate_type).focus();
                $("#candidate_type1").css('border', '2px solid #ec000069');
                $("#error1").text('Please Select Counselling Type');
                return false;
            }
            $("#candidate_type1").css('border', '1px solid #cacfe7');

            if (rank_type == "") {
                $(rank_type).focus();
                $("#rank_type1").css('border', '2px solid #ec000069');
                $("#error1").text('Please Select Quota');
                return false;
            }
            $("#rank_type1").css('border', '1px solid #cacfe7');

            if (phase == "") {
                $(phase).focus();
                $("#phase1").css('border', '2px solid #ec000069');
                $("#error1").text('Please Select Counselling Phase');
                return false;
            }
            $("#phase1").css('border', '1px solid #cacfe7');

            //alert(candidate_type);return false;

            /* if(seat=="")
            {
            $(seat).focus();
            $("#seat").css('border','2px solid #ec000069');
            $("#error").text('Please Provide Seat');
            return false;
            }
            $("#seat").css('border','1px solid #cacfe7'); */

            // return flase;

            $.ajax({
                url: "<?php echo base_url(); ?>admin/Dashboard/View_CandidateData",
                type: "POST",
                data: {
                    "candidate_type": candidate_type,
                    "rank_type": rank_type,
                    "phase": phase
                },
                success: function(res) {
                    //alert(res);return false;
                    $(".stdajaxshow").html('');
                    $(".stdajaxshow").html(res);
                    $("#datatablesSimple").html('');

                    //return false;
                }
            });

            return false;
        });
    </script>









    <!-- Footer Script End -->
</body>

</html>