<?php
include "header.php";
?>
<div class="section section-padding courses-detail">
    <div class="container">
        <div class="courses-detail-wrapper">
            <div class="row">
                <div class="col-md-9">
                    <fieldset>
                        <legend style="text-align: center; font-weight: bold;">Personal Details</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                        </span>
                                        <input type="text" class="form-control" placeholder="Name" required></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                        <input type="email" class="form-control" placeholder="Email Address" required></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                        </span>
                                        <input type="number" class="form-control" placeholder="Mobile Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                           <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                        <input type="date" class="form-control" placeholder="Date Of Birth"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender</label>:
                                    <input type="radio" value="1" name="test">Male
                                    <input type="radio" value="1" name="test">Female
                                </div>
                                <div class="form-group">
                                    <div class="mt-radio-list">
                                        <div class="form-group">
                                            <label>Address for communication</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Upload Photo</label>
                                    <input id="input-1a" type="file" class="file" data-show-preview="false">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Preferred language for communication</label>
                                    <div class="mt-checkbox-list">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> English
                                            <input type="checkbox" value="1" name="test"> Hindi
                                            <input type="checkbox" value="1" name="test"> Telugu
                                            <span></span>
                                        </label>

                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Bengali
                                            <input type="checkbox" value="1" name="test"> Tamil
                                            <input type="checkbox" value="1" name="test"> Other
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </fieldset>
                    <fieldset>
                        <legend style="text-align: center; font-weight: bold;">Educational Details</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Percentage or CGPA in Class 12 *</label>
                                    <input type="number" class="form-control" placeholder="%" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <legend>B.E/B.Tech/B.Sc</legend>
                                <!--branch or discipline-->
                                
                                <div class="form-group">
                                    <label>Branch or Discipline </label>
                                    <select class="form-control">
                                        <option value="" disabled selected>Select your Branch</option>
                                        <option>Aerospace Engineering</option>
                                        <option>Agricultural Engineering</option>
                                        <option>Architectural Engineering</option>
                                        <option>Bioengineering and biomedical Engineering</option>
                                        <option>Chemical Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Computer Science or Information Technology</option>
                                        <option>Electrical and Electronics Engineering</option>
                                        <option>Environmental Engineering</option>
                                        <option>Industrial Engineering</option>
                                        <option>Instrumentation Engineering</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <!--Year of study (B.E/B.Tech) *-->
                                <div class="form-group">
                                    <label>Year of study </label>
                                    <select class="form-control">
                                        <option value="" disabled selected>Select Year</option>
                                        <option>I Year</option>
                                        <option>II Year</option>
                                        <option>III Year</option>
                                        <option>IV Year</option>
                                        <option>Graduated</option>
                                    </select>
                                </div>
                                <!--college name-->
                                <div class="form-group">
                                    <label>College Name</label>
                                    <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="fa fa-university" aria-hidden="true"></i>
                                  </span>
                                        <input type="number" class="form-control" placeholder="College Name" required>
                                    </div>
                                </div>

                                <!--University-->
                                <div class="form-group">
                                    <label>University</label>
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-university" aria-hidden="true"></i>
                                                        </span>
                                        <input type="number" class="form-control" placeholder="University" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <legend>M.E/M.Tech</legend>
                                <!--branch or discipline-->
                                <div class="form-group">
                                    <label>Branch or Discipline </label>
                                    <select class="form-control">
                                        <option value="" disabled selected>Select your Branch</option>
                                        <option>Aerospace Engineering</option>
                                        <option>Agricultural Engineering</option>
                                        <option>Architectural Engineering</option>
                                        <option>Bioengineering and biomedical Engineering</option>
                                        <option>Chemical Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Computer Science or Information Technology</option>
                                        <option>Electrical and Electronics Engineering</option>
                                        <option>Environmental Engineering</option>
                                        <option>Industrial Engineering</option>
                                        <option>Instrumentation Engineering</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <!--Year of study (B.E/B.Tech) *-->
                                <div class="form-group">
                                    <label>Year of study </label>
                                    <select class="form-control">
                                        <option value="" disabled selected>Select Year</option>
                                        <option>I Year</option>
                                        <option>II Year</option>
                                        <option>III Year</option>
                                        <option>IV Year</option>
                                        <option>Graduated</option>
                                    </select>
                                </div>
                                <!--college name-->
                                <div class="form-group">
                                    <label>College Name</label>
                                    <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="fa fa-university" aria-hidden="true"></i>
                                  </span>
                                        <input type="number" class="form-control" placeholder="College Name" required>
                                    </div>
                                </div>

                                <!--University-->
                                <div class="form-group">
                                    <label>University</label>
                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-university" aria-hidden="true"></i>
                                                        </span>
                                        <input type="number" class="form-control" placeholder="University" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend style="text-align: center; font-weight: bold;">Professional Career</legend>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Certifications you earned</label>
                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-university" aria-hidden="true"></i>
                                                        </span>
                                    <textarea class="form-control" rows="3" style="margin: 0px; height: 190px; width: 354px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Programming languages you are comfortable with:</label>
                                <h5>(Please select all the languages specified below. Specify the languages if you are
                                    comfortable with any other languages.)</h5>
                                <div class="mt-checkbox-list">
                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" value="1" name="test"> C language
                                        <input type="checkbox" value="1" name="test"> C++
                                        <input type="checkbox" value="1" name="test"> Java
                                        <span></span>
                                    </label>


                                    <label class="mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" value="1" name="test"> Python
                                        <input type="checkbox" value="1" name="test"> JavaScript
                                        <input type="checkbox" value="" name="test"> PHP
                                        <span></span>
                                    </label>

                                    <label class="mt-checkbox mt-checkbox-outline">
                                        Other <input type="text" name="test">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Organization/Company</label>
                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-university" aria-hidden="true"></i>
                                                        </span>
                                    <input type="text" class="form-control" placeholder="Organization" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Experience (in years)</label>
                                <select class="form-control">
                                    <option value="" disabled selected>Select Year</option>
                                    <option>Less than 1 Year</option>
                                    <option>2-5 Years</option>
                                    <option>Greater than 5 Years</option>

                                    <option>Graduated</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> LinkedIn Profile</label>
                                <input type="url" name="url" placeholder="LinkedIn url" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Upload Resume</label>
                                <input id="input-1a" type="file" class="file" data-show-preview="false">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend style="text-align: center; font-weight: bold;">Miscellaneous</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Registered courses</label>
                                    <div class="mt-checkbox-list">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> GATE
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Interview Preparation
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Front End
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Back End
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Full Stack
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test" id="colorselector"> Projects
                                            <span></span>
                                            <!--projects details show here-->

                                        </label>
                                        <!--projects details show here-->
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Java
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Python
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> C Programming
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Courses you are interested to join in future </label>
                                    <h5>(You can choose more than one profile from the specified list. Please select "Other" if
                                        your interested profile is not listed below.)</h5>
                                    <div class="mt-checkbox-list">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Java
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Python
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Full Stack
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Front End
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Back End
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test" id="colorselector"> Interview
                                            preparation for product based companies
                                            <span></span>
                                            <!--projects details show here-->

                                        </label>
                                        <!--projects details show here-->
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Interview preparation for service
                                            based companies
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Hadoop, NoSQL and Bigdata
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" value="1" name="test"> Data Science
                                            <span></span>
                                        </label>
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            Other <input type="text" name="test">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Expected salary</label>
                                    <div class="mt-radio-list">
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="Less than 3 LPA" name="test1[]"> Less than 3 LPA
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="3 - 6 LPA" name="test1[]"> 3 - 6 LPA
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="6 - 10 LPA" name="test1[]"> 6 - 10 LPA
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="More than 10 LPA" name="test1[]"> More than 10 LPA
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Which course/technology do you want to learn from Ravindrababu Ravula?</label>
                                    <input type="text" name="whichcourse" placeholder=" Technology Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your comments or suggestions *</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your preferred time to talk with our mentor</label>
                                    <div class="mt-radio-list">
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="Less than 3 LPA" name="test1[]"> 6 AM to 9 AM
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="3 - 6 LPA" name="test1[]"> 9 AM to 12 PM
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="6 - 10 LPA" name="test1[]"> 12 PM to 3 PM
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="More than 10 LPA" name="test1[]"> 3 PM to 6 PM
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="More than 10 LPA" name="test1[]"> 6 PM to 9 PM
                                            <span></span>
                                        </label>
                                        <label class="mt-radio mt-radio-outline">
                                            <input type="radio" value="More than 10 LPA" name="test1[]"> 9 PM to 12 AM
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-green"><span>Submit</span></button>
                        </div>
                    </fieldset>

                </div>

                </div>





            </div>
        </div>
    </div>
</div>
