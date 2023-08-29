<x-layout>
    <x-content title="Register" message="Register Page">
        <form method="POST" action="{{ route('register.execute') }}">
            @csrf

            <div>
                <label for="email">{{ __('words.email') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <small>{{ $errors->first('email') }}</small>
                @endif
            </div>

            <div>
                <label for="name">{{ __('words.name') }}</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                    <small>{{ $errors->first('name') }}</small>
                @endif
            </div>

            <div>
                <label for="password">{{ __('words.password') }}</label>
                <input type="password" id="password" name="password">
                @if($errors->has('password'))
                    <small>{{ $errors->first('password') }}</small>
                @endif
            </div>

            <button type="submit">
                {{ __('words.register') }}
            </button>
        </form>
    </x-content>
</x-layout>
