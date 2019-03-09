@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('login') }}">
     @csrf
    <div class="form-group row">
            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="email" required autofocus>
                        </div>
            </div>
                    <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">lock</i>
            </span>
            <div class="form-line">
               <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 p-t-5">
            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
           <label for="rememberme">Remember Me</label>
        </div>
        <div class="col-xs-4">
            <button class="btn btn-block bg-pink waves-effect" type="submit">{{ __('Login') }}</button>
        </div>
    </div>
</form>                   
@endsection
