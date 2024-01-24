<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - DTE NOC</title>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <link rel="preload" href="css/style.css" as="style"/>
        <link href="css/style.css" rel="stylesheet"/>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
            <!-- Navbar Brand-->
			<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa-solid fa-align-right"></i></button>
			<div class="logo_inline">
                                
                                <div class="logo_text">
                                   <a href="index.html">
								   <h5>Directorate Of Technical Education</h5>
                                  <h6><span>Goverenment of Madhya Pradesh</span></h6>
									</a>
                                 </div>
                                 </div>
		 <div class="profile_right">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user-tie"></i> Hello User!</a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" aria-labelledby="navbarDropdown">
<div class="user_profile_window">
<div class="profile_box">
<div class="profile_pic">
<img src="images/admin_icon.png" class="img-fluid">
</div>
<div class="profile_text">
<h5>Mr. Deepak Dubey </h5>
<p> Web Designer </p>
</div>
</div>
<div class="button_boxes">
<a href="#" class="user_guide_btn"> यूजर गाइड   </a>
<a href="#" class="password_btn"> पासवर्ड बदलें   </a>
<a href="#" class="logout_btn"> लॉग आउट  </a>
</div>
</div>



                    </div>
                </li>
            </ul>
			</div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
					<div class="logo_box">
                                  <a href="index.html"><img src="images/mp_logo.png" class="img-fluid" alt=""> </a>   
                                </div>
                        <div class="nav">
                          <!--<a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Masters
                            </a> -->
							 
						 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Masters" aria-expanded="false" aria-controls="Masters">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Masters
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Masters" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Student Master</a>
                                    <a class="nav-link" href="#">College Master</a>
<a class="nav-link" href="#">College Course Master </a>		
<a class="nav-link" href="#">Session Master </a>	
<a class="nav-link" href="#">Branch Master </a>
<a class="nav-link" href="#">Subject Master </a>	
<a class="nav-link" href="#">Add Papers to Semester </a>
<a class="nav-link" href="#">AddElectivePaper </a>	
<a class="nav-link" href="#">Student Photo Correction </a>
<a class="nav-link" href="#">Add Scheme Replica </a>			
<a class="nav-link" href="#">Assign Branch ElectivePaper </a> 
</nav>
</div>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Enrollment" aria-expanded="false" aria-controls="Enrollment">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Enrollment, Exam Form
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Enrollment" aria-labelledby="headingtwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Enrollment Generation</a>
                                    <a class="nav-link" href="#">Verify Exam Forms</a>
</nav>
</div>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#DataPorting" aria-expanded="false" aria-controls="DataPorting">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Porting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="DataPorting" aria-labelledby="headingthree" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">For Exam Form Data </a>
<a class="nav-link" href="#">For Marks Entry </a>
<a class="nav-link" href="#">For Sessional Data </a>
<a class="nav-link" href="#">For Revaluation Data </a>
<a class="nav-link" href="#">To Publish Exam Form Data </a>
<a class="nav-link" href="#">Exam Form for Portal </a>
</nav>
</div>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#MarksEntry" aria-expanded="false" aria-controls="MarksEntry">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Marks Entry Activities
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="MarksEntry" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#"> Student Status </a>
<a class="nav-link" href="#">Reset Wrong Entries  </a>
<a class="nav-link" href="#">Mark with Held Candidates  </a>
<a class="nav-link" href="#">Student Remarks  </a>
<a class="nav-link" href="#">Mark Detained  </a>
<a class="nav-link" href="#">Bulk Detained  </a>
</nav>
</div>




<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ResultsProcess" aria-expanded="false" aria-controls="ResultsProcess">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Results Process
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="ResultsProcess" aria-labelledby="headingfive" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Process Results </a>
<a class="nav-link" href="#">Marksheet/TR Generation </a>
<a class="nav-link" href="#">Process Improvement  </a>
<a class="nav-link" href="#">General Promotion  </a>
<a class="nav-link" href="#">Report General Promotion  </a>
<a class="nav-link" href="#">GP Modify Theory Marks  </a>
<a class="nav-link" href="#">Modify Result Percentage  </a>
<a class="nav-link" href="#">Generate Publish Division  </a>
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Revaluation" aria-expanded="false" aria-controls="Revaluation">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Revaluation
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Revaluation" aria-labelledby="headingsix" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Apply Reval </a>
<a class="nav-link" href="#">Process Revaluation  </a>
<a class="nav-link" href="#">Result Process For Revaluation  </a>
<a class="nav-link" href="#">Challenge Process  </a>
<a class="nav-link" href="#">For Revaluation Rollback  </a>
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Reports" aria-expanded="false" aria-controls="Reports">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Reports" aria-labelledby="headingseven" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">View Reports  </a>
<a class="nav-link" href="#">Print TR </a>
<a class="nav-link" href="#">PD No Generation </a>
<a class="nav-link" href="#">PM No Generation  </a>
<a class="nav-link" href="#">Print PD/PM  </a>
<a class="nav-link" href="#">View & Download Scheme  </a>
<a class="nav-link" href="#">Download Fail Students  </a>
<a class="nav-link" href="#">Print TR MOOC  </a>
<a class="nav-link" href="#">Get Scroll Data  </a>
<a class="nav-link" href="#">Rpt Passed Out Batch  </a>
<a class="nav-link" href="#">Download Reports  </a>
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CommitteeDecision" aria-expanded="false" aria-controls="CommitteeDecision">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Committee Decision
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="CommitteeDecision" aria-labelledby="headingeight" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Upgrade Branch/College Transfer  </a>
<a class="nav-link" href="#">Assign UFM Categories  </a>
 
</nav>
</div>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#View" aria-expanded="false" aria-controls="View">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                View
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="View" aria-labelledby="headingnine" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#"> Student History </a>
 
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Rollback" aria-expanded="false" aria-controls="Rollback">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Rollback
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Rollback" aria-labelledby="headingten" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Rollback Result  </a>
<a class="nav-link" href="#">Rollback Result For Revaluation  </a>
<a class="nav-link" href="#">Student Migration  </a>
<a class="nav-link" href="#">Promotion Rollback  </a>
<a class="nav-link" href="#">Challange Rollback  </a>
</nav>
</div>


<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Promotion" aria-expanded="false" aria-controls="Promotion">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Promotion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Promotion" aria-labelledby="headingeleven" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Promote Students  </a>
 
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#UserRoles" aria-expanded="false" aria-controls="UserRoles">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                User & Roles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="UserRoles" aria-labelledby="headingtwelve" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Create/Modify User  </a>
<a class="nav-link" href="#">Assign Roles to Users  </a>	
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Utilities" aria-expanded="false" aria-controls="Utilities">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Utilities
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Utilities" aria-labelledby="headingthirteen" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Change Password  </a>
<a class="nav-link" href="#"> Database Backup </a>
</nav>
</div>



<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#ManualRecords" aria-expanded="false" aria-controls="ManualRecords">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Manual Records
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="ManualRecords" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Manual Mising  </a>
</nav>
</div>


<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Marksheet" aria-expanded="false" aria-controls="Marksheet">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Marksheet
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Marksheet" aria-labelledby="headingfourteen" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="#">Serial No Generation  </a>
<a class="nav-link" href="#">Print Marksheet  </a>
<a class="nav-link" href="#"> Print Marksheet MOOC </a>

</nav>
</div>














                            <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
						<div class="row mb-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
						<div class="form-floating mb-1">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">Works with selects</label>
</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
						<div class="form-floating mb-1">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label for="floatingSelect">Works with selects</label>
</div>
						</div>
						</div>
						
                        <div class="row">
                        <div class="col-xl-12 col-lg-12">
						<div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-solid fa-grip me-1"></i>
                                        Counter Area
                                    </div> 
                                    <div class="card-body">
									<div class="row">
<div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card
									
									<div class="numbercount">
								<span class="odometer" data-count="2000">00</span>	
									</div>
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card
									<div class="numbercount">
								<span class="odometer" data-count="2000">00</span>	
									</div>
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card
									
									<div class="numbercount">
								<span class="odometer" data-count="2000">00</span>	
									</div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card
									<div class="numbercount">
								<span class="odometer" data-count="2000">00</span>	
									</div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
									</div>
									</div>
									</div>
									</div>
									</div>               
						<div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-solid fa-grip me-1"></i>
                                        Heading Area
                                    </div> 
                                    <div class="card-body"> Data Caption</div>
                                </div>
                            </div>
                        </div>
						
						
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;  Directorate Of Technical Education . <span id="currentYear"></span> .</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                Design and Developed by <a href="#">CRISP</a>
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
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-3.3.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="js/jquery.appear.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
		<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
        <script type="text/javascript" src="js/backToTop.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="js/Chart.min.js" type="text/javascript"></script>
        <script src="js/chart-area-demo.js" type="text/javascript"></script>
        <script src="js/chart-bar-demo.js" type="text/javascript"></script>
        <script src="js/data-tables.js" type="text/javascript"></script>
        <script src="js/datatables-simple-demo.js" type="text/javascript"></script>
		 
    </body>
</html>
