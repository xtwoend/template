@extends('layouts.form', ['form_url' => route('admin.book.store')])

@section('title')
	Create Book
@endsection

@section('headerContent')
  <h3 class="m-t-none m-b-none font-thin padder-v">Create New Book</h3>
@endsection

@include('admin.books.create.tool')
@include('admin.books.create.form')

@section('js')
    @if (count($errors) > 0)
	    <script>
	    	$(document).ready(function(){
	    		var html = '';
	    		@foreach ($errors->all() as $error)
	    			html += '{{ $error }} \n';
	    		@endforeach
	    		swal("Oops...", html , "error");
	    	});
	    </script>
	@endif
@endsection
