<!DOCTYPE html>
<html>
<head>
<?php  include "HeadLinks.php" ?>
	<title>Paisano's Place Home</title>
</head>
<body>
<?php  include "TopNav.php" ?>   

 <!-- ADVERTISEMENT -->
<div class="container-fluid PPtan text-center border-bottom border-danger border-5">   
    <div class="row py-2">
        <div class="col-4">
            <img class="img-fluid rounded" src="images/spaghetti.jpg" alt="bowl of spaghetti">
        <small>
        Photo by Dana Tentis: https://www.pexels.com/photo/salted-pasta-725990/
        </small>
        </div>
        <div class="col-4 my-auto">
            <div class="PPred PPwhitetxt rounded mb-auto">
                <h2 class="fs-1">
                    BUY ONE
                    <br/>
                    GET ONE
                    <br/>
                    HALF OFF
                </h2>
            </div>
            <div class="">
                <p>Applies only to lesser value entree item.
                Available with dine in order only.</p>
            </div>
        </div>
        <div class="col-4">
        <img class="img-fluid rounded" src="images/lasagna.jpg" alt="plate of lasagna">
        <small>
        Photo by Anna Guerrero: https://www.pexels.com/photo/lasagna-on-white-ceramic-plate-4079520/
        </small>
        </div>
    </div>    
</div>

<div class="container-fluid PPblue PPwhitetxt text-center border-bottom border-danger border-5"> 
    <div class="row py-4">
        <div class="col-1"></div>        
        <div class="col">
        <a href="./menu.php" class="PPwhitetxt text-decoration-none">
            <h2>Our Menu</h2>
        </a>
            <p>View our <a href="./menu.php" class="PPtantxt">online menu</a></p>
            <a href="./menu.php" class="PPwhitetxt text-decoration-none">
                <img class="rounded img-fluid" src="images/menu.jpg" alt="a white menu on a white table">
            </a>
            <br>
        <small>Photo by Terje Sollie: https://www.pexels.com/photo/close-up-of-menu-313700/
        </small>
        </div>
        
        <div class="col-1"></div>
    </div>   
</div>

<!-- About and Location -->
<div class="container-fluid PPwhite text-center border-bottom border-danger border-5">
    <div class="row py-4">
        <div class="col border-end border-black border-2">
        <a href="./about.php" class="PPblacktxt text-decoration-none">
            <div class="rounded PPlblue p-2">
            <h2>About Paisano's</h2>
            <img class="rounded img-fluid" src="images/paisanos-place-icon.jpg" alt="chef in front of italian flag">
            </div>
        </a>
        </div>
        <div class="col border-start border-black border-2">
        <a href="./location.php" class="PPwhitetxt text-decoration-none">
            <div class="rounded PPdred p-2">
            <h2>Location</h2>
            <img class="rounded img-fluid" src="images/building.png" alt="chef in front of italian flag">
            </div>
        </a>
        </div>
    </div> 
</div>

<?php  include "BotFooter.php" ?>
</body>
</html>