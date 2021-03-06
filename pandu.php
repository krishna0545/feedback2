<?php
include "header.php";
var_dump($_FILES);
?>
<head>
    <meta charset="utf-8"/>


    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="form/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


    <link href="form/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="form/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="form/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="form/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="form/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="form/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="form/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="form/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css"/>
<!--    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css" type="text/css">-->


    <!-- END THEME LAYOUT STYLES -->
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">

    <div class="page-container">
        <!-- BEGIN SIDEBAR -->

        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">

                <div class="row">
                    <div class="col-md-12">

                        <div class="portlet light bordered" id="form_wizard_1">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-red"></i>
                                    <span class="caption-subject font-red bold uppercase"> Career -Form

                                            </span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  id="submit_form" method="POST"">
                                    <div class="form-wizard">
                                        <div class="form-body">
                                            <ul class="nav nav-pills nav-justified steps">
                                                <li>
                                                    <a href="#tab1" data-toggle="tab" class="step">
                                                        <span class="number"> 1 </span>
                                                        <span class="desc">
                                                                    <i class="fa fa-check"></i> Personal Details</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number"> 2 </span>
                                                        <span class="desc">
                                                                    <i class="fa fa-check"></i> Educational Details </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab" class="step active">
                                                        <span class="number"> 3 </span>
                                                        <span class="desc">
                                                                    <i class="fa fa-check"></i> Profile Carrer </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number"> 4 </span>
                                                        <span class="desc">
                                                                    <i class="fa fa-check"></i> Miscellaneous </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div id="bar" class="progress progress-striped" role="progressbar">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button>
                                                    You have some form errors. Please check below.
                                                </div>
                                                <div class="alert alert-success display-none">
                                                    <button class="close" data-dismiss="alert"></button>
                                                    Your form validation is successful!
                                                </div>
                                                <div class="tab-pane active" id="tab1">
                                                    <h3 class="block">Provide your account details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Your Name
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="username" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Email
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="email" class="form-control" name="email" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Contact Number
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="number" class="form-control" name="phnumber" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Date Of Birth
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="date" class="form-control"
                                                                   name="dob"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Gender
                                                            <span class="required" aria-required="true"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="radio-list">
                                                                <label>
                                                                    <input type="radio" name="gender" value="M"
                                                                           data-title="male"> Male </label>
                                                                <label>
                                                                    <input type="radio" name="gender" value="F"
                                                                           data-title="female"> Female </label>
                                                            </div>
                                                            <div id="form_gender_error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Current living state</label>
                                                        <div class="col-md-4">
                                                            <select name="state" id="country_list"
                                                                    class="form-control select2-hidden-accessible"
                                                                    tabindex="-1" aria-hidden="true"
                                                                    aria-invalid="false">
                                                                <option value=""></option>
                                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                <option value="Assam">Assam</option>
                                                                <option value="Bihar">Bihar</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                                <option value="Daman and Diu">Daman and Diu</option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Goa">Goa</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Haryana">Haryana</option>
                                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                <option value="Jharkhand">Jharkhand</option>
                                                                <option value="Karnataka">Karnataka</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                <option value="Maharashtra">Maharashtra</option>
                                                                <option value="Manipur">Manipur</option>
                                                                <option value="Meghalaya">Meghalaya</option>
                                                                <option value="Mizoram">Mizoram</option>
                                                                <option value="Nagaland">Nagaland</option>
                                                                <option value="Orissa">Orissa</option>
                                                                <option value="Pondicherry">Pondicherry</option>
                                                                <option value="Punjab">Punjab</option>
                                                                <option value="Rajasthan">Rajasthan</option>
                                                                <option value="Sikkim">Sikkim</option>
                                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                                <option value="Tripura">Tripura</option>
                                                                <option value="Uttaranchal">Uttaranchal</option>
                                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                <option value="West Bengal">West Bengal</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Address for
                                                            Communication</label>
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" rows="3"
                                                                      name="address"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">preferred Languages for communications</label>

                                                        <div class="mt-checkbox-list col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Englsih
                                                                        <input type="checkbox" value="English" name="commlaguage[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Hindi
                                                                        <input type="checkbox" value="Hindi" name="commlanguage[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Telugu
                                                                        <input type="checkbox" value="Telugu" name="commlanguage[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Bengali
                                                                        <input type="checkbox" value="Bengali" name="commlanguage[]">
                                                                        <span></span>
                                                                    </label>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Upload Photo
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="file" name="image" enctype="multipart/form-data"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="tab2">
                                                    <h3 class="block">Provide your Education details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Percentage or CGPA in
                                                            Class 12 *
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="number" class="form-control" name="12thcgpa" maxlength="2"/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="form-section">B.E./B.Tech./B.Sc.</h5>

                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Branch or
                                                                    Discipline </label>
                                                                <span class="required" aria-required="true"></span>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="bbranch">
                                                                        <option value="" disabled="" selected="">Select your Branch
                                                                        </option>
                                                                        <option value="AE">Aerospace Engineering</option>
                                                                        <option value="AG">Agricultural Engineering</option>
                                                                        <option value="Arch">Architectural Engineering</option>
                                                                        <option value="Bio">Bioengineering and biomedicalEngineering</option>
                                                                        <option value="CH">Chemical Engineering</option>
                                                                        <option value="CE">Civil Engineering</option>
                                                                        <option value="CS">Computer Science or Information Technology</option>
                                                                        <option value="EE">Electrical and Electronics Engineering</option>
                                                                        <option value="EE">Electronics and Communication Engineering</option>
                                                                        <option value="IE">Industrial Engineering</option>
                                                                        <option value="InE">Instrumentation Engineering</option>
                                                                        <option value="ME">Mechanical Engineering</option>
                                                                        <option value="OT">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Year of Passout</label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="byear">
                                                                        <option value="" disabled="" selected="">Select Year of passout</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">CGPA or % of marks</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="bcgpa" placeholder="CGPA or % of marks until current sem">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">College Name</label>
                                                                <div class="col-md-6"><input type="text"
                                                                                             class="form-control"
                                                                                             name="bclgname"
                                                                                             placeholder="College Name">

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">University Name </label>
                                                                <div class="col-md-6"><input type="text"
                                                                                             class="form-control"
                                                                                             name="buniv"
                                                                                             placeholder="University Name">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5 style="text-align: center;">M.E./M.Tech./M.Sc./MCA</h5>
                                                                <hr>
                                                                <label class="control-label col-md-6">Branch or
                                                                    Discipline </label>
                                                                <div class="col-md-6">

                                                                    <select class="form-control" name="mbranch">
                                                                        <option value="" disabled="" selected="">Select your Branch
                                                                        </option>
                                                                        <option value="AE">Aerospace Engineering</option>
                                                                        <option value="AG">Agricultural Engineering</option>
                                                                        <option value="Arch">Architectural Engineering</option>
                                                                        <option value="Bio">Bioengineering and biomedical Engineering</option>
                                                                        <option value="CH">Chemical Engineering</option>
                                                                        <option value="CE">Civil Engineering</option>
                                                                        <option value="CS">Computer Science or Information Technology</option>
                                                                        <option value="EE">Electrical and Electronics Engineering</option>
                                                                        <option value="EC">Electronics and Communication Engineering</option>
                                                                        <option value="IE">Industrial Engineering</option>
                                                                        <option value="InE">Instrumentation Engineering</option>
                                                                        <option value="ME">Mechanical Engineering</option>
                                                                        <option value="OT">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">Year of Passout </label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="myear">
                                                                        <option value="" disabled="" selected="">Select Year of passout</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">CGPA or % of marks</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="mcgpa" placeholder="CGPA or % of marks until current sem">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">College Name </label>
                                                                <div class="col-md-6"><input type="text"
                                                                                             class="form-control"
                                                                                             name="mclgname"
                                                                                             placeholder="College Name">

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-6">University Name</label>
                                                                <div class="col-md-6"><input type="text"
                                                                                             class="form-control"
                                                                                             name="muniv"
                                                                                             placeholder="University Name">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="tab3">
                                                    <h3 class="block"> Professional Career Details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Certifications you earned</label>
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" rows="3" name="certificates"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Programming languages you are comfortable with:
                                                            <h5>(To Select multiple use 'Ctrl+select')</h5>
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                                <select class="form-control" name="proglang[]" multiple="multiple" tabindex="-1" aria-hidden="true" aria-invalid="false">
                                                                    <option value="c">C</option>
                                                                    <option value="cpp">C++</option>
                                                                    <option value="java">Java</option>
                                                                    <option value="python">Python</option>
                                                                    <option value="php">PHP</option>
                                                                    <option value="ruby">Ruby/Rails</option>
                                                                    <option value="html">HTML/CSS</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Your Profile
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <select class="form-control" name="profile" tabindex="-1">
                                                                <option value="" disabled="" selected="">Your profile</option>
                                                                <option value="STDNT">Student</option>
                                                                <option value="GRT">Graduated</option>
                                                                <option value="SD">Software Developer</option>
                                                                <option value="ST">Software Trainee</option>
                                                                <option value="QA">Quality Analyst</option>
                                                                <option value="WD">Web Designer</option>
                                                                <option value="NA">Network Admin</option>
                                                                <option value="DBA">Database Administrator</option>
                                                                <option value="QA">Data Analyst</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Organization type
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <select class="form-control" name="orgtype" tabindex="-1">
                                                                <option value="" disabled="" selected="">You are working in</option>
                                                                <option value="1">Student</option>
                                                                <option value="2">Not working</option>
                                                                <option value="3">Product based</option>
                                                                <option value="4">Service based</option>
                                                                <option value="5">Freelancer</option>
                                                                <option value="6">Startup</option>
                                                            </select>                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Experience in Years
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <select name="experiance" class="form-control">
                                                                <option value="" disabled="" selected="">Your experiance</option>
                                                                <option value="0">0 Years</option>
                                                                <option value="1">Less than 1 Year</option>
                                                                <option value="2">1-2 Years</option>
                                                                <option value="3">2-3 Years</option>
                                                                <option value="4">3-4 Years</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">LinkedIn Profile</label>
                                                        <div class="col-md-4">
                                                            <input type="URL" placeholder="LinkedIn Profile" class="form-control"
                                                                   name="linkedin"/>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Upload Resume</label>
                                                        <div class="col-md-4">
                                                            <input type="file"  name="resume" accept="application/pdf" enctype="multipart/form-data"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <h3 class="block">Confirm your account</h3>
                                                    <h4 class="form-section">Account</h4>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Registered Course:
                                                            <h5> For registration date please be correct month and year. For selecting one or more courses use 'Ctrl+select' </h5>
                                                            </label>

                                                        <div class="mt-checkbox-list col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label class="mt-checkbox mt-checkbox-outline"> GATE
                                                                        <input type="checkbox" value="gate" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> GATExcel
                                                                        <input type="checkbox" value="gatexcel" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Interview Preparation
                                                                        <input type="checkbox" value="inp" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Front End
                                                                        <input type="checkbox" value="frontend" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Back End
                                                                        <input type="checkbox" value="backend" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Full Stack
                                                                        <input type="checkbox" value="fullstack" name="registered[]">
                                                                        <span></span>
                                                                    </label>

                                                                </div>
                                                                <div class="col-md-2" style="margin-top: -15px">
                                                                    <label>
                                                                        <select  name="gateyear" tabindex="-1" class="form-control input-sm">
                                                                            <option value="" disabled="" selected="">Year</option>
                                                                            <option value="2014">Gate-2014</option>
                                                                            <option value="2015">Gate-2015</option>
                                                                            <option value="2016">Gate-2016</option>
                                                                            <option value="2017">Gate-2017</option>
                                                                            <option value="2018">Gate-2018</option>
                                                                            <option value="2019">Gate-2019</option>
                                                                        </select>
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="gatexceldate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="inpdate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="frontenddate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="backenddate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="fullstackdate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2" style="margin-top: -15px">
                                                                    <label>
                                                                        <select  name="gatesubjects[]" tabindex="-1" class="form-control input-sm" multiple="multiple">
                                                                            <option value="" disabled="" selected="">Subject</option>
                                                                            <option value="Full">Complete Course</option>
                                                                            <option value="EM">Mathematics</option>
                                                                            <option value="DL">Digital logic</option>
                                                                            <option value="CO">Computer Organization and Architecture</option>
                                                                            <option value="DS">Programming and DS</option>
                                                                            <option value="Algo">Algorithms</option>
                                                                            <option value="TOC">Theory of Computation</option>
                                                                            <option value="CD">Compiler Design</option>
                                                                            <option value="OS">Operating Systems</option>
                                                                            <option value="DB">Databases</option>
                                                                            <option value="CN">Computer Networks</option>
                                                                        </select>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline" style="padding-top: 1.3em"> Projects
                                                                        <input type="checkbox" value="projects" name="registered[]">
                                                                        <span style="margin-top: 1.3em"></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Java
                                                                        <input type="checkbox" value="java" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Python
                                                                        <input type="checkbox" value="python" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> C Programming
                                                                        <input type="checkbox" value="c" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Hadoop and Big Data
                                                                        <input type="checkbox" value="hadoop" name="registered[]">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-2" style="margin-top: -15px">
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="gatedate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label style="padding-top: 2.6em">
                                                                        <input class="form-control input-sm" type="text" name="projectsdate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="javadate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="pythondate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="cdate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                    <label>
                                                                        <input class="form-control input-sm" type="text" name="hadoopdate" placeholder="Registration MM/YYYY" onfocus="(this.type='date')">
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Courses you are interested to join in future
                                                            <h5>(You can choose more than one profile from the specified list. Please select "Other" if your interested profile is not listed below.) Course:</h5></label>
                                                        <div class="mt-checkbox-list col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="mt-checkbox mt-checkbox-outline"> GATE
                                                                        <input type="checkbox" value="gate" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> GATExcel
                                                                        <input type="checkbox" value="gatexcel" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Interview Preparation
                                                                        <input type="checkbox" value="inp" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Front End
                                                                        <input type="checkbox" value="frontend" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Back End
                                                                        <input type="checkbox" value="backend" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Full Stack
                                                                        <input type="checkbox" value="fullstack" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Projects
                                                                        <input type="checkbox" value="projects" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Java
                                                                        <input type="checkbox" value="java" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Python
                                                                        <input type="checkbox" value="python" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> CProgramming
                                                                        <input type="checkbox" value="c" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-checkbox mt-checkbox-outline"> Hadoop , Big Data
                                                                        <input type="checkbox" value="hadoop" name="willregister[]">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Expected salary:</label>
                                                        <div class="col-md-4">
                                                            <div class="radio-list">
                                                                <label>
                                                                    <input type="radio" name="expsalary" value="3">  Less than 3 LPA </label>
                                                                <label>
                                                                    <input type="radio" name="expsalary" value="6">  3 - 6 LPA </label>
                                                                <label>
                                                                    <input type="radio" name="expsalary" value="10"> 6 - 10 LPA </label>
                                                                <label>
                                                                    <input type="radio" name="expsalary" value="11"> More than 10 LPA</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Which course/technology do you want to learn from Ravindrababu Ravula?
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="Technologies" class="form-control"
                                                                   name="suggestions"/>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Anything you want to say?
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <textarea class="" rows="4" cols="50" name="comment"></textarea>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Your preferred time to talk with our mentor
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <select name="feasibletime" id="" class="form-control">
                                                                <option value="1">6 AM to 9 AM</option>
                                                                <option value="2">9 AM to 12 AM</option>
                                                                <option value="3">12 PM to 3 PM</option>
                                                                <option value="4">3 PM to 6 PM</option>
                                                                <option value="5">6 PM to 9 PM</option>
                                                                <option value="6">9 PM to 12 PM</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <a href="javascript:;" class="btn default button-previous">
                                                        <i class="fa fa-angle-left"></i> Back </a>
                                                    <a href="javascript:;" class="btn btn-outline green button-next">
                                                        Continue
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <button href="#" class="btn green button-submit" type="submit"> Submit
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="file" name="image1"/>
                                    <input type="submit" name="submit" value="submit"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->


        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->

    <!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['username']."<br/>";
    echo $_POST['email'].'<br/>';
    echo $_POST['phnumber'].'<br/>';
    echo $_POST['dob'].'<br/>';
    echo $_POST['gender'].'<br/>';
    echo $_POST['state'].'<br/>';
    echo $_POST['address'].'<br/>';
    foreach($_POST['commlanguage'] as $selected){
        echo $selected."</br>";
    }
    echo $_POST['12thcgpa'].'</br>';

    echo $_POST['bbranch'].'<br/>';
    echo $_POST['byear'].'<br/>';
    echo $_POST['bcgpa'].'<br/>';
    echo $_POST['bclgname'].'<br/>';
    echo $_POST['buniv'].'<br/>';

    echo $_POST['mbranch'].'<br/>';
    echo $_POST['myear'].'<br/>';
    echo $_POST['mcgpa'].'<br/>';
    echo $_POST['mclgname'].'<br/>';
    echo $_POST['muniv'].'<br/>';

    echo $_POST['certificates'].'<br/>';
    foreach ($_POST['proglang'] as $selectedOption)
        echo $selectedOption.'<br/>';
    echo $_POST['orgtype'].'<br/>';
    echo $_POST['profile'].'<br/>';
    echo $_POST['experiance'].'<br/>';
    echo $_POST['resume'].'<br/>';
    foreach ($_POST['registered'] as $courses){
        if ($courses=='gate' and $_POST['gatesubjects'] and $_POST['gateyear']!="" and $_POST['gatedate']!=""){
            foreach ($_POST['gatesubjects'] as $subjects)
                echo $subjects." ".$_POST['gateyear']." ".$_POST['gatedate'].'<br/>';
        }else if($courses=="gatexcel"){
            echo $courses." ". $_POST['gatexceldate'].'<br/>';
        }else if($courses=="inp"){
            echo $courses." ". $_POST['inpdate'].'<br/>';
        }else if($courses=="frontend"){
            echo $courses." ". $_POST['frontenddate'].'<br/>';
        }else if($courses=="backend"){
            echo $courses." ". $_POST['backenddate'].'<br/>';
        }else if($courses=="fullstack"){
            echo $courses." ". $_POST['fullstackdate'].'<br/>';
        }else if($courses=="projects"){
            echo $courses." ". $_POST['projectsdate'].'<br/>';
        }else if($courses=="java"){
            echo $courses." ". $_POST['javadate'].'<br/>';
        }else if($courses=="python"){
            echo $courses." ". $_POST['pythondate'].'<br/>';
        }else if($courses=="hadoop"){
            echo $courses." ". $_POST['hadoopdate'].'<br/>';
        }else if($courses=="c"){
            echo $courses." ". $_POST['cdate'].'<br/>';
        }
    }
    echo "will reg.".'<br/>';
    foreach ($_POST['willregister'] as $willreg){
        echo $willreg.'<br/>';
    }
    echo $_POST['expsalary'].'<br/>';
    echo $_POST['suggestions'].'<br/>';
    echo $_POST['comment'].'<br/>';
    echo $_POST['feasibletime'].'<br/>';

    $servername = "127.0.0.1";
    $username = "root";
    $password = "admin";
    $dbname= "feedback";

    //  Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $uploaddir = "/opt/lampp/htdoc/images/";
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);

    echo $_POST['image'];
    echo  $_FILES['image']['name'];
    echo $_FILES['photo']['name'];
    $fp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "INSERT INTO users VALUES ('','". $_POST['username']. "','" . $_POST['email']. "','" .$_POST['phnumber'] ."',".$_POST['dob'].",'".$_POST['gender']."','".$_POST['state']."','".$_POST['address']."',".$fp.",".$_POST['12thcgpa'].",'".$_POST['bbranch']."',".$_POST['byear'].",".$_POST['bcgpa'].",'".$_POST['bclgname']."','".$_POST['buniv']."','".$_POST['mbranch']."',".$_POST['myear'].",".$_POST['mcgpa'].",'".$_POST['mclgname']."','".$_POST['muniv']."','".$_POST['certificates']."','".$_POST['profile']."',".$_POST['orgtype'].",".$_POST['experiance'].",'".$_POST['linkedin']."',".$_POST['resume'].",".$_POST['expsalary'].",'".$_POST['suggestions']."','".$_POST['comment']."',".$_POST['feasibletime'].",)";
    echo $sql;
    echo "Connected successfully";
    $conn->close();
}
//mysqli_close($conn);
?>

<script src="form/assets/global/plugins/respond.min.js"></script>
<script src="form/assets/global/plugins/excanvas.min.js"></script>
<script src="form/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="form/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>

<script src="form/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="form/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="form/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="form/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="form/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="form/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="form/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="form/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="form/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- Google Code for Universal Analytics -->

<!-- End -->

<!-- Google Tag Manager -->


<!-- End -->
</body>


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2017 05:44:31 GMT -->
</html>