<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/static/css/gate_pass_form.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Gate Pass Form </title> 
</head>
<body>
    <div class="container">
        <header>Gate Pass Form</header>

        <form method="POST" action="{{ route('guard_pass.store') }}">
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="color: white;">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input name="name" type="text" placeholder="Enter your name" required>
                        </div>

                        <!-- <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div> -->

                        <div class="input-field">
                            <label>Email</label>
                            <input name="email" type="text" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input name="phone" type="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Identification</label>
                            <input name="nid" type="number" placeholder="Enter your identity" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Visiting Location</label>
                            <input name="location" type="text" placeholder="Enter your visiting location" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Date & Time</label>
                            <input name="date" type="datetime" placeholder="Enter your department" required>
                        </div>
                       
                    </div>
                </div>

                <div class="textarea1">
                    <label class="purpose">Purpose</label>
                    <br>
                    <div class="hudai"></div>
                    <textarea name="purpose" id="" placeholder="Whom to visit and purpose. . ." required></textarea>
                </div>

                    <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            
        </form>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>