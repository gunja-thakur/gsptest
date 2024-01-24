<?php foreach($candidate_data as $cd)?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Registration - ITI Online Admission</title>
  <!-- <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png" /> -->
  <link rel="preload" href="<?php echo base_url(); ?>assets/css/style.css" as="style" />
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <style>
body {font-family: 'Noto Sans Devanagari', sans-serif; }
.card-body label {font-size: 15px;}
.card-header {background: #fdf4ec}
main {padding:0}
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
                                    <h2><span class="hindi_font"> आईटीआई ऑनलाईन प्रवेश 2023-24 हेतु आवेदन पत्र </span>  </h2>
                                </div>
                              <div class="rishi_img">
                         <img src="<?php echo base_url(); ?>assets/images/azadi_g20.png" class="img-fluid" alt="">
                    </div>
					</div>
                        </div>
                            </div>
                         </div>
                    </div>
        <div class="control_formview">
        <div class="container">
          <div class="row col-md-12  m-5">
          <h3> ITI Registration Details</h3>
          <button onclick="window.print()" class="btn btn-sm btn-outline-success m-2" style="width:80px;float:right ;">Print Form</button>

            <div class="card mb-4 mt-2">


              <div class="card-header">Note : यह रहवासी ITI है अतः छात्रवास में रहना अनिवार्य है।
              </div>
              <div class="card-body">

                <form class="row g-3" action="#" method="POST" enctype="multipart/form-data" id="myform">

                  <div class="col-md-3">
                    <label for="samagra_id
" class="form-label">1. समग्र आईडी </label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="samagra_id" name="samagra_id" value="<?php echo $cd['samagra_id'];?>" >
                    <div class="samagra_id_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="board_name
" class="form-label">2. बोर्ड का नाम जिससे हाई स्कूल की परीक्षा उत्तीर्ण की है.
                    </label>
                  </div>
                  <div class="col-md-3">
                  <input type="text" class="form-control mandatory" readonly id="board_name" name="board_name" value="<?php echo $cd['boardname'];?>" >

                    <div class="board_name_msg"></div>
                  </div>



                  <div class="col-md-3">
                    <label for="roll_no" class="form-label">3. रोल नम्बर <!-- <span>*</span> --></label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="roll_no" name="roll_no" value="<?php echo $cd['roll_no'];?>" >
                    <div class="board_name_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="date_of_birth" class="form-label">4. जन्म तिथि </label>
                  </div>
                  <div class="col-md-3">
                    <input type="date" class="form-control mandatory" readonly id="date_of_birth" name="date_of_birth" value="<?php echo $cd['date_of_birth'];?>" >

                  </div>
                  <div class="col-md-3">
                    <label for="applicant_name_hi" class="form-label">5. आवेदक का नाम (हिन्दी में) </label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="applicant_name_hi" name="applicant_name_hi" value="<?php echo $cd['applicant_name_hi'];?>" >

                  </div>

                  <div class="col-md-3">
                    <label for="applicant_name_eg" class="form-label"> आवेदक का नाम (अंग्रेजी में)</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="applicant_name_eg" name="applicant_name_eg"  value="<?php echo $cd['applicant_name_eg'];?>">
                    <div class="applicant_name_eg_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="father_name_hi" class="form-label">6. पिता/पति / पालक का नाम (हिन्दी में) </label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="father_name_hi" name="father_name_hi" value="<?php echo $cd['father_name_hi'];?>" >
					<div class="father_name_hi_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="father_name_eg" class="form-label"> पिता/पति / पालक का नाम (अंग्रेजी में)</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="father_name_eg" name="father_name_eg" value="<?php echo $cd['father_name_eg'];?>" >
                    <div class="father_name_eg_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="mother_name_hi" class="form-label">7. माता का नाम (हिन्दी में) </label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="mother_name_hi" name="mother_name_hi" value="<?php echo $cd['mother_name_hi'];?>" >
					<div class="mother_name_hi_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="mother_name_eg" class="form-label"> माता का नाम (अंग्रेजी में)</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="mother_name_eg" name="mother_name_eg"  value="<?php echo $cd['mother_name_eg'];?>">
                    <div class="mother_name_eg_msg"></div>
                  </div>


                  <div class="col-md-6">
                  <label for="inputState" class="form-label">8. क्या आप दसवी कक्षा गणित एवं विज्ञान विषय के साथ उत्तीर्ण है ? (हाँ/ नहीं)  </label>
                  </div>
                  <div class="col-md-6">

                  <input type="radio" id="10_pass_y" name="10_pass_yn" value="Y" <?php if($cd['10_pass_yn']=="Y"){ echo "checked";}?>  required="required" >
                   <label for="10_pass_y">हाँ</label>

                   <input type="radio" id="10_pass_n" name="10_pass_yn" value="N" <?php if($cd['10_pass_yn']=="N"){ echo "checked";}?>  required="required" >
                   <label for="10_pass_n">नहीं</label>

                  </div>

                  <div class="col-md-12"><h5 class="h5_heading"> 9. शैक्षणिक विवरण  </h5></div>


                  <div class="col-md-12">
                    <table class="table table-sm table-bordered">
                      <thead>
                        <tr>
                      <th>उत्तीर्ण परीक्षा </th>
                      <th>रोल नम्बर </th>
                      <th>विषय </th>
                      <th>बोर्ड का नाम </th>
                      <th>पूर्णांक </th>
                      <th> प्राप्तांक</th>
                      <th> ग्रेड</th>
                      <th> प्रतिशत</th>
                      <th>उत्तीर्ण वर्ष </th>
                      <th>प्रमाण पत्र में अंकित रोल नं. </th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <input type="text" name="exam" id="exam" class="form-control mandatory" readonly value="10th" readonly></td>
                          <td> <input type="text" name="e_rollno" id="e_rollno" class="form-control mandatory" readonly value="<?php echo $cd['e_rollno'];?>"></td>
                          <td> <input type="text" name="subject" id="subject" class="form-control mandatory" readonly value="<?php echo $cd['subject'];?>"></td>

                      <td> <input type="text" id="e_board_name" name="e_board_name" value="<?php echo $cd['boardname'];?>" class="form-control mandatory" readonly>

                    </td>

                    <td> <input type="number" name="total_marks" id="total_marks" class="form-control mandatory" readonly min="0" value="<?php echo $cd['total_marks'];?>"></td>
                          <td> <input type="number" name="obt_marks" id="obt_marks" class="form-control mandatory" readonly  min="0" value="<?php echo $cd['obt_marks'];?>"></td>
                          <td> <input type="text" name="grade" id="grade" class="form-control mandatory" readonly value="<?php echo $cd['grade'];?>"></td>
                          <td> <input type="number" name="percentage" id="percentage" class="form-control mandatory" readonly  min="0" value="<?php echo $cd['percentage'];?>"></td>
                          <td> <input type="number" name="passing_year" id="passing_year" class="form-control mandatory" readonly  min="0" value="<?php echo $cd['passing_year'];?>"></td>
                          <td> <input type="text" name="cert_rollno" id="cert_rollno" class="form-control mandatory" readonly value="<?php echo $cd['cert_rollno'];?>"></td>

                        </tr>

                      </tbody>
                    </table>



                  </div>

                  <div class="col-md-3">
                  <label for="inputState" class="form-label">10. लिंग  </label>
                  </div>
                  <div class="col-md-3">

                                                    <input type="text" name="gender" id="gender" class="form-control mandatory" readonly value="<?php echo $cd['gender'];?>" required>

                                                </div>
                  <div class="col-md-3">
                  <label for="inputState" class="form-label">11. श्रेणी  </label>
                  </div>
                  <div class="col-md-3">

                                                    <input type="text" name="category" id="category" class="form-control mandatory" readonly value="<?php echo $cd['category'];?>" required>

                                                </div>
                                                <div class="col-md-6">
                  <label for="inputState" class="form-label">12. क्या आप मध्यप्रदेश की मूल निवासी हैं ? (हाँ/ नहीं)  </label>
                  </div>
                  <div class="col-md-6">

                  <input type="radio" id="mp_native_y" name="mp_native_yn" value="Y" <?php if($cd['mp_native_yn']=="Y"){ echo "checked";}?>  required="required" >
                   <label for="mp_native_y">हाँ</label>

                   <input type="radio" id="mp_native_n" name="mp_native_yn" value="N" <?php if($cd['mp_native_yn']=="N"){ echo "checked";}?>  required="required" >
                   <label for="mp_native_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                    <label for="annual_family_income" class="form-label">13. परिवार की वार्षिक आय (रूपयेमें)</label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control mandatory" readonly id="annual_family_income" name="annual_family_income" value="<?php echo $cd['annual_family_income'];?>">
				  	<div class="annual_family_income_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="area_of_land" class="form-label">14. परिवार के स्वामित्व का भूमि का क्षेत्रफल (एकड़ में)</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="area_of_land" name="area_of_land" value="<?php echo $cd['area_of_land'];?>" >
                    <div class="area_of_land_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="unorganized_worker_regno" class="form-label">15. पंजीकृत असंगठित कर्मकार के पुत्र - पुत्री की स्थिति में माता / पिता का असंगठित कर्मकार का
पंजीयन क्रमांक
</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="unorganized_worker_regno" name="unorganized_worker_regno"  value="<?php echo $cd['unorganized_worker_regno'];?>">
					<div class="unorganized_worker_regno_msg"></div>
                  </div>



                  <div class="col-md-6"> </div>
                  <div class="col-md-12"><h5 class="h5_heading"> 16. वर्ग:- (हाँ / नहीं) </h5></div>

                  <div class="col-md-3">
                  <label for="inputState" class="form-label">(1) विकलांग 40 प्रतिशत से अधिक  </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="handicap_y" name="handicap_yn" value="Y" <?php if($cd['handicap_yn']=="Y"){ echo "checked";}?>  required="required" >
                   <label for="handicap_y">हाँ</label>

                   <input type="radio" id="handicap_n" name="handicap_yn" value="N" <?php if($cd['handicap_yn']=="N"){ echo "checked";}?>  required="required" >
                   <label for="handicap_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="freedom_fighter" class="form-label">(2) स्वतंत्रता संग्राम सैनानी  </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="freedom_fighter_y" name="freedom_fighter_yn" value="Y" <?php if($cd['freedom_fighter']=="Y"){ echo "checked";}?>  required="required" >
                   <label for="freedom_fighter_y">हाँ</label>

                   <input type="radio" id="freedom_fighter_n" name="freedom_fighter_yn" value="N" <?php if($cd['freedom_fighter']=="N"){ echo "checked";}?> required="required" >
                   <label for="freedom_fighter_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="soldier_exservicemen" class="form-label">(3) सैनिक / भू.पू.सै./ अथवा उनके पुत्र, पुत्री </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="soldier_exservicemen_y" name="soldier_exservicemen_yn" value="Y" <?php if($cd['soldier_exservicemen']=="Y"){ echo "checked";}?>  required="required" >
                   <label for="soldier_exservicemen_y">हाँ</label>

                   <input type="radio" id="soldier_exservicemen_n" name="soldier_exservicemen_yn" value="N" <?php if($cd['soldier_exservicemen']=="N"){ echo "checked";}?> required="required" >
                   <label for="soldier_exservicemen_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="orphan" class="form-label">(4) अनाथ </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="orphan_y" name="orphan_yn" value="Y" <?php if($cd['orphan']=="Y"){ echo "checked";}?> required="required" >
                   <label for="orphan_y">हाँ</label>

                   <input type="radio" id="orphan_n" name="orphan_yn" value="N" <?php if($cd['orphan']=="N"){ echo "checked";}?>  required="required" >
                   <label for="orphan_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="iti_department" class="form-label">(5) आई.टी.आई. (विभागीय) </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="iti_department_y" name="iti_department_yn" value="Y" <?php if($cd['iti_department']=="Y"){ echo "checked";}?> required="required" >
                   <label for="iti_department_y">हाँ</label>

                   <input type="radio" id="iti_department_n" name="iti_department_yn" value="N" <?php if($cd['iti_department']=="N"){ echo "checked";}?> required="required" >
                   <label for="iti_department_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="ncc_certificate" class="form-label">(6) एनसीसी (ए, बी या सी-सर्टिफिकेट)</label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="ncc_certificate_y" name="ncc_certificate_yn" value="Y"  <?php if($cd['ncc_certificate']=="Y"){ echo "checked";}?> required="required" >
                   <label for="ncc_certificate_y">हाँ</label>

                   <input type="radio" id="ncc_certificate_n" name="ncc_certificate_yn" value="N" <?php if($cd['ncc_certificate']=="N"){ echo "checked";}?> required="required" >
                   <label for="ncc_certificate_n">नहीं</label>

                  </div>

                  <div class="col-md-12"><h5 class="h5_heading"> 17. विशेष श्रेणी (हाँ / नहीं) </h5></div>
                  <div class="col-md-3">
                  <label for="bhopal_gas_victim" class="form-label">(1) भोपाल गैस पीडित </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="bhopal_gas_victim_y" name="bhopal_gas_victim_yn" value="Y" <?php if($cd['bhopal_gas_victim']=="Y"){ echo "checked";}?> required="required" >
                   <label for="bhopal_gas_victim_y">हाँ</label>

                   <input type="radio" id="bhopal_gas_victim_n" name="bhopal_gas_victim_yn" value="N" <?php if($cd['bhopal_gas_victim']=="N"){ echo "checked";}?> required="required" >
                   <label for="bhopal_gas_victim_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="flood_displaced" class="form-label">(2) बाढ़ विस्थापित  </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="flood_displaced_y" name="flood_displaced_yn" value="Y" <?php if($cd['flood_displaced']== "Y"){ echo "checked";}?> required="required" >
                   <label for="flood_displaced_y">हाँ</label>

                   <input type="radio" id="flood_displaced_n" name="flood_displaced_yn" value="N"  <?php if($cd['flood_displaced']=="N"){ echo "checked";}?> required="required" >
                   <label for="flood_displaced_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="narmada_dam_scheme" class="form-label">(3) नर्मदा बांध योजना </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="narmada_dam_scheme_y" name="narmada_dam_scheme_yn" value="Y" <?php if($cd['narmada_dam_scheme']=="Y"){ echo "checked";}?> required="required" >
                   <label for="narmada_dam_scheme_y">हाँ</label>

                   <input type="radio" id="narmada_dam_scheme_n" name="narmada_dam_scheme_yn" value="N" <?php if($cd['narmada_dam_scheme']=="N"){ echo "checked";}?> required="required" >
                   <label for="narmada_dam_scheme_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="trained_from_sdc" class="form-label">(4) कौशल विकास केन्द्र से प्रशिक्षित </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="trained_from_sdc_y" name="trained_from_sdc_yn" value="Y" <?php if($cd['trained_from_sdc']=="Y"){ echo "checked";}?>required="required" >
                   <label for="trained_from_sdc_y">हाँ</label>

                   <input type="radio" id="trained_from_sdc_n" name="trained_from_sdc_yn" value="N" <?php if($cd['trained_from_sdc']=="N"){ echo "checked";}?> required="required" >
                   <label for="trained_from_sdc_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="left_wing_area" class="form-label">(5) वामपंथ प्रभावित क्षेत्र</label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="left_wing_area_y" name="left_wing_area_yn" value="Y" <?php if($cd['left_wing_area']=="Y"){ echo "checked";}?>required="required" >
                   <label for="left_wing_area_y">हाँ</label>

                   <input type="radio" id="left_wing_area_n" name="left_wing_area_yn" value="N" <?php if($cd['left_wing_area']=="N"){ echo "checked";}?> required="required" >
                   <label for="left_wing_area_n">नहीं</label>

                  </div>

                  <div class="col-md-3">
                  <label for="hearing_loss" class="form-label">(6) शत्प्रतिशत श्रवण बाधित</label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="hearing_loss_y" name="hearing_loss_yn" value="Y" <?php if($cd['hearing_loss']=="Y"){ echo "checked";}?> required="required" >
                   <label for="hearing_loss_y">हाँ</label>

                   <input type="radio" id="hearing_loss_n" name="hearing_loss_yn" value="N"  <?php if($cd['hearing_loss']=="N"){ echo "checked";}?> required="required" >
                   <label for="hearing_loss_n">नहीं</label>

                  </div>

				  <div class="col-md-3">
                  <label for="blind" class="form-label">(7) शत्प्रतिशत दृष्टि बाधित</label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="blind_y" name="blind_yn" value="Y" <?php if($cd['blind']=="Y"){ echo "checked";}?> required="required" >
                   <label for="blind_y">हाँ</label>

                   <input type="radio" id="blind_n" name="blind_yn" value="N" <?php if($cd['blind']=="N"){ echo "checked";}?> required="required" >
                   <label for="blind_n">नहीं</label>

                  </div>
                  <div class="col-md-3"></div>

                  <div class="col-md-12"><h5 class="h5_heading"> 18. वर्तमान पता </h5></div>

                  <div class="col-md-3">
                  <label for="rural_urban_area" class="form-label" > ग्रामीण/शहरी क्षेत्र </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="rural_urban_area_r" name="rural_urban_area" value="R" <?php if($cd['rural_urban_area']=="R"){ echo "checked";}?>  required="required" >
                   <label for="rural_urban_area_r">ग्रामीण </label>

                   <input type="radio" id="rural_urban_area_u" name="rural_urban_area" value="U" <?php if($cd['rural_urban_area']=="U"){ echo "checked";}?> required="required" >
                   <label for="rural_urban_area_u"> शहरी </label>

                  </div>

                  <div class="col-md-3">
                    <label for="house_no" class="form-label">मकान नं. </label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control mandatory" readonly id="house_no" name="house_no"  min="0" value="<?php echo $cd['house_no'];?>">
					<div class="house_no_msg"></div>
                  </div>
<div class="col-md-3">
                    <label for="street_locality" class="form-label"> गली / मोहल्ला </label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control mandatory" readonly id="street_locality" name="street_locality" value="<?php echo $cd['street_locality'];?>">
					<div class="street_locality_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="division" class="form-label">संभाग</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="division" id="division" class="form-control mandatory" readonly value="<?php echo $cd['Division_name'];?>" >

                  </div>

                  <div class="col-md-3">
                    <label for="district" class="form-label">जिला </label>
                  </div>
                  <div class="col-md-3">
                   <div class="ajaxshow">
												<input type="text " name="district" id="district" class="form-control mandatory" readonly value="<?php echo $cd['District_Name'];?>">

												</div>

                  </div>

                  <div class="col-md-3">
                    <label for="block" class="form-label">विकासखण्ड </label>
                  </div>
                  <div class="col-md-3">
                   <div class="blockajaxshow">
												<input type="text" name="block" id="block" class="form-control mandatory" readonly value="<?php echo $cd['Block_Name'];?>">
												</div>

                  </div>

                  <div class="col-md-3">
                    <label for="panchayat" class="form-label">ग्राम पंचायत/नगर पालिका / नगर निगम </label>
                  </div>
                  <div class="col-md-3">
                   <div class="panchayatajaxshow">
												<input type="text" name="panchayat" id="panchayat" class="form-control mandatory" readonly  value="<?php echo $cd['Panchayat_Name'];?>">
												</div>

                  </div>

                  <div class="col-md-3">
                    <label for="village" class="form-label">ग्राम/ शहर का नाम </label>
                  </div>
                  <div class="col-md-3">
                   <div class="gramajaxshow">
												<input type="text" name="village" id="village" class="form-control mandatory" readonly  value="<?php echo $cd['Village_Name'];?>">

                  </div>
                  </div>
                  <div class="col-md-3">
                    <label for="assembly_name" class="form-label">विधानसभा क्षेत्र का नाम</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="assembly_name" name="assembly_name" value="<?php echo $cd['assembly_name'];?>">
					<div class="assembly_name_msg"></div>
                  </div>
<div class="col-md-3">
                    <label for="pincode" class="form-label"> पिनकोड </label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control mandatory" readonly id="pincode" name="pincode" value="<?php echo $cd['pincode'];?>">
					<div class="pincode_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="email" class="form-label">ई-मेल </label>
                  </div>
                  <div class="col-md-3">
                    <input type="email" class="form-control mandatory" readonly id="email" name="email" value="<?php echo $cd['email'];?>">
                    <div class="email_msg"></div>

                  </div>
                  <div class="col-md-3">
                    <label for="mobile" class="form-label">मोबाइल नं </label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control mandatory" readonly id="mobile" name="mobile" value="<?php echo $cd['mobile'];?>">
                    <div class="mobile_msg"></div>

                  </div>
                  <!--  -->

                  <div class="col-md-12"><label for="permanent_address" class="form-label"> <input type="checkbox" name="permanent_address" id="permanent_address" value="1" class="coupon_question chkbx" onchange="valueChanged()" <?php if($cd['permanent_address']=="1"){ echo "checked";}?> disabled> वर्तमान पता एवं स्थायी पता एक है! </label></div>
                  <br>

                  <?php if($cd['permanent_address']!="1"){?>

                  <div class="row chk_permanent_address mt-3">

                  <h5 class="h5_heading"> 19. स्थायी पता </h5>

                  <div class="col-md-3">
                  <label for="rural_urban_area_p" class="form-label" > ग्रामीण/शहरी क्षेत्र </label>
                  </div>
                  <div class="col-md-3">

                  <input type="radio" id="rural_urban_area_p_r" name="rural_urban_area_p" value="R" <?php if($cd['rural_urban_area_p']=="R"){ echo "checked";}?>  >
                   <label for="rural_urban_area_p_r">ग्रामीण </label>

                   <input type="radio" id="rural_urban_area_p_u" name="rural_urban_area_p" value="U"  <?php if($cd['rural_urban_area_p']=="U"){ echo "checked";}?> >
                  <label for="rural_urban_area_p_u"> शहरी </label>

                  </div>

                  <div class="col-md-3">
                    <label for="house_no_p" class="form-label">मकान नं. </label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control " id="house_no_p" name="house_no_p"  min="0" value="<?php echo $cd['house_no_p'];?>">
                  <div class="house_no_p_msg"></div>
                  </div>
                  <div class="col-md-3">
                    <label for="street_locality_p" class="form-label"> गली / मोहल्ला </label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control " id="street_locality_p" name="street_locality_p" value="<?php echo $cd['street_locality_p'];?>" >
                  <div class="street_locality_p_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="division_p" class="form-label">संभाग</label>
                  </div>
                  <div class="col-md-3">
                    <select name="division_p" id="division_p" class="form-control "  >
                                                    <option value="">Select Division </option>
                          <?php foreach($division_data as $dd): extract($dd); ?>
                          <option value="<?=$Division_id?>"><?=$Division_name?></option>
                          <?php endforeach; ?>

                        </select>
                  <div class="division_p"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="district_p" class="form-label">जिला </label>
                  </div>
                  <div class="col-md-3">
                  <div class="ajaxshow1">
                        <select name="district_p" id="district_p" class="form-control " >
                        <option value="">Select District </option>
                        <?php foreach($district_data as $dsd): extract($dsd); ?>
													<option value="<?=$District_Id?>"><?=$District_Name?></option>
													<?php endforeach; ?>


                        </select>
                        <div class="district_p_msg"></div>
                        </div>

                  </div>

                  <div class="col-md-3">
                    <label for="block_p" class="form-label">विकासखण्ड </label>
                  </div>
                  <div class="col-md-3">
                  <div class="blockajaxshow1">
                        <select name="block_p" id="block_p" class="form-control " >
                                                    <option value="">Select Block </option>
                                                    <?php foreach($block_data as $bdd): extract($bdd); ?>
													<option value="<?=$Block_ID?>"><?=$Block_Name?></option>
													<?php endforeach; ?>


                        </select>
                        <div class="block_p_msg"></div>
                        </div>

                  </div>

                  <div class="col-md-3">
                    <label for="panchayat_p" class="form-label">ग्राम पंचायत/नगर पालिका / नगर निगम </label>
                  </div>
                  <div class="col-md-3">
                  <div class="panchayatajaxshow1">
                        <select name="panchayat_p" id="panchayat_p" class="form-control " >
                                                    <option value="">Select panchayat </option>
                                                    <?php foreach($panchayat_data as $pdd): extract($pdd); ?>
													<option value="<?=$Panchayat_Id?>"><?=$Panchayat_Name?></option>
													<?php endforeach; ?>



                        </select>
                        <div class="panchayat_p_msg"></div>
                        </div>

                  </div>

                  <div class="col-md-3">
                    <label for="village_p" class="form-label">ग्राम/ शहर का नाम </label>
                  </div>
                  <div class="col-md-3">
                  <div class="gramajaxshow1">
                        <select name="village_p" id="village_p" class="form-control " >
                        <option value="">Select village </option>
                        <?php foreach($village_data as $vdd): extract($vdd); ?>
													<option value="<?=$Village_Id?>"><?=$Village_Name?></option>
													<?php endforeach; ?>


                        </select>
                        <div class="village_msg"></div>

                  </div>
                  </div>
                  <div class="col-md-3">
                    <label for="assembly_name_p" class="form-label">विधानसभा क्षेत्र का नाम</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " id="assembly_name_p" name="assembly_name_p" value="<?php echo $cd['assembly_name_p'];?>">
                  <div class="assembly_name_p_msg"></div>
                  </div>
                  <div class="col-md-3">
                    <label for="pincode_p" class="form-label"> पिनकोड </label>
                  </div>
                  <div class="col-md-3">
                    <input type="number" class="form-control " id="pincode_p" name="pincode_p" value="<?php echo $cd['pincode_p'];?>">
                  <div class="pincode_p_msg"></div>
                  </div>

                  <div class="col-md-3">
                    <label for="email_p" class="form-label">ई-मेल </label>
                  </div>
                  <div class="col-md-3">
                    <input type="email" class="form-control " id="email_p" name="email_p" value="<?php echo $cd['email_p'];?>">
                    <div class="email_p_msg"></div>

                  </div>
                  <div class="col-md-3">
                    <label for="mobile_p" class="form-label">मोबाइल नं </label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" class="form-control " id="mobile_p" name="mobile_p" value="<?php echo $cd['mobile_p'];?>">
                    <div class="mobile_p_msg"></div>

                  </div>
                  </div>

                  <?php } ?>
                  <!--  -->

                  <hr>
                  <div class="col-12">
                    <h3>घोषणा</h3>
                  </div>
                  <div class="col-md-12"><label for="declaration" class="form-label"> <input type="checkbox" name="declaration" id="declaration" value="1" <?php if($cd['declaration']=="1"){ echo "checked";}?> class="dec_chk mandatory chkbx" disabled>
                  मैं प्रमाणित करता / करती हूँ कि मैने प्रवेश के संबंध में सभी निर्देश / नियम ज्ञात कर लिए हैं तथा आवेदन पत्रों की सम्पूर्ण जानकारी मेरे विश्वास के अनुसार सत्य एवं सही हैं। यदि मुझे प्रवेश प्राप्त होता है, तो मैं संस्था के नियमों एवं अनुशासन का पालन करते हुए पूर्ण प्रशिक्षण प्राप्त करूँगा / करूंगी। मैं ऐसा कोई कृत्य नहीं करूँगा / करूँगी, जो देश / प्रदेश / संस्था की शांति एवं अनुशासन के विपरीत हो अन्यथा मुझे संस्था से निष्काशित किया जा सकेगा।
                  </label></div>
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

<script>
  $(document).ready(function(){
    $(':radio:not(:checked)').attr('disabled', true);
    //$('.chkbx').is('disabled')


  });


  $(document).bind("contextmenu",function(e){
  return false;
    });
</script>

<script type="text/javascript">
            var sessionTimeoutWarning = "5";
            var sessionTimeout = "4";
            var sTimeout = parseInt(sessionTimeoutWarning) * 60 * 1000;
            setTimeout('SessionWarning()', sTimeout);
            function SessionWarning() {
                var message = "Your session has been expired !! ";
                alert(message);
                window.location = "<?php echo base_url()."Logout/Candidate"?>";
            }
        </script>




</body>

</html>