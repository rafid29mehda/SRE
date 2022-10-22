<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/lost_found_form.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Lost & Found Form </title> 
</head>
<body>
    <div class="container">
        <header>Lost Form</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="color: white;">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <!-- <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div> -->

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your address" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Student ID</label>
                            <input type="number" placeholder="Enter your student ID" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Department (Batch) </label>
                            <input type="text" placeholder="Enter your department" required>
                        </div>
                        
                        <!-- <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div> -->

                        <!-- <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter your ccupation" required>
                        </div> -->
                    </div>
                </div>

                <div class="details ID">
                    <span class="title" style="color: white;">Lost Item Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Item Type</label>
                            <input type="text" placeholder="Enter Item type" required>
                        </div>

                        <div class="input-field">
                            <label for="exampleColorInput" class="form-label">Pick the Item Color</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" style="width: 100%;">
                            <!-- <label>Pick the Item Color</label>
                            <input type="text" placeholder="Enter ID number" required> -->
                        </div>

                        <div class="input-field">
                            <label>Item Image </label>
                            <input type="file" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Lost Location</label>
                            <input type="text" placeholder="Enter lost location" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Date & Time</label>
                            <input type="date" placeholder="Enter lost date & time" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Any Comment</label>
                            <input type="text" placeholder="Comment" required>
                        </div>

                    </div>


                    <button class="nextBtn">
                        <span class="btnText"><a href="/landing_1">Submit</a></span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <!-- <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                        <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" placeholder="Enter spouse name" required>
                        </div>

                        <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" placeholder="Father in law name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother in Law</label>
                            <input type="text" placeholder="Mother in law name" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div> -->
        </form>
    </div>

    <script src="../js/lost_found_form.js"></script>
</body>
</html>