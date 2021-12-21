<!-- Anurag Yadav -->

<?php
$insert=false;

if (isset($_POST["name"])) {
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

//To check is connection is sestablished or not.

if ($con) {
    // echo "Connected Successfully!!";

}
else{
    // echo "Couldn't connect because: ". mysqli_error();

}

$name = $_POST['name'];
$pass = $_POST['pass'];


$sql = "SELECT * FROM authentication.users WHERE Name='$name' AND Password='$pass'";

$result= mysqli_query($con,$sql) or die (mysqli_error($con));

$num= mysqli_num_rows($result);

if ($num!= 0) {
  $insert=true;

  }
  else{
    // echo "Invalid credentials!!";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Login</title>
    <style>
      .mb-3 {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        color: rgb(2, 2, 2);
        /* height: 0px; */
      }

      .container {
        align-items: center;
        width: 60%;
        justify-content: center;
        border: 5px solid rgb(208 0 86);
        margin-top: 20px;
        padding: 15px;
        border-radius: 15px;
        color: rgb(167, 148, 148);
        font-weight: bolder;
      }
      .form-control {
        /* font-weight: bolder; */
        color: rgb(2, 2, 2);
        background-color: rgb(248, 247, 247);
        /* text-decoration-color: rgb(3, 3, 3); */
        border: 2px solid black;
        height: 3rem;
      }

      .btn{
          background-color: rgb(85, 85, 240);
          color: white;
          border: 2px solid rgb(12, 12, 131);
          margin-left: 25%;
          width: 150px;
          margin-top: 50px;
      }

      .btn:hover{
          background-color: rgb(9, 9, 128);
          color: white;
          transition: 0.9s ease;
      }

      .para{
          font-style: italic;
          margin-left: 25%;
          margin-top: 30px;
          display: block;
          text-decoration: none;
          color: black;
          transition: 0.9s ease;
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
       margin-top:4%;
     }

     .messagei{
       color: Red;
       font-size :35px;
       font-weight: bold;
       font-family: sans-serif;
       font-style: italic;
       /* border: 2px solid rgb(10, 10, 10); */
       margin-left: 35%;
       margin-top:4%;
     }
    </style>
  </head>
  <body>
      <form action="login.php" method="post">
    <div class="container">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Username</label
        >
        <input
          type="text"
          class="form-control"
          name="name"
          placeholder=""
          required
        />
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Password</label
        >
        <input
          type="password"
          class="form-control"
          name="pass"
          placeholder=""
         
          required
        />
        <!-- Password validations:
        1. Small case character
        2. Capital case character
        3. Minimum length 8
        4. One special symbol -->
      </div>

      <button class="btn">Login</button>
      
      <a class="para" href="signup.php">New User? Signup Here</a>
    </div>

</form>

<?php
if ($insert==true) {
  echo "<div class='message'>
  <p class='txt'>You are now Logged in!!</p>
  </div>" ;
}
else{

  echo "<div class='messagei'>
  <p>Invalid Credentials!!</p>
  </div>" ;

}

?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    
  </body>

</html>

