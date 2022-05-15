@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
   <div class="container">
      <div class="row">
         <div id="flFormsGrid" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Role</h4>
                     </div>
                  </div>
               </div>
               
                

               <div class="widget-content widget-content-area">
               {!! Form::open(array('route' => 'admin.roles.store','method'=>'POST')) !!}
                     {{csrf_field()}}
                    <div class="form-row mb-4">
                           <label for="inputName4">Name<span>*</span></label>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                           <label for="inputName4"></label><br/>
                            @foreach($permission as $value)
                                <label class="new-control new-checkbox checkbox-outline-default"><br/>
                                {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'new-control-input')) }}
                                  <input type="checkbox" class="new-control-input checkbox-outline-*">
                                  <span class="new-control-indicator"></span>{{ $value->name }}
                                </label>
                            <br/>
                            @endforeach
                        </div>
                    </div>
                        
                        
                     <button type="submit" class="btn btn-primary mt-3">Submit</button>
                      <a href="{{ url('admin/roles')}}" class="btn btn-primary mt-3">Back</a>
                  {!! Form::close() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection