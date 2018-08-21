@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="container">

                    <div class="panel-body">
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s2">
                            </div>
                            <div class="col-s6">

                            </div>
                            <center>
                                <div class="col s6">
                                    <center>
                                        <h5 class="indigo-text">Entre com seu email e senha</h5>
                                    </center>
                                    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                                        <form class="col s12" action="{{ route('login') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class='row'>
                                                <div class='col s12'>
                                                </div>

                                            </div> 

                                            <div class='row'>
                                                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input class='validate' type='email' name='email' id='email' value="{{ old('email') }}" />
                                                    <label for='email'>Entre com seu e-mail:</label>
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class='row'>
                                                <div class= "input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input class='validate' type='password' name='password' id='password' required />
                                                    <label for='password'>Entre com sua Senha</label>
                                                    @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                            </div>

                                            <br />
                                            <center>
                                                <div class='row'>
                                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                                                </div>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </center>
                            <div class="col s2">
                            </div>
                        </div>
                    </div>
                    <!-- <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                         {{ csrf_field() }}
 
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <label for="email" class="col-md-4 control-label">E-Mail Address</label>
 
                             <div class="col s6">
                                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
 
                                 @if ($errors->has('email'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         </div>
 
                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <label for="password" class="col-md-4 control-label">Password</label>
 
                             <div class="col s6">
                                 <input id="password" type="password" class="form-control" name="password" required>
 
                                 @if ($errors->has('password'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         </div>
 
                         <div class="form-group">
                             <div class="col s6">    
                                 <div class="checkbox">
                                     <label>
                                         <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                     </label>
                                 </div>
                             </div>
                         </div>
 
                         <div class="form-group">
                             <div class="col s6">
                                 <button type="submit" class="btn btn-primary">
                                     Login
                                 </button>
 
                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                     Forgot Your Password?
                                 </a>
                             </div>
                         </div>
                     </form>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
