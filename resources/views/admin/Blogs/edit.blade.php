@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
    <div class="layout-px-spacing">
        <div id="flFormsGrid" class="layout-spacing general-info">
            <div class="statbox widget box-shadow info">
                <div class="widget-header">
                    <h5 class="mb-3">Edit blogs Details</h5>
                </div>
                <div class="widget-content">
                    <form id="editblogsForm" action="{{url('/admin/update-blogs/'.$blog->id)}}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-4 pr-3">
                                <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Product Photo</h4>
                                                </div>      
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div class="custom-file-container"  data-upload-id="addproductForm">
                                                <label>Upload <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                <label class="custom-file-container__custom-file" >
                                                    <input type="file"  name="image" class="custom-file-container__custom-file__custom-file-input"  data-height="100"   accept="image/*" multiple>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                    <span class="custom-file-container__custom-file__custom-file-control "></span>
                                                </label>
                                                <div class="custom-file-container__image-preview " ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputName4">blog Title<span>*</span></label>
                                    <input class="form-control"  type="text" name="title"
                                        value="{{$blog->title ?? ''}}" id="blogTitle" />
                                    <span id="error_catName"></span>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputEmail4">blogs Description<span>*</span></label>
                                            <textarea class="form-control description ckeditor" id="ckeditor" maxlength="2000" name="body"
                                                aria-label="With textarea">{{$blog->body ?? 'N/A'}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Status<span>*</span></label>
                                        <select id="status" class="form-control placeholder js-states form-control"
                                            name="status">
                                            @if($blog->status=='1')
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                            @else
                                            <option value="1">Active</option>
                                            <option value="0" selected>Inactive</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{ url('admin/blogmanagement/blogs')}}"
                                class="btn btn-outline-dark mt-2">Back</a>
                            <button type="submit" class="btn btn-primary mt-2 ml-2">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
   <script>
   var phoneNumber = $('.phoneNumber').maxlength({
      alwaysShow: true,
      placement:"top",
      threshold: 10,
   });
   var zipcode = $('.zipcode').maxlength({
      placement:"top",
      alwaysShow: true,
   });

   var description = $('textarea.description').maxlength({
      placement:"top",
      alwaysShow: true,
   });
   </script>
@endsection