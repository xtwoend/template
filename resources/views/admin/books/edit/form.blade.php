@section('formHeader')
{!! Form::text('title', $row->title , ['class' => 'form-control input-title', 'placeholder' => 'Book Title...']) !!}
@endsection

@section('formLeft')

{{ method_field('PUT') }}

<div class="row">
	<div class="form-group col-md-9">
	  	<label>ISBN</label>
	  	{!! Form::text('isbn', $row->isbn , ['class' => 'form-control']) !!}
	</div>
	<div class="form-group col-md-3">
		<label>TOTAL PAGES</label>
		{!! Form::text('total_pages', $row->total_pages , ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<label>LANGUAGE</label>
	{!! Form::select('language', ['indonesia'=> 'Indonesia', 'english'=> 'English'], $row->language, ['class' => 'publisher form-control']) !!}
</div>

<div class="form-group">
	<label>CATEGORY</label>
	{!! Form::select('categories[]', App\Entities\Tag::lists('name', 'name'), $row->tagNames() , ['class' => 'form-control select2 tags', 'multiple' => 'multiple']) !!}
</div>

<div class="form-group">
	<label>PUBLISHER</label>
	{!! Form::select('publisher_id', ['1'=> 'ANDI JOGYA', '2'=> 'LOKOMEDIA'], $row->publisher_id, ['class' => 'select2 form-control']) !!}
</div>

<div class="form-group">
	<label>AUTHOR</label>
	{!! Form::select('user_id', App\Entities\User::lists('name','id'), $row->user_id, ['class' => 'select2 form-control']) !!}
</div>

<div class="row">
	<div class="form-group col-md-6">
	  	<label>PRICE</label>
	  	{!! Form::text('price', $row->price , ['class' => 'form-control']) !!}
	</div>
	<!-- <div class="form-group col-md-5">
	  	<label>BEST PRICE</label>
	  	{!! Form::text('best_price', $row->best_price , ['class' => 'form-control']) !!}
	</div> -->
	<div class="form-group col-md-6">
	  	<label>DISCOUNT</label>
	  	<div class="input-group">
			{!! Form::text('discount', $row->discount, ['class' => 'form-control']) !!}
			<span class="input-group-addon">%</span>
		</div>
	</div>
</div>

<div class="form-group">
	<label>BOOK FILE</label>
	@forelse($row->bookattachments as $book)
	<div class="file-upload">
		{{ Form::hidden('bookfile', $book->id) }}
		{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-placeholder' => $book->name, 'data-field'=>'bookfile']) !!}
		</div>
	</div>
	@empty
	<div class="file-uplod">
		{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-field'=>'bookfile']) !!}
	</div>
	@endforelse
</div>

<div class="form-group">
	<label>SAMPLE BOOK FILE</label>
	@forelse($row->sampleattachments as $sample)
	<div class="file-uplod">
	{{ Form::hidden('booksample', $sample->id) }}
	{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-placeholder' => $sample->name , 'data-field'=>'booksample']) !!}
	</div>
	@empty
	<div class="file-uplod">
		{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-field'=>'booksample']) !!}
	</div>
	@endforelse
</div>

<div class="form-group">
	<label>OPTIONS</label>
	<div class="checkbox i-checks">
	  <label>
	    {!! Form::checkbox('publish', 1, ($row->publish == 1)? true: false) !!}<i></i> Publish this book
	  </label>
	</div>

	<div class="checkbox i-checks">
      <label>
      	{!! Form::checkbox('is_free', 1, ($row->is_free == 1)? true: false)!!}
        <i></i> Is Free
      </label>
    </div>
</div>

@endsection


@section('formRight')

<div class="form-group">
	<label>COVER</label>
	@forelse($row->coverattachments as $cover)
	<div class="file-uplod">
	{{ Form::hidden('cover', $cover->id) }}
	{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-placeholder' => $cover->name, 'data-field'=>'cover']) !!}
	</div>
	@empty
	<div class="file-uplod">
		{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-field'=>'cover']) !!}
	</div>
	@endforelse
</div>


<div class="form-group">
	<label>DESCRIPTION</label>
	{!! Form::textarea('description', $row->description, ['rows' => 12, 'class' => 'form-control markdown']) !!}
</div>
@endsection
