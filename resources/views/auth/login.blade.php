@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <div class="message">
                <div class="message-header">
                    <p>Login</p>
                </div>
                <div class="message-body">
                    <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="" class="label {{ $errors->has('email') ? 'has-text-danger' : '' }}">Email</label>
                            <div class="control has-icons-left">
                                <input type="email" name="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}">
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
                        <div class="field is-grouped is-grouped-right">
                            <button type="submit" class="button is-dark">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    