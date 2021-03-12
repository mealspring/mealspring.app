@extends('layouts.app')

@section('content')

    <form method="POST" class="container p-2" action="{{ route('login') }}">
        @csrf
        <div class="field">
            <label class="label" for="email">{{ __('E-Mail Address') }}</label>
            <div class="control has-icons-left">
                
              <input class = "input is-primary @error('email') input is-danger @enderror" 
                type="email" 
                placeholder="Email input" 
                name="email" 
                value="{{ old('email') }}" 
                required autocomplete="email">
                <span class="icon is-small is-left" >
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
            @error('email')
                <p class="is-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="field">
            <label class="label" for="password">{{ __('Password') }}</label>

            <div class="control has-icons-left">
                <input id="password" 
                    type="password" 
                    placeholder="Password" 
                    class="input is-primary @error('password') input is-danger @enderror" 
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
            <div class="control">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <div class="field">
                    <br>
                    <div class="control">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>    
                @endif
            </div>
        </div>

    </form>
@endsection
