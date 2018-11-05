@extends('layouts.main-page')

@section('content')
    <div class="container">
        <form class="form form_reset-password" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form__input-list">
                <input class="form__input {{ $errors->has('email') ? 'form__input_error' : '' }}"
                       name="email"
                       placeholder="{{ __('E-Mail Address') }}"
                       type="email"
                       value="{{ $email ?? old('email') }}"
                       required
                       autofocus
                >
                <input class="form__input {{ $errors->has('password') ? ' form__input_error' : '' }}"
                       name="password"
                       placeholder="{{ __('Password') }}"
                       type="password"
                       required
                >
                <input class="form__input" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" type="password" required>
            </div>

            @if($errors->has('email') || $errors->has('password'))
                <div class="form__errors-list">
                    @foreach ($errors->all() as $error)
                        <span class="form__errors-message">{{ $error }}</span>
                    @endforeach
                </div>
            @endif

            <div class="form__footer">
                <div class="form__actions form__actions_main">
                    <button type="submit" class="form__button form__button_submit">{{ __('Reset Password') }}</button>
                </div>
            </div>

        </form>
    </div>
@endsection
