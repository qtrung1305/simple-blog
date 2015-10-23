@extends ('layouts.master')

@section ('head.title')

Add new article

@stop

@section ('body.content')

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Add new article</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">	
			
				{{-- Them phan thong bao loi khi vi pham rules trong Form Request --}}
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

{{-- 				<form action="{{ route('article.store') }}" method = "POST" class="form-horizontal">

					{{-- Tao ra token de thong bao cho Model biet day la du lieu truyen vao hop le
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label for="title" class="control-label">Title</label>
						<input class="form-control" type="text" name="title" id="title" required placeholder="input title of article">
					</div>
					<div class="form-group">
						<label for="content" class="control-label">Content</label>
						<input class="form-control" type="text" name="content" id="content" required placeholder="input content of article">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Add new</button>
					</div>
				</form> {{-- #form --}}
				
				{{-- Phan Form bi dong o tren co the thay the bang ben duoi the cu phap cua Laravel --}}

				{!! Form::open([
						'route' => ['article.store'],
						'method' => 'POST',
						'class' => 'form-horizontal'
					]) 
				!!}

				@include('articles._form',['button_name' => 'Create'])

				{!! Form::close() !!

			</div>
		</div>
	</div>
</div> {{-- #content --}}

@stop
