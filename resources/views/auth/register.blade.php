@extends('layouts.app')

@section('content')



<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <div class="message">
                <div class="message-header">
                    <p>Registro</p>
                </div>
                <div class="message-body">
                    <form action="{{route('register')}}" method="post">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="" class="label {{ $errors->has('name') ? 'has-text-danger' : '' }}">Nombre</label>
                            <div class="control has-icons-left">
                                <input type="text" name="name" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" value="{{old('name')}}">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            @if($errors->has('name'))
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="" class="label {{ $errors->has('email') ? 'has-text-danger' : '' }}">Email</label>
                            <div class="control has-icons-left">
                                <input type="email" name="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" value="{{old('email')}}">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            @if($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="" class="label {{ $errors->has('password') ? 'has-text-danger' : '' }}">Password</label>
                            <div class="control has-icons-left">
                                <input type="password" name="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            @if($errors->has('password'))
                            <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="" class="label">Confirmar password</label>
                            <div class="control has-icons-left">
                                <input type="password" name="password_confirmation" class="input">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field is-grouped is-grouped-right">
                            <button type="submit" class="button is-dark">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
    {{--
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        --}}
    </div>
    @endsection
    