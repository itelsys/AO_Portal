@extends('layouts.master')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
	<div class="" style="height: 200px;">
		<div class="row">
			dfghfgdf
		</div>
	</div>
</div>
@if(Auth::check() && Auth::user()->role == 'admin')
<div class="container">
	<a href="/acheteur">Ajouter Acheteur</a>
	<a href="/Create">Ajouter appel offre</a>
</div>
@endif
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9" >
			<div style="border:1px solid #b5bfc9;padding:15px ;border-radius: 4px;">
				<div class="row">
					@foreach($ao as $o)
					<div class="col-sm-10">
						
						<h4>{{$o->Objet}}</h4>
						<p>{{$o->Acheteur}}</p>
						<table class="table" style="table-layout: fixed;">
							<tbody>
								<tr>
									<td style="word-wrap: break-word"><strong>Reference :</strong> {{$o->Reference}}</td>
									<td style="word-wrap: break-word"><strong>T.annonce :</strong> {{$o->type_annonce}}</td>
									<td style="word-wrap: break-word"><strong>caution :</strong> {{$o->caution_provisoire}}</td>
									<td style="word-wrap: break-word"><strong>lieu :</strong> {{$o->lieu_execution}}</td>
									<td style="word-wrap: break-word">{{$o->contact}}</td>
								</tr>
							</tbody>
						</table>
						
					</div>
					<div class="col-sm-2" style="margin: auto;">
						@if(Auth::check() && Auth::user()->role == 'admin')
						<div class="text-center">
							<a href="">Modifier</a>
							<a href="">Supprimer</a>
						</div>
						@elseif(Auth::check())
						<div class="text-center">
							<form method="get" action="/download" class="mb-2">

								<input name="path" value="{{$o->DCE}}" hidden>
								<button class="btn btn-primary" type="submit"><i  class="glyphicon glyphicon-download-alt"></i></button>
							</form>
							
							<form>
								<input type="" name="IdAO" value="{{$o->id_ao}}" hidden>
								<input type="" name="UserId" value="{{Auth::user()->id }}" hidden>
								@if(Auth::user()->id = $uid)
								<!-- <input type="checkbox" class="form-check-input" id="myCheckbox" checked="true"> -->
								<span class="glyphicon glyphicon-check" onclick="checkBox(this)" style="font-size:40px;"></span>
								@else
								<span class="glyphicon glyphicon-unchecked" onclick="checkBox(this)" style="font-size:40px;"></span>
								@endif
							</form>
						</div>
						
						
						
						
						@endif
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div style="border:1px solid #b5bfc9; border-radius: 4px;">
				<div style="background-color: #007BFF;height: 40px;">
					<h6 class="text-center">Recherche</h6>
				</div>
				<div style="padding: 15px;background-color: #bfc1bd">
					<form>
						<div class="form-group row">
							<div class="col-sm-8 offset-sm-2">
								<label for="exampleInputEmail1">Référence</label>
								<input type="text" name="" class="form-control" placeholder="Référence">
							</div>
							<div class="col-sm-8 offset-sm-2">
								<label for="exampleInputEmail1">Objet</label>
								<input type="text" name="" class="form-control" placeholder="Objet">
							</div>
							<div class="col-sm-8 offset-sm-2">
								<label for="exampleInputEmail1">Achteur</label>
								<input type="text" name="" class="form-control" placeholder="Achteur">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6 offset-sm-2">
								<button class="btn btn-primary">Chercher</button>
							</div>
						</div>	
					</form>
				</div>
				
				<div style="background-color: #007BFF;height: 40px;">
					<h6 class="text-center">Recherche</h6>
				</div>
				<div style="padding: 15px;background-color: #bfc1bd">
				<form>
					<div class="form-group row">
						<div class="col-sm-8 offset-sm-2">
							<label>champ</label>
							<select class="form-control">
								<optgroup>option</optgroup>
							</select>
						</div>
						<div class="col-sm-8 offset-sm-2">
							<label>champ</label>
							<select class="form-control">
								<optgroup>option</optgroup>
							</select>
						</div>
						<div class="col-sm-8 offset-sm-2">
							<label>date</label>
							<input type="date" name="" class="form-control">
						</div>
						<div class="col-sm-8 mt-3 offset-sm-2">
							<button class="btn btn-primary">Chercher</button>
						</div>
					</div>
				</form>
				</div>
			</div>
			
		</div>
	</div>
	
</div>
@endsection
