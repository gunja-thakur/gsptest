<form action="" method="post" enctype="multipart/form-data" class="row g-3 mb-5" >
                         <div class="col-md-3">
                            <label for="candidate_type" class="form-label">Select Counselling Type </label>
                            <select class="form-select mandatory" id="candidate_type"  name="candidate_type" >
                            <option value="" >Select</option>
                            <option value="1" >PG</option>
                            <option value="2" >UG</option>
                            </select>

                        </div>
                         <div class="col-md-2">
                            <label for="rank_type" class="form-label">Select Quota </label>
                            <select class="form-select mandatory" id="rank_type"  name="rank_type" >
                            <option value="" >Select Quota</option>
                            <option value="1" >All India</option>
                            <option value="2" >State</option>
                            </select>

                        </div>
                         <div class="col-md-2">
                            <label for="phase" class="form-label">Select Phase </label>
                            <select class="form-select mandatory" id="phase"  name="phase" >
                            <option value="" >Select Phase</option>
                            <option value="1" >Phase 1</option>
                            <option value="2" >Phase 2</option>
                            </select>

                        </div>

                        <div class="col-md-2">
                        <button type="submit" class="btn btn-secondary btn-sm mt-4" name="recordsearch" id="recordsearch" ><i class="fa fa-search"></i> Search</button>
                        </div>

                        <div class="col-md-12"> <p class="text-center red lighten-2" id="error" style="color:red"></p></div>




                        </form>