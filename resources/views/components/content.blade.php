@props(['title', 'message'])
<x-slot:title>{{ $title }}</x-slot:title>

<x-heading message="{{ $message }}"/>

<div>
    {{ $slot }}
</div>
