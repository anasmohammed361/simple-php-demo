<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color:#bd4037;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #bd4037;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .button {
        display: inline-block;
  background-color: green;  
  padding: .5rem;
  margin-block: 1rem;
  border-radius: 5px;
  color: white;
  padding: .5em;
  text-decoration: none;
}
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✘</i>
      </div>
        <h1>Failed 😔...</h1> 
        <?php
            if(isset($_GET['type']) && isset($_GET["reg"])){
                $reg = $_GET['reg'];
                echo "<p>Failed to  find Student with Regiseter Number $reg</p>";
                echo  '<a href="check.php" style=" background-color: #629af5;" class="button" role="button">Check Student</a>';       
                exit();
            }

            if(isset($_GET['name']) && isset($_GET["reg"])){
                $name = $_GET['name'];
                $reg = $_GET['reg'];
                echo "<p>Failed to  Register $name with Regiseter Number $reg</p>";
            
            }else{
                echo "<p>Registration Failed!!!</p>";
            }
            
          echo  '<a href="add.html" class="button" role="button">Register Student?</a>';            
?>

      </div>
    </body>
</html>