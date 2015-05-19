
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label class="col-md-4 control-label">Name</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Surname</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="cognom" value="{{ $user->cognom }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Profile Pic</label>
    <div class="col-md-6">
        <input type="file" name="foto">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Address</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="direccio" value="{{ $user->direccio }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Province</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="provincia" value="{{ $user->provincia }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">City</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="ciutat" value="{{ $user->ciutat }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Phone Number</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="telefon" value="{{ $user->telefon }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">E-Mail Address</label>
    <div class="col-md-6">
        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-6">
        <input type="password" class="form-control" name="password">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Confirm Password</label>
    <div class="col-md-6">
        <input type="password" class="form-control" name="password_confirmation">
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($submit_text) !!}
    </div>
</div>
