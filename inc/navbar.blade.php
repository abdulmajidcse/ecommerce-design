<!--main navbar-->
<nav class="navbar navbar-expand-lg p-lg-0 p-2 sticky-top mainnavbar">
  <div class="container-fluid">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="text-light"><i class="fas fa-bars"></i> Menu</span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav mainnavul">
	      
		  <li class="nav-item active">
	        <a class="nav-link" href="{{ url('/') }}">
	         <i class="fas fa-home"></i> Home</a>
	       </li>
	      <!--dropdown link-->
		  <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         All Categories
	        </a>
	        <!--dropdown menu-->
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="{{ URL::to('/categories') }}">Product one</a>
	          <a class="dropdown-item" href="{{ URL::to('/categories') }}">Product two</a>
	          <a class="dropdown-item" href="{{ URL::to('/categories') }}">Product three</a>
	        </div><!--end of dropdown menu-->
	       </li>

	       <!--dropdown link-->
		  <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	         All Brands
	        </a>
	        <!--dropdown menu-->
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="{{ URL::to('/brand') }}">Product one</a>
	          <a class="dropdown-item" href="{{ URL::to('/brand') }}">Product two</a>
	          <a class="dropdown-item" href="{{ URL::to('/brand') }}">Product three</a>
	        </div><!--end of dropdown menu-->
	       </li>

	       <li class="nav-item">
	       	<!-- Payment Method modal -->
	        <a class="nav-link" href="#" data-toggle="modal" data-target="#paymentMethod">Payment Method</a>
	       </li>

	       <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Contact</a>
	       </li>

	    </ul>

	  </div>
  </div>
</nav><!--end of main navbar-->