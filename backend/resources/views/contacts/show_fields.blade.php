<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $contact->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $contact->last_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contact->email }}</p>
</div>

<!-- Profile Photo Field -->
<div class="col-sm-12">
    {!! Form::label('profile_photo', 'Profile Photo:') !!}
    <p>{{ $contact->profile_photo }}</p>
</div>

<!-- Favorite Field -->
<div class="col-sm-12">
    {!! Form::label('favorite', 'Favorite:') !!}
    <p>{{ $contact->favorite }}</p>
</div>

