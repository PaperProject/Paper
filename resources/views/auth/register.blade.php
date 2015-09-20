@extends('layouts.auth')

@section('content')
<h3 class="heading">S'enregistrer</h3>
<hr/>
<div class="text-center">
  <span class="on-hr">Ou</span>
</div>
@foreach($errors->all() as $error)
<p class="alert alert-danger">{!!$error!!}</p>
@endforeach
{!!Form::open(['url'=>'/auth/register','class'=>'form'])!!}
<div class="row">
  <div class="form-group col-sm-6">
    {!! Form::text('first_name', Input::old('first_name'), ['class'=>'form-control inputbox', 'placeholder'=>'Prénom', 'autofocus' => '']) !!}
  </div>
  <div class="form-group col-sm-6">
    {!! Form::text('last_name', Input::old('last_name'), ['class'=>'form-control inputbox', 'placeholder'=>'Nom']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::text('username',Input::old('username'),['class'=>'form-control inputbox', 'placeholder'=>'Nom d\'utilisateur']) !!}
  <span class="help-block">Le nom d'utilisateur n'est pas définitif.</span>
</div>
<div class="form-group">
  {!! Form::text('email',Input::old('email'),['class'=>'form-control inputbox', 'placeholder'=>'Addresse e-mail']) !!}
  <span class="help-block">Une adresse e-mail ne peut être associé qu'à un seul compte.</span>
</div>
<div class="row">
  <div class="form-group col-sm-6">
    {!! Form::password('password',['class'=>'form-control inputbox', 'placeholder'=>'Mot de passe']) !!}
  </div>
  <div class="form-group col-sm-6">
    {!! Form::password('password_confirmation',['class'=>'form-control inputbox', 'placeholder'=>'Confirmation du Mdp']) !!}
  </div>
</div>
<div class="form-group">
  <div class="checkbox">
    <label for="news">
      <input type="checkbox" name="news" id="news" value="true">
      Recevoir les nouveautés et les informations concernant les services de "Project S" par e-mail. (En savoir plus)
    </label>
  </div>
</div>
<div class="text-center">
  {!!Form::submit('C\'est partit !',['class'=>'btn btn-default btn-form'])!!}
</div>
{!!Form::close()!!}
<hr/>
@stop
