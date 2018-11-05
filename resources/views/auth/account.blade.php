@extends('layouts.main-page')

@section('content')
    <account-page inline-template>
        <div class="container">
            <div>
                <h3>user type</h3>
                <ul>
                @foreach ($user->roles as $role)
                    <li><b>{{ $role->name }}</b></li>
                @endforeach
                </ul>
            </div>
            <div>
                <h3>Details</h3>
                <ul>
                    <li><b>First name:</b> {{ $user->first_name }}</li>
                    <li><b>Last name:</b> {{ $user->last_name }}</li>
                    <li><b>Email:</b> {{ $user->email }}</li>
                </ul>
            </div>
            <div>
                <h3>Change password</h3>
                <form class="form form_reset-password" method="POST" action="{{ route('password.update') }}" aria-label="{{ __('Change Password') }}">
                    @csrf

                    <div class="form__input-list">
                        @if ($user->password)
                            <input class="form__input {{ $errors->has('old_password') ? ' form__input_error' : '' }}"
                                   name="old_password"
                                   placeholder="{{ __('Old password') }}"
                                   type="password"
                                   required
                            >
                        @endif
                        <input class="form__input {{ $errors->has('password') ? ' form__input_error' : '' }}"
                               name="password"
                               placeholder="{{ __('Password') }}"
                               type="password"
                               required
                        >
                        <input class="form__input" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" type="password" required>
                    </div>

                    @if($errors->has('email') || $errors->has('password') || $errors->has('old_password'))
                        <div class="form__errors-list">
                            @foreach ($errors->all() as $error)
                                <span class="form__errors-message">{{ $error }}</span>
                            @endforeach
                        </div>
                    @endif

                    <div class="form__footer">
                        <div class="form__actions form__actions_main">
                            <button type="submit" class="form__button form__button_submit">{{ __('Change Password') }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </account-page>
@endsection