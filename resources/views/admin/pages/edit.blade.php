@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
<div class="form-grid">
         <div id="flFormsGrid">
            <div class="layout-spacing">
            <div class="statbox widget box-shadow">
               <div class="widget-header">
                 <h5 class="mb-3">Page Detail</h5>
               </div>
               <div class="widget-content conta">
                  <form id="pageForm" role="form" action="{{url('admin/pagemanagement/page-update')}}" method="post"novalidate>
                  {{csrf_field()}}
                  <input type="hidden" name="pageId" value="{{$pageDetail['id']}}">
                  <div class="form-row">
                     <div class="col-lg-8 col-md-6">
                        <div class="form-group">
                           <label for="inputName4">Title<span>*</span></label>
                           <input class="form-control" type="text" name="title" value="{{ $pageDetail['title'] }}" placeholder="Title" readonly/>
                        </div>
                     </div>
                     <div class="col-lg-8 col-md-6">
                        <div class="form-group">
                           <label>Content <span>*</span></label>
                           <textarea  class="form-control editor1" id="ckeditor" value="{{$pageDetail['description']}}" name="description">{{$pageDetail['description']}}</textarea>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="inputState">Page Meta title</label>
                           <input class="form-control placeholder" type="text" name="meta_title"
                              value="{{$pageDetail['meta_title']}}" placeholder="Page Meta Title" id="Page_meta_title" />
                        </div>
                        <div class="form-group col-md-6">
                           <label for="inputState">Page Meta Keyword</label>
                           <input class="form-control placeholder" type="text" name="meta_keyword"
                              value="{{$pageDetail['meta_keyword']}}" placeholder="Page Meta Keyword" id="Page_meta_keyword" />
                        </div>
                        <div class="col-md-12 col-sm-12">
                           <div class="form-group">
                              <label for="inputEmail4">Pages Meta Description</label>
                              <textarea class="form-control" name="meta_description"
                                 aria-label="With textarea" value="{{$pageDetail['meta_description']}}">{{$pageDetail['meta_description']}}</textarea>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8 col-md-6">
                        <div class="form-group">
                           <label for="inputState">Status</label>
                           <select id="status" class="form-control placeholder" name="status">
                              <option value="1" {{ ($pageDetail['status'] == 1) ? 'selected' : ''  }}>Active</option>
                              <option value="0" {{ ($pageDetail['status'] == 0) ? 'selected' : ''  }}>Inactive</option>
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



               
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style> 
@endsection