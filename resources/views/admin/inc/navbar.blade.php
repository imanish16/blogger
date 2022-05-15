@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
@php 
$cat_name = Request::segment(2);
$page_name = Request::segment(3);
@endphp

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('storage/img/logo.png')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="/analytics" class="nav-link">3Beestx</a>
                </li>
            </ul>


            <ul class="navbar-item flex-row ml-auto">
			
			<li class="nav-item dropdown notification-dropdown">

                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Shaun Park</span> likes your photo.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Kelly Young</span> shared your post</div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Kelly Young</span> mentioned you in comment.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
              

                
                
				
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					@if(Auth::user()->profile_img == '')
                        <img src="{{ asset('storage/profile_image/profile-pic_1636354968.png') }}" alt="avatar">
					@else
                        <img src="{{ asset('storage/profile_image/'.Auth::user()->profile_img) }}" alt="avatar">
					@endif
						
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                {{-- <a href="{{route('admin.profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a> --}}
                            </div>
							
                            
                            
                            <div class="dropdown-item">
                                <a href="javascript:void(0);" onclick="event.preventDefault();logout()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>{{ __('Log Out') }}</a>
							
                            </div>
                            
							
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>

    <form method="POST" action="{{ route('logout') }}" id="logout_form">
        @csrf
    </form>
    <script>
        function logout() {
         
		swal({
                title: "Logout",
                text: "Are you sure want to logout?", 
                icon: "success",
                buttons: true,
                dangerMode: true,
            })
            .then((value) => {
              if (value) {
               $('#logout_form').submit();
            } else {
                
            }
        });
		
		}
    </script>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
	<?php //echo 'hello'.$page_name; exit; ?>
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
					 <?php

                        $category = ucfirst($cat_name);
                        $removeUnderscore = str_replace('_', ' ', $page_name);
                        $removeDash = str_replace('-', ' ', $removeUnderscore);
                        $page = ucwords($removeDash);
                        if ($category === 'Dashboard') :
                        echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . url('/' ). '/admin/dashboard">'.$category.'</a>';
                        elseif ($cat_name === 'users') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.users' ). '">'.$category.'</a>';
                    //     elseif ($cat_name === 'add-user') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.users' ). '">'.str_replace('-', ' ', $category).'</a>';
                    //     elseif ($cat_name === 'user-detail') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.users' ). '">'.str_replace('-', ' ', $category).'</a>';
                    //     elseif ($cat_name === 'user-edit') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.users' ). '">'.str_replace('-', ' ', $category).'</a>';
                    // elseif ($page_name === 'staffs') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.staffs' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    // elseif ($page_name === 'new-staff') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.staffs' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    // elseif ($page_name === 'staff-detail') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.staffs' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    // elseif ($page_name === 'edit-staff-detail') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.staffs' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    // elseif ($page_name === 'create') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . url('admin/roles' ). '">Create '.$category.'</a>';
                    // elseif ($page_name === 'create-roles') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . url('admin/roles' ). '">'.$category.'</a>';
                    // elseif ($page_name === 'view-roles') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . url('admin/roles' ). '">'.$category.'</a>';
                    // elseif ($cat_name === 'edit-roles') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . url('admin/roles' ). '">'.$category.'</a>';
                    // elseif ($page_name === 'categories') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.categories' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    // elseif ($page_name === 'add-categories') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.categories' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    // elseif ($page_name === 'show-categories') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.categories' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';  
                    // elseif ($page_name === 'edit-categories') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.categories' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>'; 
                    // elseif ($cat_name === 'requests') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.requests' ). '">'.$category.'</a>';
                    // elseif ($cat_name === 'request-detail') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.requests' ). '">'.str_replace('-', ' ', $category).'</a>'; 
                    //  elseif ($cat_name === 'pages') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a>';
                    // elseif ($cat_name === 'add-page') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.str_replace('-', ' ', $category).'</a>';
                    //     elseif ($cat_name === 'page-edit') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.str_replace('-', ' ', $category).'</a>';
                    //     elseif ($page_name === 'products') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>'; 
                    //     elseif ($page_name === 'add-products') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>'; 
                    //     elseif ($page_name === 'edit-products') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    //     elseif ($page_name === 'show-products') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';
                    //     elseif ($page_name === 'classes') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';     
                    //     elseif ($page_name === 'add-class') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';   
                    //     elseif ($page_name === 'edit-class-details') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';   
                    //     elseif ($page_name === 'show-class-details') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.pages' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';   
                    //     elseif ($page_name === 'registered-classes') :
                    //     echo '<li class="breadcrumb-item"><a href="'.url('/admin/dashboard').' ">Home</a></li><li class="breadcrumb-item active"><a href="' . route('admin.registered.class' ). '">'.$category.'</a><li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">'. $page .'</a></li>';   
                        endif;
                        ?>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
            
			<ul class="navbar-nav flex-row ml-auto ">
			 <li class="nav-item more-dropdown">
			Welcome {{ \Auth::user()->name }} 
			</li>
			</ul>
			
        </header>
    </div>
    <!--  END NAVBAR  -->

@endif