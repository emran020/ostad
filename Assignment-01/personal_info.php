<?php

/*
Task 1: Personal Information Page
Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. 
Include your name, age, country, and a brief introduction.
*/
?>



<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="custom.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->

    <title>CV</title>
</head>

<body>




    <div class="container-fluid">


        <div class="row name_picture_top">
            <div class="col col-1"></div>
            <div class="col col-md-3" style="background-color: #cbf5b3; height: 55px;"></div>

            <div class="col col-md-7" style="background-color: #a2d0a5;">
            </div>

            <div class="col col-1"></div>


        </div>

        <div class="row">
            <div class="col col-md-1"></div>
            <div class="col col-md-10">
                <div class="row name_picture">
                    <div class="col col-md-1"></div>

                    <div class="col col-md-6">
                        <h1 style="margin-top: 35px;">Abdullah Al Fouad</h1>
                        <h6>Founder & CEO</h6>
						<h5>Web Arts Factory</h6>
                    </div>

                    <div class="col col-mad-3"></div>

                    <div class="col col-md-3">
                        <img src="images/emran.jpg" style="height: 200px;" class="rounded-circle" alt="Fouad Emran">
                    </div>
                </div>
            </div>
            <div class="col col-md-1"></div>
        </div>


        <div class="row name_picture_down">

            <div class="col col-1"></div>
            <div class="col col-md-3" style="background-color: #cbf5b3; height: 1655px; margin-top: 20px;">
                <div style="margin-top: 35px;">
                    <a for="gender" style="margin-left: 25px; color: white;">
                        <i class="fa-solid fa-user"></i>
                        <a href="" style="text-decoration: none; color: white; margin-left: 35px;">Male</a>
                    </a> <br><br>
                    <a for="dob" style="margin-left: 25px; color: white;">
                        <i class="fa-solid fa-calendar-days"></i>
                        <a href="" style="text-decoration: none; color: white; margin-left: 35px;">2nd November 1991</a>
                    </a> <br><br>
                    <a for="mobile" style="margin-left: 25px; color: white;">
                        <i class="fa-solid fa-mobile"></i>
                        <a href="" style="text-decoration: none; color: white; margin-left: 35px;">01685796895</a>
                    </a> <br><br>
                    <a for="email" style="margin-left: 25px; color: white;">
                        <i class="fa-solid fa-envelope"></i>
                        <a href=""
                            style="text-decoration: none; color: white; margin-left: 35px;">emransubcse@gmail.com</a>
                    </a> <br><br>
                    <a for="web" style="margin-left: 25px; color: white;">
                        <i class="fa-solid fa-globe"></i>
                        <a href=""
                            style="text-decoration: none; color: white; margin-left: 35px;">www.fouademran.com</a>
                    </a> <br><br>
                    <a for="address" style="margin-left: 25px; color: white;">
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="" style="text-decoration: none; color: white; margin-left: 35px;">Shankipara,Health Officer's lane
                            Mymensingh</a>
                    </a>
                </div><br>

                <div class="progress_line">
                </div>

                <div style="margin-top: 15px; color: white; margin-left: 25px;">
                    <div>
                        <h4>Skills</h4>
                    </div><br>
                    <div>
                        <a for="computer" style="color: white;">
                            <i class="fa-solid fa-computer"></i>
                            <a href="" style="text-decoration: none; color: white; margin-left: 35px;">Computer</a>

                        </a><br>
                        <a style="margin-left: 55px;">- Word, Excel, Power Point</a><br>
                        <a style="margin-left: 55px;">- PHP Laravel</a>
                    </div><br>

                    <div>
                        <a for="computer" style="color: white;">
                            <i class="fa-solid fa-language"></i>
                            <a href="" style="text-decoration: none; color: white; margin-left: 35px;">Language</a>

                        </a><br>
                        <a style="margin-left: 55px;">- Bangla, English</a><br>
                    </div>
                </div><br>
                <div style="margin-top: 15px; color: white; margin-left: 25px;">
                    <div>
                        <h4>Skills</h4>
                    </div><br>
                    <div>
                        <a for="computer" style="color: white;">
                            <i class="fa-solid fa-computer"></i>
                            <a href="" style="text-decoration: none; color: white; margin-left: 35px;">Computer</a>

                        </a><br>
                        <a style="margin-left: 55px;">- Word, Excel, Power Point</a><br>
                        <a style="margin-left: 55px;">- PHP Laravel</a>
                    </div><br>
                </div>
            </div>

            <div class="col col-md-7" style="background-color: #a2d0a5; margin-top: 20px;">
                <div>
                    <h4 style="margin-top: 35px; padding-left: 25px;">Objective</h4>
                    <div class="progress_line_black">
                    </div>

                    <p class="text_justification">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.</p>

                </div>

                <div>
                    <h4 style="padding-left: 25px;">Education</h4>
                    <div class="progress_line_black">
                    </div>
                    <a for="uiu">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Sate University of Bangladersh</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Title: </b>BSc. in
                            Computer Science and Engineering</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Passing Year:
                            </b>2016</a><br>
                    </a>
                    <a for="cpscm">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Nasirabad College, Mymensingh</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Title: </b>HSC</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Passing Year:
                            </b>2008</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Mymensingh Zilla
                                School</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Title: </b>SSC</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Passing Year:
                            </b>2006</a><br>
                    </a><br>
                </div>

                <div>
                    <h4 style="padding-left: 25px;">Experience</h4>
                    <div class="progress_line_black">
                    </div>
                    <a for="uiu">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Adora Laboratories
                                (Unani)</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>Software
                            Engineer</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>January,
                            2023</a><br>
                    </a>
                    <a for="cpscm">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Bangladesh
                                Election Comission</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>Technical
                            Expert</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>June,
                            2022</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>November,
                            2022</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Technohaven
                                Company Ltd</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>Business
                            Development Officer</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>February,
                            2020</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>April,
                            2021</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Soft Link
                                Group</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>Manager
                            (IT)</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>December,
                            2017</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>October,
                            2019</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Soft Link
                                Group</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>QA &
                            System Support Engineer</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>August,
                            2017</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>December,
                            2017</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Soft Link
                                Group</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>System
                            Support Executive</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>April,
                            2017</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>August,
                            2017</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Empori Anxo
                                Medicare Limited</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>Product
                            Development Officer</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>October,
                            2016</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>March,
                            2017</a><br>
                    </a>
                    <a for="mzs">
                        <i class="fa-solid fa-building-columns" style="padding-top: 25px; padding-left: 25px;"></i>
                        <a href="" style="text-decoration: none; color: black; margin-left: 35px;"><b>Genex Infosys
                                Ltd.</b></a><br>

                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Designation: </b>Customer
                            Service Associate (CSA)</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>Start: </b>September,
                            2016</a><br>
                        <a style="text-decoration: none; color: black; margin-left: 80px;"><b>End: </b>July,
                            2016</a><br>
                    </a><br>
                </div>
            </div>

            <div class="col col-1"></div>

        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

   
</body>

</html>