<?php
if (isset($_POST['name'])){
    $server = "localhost";

    $username = "root";

    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    // echo "success";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `tieproject`.`tieproject` (`NAME`, `EMAIL`, `PHONE`, `OTHER`, `TIME`) VALUES('$name','$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
    
    $con->close();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="qqqq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    <h1><img src="group_logo.png" alt="" srcset=""></h1>
    <h2>Hello, We are Origin Group.
        Established 2009 – Atlanta.</h2>
    <ul id="nav">
        <li id="navl"><a href="#head2">Home</a></li>
        <li id="navl"><a href="#head3">About Us</a></li>
        <li id="navl"><a href="#head5">Testimonials</a></li>
        <li id="navl"><a href="#head6">Gallery</a></li>
        <li id="navl"><a href="#head7">Contact Us</a></li>
    </ul>
    <h2 id="head2"><b>Origin Trainings</b></h2>
    <p id="p1" class="home">“Our customers are the focus of our daily operations.
        Providing optimal solutions with responsiveness that is second to none has
        allowed us the opportunity to grow and expand on our mission.”</p>
    <p id="p2" class="home">Our team is comprised of individuals with a passion for customer service and executing
        projects and
        programs that exceed customer expectations.

        Our process has been honed over years of successful project and program management. Access, Integrate, Manage,
        Improve & Stabilize are key execution steps that ensure we achieve results.

        Our network of high quality service and products providers has been selected on their ability to deliver results
        on a consistent basis.
        To provide well-managed services and product supply chains that enable our clients to focus on the larger
        picture of operating and enhancing their core business.
        The leadership team at Origin Group believes it is important to share the core values from which we’ve developed
        our culture, our brand, and our business approach. The following reflects what is truly important to us as an
        organization. Our team members and network of providers believe that Origin is a progressive company to be
        associated with. These core values are the basis for this belief, and they provide a foundation for all of our
        actions – Accessibility, Integrity, Teamwork, Innovation, and Customer Focus.</p>
    <h2 id="head3" class="about">ABOUT US</h2>
    <p id="p3" class="about">Experienced Team
        Our team of professionals is tenured in retail and commercial focused solutions <br>Data Management
        Our data collection methodology allows us to drive continuous improvement for our customer base and allows us to
        ensure competitive rates <br>Nationwide Access
        We offer immediate access to trade resources that you need for nationwide support <br>Competitive Rates
        Our experience and understanding on a variety of commercial and retail applications allow us to be competitive
        for our customers <br>
        Innovation
        We create flexible supply chains to cover the “what-if” scenarios so that efficiency and cost reductions are
        gained <br>Our mission is to provide well-managed services and product supply chains that enable our clients to
        focus on the larger picture of operating and enhancing their core business.</p>
    <h3 id="head4" class="about">PLACEMENT TRAININGS</h3>
    <p id="p4" class="about">Placement training plays a major role in shaping up the career goals of students. It is the
        dream of every engineering student to get placed in a top organization visiting their campus for recruitment.
        Keeping this key aspect into consideration, it is realized that training is important for engineering students
        to enhance their employability skills and achieve good placement in various Industries.

        At present, the competition for employment is increasing every day and placement has become a challenging task.
        Training of students and equipping them with life skills has become an important responsibility of the
        institution. Along with technical expertise, development of a holistic personality is also necessary. To meet
        out these requirements, a fully fledged training cell is operating in our college to enhance the capabilities of
        engineering graduates on par with the industry standards.</p>

    <p id="p5" class="about">
    <ul id="p6" class="about">The prime objective of the Training Cell is:
        <li id="p7" class="about">To look for 100% employment for all students.</li>
        <li id="p7" class="about">To recognize the core competencies of the students.</li>
        <li id="p7" class="about">To train the students to meet the expectations of the industry through our Career
            Development Programmes.</li>
        <li id="p7" class="about">To build confidence in students and develop the right attitude in them and</li>
        <li id="p7" class="about">To enhance their communication skills.
            Training Activities</li>
        <li id="p7" class="about"> Create awareness about “career planning" and "career mapping" among the
            students.</li>
        <li id="p7" class="about">Equip the student with life skills.</li>
        <li id="p7" class="about">Organize Various Training Programmes to train the students in the areas of
            Quantitative Aptitude, Logical Reasoning and Verbal reasoning through the
            reputed external training organizations and in-house trainers.</li>
        <li id="p7" class="about">Train the students through Mock Interviews to perform well in the professional
            interviews as per the expectations of the corporate world.</li>
    </ul>
    </p>
    <h2 id="head5">TESTIMONIALS</h2>
    <p id="p10" class="test">Please hover over and See what our placed students have to say,</p>
    <div id="test" class="container">
        <div class="box">
            <div class="icon">
                <h4>Sneha MT <br>
                    CNIT</h4><img src="businesswoman.png" width="95px" alt="" id="fa">
            </div>
            <div class="content">

                <p id="p8">It was good eperience with trainer and teaching skill good and interact and answering every
                    questions asked by student. Good knowledge and updated with his reliable courses."
                </p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <h4>Yash CK <br>
                    NITE</h4><img src="bussiness-man.png" width="95px" alt="" id="fa">
            </div>
            <div class="content">

                <p id="p8">It was good eperience with trainer and teaching skill good and interact and answering every
                    questions asked by student. Good knowledge and updated with his reliable courses."
                </p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <h4>Apoorv M <br>
                    IIT </h4><img src="manager.png" width="95px" alt="" id="fa">
            </div>
            <div class="content">

                <p id="p8">Hi everyone. I would like to share the secret/logic behind the placement which led me to be a
                    part of a core company. Some of them are listed below. Placement training activity led by a origin
                    groups."
                    Good knowledge and updated with his reliable courses."
                </p>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="box1">
            <div class="icon1">
                <h4>Ritu<br>
                    MVIT</h4><img src="businesswoman.png" width="95px" alt="" id="fa1">
            </div>
            <div class="content1">

                <p id="p9">It was good eperience with trainer and teaching skill good and interact and answering every
                    questions asked by student. Good knowledge and updated with his reliable courses."
                </p>
            </div>
        </div>
        <div class="box1">
            <div class="icon1">
                <h4>Sarthak <br>
                    US</h4><img src="bussiness-man.png" width="95px" alt="" id="fa1">
            </div>
            <div class="content1">

                <p id="p9">It was good eperience with trainer and teaching skill good and interact and answering every
                    questions asked by student. Good knowledge and updated with his reliable courses."
                </p>
            </div>
        </div>
        <div class="box1">
            <div class="icon1">
                <h4>Aastha <br>
                    Sarso </h4><img src="manager.png" width="95px" alt="" id="fa1">
            </div>
            <div class="content1">

                <p id="p9">Hi everyone. I would like to share the secret/logic behind the placement which led me to be a
                    part of a core company. Some of them are listed below. Placement training activity led by a origin
                    groups."
                    Good knowledge and updated with his reliable courses."
                </p>
            </div>
        </div>
    </div>
    <h2 id="head6">GALLERY</h2>
    <div class="container2">
        <div class="box2">
            <div class="icon2">
                <img src="p1.webp" width="295px" alt="" id="fa">
            </div>
        </div>
        <div class="box2">
            <div class="icon2">
                <img src="p2.webp" width="295px" alt="" id="fa">
            </div>
        </div>
        <div class="box2">
            <div class="icon2">
                <img src="p3.png" width="295px" alt="" id="fa">
            </div>
        </div>
    </div>
    <div class="container3">
        <div class="box3">
            <div class="icon3">
                <img src="p4.jpg" width="295px" alt="" id="fa">
            </div>
        </div>
        <div class="box3">
            <div class="icon3">
                <img src="p5.jpg" width="295px" alt="" id="fa">
            </div>
        </div>
        <div class="box3">
            <div class="icon3">
                <img src="p6.jpg" width="295px" alt="" id="fa">
            </div>
        </div>
    </div>
    <div class="container4">
        <div class="box4">
            <div class="icon4">
                <img src="p7.jpg" width="295px" alt="" id="fa">
            </div>
        </div>
        <div class="box4">
            <div class="icon4">
                <img src="p8.jpg" width="295px" alt="" id="fa">
            </div>
        </div>
        <div class="box4">
            <div class="icon4">
                <img src="p9.jpg" width="295px" alt="" id="fa">
            </div>
        </div>
    </div>
    <h2 id="head7">CONTACT US</h2>
    <div class="contain">
        <p id="y1"> Enter your details and submit this form</p>
        <form action="tie.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            
            <button class="btn"><a href="https://help.formstack.com/hc/article_attachments/360015218271/image-1.jpeg">Submit</a></button>
        </form>
    </div>

    <script src="tie.js"></script>
    <!-- INSERT INTO `tieproject` (`S.No`, `NAME`, `EMAIL`, `PHONE`, `OTHER`, `TIME`) VALUES 
    ('1', 'SNEHA THOMAS', 'SNEHA@GMAIL.COM', '9999999999', 'MY NAME IS SNEHA', current_timestamp()); -->

    <footer class="footer">
        <div class="cont">
            <div class="ro">
                <div class="footer-col">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><a href="#head3">about us</a></li>
                        <li><a href="#head4">objectives</a></li>
                        <li><a href="#head7">privacy policy</a></li>
                        <li><a href="#head4">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>GET HELP</h4>
                    <ul>
                        <li><a href="#head7">faq's</a></li>
                        <li><a href="#head2">support</a></li>
                        <li><a href="#head7">feedback</a></li>
            
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>FOLLOW US</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <ul>
                        <li><a href="https://www.yahoo.com"> Email: origin@yahoo.co.in</a></li>
                        <li><a href="#head7">Contact: +91987654321</a></li>
                        
            
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <style>
    .whatsapp_float{
        position:fixed;
        bottom:40px;
        right:20px;
        
        
    }
    </style>
    <div class="whatsapp_float">
        <a href="https://wa.me/9198761" target="_blank"><img src='whatsapp.png'
         width="50px" class="whatsapp_float_btn"/></a>
    </div>





</body>


</html>