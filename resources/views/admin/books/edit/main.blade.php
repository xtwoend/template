@extends('layouts.form', ['form_url' => route('admin.book.update', [$row->id])])

@section('title')
	Edit Book
@endsection

@section('headerContent')
  <h3 class="m-t-none m-b-none font-thin padder-v"> Edit Book </h3>
@endsection

@include('admin.books.edit.tool')
@include('admin.books.edit.form')

@section('js')
    @if (count($errors) > 0)
	    <script type="text/javascript">
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
