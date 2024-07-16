
<html>
    <head > <link rel="stylesheet" href="nav.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300&family=Sometype+Mono&display=swap" rel="stylesheet">
<style>
* {
  box-sizing:border-box;
}

/*nav bar*/
*{
    list-style: none;  
    text-decoration: none;   
}
   nav ul {
    float: right;
    overflow: hidden;
    list-style: none;
    margin-right: 100px;
    
   
    }
    nav  :hover {
      background-color: #D344FF;
      color: rgb(0, 0, 0);
      box-shadow: yellow;
    }
  
  li  {
    display: inline-block;
    padding: 8px;
    background: transparent;

    font-family: 'Poppins', sans-serif;
  }
  nav a{
    color: rgb(250, 250, 250);
    font-size: 18px;
    padding: 10px;
    border-radius: 50px;
  }
  label.logo{
    padding:  0 75px
    font-size: 20px;
    color: rgb(255, 255, 255);
    font-family: 'Poppins', sans-serif;
  }
  .logo:hover{
 
  }


body {
  margin: 0;
 
  font-family: 'Poppins', sans-serif;
}
<style>
/* Add this CSS in your stylesheet or in the head of your HTML document */
.dropdown {
    display: inline-block; 
}
.dropbtn{
    border:1px solid white;
    padding:3px;
    border-radius:5px;
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    border:1px solid white;
    padding:3px;
    border-radius:5px;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    color:white;
}

.dropdown-content a:hover {
    background-color: #D344FF;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

</style>
        
</head>
        <body>
        <nav>
    <ul>
      <li> <label class="logo">JOB PORTEL ALL COPYRIGHTS RESERVED@2024</label></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>

        <?php 
        if (isset($_SESSION['user_id'])) {
            echo '<li><a href="post a job.php">Post a Job</a></li>';
            echo '<li><a href="search a job.php">Search a Job</a></li>';
            echo '<li><a href="blog.php">Blogs</a></li>';
           
        } else {
          echo '<li><a href="blog.php">Blogs</a></li>';
          echo'<li><a href="logout.php">logout</a></li>';
            echo '<a href="login.php">Login</a>';
         
        }
        ?>
    </ul>
</nav>


