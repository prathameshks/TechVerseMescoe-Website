<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->

    <title>Home | TechVerse MESCOE</title>
    <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon">
    <meta name="keywords" content="techverse, techversemescoe,mescoe,college,club,pune,MESCOE, Pune, Techverse, student club, technical environment, technology, innovation, collaboration, skills, knowledge">
    <meta name="description" content="Techverse is a student-led club at MESCOE in Pune that provides a dynamic technical environment for students to learn, collaborate and innovate. Our mission is to empower students with the skills and knowledge to excel in the ever-evolving tech industry.">
    <meta name="author" content="techverse,MESCOE,Pune">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mycss.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        .register_btn {
            display: none;
        }
    </style>
</head>
<!-- body -->

<body class="main-layout inner_page">

    <?php include("assets/header.html"); ?>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>RSVP For Induction</h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">


                    <form id="request" class="main_form" style="color: #ffffff;">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="name">Name</label>
                                <div class="col-md-6">
                                    <!-- <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required=""> -->
                                    <input id="name" class="contactus" placeholder="Please Enter Full Name" type="text" name="name" required>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="">
                                <label class="col-md-6 control-label" for="email">Email</label>
                                <div class="col-md-6">
                                    <!-- <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required=""> -->
                                    <input id="email" class="contactus" placeholder="Please Enter Your Email ID" type="email" name="email" required>

                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="dept">Department</label>
                                <div class="col-md-6">
                                    <div class=" form-check">
                                        <label for="dept_radios-0">
                                            <input class="form-check-input" type="radio" name="dept" id="dept_radios-0" value="COMP" checked="">
                                            Computer Engineering
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="dept_radios-1">
                                            <input type="radio" name="dept" id="dept_radios-1" value="ENTC">
                                            Electronics &amp; Telecommunication Engineering
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="dept_radios-2">
                                            <input type="radio" name="dept" id="dept_radios-2" value="MECH">
                                            Mechanical Engineering
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="dept_radios-3">
                                            <input type="radio" name="dept" id="dept_radios-3" value="AIRobo">
                                            Automation and Robotics Engineering
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="year">Year</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label for="year_radios-0">
                                            <input type="radio" name="year" id="year_radios-0" value="fe">
                                            FE
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="year_radios-1">
                                            <input type="radio" name="year" id="year_radios-1" value="se" checked="">
                                            SE
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="year_radios-2">
                                            <input type="radio" name="year" id="year_radios-2" value="te">
                                            TE
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="year_radios-3">
                                            <input type="radio" name="year" id="year_radios-3" value="be">
                                            BE
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="division">Division</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label for="division-0">
                                            <input type="radio" name="division" id="division-0" value="1" checked="">
                                            1 (A)
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="division-1">
                                            <input type="radio" name="division" id="division-1" value="2">
                                            2 (B)
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="division-2">
                                            <input type="radio" name="division" id="division-2" value="3">
                                            3 (SS)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prn">PRN</label>
                                <div class="col-md-6">
                                    <!-- <input id="prn" name="prn" type="text" placeholder="Please Enter Your PRN" class="form-control input-md" required=""> -->
                                    <input id="prn" class="contactus" placeholder="Please Enter Your PRN" type="text" name="prn" required>

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>


                        </fieldset>
                    </form>

                    <div id="message" class="text_align_center" style="display: none;">
                        <p id="message_text"></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include("assets/footer.html"); ?>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/jquery-3.0.0.min.js "></script>
    <script src="js/custom.js "></script>

    <!-- my js files  -->
    <script>
        document.getElementById("nav_register").classList.add("active");
    </script>

    <script>
        function handle_form_response(result) {
            // console.log(result);
            if (result['type'] == 'res' && result['code'] == "success") {
                document.getElementById('request').style.display = "none";
                document.getElementById('message').style.display = "block";
                document.getElementById('message_text').innerHTML = "Thank You! Your Form is Submitted Successfully,<br> Invitation has been send to "+result['email']+"<br>Note: Kindly Show the Mail to Attend the Event<br>For Queries Reach Out us on <a style='color:#508cea;' href='mailto:techverse.mescoe@gmail.com' >techverse.mescoe@gmail.com</a>";
            } else if (result['type'] == 'error') {
                // document.getElementById('request').style.display = "none";
                document.getElementById('message').style.display = "block";
                document.getElementById('message_text').innerHTML = "Please Enter a Valid "+result['code'];
            }
        }

        document.querySelector('#request').addEventListener('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "assets/php/register_user.php",
                data: {
                    name: document.getElementById("name").value,
                    email: document.getElementById("email").value,
                    dept: document.querySelector('input[name="dept"]:checked').value,
                    year: document.querySelector('input[name="year"]:checked').value,
                    division: document.querySelector('input[name="division"]:checked').value,
                    prn: document.getElementById("prn").value
                },
                // data:formData,
                success: function(response) {
                    message = JSON.parse(response);
                    // console.log(message);
                    handle_form_response(message);
                    // setcart();
                    // handle_otp_send(message['email_verification'], message['otp_send']);
                }
            });
        });
    </script>
</body>

</html>