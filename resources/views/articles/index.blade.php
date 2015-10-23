@extends ('layouts.master')

@section ('head.title')

My BLog

@stop

@section ('body.content')

<div id="content">
	<div class="container">
		<div class="row">

			@foreach ($articles as $a)
				<div class="col-sm-6 col-sm-offset-3">
					<h2>{{ $a->title }}</h2>
					<p>{{ $a->content }}</p>
					<p><a href="{{ route('article.show', $a->id) }}">read more...</a></p>
				</div>
			@endforeach				

		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				{!! $articles->render() !!}
			</div>
		</div>
	</div>
</div> {{-- #content --}}

@stop
