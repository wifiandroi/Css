<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"  rel="stylesheet">
    <link href="style.css" rel="stylesheet" >
  </head>
  <body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto my-2">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <h1 class="h11 text-center">Hello, world!</h1> 
    <div class="container">
    	<div class="row">
    		<div class="col">
    		<span class="material-icons">home</span> Ver <span class="material-icons">account_circle</span>
    		<p><span class="material-symbols-outlined text-danger">home</span></p>
     		<p><span class="material-symbols-outlined">account_circle</span></p>   		
    		</div>
    		<div class="col">
    			<p class="mas">Más..</p>
    			
    		</div>
    	</div>

    </div>
    <div class="container">
    	<div class="row">
    		<div class="col">
    		 <p class="h22">MTPE</p>		
    		</div>
    		<div class="col">
    			<p class="menos">Más..</p>
    			
    		</div>
    	</div>

    </div>
    <div class="dc">
    <?php

		echo 'SCSS';
		?>
  </div>	

      <div class="container">
    	<div class="row">
    		<div class="col">
    		    <div id="main-container">
    		    	<div id="hamburger">
    		    		<button>
    		    			<span class="top-line"></span>
    		    			<span class="middlle-line"></span>
    		    			<span class="bottom-line"></span>
    		    		</button>
    		    	</div>
    		    </div>		
    		</div>
    	</div>
      </div>	



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

     <script>
      	const nav = document.querySelector('#hamburger button');
      	nav.addEventListener('click', e=>{
      		nav.classList.toggle('open');
      	});
      		
     </script>
  </body>
</html>

