@extends('layouts.auth')

@section('content')
<h3 class="heading">S'enregistrer</h3>
<div class="row marg-bot marg-top">
  <div class="col-sm-12">
    <a class="btn btn-block btn-social btn-google btn-form-height">
      <i class="fa fa-google"></i>
      Sign in with Google+
    </a>
  </div>
</div>
<div class="row marg-bot">
  <div class="col-sm-12">
    <a class="btn btn-block btn-social btn-facebook btn-form-height" href="{{ url('auth/log/facebook') }}">
      <i class="fa fa-facebook"></i>
      Sign in with Facebook
    </a>
  </div>
</div>
<hr class="marg-top"/>
<div class="text-center">
  <span class="on-hr">ou</span>
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
  {!! Form::label('birth_date', 'Date de naissance') !!}
  <div class="row">
    <div class="form-group col-sm-3">
      <div class="select-box">
        {!! Form::selectRange('birth_day', 1, 31, 1, ['class'=>'input-nostyle']) !!}
        <span class="select-separator"></span>
      </div>
    </div>
    <div class="form-group col-sm-5 form-select-center">
      <div class="select-box">
        <select class="input-nostyle" name="birth_month">
          @foreach ($months as $key => $month)
          <option value="{{ $key }}">{{ $month }}</option>
          @endforeach
        </select>
        <span class="select-separator"></span>
      </div>
    </div>
    <div class="form-group col-sm-4">
      <div class="select-box">
        {!! Form::selectYear('birth_year', date("Y")-10, date("Y")-100, 1996, ['class'=>'input-nostyle']) !!}
        <span class="select-separator"></span>
      </div>
    </div>
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
      {!! Form::checkbox('news', null, true) !!}
      Recevoir les nouveautés et les informations concernant les services de "Project S" par e-mail. (En savoir plus)
    </label>
  </div>
</div>
<div class="text-center">
  {!!Form::submit('C\'est parti !',['class'=>'btn btn-default btn-form'])!!}
</div>
{!!Form::close()!!}
<hr/>
@stop
