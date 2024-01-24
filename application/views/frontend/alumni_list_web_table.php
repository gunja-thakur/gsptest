

<!-- Search -->

<form action="" method="post" enctype="multipart/form-data" class="overflow_control">


<div class="search_panel">
<div class="row form-group align-items-center justify-content-center">

  <div class="col-lg-3 col-md-3 col-sm-6 mb-3 quf">

    <label for="ForSelect" class="form-label">Batch </label>

    <select class="form-select" aria-label="Default select example" name="batch" id="batch">

      <option value="0">Select Batch </option>

      <option value="2">Batch 2</option>

      <option value="3">Batch 3</option>

      <option value="4">Batch 4</option>

      <option value="5">Batch 5</option>

    </select>

    <p id="batch_error" class="text-danger"></p>

  </div>



  <div class="col-lg-3 col-md-3 col-sm-6 mb-3 quf">

    <label for="ForSelect" class="form-label">Passing Year </label>

    <select class="form-select" aria-label="Default select example" name="passing_year" id="passing_year">

      <option value="0">Select Passing Year </option>

      <option value="2023">2023</option>

      <option value="2022">2022</option>

      <option value="2021">2021</option>

      <option value="2020">2020</option>

    </select>

    <p id="passing_year_error" class="text-danger"></p>

  </div>



  <div class="col-lg-3 col-md-3 col-sm-6 mb-3 quf">

                          <label for="ForSelect" class="form-label">Course<!-- <span class="text-danger">*</span> --> </label>

                          <select class="form-select" aria-label="Default select example" name="branch" id="branch">

                            <option value="0">Select Course </option>

                            <?php foreach($branch_data as $bd) { extract($bd);  ?>

                              <option value="<?php echo $bd['sort_name']; ?>"> <?php echo $bd['branch_name']; ?> </option>

                            <?php } ?>



                          </select>

                          <p id="branch_error" class="text-danger"></p>

                        </div>


  <div class="col-lg-3 col-md-3 col-sm-6 mb-3 srch text-end">

    <label></label>

    <button type="submit" class="btn btn-success" name="search" id="RecordSearch">Search</button>

  </div>



</div>
</div>

</form>

<!-- Search -->





<div class="stdajaxshow">

  <?php include(APPPATH . 'views/frontend/alumni_list_web_table_ajax.php'); ?>

</div>



</body>

</html>

