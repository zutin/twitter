@props([
    'route',
    'icon',
    'title' => null,
])

<div>
    <a href="{{ $route }}"
       class="bg-transparent hover:bg-gray-200 hover:bg-opacity-10 space-x-2 rounded-full inline-block p-2">
        <div class="flex items-center space-x-4">
            <div>
                <x-dynamic-component :component="'icons.'. $icon"/>
            </div>
            @if($title)
                <div class="font-bold text-lg pr-2">{{ $title }}</div>
            @endif
        </div>
    </a>
</div>
