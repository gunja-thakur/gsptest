<?php foreach ($candidate_data as $cd) ?>
<div class="table-responsive">
	<table id="dynamic-table1" class="table" style="display:none;">

		<thead>

			<tr class="theme_bg_blue text-light">
				<th> Quota</th>
				<th>Roll No.</th>
				<th>Candidate Name</th>
				<th>Subject </th>
				<th>Neet Admit Card </th>
				<th>Neet Score Card </th>
				<th>High School Marksheet </th>
				<th>Higher Secondary Marksheet </th>
				<?php if ($cd['student_counselling'] == 1) { ?>
					<th>MBBS First Marksheet </th>
					<th>MBBS Second Marksheet </th>
					<th>MBBS Final Part 1 Marksheet </th>
					<th>MBBS Final Part 2 Marksheet </th>
					<th>MBBS Degree </th>
					<th>Internship Completion Certificate </th>
					<th>MP Medical Council </th>
				<?php } ?>
				<th>Passport Size Photo </th>
				<th>ID Proof </th>
				<th>EWS Certificate </th>
				<th>Domicile Certificate</th>
				<th>Cast Certificate </th>
				<th>Income Certificate </th>
				<th>PWD Certificate </th>
				<th>Migration/TC </th>
				<th>Affidavit regarding not receiving domicile </th>
				<th>Seat Leaving Bond </th>
				<th>Rural Service Bond </th>
				<th>IMC Regulation 2002 </th>
				<th>Gap Certificate </th>
				<th>Allotment Letter </th>
				<?php if ($cd['student_counselling'] == 2) { ?>
					<th>Class 11th Marksheet </th>
					<th>Age Certificate</th>
					<th>Sainik Certificate</th>
					<th>Freedom Fighter Certificate</th>
				<?php } ?>
				<th>Fitness Verification </th>
				<th>Seat Status </th>
				<th>Fee Status </th>
				<th> Verified by</th>
				<th> Verification Date</th>

			</tr>


		</thead>

		<tbody>
			<?php $i = 1;
			foreach ($student_data as $sd) { ?>
				<tr>
					<td><?php if ($sd['rank_type'] == 1) {
							echo "All India";
						} else if ($sd['rank_type'] == 2) {
							echo "State";
						} ?></td>
					<td><?php echo $sd['roll_no']; ?></td>
					<td><?php echo $sd['user_name']; ?></td>
					<td><?php echo $sd['subject_name']; ?></td>

					<td>
						<?php if ($sd['cl_neet_admit_card'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_neet_admit_card'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_neet_score_card'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_neet_score_card'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>

					<td>
						<?php if ($sd['cl_high_school_marksheet'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_high_school_marksheet'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>

					<td>
						<?php if ($sd['cl_higher_sec_marksheet'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_higher_sec_marksheet'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<?php if ($sd['student_counselling'] == 1) { ?>
						<td>
							<?php if ($sd['cl_mbbs_first'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_mbbs_first'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>

						<td>
							<?php if ($sd['cl_mbbs_second'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_mbbs_second'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>

						<td>
							<?php if ($sd['cl_mbbs_final_part1'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_mbbs_final_part1'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>

						<td>
							<?php if ($sd['cl_mbbs_final_part2'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_mbbs_final_part2'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
						<td>
							<?php if ($sd['cl_mbbs_degree'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_mbbs_degree'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
						<td>
							<?php if ($sd['cl_internship_completion'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_internship_completion'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
						<td>
							<?php if ($sd['cl_medical_council'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_medical_council'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
					<?php } ?>

					<td>
						<?php if ($sd['cl_candidate_photo'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_candidate_photo'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_id_proof_file'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_id_proof_file'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_ews_certificate'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_ews_certificate'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_domicile_certificate'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_domicile_certificate'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_cast_certificate'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_cast_certificate'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_income_certificate'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_income_certificate'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_pwd_certificate'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_pwd_certificate'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_migration_tc'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_migration_tc'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_affidavit_proforma345'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_affidavit_proforma345'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_seat_living_bond'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_seat_living_bond'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_rural_service_bond'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_rural_service_bond'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_imc_regulation_affidavit'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_imc_regulation_affidavit'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_gap_certificate'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_gap_certificate'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<td>
						<?php if ($sd['cl_allotment_letter'] == 1) { ?>
							Verified
						<?php } else if ($sd['cl_allotment_letter'] == 2) { ?>
							Not Verified
						<?php } else {  ?>
							Not Uploaded
						<?php }  ?>
					</td>
					<?php if ($cd['student_counselling'] == 2) { ?>
						<td>
							<?php if ($sd['cl_class11_marksheet'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_class11_marksheet'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
						<td>
							<?php if ($sd['cl_age_certificate_file'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_age_certificate_file'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
						<td>
							<?php if ($sd['cl_sainik_certificate'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_sainik_certificate'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
						<td>
							<?php if ($sd['cl_freedom_fighter_certificate'] == 1) { ?>
								Verified
							<?php } else if ($sd['cl_freedom_fighter_certificate'] == 2) { ?>
								Not Verified
							<?php } else {  ?>
								Not Uploaded
							<?php }  ?>
						</td>
					<?php } ?>




					<?php if ($sd['seat_status'] == 1) { ?>
						<td width="30%">
							<table class="table table-sm table-bordered">
								<thead class="bg-info">
									<tr>
										<th>Medicine</th>
										<th>Surgery</th>
										<th>Ophtha</th>
										<th>Pathogy</th>
										<th>Radio</th>
									</tr>
								</thead>
								<tr>
									<td>
										<?php if ($sd['medicine_dpt_status'] == 1) { ?>
											Verified
										<?php } else if ($sd['medicine_dpt_status'] == 2) { ?>
											Not Verified
										<?php } else { ?>
											Pending
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['surgical_dpt_status'] == 1) { ?>
											Verified
										<?php } else if ($sd['surgical_dpt_status'] == 2) { ?>
											Not Verified
										<?php } else { ?>
											Pending
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['ophthalmology_dpt_status'] == 1) { ?>
											Verified
										<?php } else if ($sd['ophthalmology_dpt_status'] == 2) { ?>
											Not Verified
										<?php } else { ?>
											Pending
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['pathology_dpt_status'] == 1) { ?>
											Verified
										<?php } else if ($sd['pathology_dpt_status'] == 2) { ?>
											Not Verified
										<?php } else { ?>
											Pending
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['radiodiagnosis_dpt_status'] == 1) { ?>
											Verified
										<?php } else if ($sd['radiodiagnosis_dpt_status'] == 2) { ?>
											Not Verified
										<?php } else { ?>
											Pending
										<?php } ?>

									</td>

								</tr>

								<?php if ($sd['medicine_dpt_status'] != 0 and $sd['surgical_dpt_status'] != 0 and $sd['ophthalmology_dpt_status'] != 0 and $sd['pathology_dpt_status'] != 0 and $sd['radiodiagnosis_dpt_status'] != 0) { ?>
									<tr>
										<td colspan=5><b>Medical Fitness Verified</b> </td>
									</tr>
								<?php } ?>



							</table>

						</td>
					<?php } else { ?>
						<td> -</td>
					<?php } ?>

					<td> <?php echo $sd['st_name']; ?> </td>

					<td> <?php if ($sd['payment_yn'] == 0) {
								echo "Pending";
							} else if ($sd['payment_yn'] == 1) {
								echo "Paid";
							}
							if ($sd['payment_verify'] == 1) {
								echo " (Verified)";
							}
							if ($sd['payment_verify'] != '1') {
								echo " (Not Verified)";
							} ?>


					</td>
					<td><?php echo $sd['so_name']; ?> </td>
					<td><?php echo $sd['verification_date']; ?> </td>




				</tr>

			<?php $i++;
			} ?>




		</tbody>
	</table>
</div>

<button value="Download Excel" onclick="fnExcelReport()" class="btn otform btn-success btn-sm pull-right mb-3">Export</button>

<div class="table-responsive">
	<table id="datatablesSimple2" class="table table-bordered">

		<thead>

			<tr class="theme_bg_blue text-light">
				<th> Quota</th>
				<th>Roll No.</th>
				<th>Candidate Name</th>
				<th>Subject </th>
				<th>Document Verification </th>
				<th>Medical Fitness Status </th>
				<th>Seat Status </th>
				<?php if ($this->session->userdata('user_role') == '5') { ?>
					<th>Fitness Verification </th>
				<?php } ?>

				<th>Fee Status </th>
				<!-- <th >Checklist Status </th> -->
				<!--  <th >Action </th> -->
			</tr>


		</thead>

		<tbody>
			<?php $i = 1;
			foreach ($student_data as $sd) { ?>
				<tr>
					<td><?php if ($sd['rank_type'] == 1) {
							echo "All India";
						} else if ($sd['rank_type'] == 2) {
							echo "State";
						} ?></td>
					<td><?php echo $sd['roll_no']; ?></td>
					<td><?php echo $sd['user_name']; ?></td>
					<td><?php echo $sd['subject_name']; ?></td>
					<?php if ($this->session->userdata['user_role'] != 5) { ?>
						<td> <?php if ($sd['reg_id'] == '' and $this->session->userdata['user_role'] == 2 and $this->session->userdata['user_role'] == 3) { ?>
								<b>Not Submitted</b>

							<?php } else if ($sd['checklist_verification'] == 0) { ?>

								<b> Pending</b>

								<a href="<?php echo base_url(); ?>admin/Dashboard/GetStudent/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i> </a>

							<?php } else if ($sd['checklist_verification'] == 1) { ?>
								<b>Returned</b>
								<a href="<?php echo base_url(); ?>admin/Dashboard/GetStudent/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i></a>

							<?php } else if ($sd['checklist_verification'] == 2) { ?>
								<b>Re Submitted</b>
								<a href="<?php echo base_url(); ?>admin/Dashboard/GetStudent/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Verify Document Checklist"> <i class="fa fa-edit"></i></a>

							<?php } else if ($sd['checklist_verification'] == 3) { ?>
								<b class="">Verified</b>
								<a href="<?php echo base_url(); ?>admin/Dashboard/GetStudent/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></a>
							<?php } ?>
						</td>
					<?php } else if ($this->session->userdata['user_role'] == 5) { ?>

						<td> <?php if ($sd['reg_id'] == '') { ?>
								Not Submitted -
							<?php } else if ($sd['checklist_verification'] == 0) { ?>

								Pending

							<?php } else if ($sd['checklist_verification'] == 1) { ?>
								Returned

							<?php } else if ($sd['checklist_verification'] == 2) { ?>
								Re Submitted


							<?php } else if ($sd['checklist_verification'] == 3) { ?>
								Verified
							<?php } ?>
						</td>
					<?php } ?>



					<?php if ($sd['seat_status'] == 1) { ?>
						<td width="30%">
							<table class="table table-sm table-bordered">
								<thead class="bg-info">
									<tr>
										<th>Medicine</th>
										<th>Surgery</th>
										<th>Ophtha</th>
										<th>Pathogy</th>
										<th>Radio</th>
									</tr>
								</thead>
								<tr>
									<td>
										<?php if ($sd['medicine_dpt_status'] == 1) { ?>
											<i class="fa-solid fa-circle-check green_icon"></i>
										<?php } else if ($sd['medicine_dpt_status'] == 2) { ?>
											<i class="fa-solid fa-circle-xmark red_icon"></i>
										<?php } else { ?>
											<i class='fas fa-exclamation-circle orange_icon'></i>
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['surgical_dpt_status'] == 1) { ?>
											<i class="fa-solid fa-circle-check green_icon"></i>
										<?php } else if ($sd['surgical_dpt_status'] == 2) { ?>
											<i class="fa-solid fa-circle-xmark red_icon"></i>
										<?php } else { ?>
											<i class='fas fa-exclamation-circle orange_icon'></i>
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['ophthalmology_dpt_status'] == 1) { ?>
											<i class="fa-solid fa-circle-check green_icon"></i>
										<?php } else if ($sd['ophthalmology_dpt_status'] == 2) { ?>
											<i class="fa-solid fa-circle-xmark red_icon"></i>
										<?php } else { ?>
											<i class='fas fa-exclamation-circle orange_icon'></i>
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['pathology_dpt_status'] == 1) { ?>
											<i class="fa-solid fa-circle-check green_icon"></i>
										<?php } else if ($sd['pathology_dpt_status'] == 2) { ?>
											<i class="fa-solid fa-circle-xmark red_icon"></i>
										<?php } else { ?>
											<i class='fas fa-exclamation-circle orange_icon'></i>
										<?php } ?>

									</td>
									<td>
										<?php if ($sd['radiodiagnosis_dpt_status'] == 1) { ?>
											<i class="fa-solid fa-circle-check green_icon"></i>
										<?php } else if ($sd['radiodiagnosis_dpt_status'] == 2) { ?>
											<i class="fa-solid fa-circle-xmark red_icon"></i>
										<?php } else { ?>
											<i class='fas fa-exclamation-circle orange_icon'></i>
										<?php } ?>

									</td>

								</tr>
								<?php if ($sd['medicine_dpt_status'] != 0 and $sd['surgical_dpt_status'] != 0 and $sd['ophthalmology_dpt_status'] != 0 and $sd['pathology_dpt_status'] != 0 and $sd['radiodiagnosis_dpt_status'] != 0) { ?>
									<tr>
										<td colspan=5><b>Medical Fitness Receipt</b> <a href="<?php echo base_url(); ?>Fitness/Student_fitnessReceipt/<?php echo $sd['fm_id']; ?>"><i class="fa fa-arrow-right"></i> Click Here</a></td>
									</tr>
								<?php } ?>



							</table>

						</td>
					<?php } else { ?>
						<td> -</td>
					<?php } ?>

					<td> <?php echo $sd['st_name']; ?> </td>

					<?php if ($this->session->userdata('user_role') == '5' and $sd['seat_status'] == 1) { ?>
						<td>
							<a href="<?php echo base_url(); ?>Fitness/VerifyStudent_fitness/<?php echo $sd['fm_id']; ?>" class="btn btn-primary btn-sm" title="Fitness Verification"> <i class="fa fa-edit"></i></a>
						</td>
					<?php } else if ($this->session->userdata('user_role') == '5' and $sd['seat_status'] != 1) {  ?>
						<td> -</td>
					<?php } ?>

					<?php if ($sd['student_counselling'] == 1) { ?>

						<td> <?php if ($sd['payment_yn'] == 0) {
									echo "Pending";
								} else if ($sd['payment_yn'] == 1) {
									echo "Paid";
								}
								if ($sd['payment_verify'] == 1) {
									echo " (Verified)";
								}
								if ($sd['payment_verify'] != '1') {
									echo " (Not Verified)";
								} ?>

							<?php if ($sd['rank_type'] == 1) { ?>

								<a href="<?php echo base_url(); ?>admin/Dashboard/Get_BankDetails/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Update Payment Status"> <i class="fa fa-eye"></i></a>



							<?php } else if ($sd['rank_type'] == 2) {  ?>
								<a href="<?php echo base_url(); ?>admin/Dashboard/Get_StateBankDetails/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Update Payment Status"> <i class="fa fa-eye"></i></a>

							<?php } ?>
						</td>
					<?php } else if ($sd['student_counselling'] == 2) {  ?>
						<td> <?php if ($sd['payment_yn'] == 0) {
									echo "Pending";
								} else if ($sd['payment_yn'] == 1) {
									echo "Paid";
								}
								if ($sd['payment_verify'] == 1) {
									echo " (Verified)";
								}
								if ($sd['payment_verify'] != '1') {
									echo " (Not Verified)";
								} ?>

							<?php if ($sd['rank_type'] == 1) { ?>

								<a href="<?php echo base_url(); ?>admin/Dashboard/Get_UGBankDetails/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Update Payment Status"> <i class="fa fa-eye"></i></a>



							<?php } else if ($sd['rank_type'] == 2) {  ?>
								<a href="<?php echo base_url(); ?>admin/Dashboard/Get_UGStateBankDetails/<?php echo $sd['user_id']; ?>" class="btn btn-primary btn-sm" title="Update Payment Status"> <i class="fa fa-eye"></i></a>

							<?php } ?>
						</td>

					<?php } ?>

					<!-- <td width=9%>
                                        <?php if ($sd['checklist_verification'] == 3) { ?>
                                       <button class="btn btn-success btn-sm confirm_seat"  data-id="<?php echo $sd['reg_id']; ?>"><i class="fa fa-edit"></i>Action</button>
                                        <?php } ?>
                                        </td> -->





				</tr>

			<?php $i++;
			} ?>




		</tbody>
	</table>
</div>
<script>
	$(document).ready(function() {

		// Simple-DataTables
		// https://github.com/fiduswriter/Simple-DataTables/wiki

		const datatablesSimple1 = document.getElementById('datatablesSimple2');
		if (datatablesSimple1) {
			new simpleDatatables.DataTable(datatablesSimple1);
		}

	});
</script>

<script>
	function fnExcelReport() {
		var tab_text = "<table border='1px'><tr bgcolor='#ffffff'>";
		var cr_id = $("#cr_id").val();
		var textRange;
		var j = 0;
		tab = document.getElementById("dynamic-table1"); // id of table
		if (tab.rows.length > 1) {
			for (j = 0; j < tab.rows.length; j++) {
				if (!tab.rows[j].innerHTML.includes("table-detail")) {
					tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
				}
			}
			tab_text = tab_text.replace(/<a[^>]*>|<\/a>/g, ""); //remove if u want links in your table
			tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
			tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
			tab_text = tab_text + "</table>";
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf("MSIE ");

			if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
				// If Internet Explorer
				txtArea1.document.open("txt/html", "replace");
				txtArea1.document.write(tab_text);
				txtArea1.document.close();
				txtArea1.focus();
				sa = txtArea1.document.execCommand("SaveAs", true, "download.xls");
			} //other browser not tested on IE 11
			else
				sa = window.open(
					"data:application/vnd.ms-excel," + encodeURIComponent(tab_text)
				);

			return sa;
		}
	}
</script>