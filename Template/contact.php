<!--   product  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" ><img src="assets/logo.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.php#top-sale">PRODUCTS</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="#special-price">CATEGORY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
              </li>

              <li class="nav-item">
    
                <a class="nav-link" href="contact.php">CONTACT</a>
              </li>
          </ul>
          <form action="#" class="font-size-14 font-rale">
              <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
              </a>
          
           </form>
        
        </div>
      </nav>
</header>
<section id="contact" >
     
     <div class="container">
         <div class="row">
             <div class="col-sm-6">
                 <h1 style="boder">Welcome Mobile store </h1>
                 <img src=".//assets/Mobile.jpg" alt="Mobile" >
                 
             </div>
    
</body>
</html>

                
<!--   !product  -->
