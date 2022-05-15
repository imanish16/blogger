@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="newcustomer">
      <div id="flFormsGrid" class="layout-spacing">
         <div class="statbox widget box-shadow">
            <div class="widget-header">
               <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                     <h5 class="mb-3">Product Detail</h5>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                     <a href="{{ url('admin/productmanagement/products')}}" class="btn btn-outline-dark mb-3">Back</a>
                  </div>
               </div>
            </div>
            <div class="widget-content">
               <div class="row">
                  <div class="col-xl-3 col-lg-12 col-md-12 pt-2 user-profile-custom">
                     @if($product_image)
                     @foreach($product_image as $key => $data)
                        
                     @if(!empty($data))
                     <img src="{{ asset('products/images/'.$data) }}" width="250" height="350"
                     title="">
                     @else
                     <img src="{{ asset('storage/img/noimage.png') }}" width="250" height="350" title="">
                     @endif
                     @endforeach
                     @endif

                  </div>
                  <div class="col-xl-9 col-lg-12 col-md-12 pt-2">
                     <div class="row">
                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Title:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->title ? $product->title : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>

                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Status:</label>
                              <mark class="ml-2 mt-1">
                                 {{ ($product->status) == 'active' ? 'Active' : 'Inactive' }}
                              </mark>
                           </fieldset>
                        </div>

                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Description:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->description ? $product->description : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>

                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Price:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->price ? $product->price : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>

                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Offer Price:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->offer_price ? $product->offer_price : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>
                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Slug:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->slug ? $product->slug : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>
                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Meta Title:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->meta_title ? $product->meta_title : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>

                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Meta Description:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->meta_description ? $product->meta_description : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>

                        <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Meta Keyword:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->meta_keyword ? $product->meta_keyword : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div>

                        {{-- <div class="col-md-6">
                           <fieldset class="form-group">
                              <label class="pull-left">Product Affliate Link:</label>
                              <mark class="ml-2 mt-1">
                                 {{$product->affiliate_url ? $product->affiliate_url : 'N/A' }}
                              </mark>
                           </fieldset>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection