@extends('layouts.data')

@section('title')
	Books
@endsection

@section('headerContent')
  <h3 class="m-t-none m-b-none font-thin padder-v">Books Library</h3>
@endsection

@if($present === 'thumb')
	@include('admin.books.default.thumb')
@else
	@include('admin.books.default.data')
@endif

@include('admin.books.default.tool')

@section('js')
    <script type="text/javascript" src="{{ asset('js/apps/books/main.js') }}"></script>
@endsection
