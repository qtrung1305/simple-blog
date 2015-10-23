<div class="form-group">
	{!! Form::label('title', 'Title', ['class' => 'control-lable']) !!}
	{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'input title of article', 'required' => 'true']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Content', ['class' => 'control-lable']) !!}
	{!! Form::text('content', null, ['id' => 'content', 'class' => 'form-control', 'placeholder' => 'input content of article', 'required' => 'true']) !!}
</div>

<div class="form-group">
	{!! Form::submit($button_name, ['class' => 'btn btn-primary']) !!}						
</div>