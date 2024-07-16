<style>



.text-right{
    text-align: right;
	
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}


h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}

.error{
    padding: 2%;
    color: red;
}
.success{
    padding: 2%;
    color: green;
}


/* CSSS for navbar section */


.menu{
    line-height: 10px;
}
.menu ul{
    list-style-type: none;
}

.menu li{
    display: inline;
    padding: 10%;
    font-weight: bold;
}


/* CSS for instution SEarch Section */

.ins-search{
    background-image: url(../images/search.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
    height: 371px;
} </style>
<?php
$email = '';
$show = '';
if(!empty($_SESSION['userid']) && $_SESSION['userid']) {
	$email =  $_SESSION['email'];		
} else {
	$show = 'hidden';
}
?>	

<li><span><a  class="menu text-right" href="../index.php">Home</span></li>
<li><span><a class="menu text-right" href="../categories.php">Categories</span></li>
<li><span><a class="menu text-right" href="../addinfo.php">Add info</span></li>
<li><span><a class="menu text-right" href="../aboutus.php">About Us</span></li><br>

<div id="loggedPanel" class="<?php echo $show; ?>">Logged in <span id="loggedUser" class="logged-user"><?php echo $email; ?></span>
	<a class="menu text-right" href="action.php?action=logout">Logout</a>
</div>
<br><br><br>

