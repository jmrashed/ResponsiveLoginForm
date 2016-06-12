 
<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title<span class="star">*</span></label>
    <div class="col-sm-6">
        <div class="donate"> 
                <label class="blue">
                    <input type="radio" name="title" value="Mr" class="radio_button pointer" >
                    <span class="white">Mr</span>
                </label> 
                <label class="blue">
                    <input type="radio" name="title" value="Mrs" class="radio_button pointer" >
                    <span class="white">Mrs</span>
                </label> 
                <label class="blue">
                    <input type="radio" name="title" value="Ms" class="radio_button pointer" >
                    <span class="white">Ms</span>
                </label> 
                <label class="blue">
                    <input type="radio" name="title" value="Miss" class="radio_button pointer" >
                    <span class="white">Miss</span>
                </label> 
        </div>
<div class="form-group {{ $errors->has("first_name") ? "has-error":"" }}">
    <label for="first_name" class="col-sm-2 control-label">First Name<span class="star">*</span></label>
    <div class="col-sm-6">
        <input type="text" name="first_name" class="form-control" id="first_name"
               value="{{isset($adminUser) ? $adminUser->first_name : old("first_name") }}"
               placeholder="">
         
    </div>
</div>
<div class="form-group {{ $errors->has("middle_name") ? "has-error":"" }}">
    <label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
    <div class="col-sm-6">
        <input type="text" name="middle_name" class="form-control" id="middle_name"
               value="{{isset($adminUser) ? $adminUser->middle_name : old("middle_name") }}"
               placeholder=""> 
    </div>
</div>
<div class="form-group">
    <label for="surname" class="col-sm-2 control-label">Surname<span class="star">*</span></label>
    <div class="col-sm-6">
        <input type="text" name="surname" class="form-control" id="surname" value=" "
               placeholder=""> 
    </div>
</div>
<

    <div class="form-group {{ $errors->has("password1") ? "has-error":"" }}">
        <label for="password1" class="col-sm-2 control-label">Password 1
            <span class="star">*</span>
        </label>
        <div class="col-sm-6">
            <input type="password" name="password1" class="form-control" id="password1"
                   placeholder="">
            @if($errors->has('password1'))
                <span class="help-block">
                <strong>{{ $errors->first('password1') }}</strong>
            </span>
            @endif
        </div>
    </div>
    
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
        <input type="submit" value="Sign Up" class="btn btn-success"> 
    </div>
</div>