@extends ('layouts.master')

@section ('head.title')

Edit an article

@stop

@section ('body.content')

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Edit an article</h2>
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

				{!! Form::model($article, [
						'route' => ['article.update',$article->id],
						'method' => 'PUT',
						'class' => 'form-horizontal'
					]) 
				!!}

				@include('articles._form',['button_name' => 'Update'])

				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div> {{-- #content --}}

@stop
