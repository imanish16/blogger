@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500'
&& $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' &&
$page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
@php
$category_name = Request::segment(2);
@endphp
<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">


            <ul class="list-unstyled menu-categories" id="accordionExample">
             
                    <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                        <a href="{{ url('admin/dashboard')}}" data-active="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
              
        </ul>
    </nav>
</div>

<!--  END SIDEBAR  -->

@endif