<?php
$conn=mysqli_connect('localhost','root','','class') or die(mysqli_error());

$FULLNAME=$_POST['fullname'];
$USER=$_POST['user'];
$DATE=$_POST['dateb'];
$NUMBERPHONE=$_POST['phone'];
$EMAIL=$_POST['mail'];
$PASSWORD=$_POST['pwd'];
$TALENT=$_POST['tlt'];
$WRITE=$_POST['wrt'];
$GENDER=$_POST['gender'];


$req="INSERT INTO classl (id, fname ,username, datebr, numberphone , email, passwordd ,talent,tous,gender) 
values (0,'$FULLNAME', '$USER', '$DATE', '$NUMBERPHONE', '$EMAIL', '$PASSWORD',' $TALENT', '$WRITE', '$GENDER')";

$res=mysqli_query($conn,$req);

?>
<!DOCTYPE html>
<html> 
    <head>
        <title> Registration </title>
        <link rel="shortcut icon" sizes="700" type="image/x-icon" href="img/icon.jpg" />
    <link rel="icon" sizes="2000" type="image/x-icon" href="img/icon.jpg" />
  
   
    
     
           
        <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
 
body{
  height: 120vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background : linear-gradient(135deg, #71b7e6, #9b59b6) ;

}






.container .block-logo-mobile{
    position: absolute;
  top: 20%;
  left: 41%;
  
}


.container .details{
  color: #fff;
  
  font-size: 50px;

  font-weight: 600;
  font-style: unset;
  
  position: relative;
}

.container .entry-title{
  color: #fff;
  
  font-size: 30px;

  font-weight: 550;
  font-style: unset;
  
  position: relative;
}
.container .entry-title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 55px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}


.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 
 
 
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  

  
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
}




         </style>
</head>    
 <body>
<div class="container">
 <form > <div class="input-box">
            <span class="details"> You have been successfully registered. </span>
            
           </div>
          
           
       <h2 class="entry-title"> <?php echo  ($USER) ?>  <?php echo  ($FULLNAME) ?>, you are now member of ART WITH HEART BEATS TEAM  </h2>
       <section id="block-block-10" class="block block-block block-logo-mobile clearfix">

      <div class="block_content">
        <p style="text-align: center;"></p>
        <img alt="" src="img/hbt.png"  style="width: 200px; height: 180px; font-variant-position: inherit ; " />
        
       </div>
    
    </section>

    </form>
  </div>

  
  
 

 </body>
</html>


