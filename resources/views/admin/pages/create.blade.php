@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="newcustomer">
      <div id="flFormsGrid" class="layout-spacing">
         <div class="statbox widget box-shadow">
            <div class="widget-header">
               <h5 class="mb-3">Add New User</h5>
            </div>
            <div class="widget-content">
               <form id="pageForm" role="form" action="{{url('admin/pagemanagement/store')}}" method="post"novalidate>
                  {{csrf_field()}}
                  <div class="form-row">
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                           <label for="inputName4">Title<span>*</span></label>
                           <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Name" />
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                           <label for="inputName4">Slug<span>*</span></label>
                           <input class="form-control" type="text" name="slug" value="{{ old('slug') }}" placeholder="Name" />
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-6">
                        <div class="form-group">
                           <label for="inputName4">Content <span>*</span></label>
                           <textarea  class="form-control ckeditor" id="ckeditor" value="{{ old('description') }}" name="description"></textarea>
                        </div>
                     </div>
                     <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                           <label for="inputState">Page Meta title</label>
                           <input class="form-control placeholder" type="text" name="meta_title"
                              value="{{ old('meta_title') }}" placeholder="Page Meta Title" id="Page_meta_title" />
                        </div>
                        <div class="form-group col-md-6">
                           <label for="inputState">Page Meta Keyword</label>
                           <input class="form-control placeholder" type="text" name="meta_keyword"
                              value="{{ old('meta_keyword') }}" placeholder="Page Meta Keyword" id="Page_meta_keyword" />
                        </div>
                        <div class="col-md-12 col-sm-12">
                           <div class="form-group">
                              <label for="inputEmail4">Pages Meta Description</label>
                              <textarea class="form-control" name="meta_description"
                                 aria-label="With textarea"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                           <label for="inputState">Status<span>*</span></label>
                           <select id="status" class="form-control placeholder" name="status">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="text-right">
                     <a href="{{ url('admin/pages')}}" class="btn btn-outline-dark mt-2">Back</a>
                     <button type="submit" class="btn btn-primary mt-2 ml-2">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection