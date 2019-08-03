@extends('layouts.app', ['page' => __('Promotion Management'), 'pageSlug' => 'Promotion Management'] )

@section('content')

<div align="right">
	<a href="{{ route('promotion-management.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

  
@endsection