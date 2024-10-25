<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Customers</title>


    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style type = "text/css">


		body {

            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }


        /* Base button styling */
        .btn1 {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;

            /* Light blue color */
            background-color: #add8e6; 
            text-align: center;
            text-decoration: none;

            /* Curved corners */
            border-radius: 10px; 

            /* Smooth transition */
            transition: background-color 0.6s ease; 
            border: none;
        }

        /* Hover effect */
        .btn1:hover {

            /* Green color on hover */
            background-color: #32cd32;
            
            /* Pointer cursor on hover */
            cursor: pointer; 
        }

        /* Header styling */
        header h2 {
            margin: 10;
            font-size: 34px;
            color: #333;
        }


	</style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">

            <header>
                <h2>Registered Customers</h2>
            </header>
            

            <!--Link registration form-->
            <a href="<?= base_url('Home1_Con/add_new_customer') ?>" class="btn1 btn-primary">

                <!-- Add Button to add new customer-->
                <button type="button">Add New Customer</button>
                
            </a>
        </div>


        <!-- Create table to display Registered customer details-->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Telephone Number</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>Address 3</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th>Edit</th>

                </tr>
            </thead>

            <tbody>
                
				 <?php


                // Get new variable named as "userRecords" as "final" variable
                foreach ($userRecords as $final) {
                    ?>
					<tr>

                    <!-- print table data -->
                    <td><?php echo $final['title'] ?></td>
                    <td><?php echo $final['first_name'] ?></td>
                    <td><?php echo $final['last_name'] ?></td>
                    <td><?php echo $final['telenum'] ?></td>
                    <td><?php echo $final['address_1'] ?></td>
                    <td><?php echo $final['address_2'] ?></td>
                    <td><?php echo $final['address_3'] ?></td>
                    <td><?php echo $final['email'] ?></td>
                    <td><a href="<?= base_url('Home1_Con/delete_customer/' . $final['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a></td>
					<td><a href="<?= base_url('Home1_Con/registration_update/'.$final['id']) ?>" class="btn btn-warning">Update</a></td>
                
                </tr>
					<?php
                }

				 ?>



                
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
