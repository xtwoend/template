@section('formHeader')
{!! Form::text('title', null , ['class' => 'form-control input-title', 'placeholder' => 'Book Title...']) !!}
@endsection

@section('formLeft')

<div class="row">
	<div class="form-group col-md-9">
	  	<label>ISBN</label>
	  	{!! Form::text('isbn', null , ['class' => 'form-control']) !!}
	</div>
	<div class="form-group col-md-3">
		<label>TOTAL PAGES</label>
		{!! Form::text('total_pages', null , ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<label>LANGUAGE</label>
	{!! Form::select('language', ['indonesia'=> 'Indonesia', 'english'=> 'English'], null, ['class' => 'publisher form-control']) !!}
</div>

<div class="form-group">
	<label>CATEGORY</label>
	{!! Form::select('categories[]', App\Entities\Tag::lists('name', 'name'), null, ['class' => 'form-control select2 tags', 'multiple' => 'multiple']) !!}
</div>

<div class="form-group">
	<label>PUBLISHER</label>
	{!! Form::select('publisher_id', ['1'=> 'ANDI JOGYA', '2'=> 'LOKOMEDIA'], null, ['class' => 'select2 form-control']) !!}
</div>

<div class="form-group">
	<label>AUTHOR</label>
	{!! Form::select('user_id', App\Entities\User::lists('name','id'), null, ['class' => 'select2 form-control']) !!}
</div>

<div class="row">
	<div class="form-group col-md-6">
	  	<label>PRICE</label>
	  	{!! Form::text('price', null , ['class' => 'form-control']) !!}
	</div>
	<!-- <div class="form-group col-md-5">
	  	<label>BEST PRICE</label>
	  	{!! Form::text('best_price', 0 , ['class' => 'form-control']) !!}
	</div> -->
	<div class="form-group col-md-6">
	  	<label>DISCOUNT</label>
	  	<div class="input-group">
			{!! Form::text('discount', 0, ['class' => 'form-control']) !!}
			<span class="input-group-addon">%</span>
		</div>
	</div>
</div>


<div class="form-group">
	<label>BOOK FILE</label>
	<div class="file-uplod">
		{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-field'=>'bookfile']) !!}
	</div>
</div>

<div class="form-group">
	<label>SAMPLE BOOK FILE</label>
	<div class="file-uplod">
	{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload'), 'data-field'=>'booksample']) !!}
	</div>
</div>

<div class="form-group">
	<label>OPTIONS</label>
	<div class="checkbox i-checks">
	  <label>
	    {!! Form::checkbox('publish', 1) !!}<i></i> Publish this book
	  </label>
	</div>

	<div class="checkbox i-checks">
      <label>
      	{!! Form::checkbox('is_free', 1) !!}
        <i></i> Is Free
      </label>
    </div>
</div>

@endsection


@section('formRight')

<div class="form-group">
	<label>COVER</label>
	<div class="file-uplod">
	{!! Form::file(null, ['class' => 'filestyle fileupload', 'data-iconName' => 'fa fa-folder-open', 'data-classInput' => 'form-control inline v-middle input-s', 'data-buttonText' => '', 'data-url'=> route('admin.media.upload') , 'data-field'=>'cover']) !!}
	</div>
</div>

<div class="form-group">
	<label>DESCRIPTION</label>
	{!! Form::textarea('description', null, ['rows' => 12, 'class' => 'form-control markdown']) !!}
</div>
@endsection
