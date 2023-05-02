<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
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
        color: #9ABC66;
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
        <i class="checkmark">✓</i>
      </div>
        <h1>Success 😉</h1> 
        <?php
          if (isset($_GET['type']) && $_GET['type'] == "database") {
            $name = $_GET['name'];
            $reg = $_GET['reg'];
            $roll = $_GET['roll'];
            $fa = $_GET['fa'];


echo "<div class='container table-responsive py-5'> 
<table class='table table-bordered table-hover'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Name</th>
      <th scope='col'>Reg</th>
      <th scope='col'>Roll</th>
      <th scope='col'>Faculty Advisor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>$name</th>
      <td>$reg</td>
      <td>$roll</td>
      <td>$fa</td>
    </tr>
  </tbody>
</table>
</div>
";
          }
          elseif(isset($_GET['name']) && isset($_GET["reg"])){
                $name = $_GET['name'];
                $reg = $_GET['reg'];
                echo "<p>Successfully Registered $name with Regiseter Number $reg</p>";
            }else{
                echo "<p>Successfully Registered !</p>";
            }
            
?>
  <a href="check.php" class="button" role="button">Check Student</a>
      </div>
    </body>
</html>