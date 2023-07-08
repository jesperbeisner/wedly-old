@props(['title', 'message'])
<x-slot:title>{{ $title }}</x-slot:title>

<x-heading message="{{ $message }}"/>

<div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    {{ $slot }}
</div>
