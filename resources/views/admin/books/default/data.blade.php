@section('pageData')
<div class="table-responsive no-border">
  <table class="table stripe m-b-none" data-ride="datatables" id="book-lists" data-url="{{ route('admin.book.data') }}">
    <thead>
      <tr>
        <th></th>
        <th class="col-md-7">TITLE</th>
        <th class="col-md-2">UPDATE AT</th>
        <th class="zonk extra"></th>
        <th class="zonk"></th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
@endsection
