@section('search')
<div class="col-md-8 offset-md-2">
	<form action="">
		<div class="input-group">
			<input 
				type="text" 
				class="form-control form-control-lg" 
				placeholder="Pesquisar" 
				name="key" 
				id="key"
				value="{{ ($search !== '/') ? $search : false }}"
				/>
			<div class="input-group-append">
				<button type="submit" class="btn btn-lg btn-default">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</div>
	</form>
</div>
@show