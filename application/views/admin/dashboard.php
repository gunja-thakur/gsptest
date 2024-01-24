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




                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           Guest List
                        </div>
                        <div class="card-body">
                            <div class="col-md-12" style="display:none;">
                                <form action="" method="post" enctype="multipart/form-data" class="row g-3 mb-5">
                                    <div class="col-md-3">
                                        <label for="candidate_type" class="form-label">Select Counselling Type </label>
                                        <select class="form-select mandatory" id="candidate_type1" name="candidate_type1">
                                            <option value="">Select</option>
                                            <option value="1">PG</option>
                                            <option value="2">UG</option>
                                        </select>

                                    </div>
                                    <div class="col-md-2">
                                        <label for="rank_type" class="form-label">Select Quota </label>
                                        <select class="form-select mandatory" id="rank_type1" name="rank_type1">
                                            <option value="">Select Quota</option>
                                            <option value="1">All India</option>
                                            <option value="2">State</option>
                                        </select>

                                    </div>
                                    <div class="col-md-2">
                                        <label for="phase" class="form-label">Select Phase </label>
                                        <select class="form-select mandatory" id="phase1" name="phase1">
                                            <option value="">Select Phase</option>
                                            <option value="1">Phase 1</option>
                                            <option value="2">Phase 2</option>
                                        </select>

                                    </div>

                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-secondary btn-sm mt-4 recordsearch" name="recordsearch" id="recordsearch"><i class="fa fa-search"></i> Search</button>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="text-center red lighten-2" id="error1" style="color:red"></p>
                                    </div>




                                </form>
                            </div>
                            <hr>
                            <?php if ($this->session->userdata['user_role'] == 1 or $this->session->userdata['user_role'] == 2 ) { ?>

                                <div class="stdajaxshow">
                                    <div class="table-responsive">
                                        <table id="datatablesSimple" class="table table-sm w-100">

                                            <thead>

                                                <tr class="theme_bg_blue text-light">
                                                    <th>S.No</th>
                                                    <th>Send</th>
                                                    <th>Call</th>
                                                    <th>Category</th>
                                                    <th>Referance</th>
                                                    <th>Coordination </th>
                                                    <th>Status </th>
                                                    <th>Abhivadan </th>
                                                    <th>Sambodhan </th>
                                                    <th>name </th>
                                                    <th>Designation_org</th>
                                                    <th>Contanct_no </th>
                                                    <th>District </th>
                                                    <th>State </th>
                                                    <th>Pin</th>
                                                    <th> Country</th>
                                                    <th>Confirmation </th>
                                                    <th>Email </th>
                                                    <th> Remark</th>
                                                    <th>Aadhar_name </th>
                                                    <th> Aadhar_no</th>
                                                    <th>Age </th>
                                                    <th> Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $i=1; foreach($guest_data as $cd) { ?>

                                                <tr>
                                                  <td><?php echo $i;?></td>
                                                  <td><?php echo $cd['Send'];?></td>
                                                    <td><?php echo $cd['gCall'];?></td>
                                                    <td><?php echo $cd['Category'];?></td>
                                                    <td><?php echo $cd['sandarbh'];?></td>
                                                    <td><?php echo $cd['saman‍'];?></td>
                                                    <td><?php echo $cd['sthiti'];?></td>
                                                    <td><?php echo $cd['abhiwan'];?></td>
                                                    <td><?php echo $cd['sambo'];?></td>
                                                    <td><?php echo $cd['name'];?></td>
                                                    <td><?php echo $cd['address1'];?></td>
                                                    <td><?php echo $cd['contact'];?></td>
                                                    <td><?php echo $cd['district'];?></td>
                                                    <td><?php echo $cd['state'];?></td>
                                                    <td><?php echo $cd['pincode'];?></td>
                                                    <td><?php echo $cd['country'];?></td>
                                                    <td><?php echo $cd['sehmati'];?></td>
                                                    <td><?php echo $cd['email'];?></td>
                                                    <td><?php echo $cd['remark'];?></td>
                                                    <td><?php echo $cd['aadhar'];?></td>
                                                    <td><?php echo $cd['aadharno'];?></td>
                                                    <td><?php echo $cd['age'];?></td>


                                                  <td><a href="<?php echo base_url();?>Home/Get_GuestRecord/<?php echo $cd['guest_id'];?>" class="btn btn-sm btn-info"> <i class="fas fa-eye"></i> </a></td>
                                                </tr>

                                                <?php $i++; } ?>





                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php } ?>

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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Candidate</h1>
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
        $(document).on('click', '.confirm_seat', function() {
            var reg_id = $(this).attr('data-id');

            //alert(reg_id);return false;

            $.ajax({

                url: "<?php echo base_url(); ?>Home/ConfirmCadidate",
                method: "POST",
                data: {
                    "reg_id": reg_id
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