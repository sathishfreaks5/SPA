@extends('layouts.app', ['page' => __('Logo Management'), 'pageSlug' => 'Logo Management'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Logo Management</h5>
           
        </div>
        <div class="card-body all-icons">
          <div class="row">
           
          
           <form class="form" method="post" action="{{ route('admin.blocks.standard.logo.store') }}" enctype="multipart/form-data">
               @csrf
               <input type="file" name="image" id="image" />
               <input type="submit" value="Upload" />
              </form> 
             
          </div>
        </div>
         @if ($message = Session::get('success'))
          <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
      </div>
    </div>
  </div>
@endsection
