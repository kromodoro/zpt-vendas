@if($errors->any())

<div class="alert alert-success alert-dismissible fade show text-white" role="alert">

	@foreach($errors->all() as $error)

		<p>{{ $error }}</p>

	@endforeach

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

		<span aria-hidden="true">&times;</span>

	</button>
	
</div>

@endif

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show text-white" role="alert">

	<p>{{ session('success') }}</p>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

		<span aria-hidden="true">&times;</span>

	</button>
	
</div>

@endif

@if(session('error'))

<div class="alert alert-danger alert-dismissible fade show text-white" role="alert">

	<p>{{ session('error') }}</p>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

		<span aria-hidden="true">&times;</span>

	</button>

</div>

@endif