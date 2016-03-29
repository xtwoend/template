<section class="panel panel-default no-border no-box-shadow">
    <header class="panel-heading text-right bg-light">
        <ul class="nav nav-tabs pull-left">
            <li class="active">
                <a href="#quick" data-toggle="tab">QUICK EDIT</a>
            </li>
            <li>
                <a href="#cover" data-toggle="tab">BOOK COVER</a>
            </li>
        </ul>
        <span class="hidden-sm">&nbsp;</span>
    </header>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade active in" id="quick">

    			{!! Form::open([
    				'route' => ['admin.book.update', $row->id],
    				'class' => 'form-horizontal',
                    'id'=> 'post-quick-update'])
    			!!}

				{{ method_field('PUT') }}

				{!! Form::hidden('quick_edit', true) !!}

                <div class="form-group">
                  	<label class="col-lg-3 control-label">TITLE</label>
                  	<div class="col-lg-9">
                  	{!! Form::text('title', $row->title, ['class' => 'form-control input-sm']) !!}
                  	</div>
                </div>

                <div class="form-group">
                  	<label class="col-lg-3 control-label">ISBN</label>
                  	<div class="col-lg-9">
                  	{!! Form::text('isbn', $row->isbn, ['class' => 'form-control input-sm']) !!}
                  	</div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">CATEGORY</label>
                    <div class="col-lg-9">
                    {!! Form::select('categories[]', App\Entities\Tag::lists('name', 'name'), $row->tagNames() , ['class' => 'form-control tags input-sm', 'multiple' => 'multiple']) !!}
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>

                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <div class="checkbox i-checks">
                            <label>
                            {!! Form::checkbox('publish', 1, ($row->publish == 1)? true :false) !!}<i></i> Publish this book
                            </label>
                        </div>
                    </div>
                </div>

                <div class="line line-dashed b-b line-lg pull-in"></div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">PRICE</label>
                    <div class="col-lg-9">
                        {!! Form::text('price', $row->price, ['class' => 'form-control input-sm']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">DISCOUNT</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            {!! Form::text('discount', $row->discount, ['class' => 'form-control input-sm']) !!}
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label class="col-lg-3 control-label">BESTPRICE</label>
                    <div class="col-lg-9">
                        {!! Form::text('best_price', $row->best_price, ['class' => 'form-control input-sm']) !!}
                    </div>
                </div> -->

                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <div class="checkbox i-checks">
                            <label>
                                {!! Form::checkbox('is_free', 1, ($row->is_free == 1)? true :false) !!}
                            <i></i> Is Free
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <button type="submit" class="btn btn-primary" data-action="update">UPDATE</button>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>

            <div class="tab-pane" id="cover">
                <div class="row row-sm">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="item">
                            <div class="pos-rlt">
                                @foreach($row->coverattachments as $cover)
                                    <img src="{{ route('image', ['nullx320', $cover->filename]) }}" class="r r-2x img-full">
                                @endforeach
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
