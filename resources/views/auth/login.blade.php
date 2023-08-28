<x-layout>
    <x-content title="Login" message="Login Page">
        <form method="POST" action="{{ route('login.execute') }}">
            @csrf

            <div>
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" value="{{ App::environment('local') ? 'admin@example.com' : '' }}">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="{{ App::environment('local') ? 'password' : '' }}">
            </div>

            <button type="submit">Login</button>
        </form>
    </x-content>
</x-layout>
