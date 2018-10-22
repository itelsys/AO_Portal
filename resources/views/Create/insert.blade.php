@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<form method="post" action="">
				<input type="text" name="IdAo" value="{{$id->id}}">
				<div class="form-group">
					<label>Objet</label>
					<input type="text" name="obj" class="form-control">
				</div>
				<div class="form-group">
					<label>Date</label>
					<input type="text" name="date" class="form-control">
				</div>
				<div class="form-group">
					<label>caution provisoire</label>
					<input type="text" name="cp" class="form-control">
				</div>
				<div class="form-group">
					<label>version</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label>type annonce</label>
					<input type="text" name="ta" class="form-control">
				</div>
				<div class="form-group">
					 <label>lieu execution</label>
					 <input type="text" name="le" class="form-control">
				</div>
				<div class="form-group">
					 <label>contact</label>
					 <input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					 <label>identifiant</label>
					 <input type="text" name="idf" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Inserer</button>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection