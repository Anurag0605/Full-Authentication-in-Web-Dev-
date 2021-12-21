<!-- Anurag Yadav -->

<?php

$insert=false;

if (isset($_POST["name"])) {


$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

//To check is connection is established or not.

if ($con) {
    // echo "Connected Successfully!!";

}
else{
    // echo "Couldn't connect because: ". mysqli_error();

}

$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$contact = $_POST['contact'];
$desc = $_POST['desc'];




$sql="INSERT INTO `authentication`.`users` ( `Name`, `E-mail`, `Password`, `Contact`, `Description`) VALUES ('$name', '$mail', '$pass', '$contact', '$desc');";

// $con->query($sql);


if ($con->query($sql)==true) {
   $insert=true;

}

else{
    // echo "Not Inserted Succesfully";  
}

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            background-image:  linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),url("whitre.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        .mb-3{
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            color: rgb(5, 5, 5);
            /* height: 0px; */
        }

        .container{
            align-items: center;
            width: 60%;
            justify-content: center;
            border: 5px solid rgb(208 0 86);
            margin-top: 20px;
            padding: 15px;
            border-radius: 15px;
            color: rgb(7, 7, 7);
            font-weight: bolder;
        }
        .form-control{
            /* font-weight: bolder; */
            color: rgb(2, 2, 2);
            background-color: rgb(10, 10, 10);
            /* text-decoration-color: rgb(3, 3, 3); */
            border: 2px solid black;
            height: 3rem;
        }

        .sub{

            margin-left: 25%;
            margin-right: auto;
            height: 60px;
            /* width: 5px; */
            border-radius: 14px;
            color: rgb(8, 8, 8);
            font-size: large;
            font-weight: bold;
            margin-top: 3%;
            width: 150px;
            background-color: rgb(169, 235, 235) !important;
            border: 5px solid rgb(2, 155, 2);

        }

        .sub:hover{
            border: 5px solid green;
            background-color: aquamarine;
        }

        .message{
       
          align-items: center;
          justify-content: center;
          /* border: 2px solid rgb(10, 10, 10); */
          margin-top:20px;
          
        }
        .txt{
          color: green;
          font-size :35px;
          font-weight: bold;
          font-family: sans-serif;
          font-style: italic;
          /* border: 2px solid rgb(10, 10, 10); */
          margin-left: 35%;
        }

        .btn{
          background-color: rgb(85, 85, 240);
          color: black;
          border: 2px solid rgb(12, 12, 131);
          margin-left: 25%;
          width: 150px;
          margin-top: 50px;
      }

      .btn:hover{
          background-color: rgb(9, 9, 128);
          color: black;
          font-size: larger;
          border: 3px solid black;
          transition: 0.9s ease;
      }

      .para{
          font-style: italic;
          margin-left: 25%;
          margin-top: 30px;
          display: block;
          text-decoration: none;
          color: black;
          transition: 0.5s ease;
      }
    </style>
  </head>
  <body>

    <form action="signup.php" method="post">

    <div class="container">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" name="name" class="form-control"  placeholder="">
      </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email ID</label>
        <input type="email" class="form-control" name="mail"  placeholder="" required>
      </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass"   placeholder="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        <!-- Password validations:
        1. Small case character
        2. Capital case character
        3. Minimum length 8
        4. One special symbol -->

      </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="contact"   placeholder="" pattern="[789][0-9]{9}" >
        <!-- Contact number validations:
        1. 10 digits
        2. must start with 7/8/9 -->
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description
        </label>
        <textarea class="form-control" name="desc" rows="3"></textarea>
      </div>
    </div>

    </div>

<button type="submit" class="btn">Sign Up</button>

<a class="para" href="login.php">Already Signed Up? Login Here</a>
</div>
</form>


<?php
if ($insert==true) {
  echo "<div class='message'>
  <p class='txt'>Form Submitted successfully!!</p>
  </div>" ;
}

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

</html>