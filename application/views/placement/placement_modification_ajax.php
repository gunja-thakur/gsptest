<?php foreach ($placement_data as $pd) {
  extract($pd);
} ?>

<div class="col-md-12 mb-2">
  <h5 class="center_head">Modify Placement Details</h5>
</div>

  <form action="<?php echo base_url(); ?>Placement/Update_DetailSave" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <input type="hidden" name="pd_id" id="pd_id" value="<?php echo $pd['pd_id'];?>">


                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="year" class="form-label">Year<span class="text-danger">*</span></label>
                          <select class="form-select CmnCls" aria-label="Default select example" name="year" id="year">

                            <?php foreach ($year_data as $dd) {
                              extract($dd); ?>
                              <option value="<?php echo $dd['year_title'] ?>" <?php if($pd['year']==$dd['year_title']) { echo"Selected";}?>><?php echo $dd['year_title']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="year_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="company" class="form-label">Recruiter/Company Name<span class="text-danger">*</span></label>
                          <select class="form-select CmnCls" aria-label="Default select example" name="company" id="company">


                            <?php foreach ($recruiters_data as $dd) {
                              extract($dd); ?>
                              <option value="<?php echo $dd['rm_id'] ?>" <?php if($pd['company']==$dd['rm_id']) { echo"Selected";}?>><?php echo $dd['name_of_company']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="company_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="course" class="form-label">Course Name<span class="text-danger">*</span></label>
                          <select class="form-select CmnCls" aria-label="Default select example" name="course" id="course">

                            <?php foreach ($course_data as $dd) {
                              extract($dd); ?>
                              <option value="<?php echo $dd['course_id'] ?>" <?php if($pd['course']==$dd['course_id']) { echo"Selected";}?>><?php echo $dd['course_name']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="course_error" class="text-danger ErrorMsg"></span>

                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="total_appears" class="form-label">Total Appears<span class="text-danger">*</span></label>
                          <input type="number" class="form-control CmnCls NumberVelidate" id="total_appears" name="total_appears" aria-describedby="total_appears" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $pd['total_appears']; ?>" />
                          <span id="total_appears_error" class="text-danger ErrorMsg"></span>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-3">
                          <label for="no_of_placed" class="form-label">Number of Placed<span class="text-danger">*</span></label>
                          <input type="number" class="form-control CmnCls NumberVelidate" id="no_of_placed" name="no_of_placed" aria-describedby="no_of_placed" min="0" onKeyPress="if(this.value.length==10) return false;" value="<?php echo $pd['no_of_placed']; ?>" />
                          <span id="no_of_placed_error" class="text-danger ErrorMsg"></span>
                        </div>


                        <div class="form-group mb-0 ">

                          <button type="submit" class="btn btn-sm btn-success" name="update_details" id="update_details" value="1">Update Placement Details</button>

                        </div>
                      </div>
                    </form>
</div>


