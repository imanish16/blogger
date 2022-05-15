@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="newcustomer">
      <div id="flFormsGrid" class="layout-spacing">
         <div class="statbox widget box-shadow">
            <div class="widget-header">
               <h5 class="mb-3">Add User</h5>
            </div>
            <div class="widget-content">
               <form id="addNewCusForm" role="form" action="{{route('admin.users.store')}}" method="post"novalidate>
                  {{csrf_field()}}
                  <div class="form-row">
                     <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                           <label for="inputName4">First Name<span>*</span></label>
                           <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Name" />
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                           <label for="inputEmail4">Last Name<span>*</span></label>
                           <input placeholder="Last Name" class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" />
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                           <label class="col-form-label">Choose Gender<span>*</span></label>
                           <div class="form-row">
                              <div class="col-6">
                                 <div class="custom-control custom-radio classic-radio-info">
                                    <input type="radio" id="hRadio1" name="gender" value="male" class="custom-control-input">
                                    <label class="custom-control-label" for="hRadio1">Male</label>
                                 </div>
                              </div>
                              <div class="col-6">
                                 <div class="custom-control custom-radio classic-radio-info">
                                    <input type="radio" id="hRadio2" name="gender" value="female" class="custom-control-input">
                                    <label class="custom-control-label" for="hRadio2">Female</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                           <label for="inputEmail4">Email<span>*</span></label>
                           <input placeholder="Email" class="form-control" type="email" name="email" value="{{ old('email') }}" />
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                           <label for="inputEmail4">Password<span>*</span></label>
                           <input placeholder="Password" class="form-control" type="password" name="password" value="{{ old('password') }}" />
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                           <label for="inputEmail4">Phone<span>*</span></label>
                           <input placeholder="Phone Number" class="form-control" type="text" name="phone" value="{{ old('phone') }}" />
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                           <label for="inputAddress">Address<span>*</span></label>
                           <textarea class="form-control" id="address" name="address"  aria-label="With textarea" value="{{ old('address') }}" placeholder="1234 Main St">{{ old('address') }}</textarea>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                        <div class="form-row">
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="inputEmail4">Country<span>*</span></label>
                                 <select name="country"  id="country-dd" class="form-control">
                                    <option value="{{ old('country') }}" >Select Country </option>
                                    @foreach ($countries as $data)
                                    <option value="{{$data->name}}" data-id="{{$data->id}}">
                                       {{$data->name}}
                                    </option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="inputState">State<span>*</span></label>
                                 <select class="form-control" id="state-dd" name="state">
                                    <option value="{{ old('state') }}" >Select state </option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="inputCity">City<span>*</span></label>
                                 <input class="form-control" name="city" id="cityss" type="text" value="{{ old('city') }}" />
                                 <span id="cityerror" style="color:red;"></span>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label for="inputZip">Zip<span>*</span></label>
                                 <input class="form-control" name="zipcode" type="text" value="{{ old('zipcode') }}" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                           <label for="inputState">Role</label>
                           {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                           <label for="inputState">Status</label>
                           <select id="status" class="form-control placeholder" name="status">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="text-right">
                     <a href="{{ url('admin/users')}}" class="btn btn-outline-dark mt-2">Back</a>
                     <button type="submit" class="btn btn-primary mt-2 ml-2">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection