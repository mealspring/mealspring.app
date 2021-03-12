@extends('layouts.app')

@section('content')

    <form method="POST" class="container p-3" action="{{ route('register') }}">
        @csrf

        <div class="field">
            <label for="name" class="label">{{ __('Name') }}</label>

            <div class="control has-icons-left">
                <input id="name" 
                    type="text" 
                    placeholder="Username" 
                    class="input is-primary @error('name') input is-danger @enderror" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required autocomplete="name" 
                    autofocus>
                    <span class="icon is-small is-left" >
                        <i class="fa fa-user fa-lg"></i>
                    </span>

                @error('name')
                    <p class="is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

            <div class="control has-icons-left">
                <input class = "input is-primary @error('email') input is-danger @enderror"
                    id="email" 
                    type="email" 
                    placeholder="Email input" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email">
                    <span class="icon is-small is-left" >
                        <i class="fa fa-envelope"></i>
                    </span>

                @error('email')
                    <p class="is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">{{ __('Password') }}</label>

            <div class="control has-icons-left">
                <input  class="input is-primary @error('password') input is-danger @enderror"
                    id="password" 
                    type="password" 
                    placeholder="Password" 
                    name="password" 
                    required autocomplete="current-password">
                    <span class="icon is-small is-left" >
                        <i class="fa fa-lock fa-lg"></i>
                    </span>

                @error('password')
                    <p class="is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

            <div class="control has-icons-left">
                <input  class="input is-primary @error('password') input is-danger @enderror"
                    id="password-confirm" 
                    type="password" 
                    placeholder="Confirm Password" 
                    class="form-control" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password">
                <span class="icon is-small is-left" >
                    <i class="fa fa-lock fa-lg"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
@endsection
