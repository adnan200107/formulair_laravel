@extends('template')

@section('contenu')
 <br>
 <div class="col-sm-offset-3 col-sm-6">
 <div class="panel panel-info">
 <div class="panel-heading">Contactez-moi</div>
 <div class="panel-body">
 {!! Form::open(['url'=>'contact']) !!}
 <div class="form-group {!! $errors->has('nom') ? 'has-error' : ''
!!}">
 {!! Form::text('nom', null, ['class'=>'form-control',
'placeholder'=>'Votre nom']) !!}
 {!! $errors->first('nom', '<small class="helpblock">:message</small>') !!}
 </div>

 
 <div class="form-group {!! $errors->has('email') ? 'has-error' :
'' !!}">
 {!! Form::email('email', null, ['class'=>'form-control',
'placeholder'=>'Votre email']) !!}
 {!! $errors->first('email', '<small class="helpblock">:message</small>') !!}
 </div>
 <div class="form-group {!! $errors->has('texte') ? 'has-error' :
'' !!}">
 {!! Form::textarea ('texte', null, ['class'=>'form-control',
'placeholder'=>'Votre message']) !!}
 {!! $errors->first('texte', '<small class="helpblock">:message</small>') !!}
 </div>
 {!! Form::submit('Envoyer !', ['class'=>'btn btn-info pullright']) !!}
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 @endsection