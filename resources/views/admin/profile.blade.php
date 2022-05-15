@extends('admin.layouts.app')
@section('content')
<!--  BEGIN CONTENT AREA  -->
     
            <div class="layout-px-spacing">
                <div class="layout-spacing">
                    <!-- Content -->
                        <div class="user-profile layout-spacing">
                            <div class="widget widget-content">
                                     <div class="widget-header">
                                        <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                                       <h5 class="mb-3">My Profile</h5>
                                   </div>
                                   <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                                    <a href="{{ route('admin.account-profile-setting')}}" class="pull-right edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                </div>
                                </div>
                                </div>
                                <div class="form-row">
                                 <div class="col-md-4 pr-3 pt-2 user-profile-custom">
                                <div class="text-center user-info">
								@if(Auth::user()->profile_img == '')
									<img  src="{{ asset('storage/profile_image/profile-pic_1636354968.png') }}" alt="avatar">
								@else
									<img width="250" height="350" id="profileImg" src="{{ asset('storage/profile_image/'.$adminProfile->profile_img) }}" alt="avatar">
								@endif
                                    
                                    <h5 class="text-primary pb-2">{{ ($adminProfile->name) ? $adminProfile->name : 'N/A' }}</h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="user-info-list">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> 
												@foreach(Auth::user()->roles as $roles)
												{{ $roles['name'] }}
												@endforeach	
                                            </li>
											<li class="contacts-block__item">
                                                <i class="fa fa-mars" style="font-size:21px; margin-right: 10px;"></i> {{ (ucfirst($adminProfile->gender)) ? ucfirst($adminProfile->gender) : 'N/A' }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>{{ ($adminProfile->city) ? $adminProfile->city : 'N/A' }}, {{ ($state->name) ? $state->name : 'N/A' }} ( {{ ($adminProfile->zipcode) ? $adminProfile->zipcode : 'N/A' }} ) , {{ ($adminProfile->country) ? $adminProfile->country : 'N/A' }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <a href="mailto:{{ ($adminProfile->email) ? $adminProfile->email : 'N/A' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{ ($adminProfile->email) ? $adminProfile->email : 'N/A' }}</a>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> {{ ($adminProfile->phone) ? $adminProfile->phone : 'N/A' }}
                                            </li>
                                            
                                        </ul>
                                </div>
                        </div>
                    </div>
                </div>
                   </div>
                </div>
            </div>
            
      
        <!--  END CONTENT AREA  -->
   
@endsection