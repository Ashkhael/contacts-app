<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Profile Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_photo', 'Profile Photo:') !!}
    {!! Form::text('profile_photo', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Favorite Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('favorite', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('favorite', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('favorite', 'Favorite', ['class' => 'form-check-label']) !!}
    </div>
</div>