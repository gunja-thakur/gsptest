<?php foreach($candidate_count as $cc)?>
<?php foreach($registration_count as $rc)?>
<?php foreach($medical_count as $mdc)?>
<div class="card">
                                <div class="card-header">
                                <i class="fa-solid fa-grip me-1"></i>
                                 Counter Area
                                 </div>
                                <div class="card-body">
								<div class="row">


                                <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card bg-primary text-white">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount">Total Registration   :
                                <span class="odometer" data-count="<?php echo $cc['total_cadidate'];?>">00</span>
                                </div>
                             <!--  <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                            </div>
                            <div class="card-body">

							<div class="numbercount">Registration Fee Paid :
							<span class="odometer" data-count="<?php echo $cc['active_candidate'];?>">00</span>
							</div>
							<div class="numbercount">Registration Fee Unpaid :
							<span class="odometer" data-count="<?php echo $cc['inactive_candidate'];?>">00</span>
							</div>


                            </div>

                             </div>
                            </div>



                            <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card bg-light">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="numbercount font_600">Total Form Submmited   :
<span class="odometer number_span " data-count="<?php echo $rc['total_registration'];?>">00</span>
</div>

</div>
<div class="card-body">

<div class="table-responsive">
<table class="table table-sm table-bordered">
<thead>
<tr>
<th>Seat </th>
<th>Confirm  (<?php echo $rc['Confirm_candidate'];?>) </th>
<th>Upgrade  (<?php echo $rc['upgrade_candidate'];?>) </th>
</tr>
</thead>
<tbody>
<tr>
<th>Verified  </th>
<td> <?php echo $rc['conf_verify'];?> </td>
<td> <?php echo $rc['upg_verify'];?> </td>
</tr>
<tr>
<th>Not Verified  </th>
<td> <?php echo $rc['conf_notverify'];?> </td>
<td> <?php echo $rc['upg_notverify'];?> </td>
</tr>

</table>
</div>

                                </div>
                            </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card bg-success text-white">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount">Total Fee Deposit   :
                                <span class="odometer" data-count="<?php echo $rc['fee_deposit'];?>">00</span>
                                </div>
                             <!--  <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                            </div>
                            <div class="card-body">

                            <!-- <div class="numbercount">Pending Candidates :
							<span class="odometer" data-count="<?php echo $rc['fee_pending'];?>">00</span>
							</div> -->

							<div class="numbercount">Confirm Verified :
							<span class="odometer" data-count="<?php echo $rc['fee_verified_conf'];?>">00</span>
							</div>
							<div class="numbercount">Upgrade Verified :
							<span class="odometer" data-count="<?php echo $rc['fee_verified_upgrade'];?>">00</span>
							</div>
							<div class="numbercount">Not Verified Candidates :
							<span class="odometer" data-count="<?php echo $rc['fee_notverified'];?>">00</span>
							</div>


                            </div>

                             </div>
                            </div>


<div class="col-xl-6 col-md-6 mb-4">
                                <div class="card bg-light">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="numbercount font_600">Total Medical Fitness   :
<span class="odometer number_span " data-count="<?php echo $mdc['total_medical'];?>">00</span>
</div>
                                       <!--  <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                <div class="card-body">

<div class="table-responsive">
<table class="table table-sm table-bordered">
<thead>
<tr>
<th>Department  </th>
<th> Medicine </th>
<th> Surgery </th>
<th> Ophtha </th>
<th> Pathogy </th>
<th> Radio </th>
</tr>
</thead>
<tbody>
<tr>
<th>Pending  </th>
<td><?php echo $mdc['md_pending'];?>  </td>
<td><?php echo $mdc['sd_pending'];?>  </td>
<td><?php echo $mdc['od_pending'];?>  </td>
<td><?php echo $mdc['pd_pending'];?>  </td>
<td><?php echo $mdc['rd_pending'];?>  </td>
</tr>
<tr>
<th>Verified  </th>
<td><?php echo $mdc['md_fit'];?>  </td>
<td><?php echo $mdc['sd_fit'];?>  </td>
<td><?php echo $mdc['od_fit'];?>  </td>
<td><?php echo $mdc['pd_fit'];?>  </td>
<td><?php echo $mdc['rd_fit'];?>  </td>
</tr>
<tr>
<th> Not Verified  </th>
<td><?php echo $mdc['md_unfit'];?>  </td>
<td><?php echo $mdc['sd_unfit'];?>  </td>
<td><?php echo $mdc['od_unfit'];?>  </td>
<td><?php echo $mdc['pd_unfit'];?>  </td>
<td><?php echo $mdc['rd_unfit'];?>  </td>
</tr>
<!--<tr>
<th>Total  </th>
<td colspan="5"> 10 </td>
</tr>-->
</tbody>
</table>
</div>

                                </div>
                            </div>
                            </div>
									</div>
									</div>
									</div>
<?php include(APPPATH.'views/include/footer_script.php');?>