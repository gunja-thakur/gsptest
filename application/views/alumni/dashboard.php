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

                        </div>
                        <div class="card-body">

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