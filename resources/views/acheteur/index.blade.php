@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<form method="post" action="/acheteur">
				@csrf
				<label>Acheteur</label>
				<input type="text" name="ach" class="form-control" placeholder="Acheteur">
				<button class="btn btn-primary form-control mt-2">Ajouter</button>
			</form>
		</div>
	</div>
	
		
		
	
</div>

@endsection