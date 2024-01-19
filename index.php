<html>  
<head>  
<div class="header">
        <a href="homepage.php">Home</a>
        <a href="index.php">Generator</a>
        <a href="qrscanner.php">Scanner</a>
        <a href="display_data.php">Dashboard</a>
    </div>
    <title>Qr Generation Form</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    <link rel="stylesheet" type="text/css" href="css/style.css/">
    <script>
    $(document).ready(function(){
        $("#frm").on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: 'qrcode.php',
                type: 'post',
                data: $(this).serialize(),
                success: function(response){
                    alert('Data save successfully');
                }
            });
        });
    });
</script>
</head>
<body>  
<style>
     .header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .header a {
            color: #fff;
            text-decoration: none;
            padding: 15px;
            margin: 100px;
            font-size: larger;
            font-style: normal;
            font-weight: bolder;
        }
        .header a:hover {
            background-color: #555;
        
        }
    body{
      background-color:lightblue;
    }
   
  
    .box {
        padding: 100px;
        margin: 1000px;
        display: block;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        
                }
    </style>

  <div class="container">          
   <div class="table-responsive">  
    <div class="box">
     <form method="post" action="qrcode.php" > 
      <div class="form-group">
         <label>NAME</label>
         <input type="text" name="name" id="name" placeholder="Enter Name" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control" />
        </div>
      <div class="form-group">
       <input type="submit" name="sbt-btn" value="Generate" class="btn btn-success" />
  
     </form>
    </div>
   </div>  
   
   </div>  
  </div>
 </body>  
</html>