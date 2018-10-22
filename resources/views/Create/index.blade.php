@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row mt-5">
		<div class="col-sm-6 offset-sm-3">
			<form method="post" action="">
				@csrf
				<div class="form-group">
					<label>Référence</label>
					<input type="text" name="reference" class="form-control">
				</div>
				<div class="form-group">
					<select class="form-control" name="acheteur">
						<option>Aechteur</option>
						@foreach($achs as $ach)
						<option>{{$ach->nom_ach}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Ajouter</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection