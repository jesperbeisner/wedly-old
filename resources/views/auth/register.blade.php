<x-layout>
    <x-content title="Register" message="Register Page">
        <form method="POST" action="{{ route('register.execute') }}">
            @csrf

            <div class="mb-6">
                <label for="email" class="block mb-2 text-base font-medium text-gray-900">{{ __('words.email') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?= App\Helpers\InputHelper::border($errors->has('email'), old('email') !== null) ?>">
                @if($errors->has('email'))
                    <small class="text-red-500">{{ $errors->first('email') }}</small>
                @endif
            </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 text-base font-medium text-gray-900">{{ __('words.name') }}</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?= App\Helpers\InputHelper::border($errors->has('name'), old('name') !== null) ?>">
                @if($errors->has('name'))
                    <small class="text-red-500">{{ $errors->first('name') }}</small>
                @endif
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 text-base font-medium text-gray-900">{{ __('words.password') }}</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?= App\Helpers\InputHelper::border($errors->has('password'), false) ?>">
                @if($errors->has('password'))
                    <small class="text-red-500">{{ $errors->first('password') }}</small>
                @endif
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                {{ __('words.register') }}
            </button>
        </form>
    </x-content>
</x-layout>
