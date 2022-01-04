<div id="sidebar" class="active">
	<div class="sidebar-wrapper active">
		<div class="sidebar-header">
	        <div class="d-flex justify-content-between">
	            <div class="logo">
	                <!-- <a href="#"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> -->
	                <h3>Booku</h3>
	            </div>
	            <div class="toggler">
	                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
	            </div>
	        </div>
	    </div>




	    <div class="sidebar-menu">
	        <ul class="menu">
	            <li class="sidebar-title">Menu</li>
	            
	            <li
	                class="sidebar-item @if(Request::is('home*')) active @endif">
	                <a href="{{ route('home') }}" class='sidebar-link'>
	                    <i class="bi bi-grid-fill"></i>
	                    <span>Dashboard</span>
	                </a>
	            </li>
	            
	            <li
	                class="sidebar-item @if(Request::is('users*')) active @endif">
	                <a href="{{ route('users') }}" class='sidebar-link'>
	                    <i class="bi bi-people-fill"></i>
	                    <span>Pengguna</span>
	                </a>
	            </li>
	            
	            <li
	                class="sidebar-item  ">
	                <form action="{{ route('logout') }}" method="POST">
	                	@csrf	    
	                	<div class="sidebar-link">	                		
		                    <i class="bi bi-power"></i>
		                    <button style="background-repeat: no-repeat; background-color: transparent; border: none;cursor: pointer; overflow: hidden;outline: none;margin-left: 0.75rem; color: #25396f">Logout</button>
	                	</div>            	
		                <!-- <a href="#" class='sidebar-link'>
		                    <i class="bi bi-power"></i>
		                    <span>Logout</span>
		                </a> -->
	                </form>
	            </li>
	            
	            
	        </ul>
	    </div>

	    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
	</div>
</div>