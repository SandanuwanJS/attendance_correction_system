<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Registration Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }


        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }


        header {
            text-align: center;
            padding: 10px 0;
        }


        header h2 {
            margin: 10;
            font-size: 34px;
            color: #333;
        }


        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }


        form .form-group {
            width: 48%;
            margin-bottom: 20px;
        }


        form .form-group.full-width {
            width: 100%;
        }


        form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }


        form input[type="text"],
        form input[type="email"],
        form input[type="tel"],
        form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }


        form .radio-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        form .radio-group label {
            flex: 1;
            margin: 0 10px 0 0;
        }


        form .radio-group input[type="radio"] {
            margin-right: 5px;
        }


        form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 3px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }


        form button:hover {
            background-color: #45a049;
        }


        .btn2 {
            display: inline-block;
            padding: 10px 50px;
            font-size: 16px;
            color: #fff;
            background-color: #add8e6; /* Light blue color */
            text-align: center;
            text-decoration: none;
            border-radius: 10px; /* Curved corners */
            transition: background-color 0.6s ease; /* Smooth transition */
            border: none;
            
        }


        .btn2:hover {
            background-color: #32cd32; /* Green color on hover */
            cursor: pointer; /* Pointer cursor on hover */
        }



    </style>
</head>
<body>

    <div class="form-container">

        <!-- Form header -->
        <header>
            <h2>Registered Customer Updating Form</h2>
        </header>


        <!-- Create "View List" button  -->
        <a href="<?= base_url('Home1_Con/customer_viewlist') ?>" class="btn2 btn-primary">
            <button type="button">View List</button>
        </a>


        <!-- Create form action to run register function in Customer.php -->
        <form action="<?= base_url('') ?>Home1_Con/registration_update" method="POST" id="homesub1_updateForm">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">


            <div class="form-group">

            <!-- Create dropdown box for title field -->
            <label for="title">Title</label>
            <select name="title" class="form-control">
                <option value="<?= $user['title'] ?>"><?= $user['title'] ?></option>
                <option value="">Select</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Dr">Dr</option>
            </select>
            </div>


            <!-- Create text field for Address 1 --> 
            <div class="form-group">
                <label for="last-name">Address 1<span style="color:red">*</span></label>
                <input type="text" id="ad1" name="ad1" value="<?= $user['address_1'] ?>" placeholder="Address 1 is required" >
            </div>


            <!-- Create text field for first name -->
            <div class="form-group">
                <label for="address">First Name<span style="color:red">*</span></label>
                <input type="text" id="fname" name="fname" value="<?= $user['first_name'] ?>" placeholder = "First name is required" >
            </div>


            <!-- Create text field for address 2 -->
            <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text" id="ad2" name="ad2" value="<?= $user['address_2'] ?>" placeholder="Optional">
            </div>


            <!-- Create text field for last name -->
            <div class="form-group">
                <label for="city">Last Name<span style="color:red">*</span></label>
                <input type="text" id="lname" name="lname" value="<?= $user['last_name'] ?>" placeholder="Last name is required" >
            </div>


            <!-- create text field for address 3 -->
            <div class="form-group">
                <label for="address2">Address 3</label>
                <input type="text" id="ad3" name="ad3" value="<?= $user['address_3'] ?>" placeholder="Optional">
            </div>


            <!-- Create number field for telephone number -->
            <div class="form-group">
                <label for="phone">Telephone Number<span style="color:red">*</span></label>
                <input type="tel" id="phone" name="phone" value="<?= $user['telenum'] ?>" placeholder="(XXX) XXX-XXXX" >
            </div>


            <!-- Create text field for e mail -->
            <div class="form-group">
                <label for="email">Email Address<span style="color:red">*</span> </label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>" placeholder="E-mal address is required" >
            </div>
            
            
            <!-- Create a button to submit -->
            <button type="button" onclick ="checkfield()" class="btn btn-success btn-block">Update</button>
        </form>
    </div>

    <!-- Java script part-->
    <script style="text/javascript">

        //Create function to validate email pattern
        function validateEmail(email) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailPattern.test(email);
        }

        //Create function to identify missing fields
        function checkfield() {
            var checked=true;

            //Create method to check first name field was empty
            if(document.getElementById('fname').value==="") {
                checked=false;
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "First Name field is empty!",
                });
            }

            //Create method to check last name field was empty
            else if(document.getElementById('lname').value==="") {
                checked=false;
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Last Name field is empty!",
                });
            }

            //Create method to check Telephone Number field was empty
            else if(document.getElementById('phone').value==="") {
                checked=false;
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Telephone Number field is empty!",
                });
            }

            //Create method to check Address Line 1 field was empty
            else if (document.getElementById('ad1').value==="") {
                checked=false;
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Address Line 1 field is empty!",
                });
            }

            //Create method to check Email field was empty
            else if(document.getElementById('email').value==="") {
                checked=false;
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Email field is empty!",
                });
            }

            //Create method to check the email is in correct pattern
            else if(!validateEmail(document.getElementById('email').value)) {
                checked=false;
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Email is not in correct format!",
                });
            }

            //Create method to check all required fields are filled or not
            if (checked) {
                Swal.fire({
                title: "Submit successfully!",
                icon: "success"
                });

                //Create method to submit the form
                setTimeout(function() {
                    document.getElementById('homesub1_updateForm').submit();
                }, 2000);
            }

        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
