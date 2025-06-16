@props([
    'color' => 'blue-500',
    'size' => '10',
    'delay' => '0',
    'duration' => '15',
    'type' => 'circle'
])

<div {{ $attributes->merge([
    'class' => "absolute opacity-10 animate-float",
    'style' => "animation-delay: {$delay}s; animation-duration: {$duration}s;"
]) }}>
    @if($type === 'circle')
        <div class="rounded-full bg-{{ $color }} h-{{ $size }} w-{{ $size }}"></div>
    @elseif($type === 'triangle')
        <div class="w-0 h-0 border-l-{{ $size }} border-l-transparent border-b-[calc(1.732*{{ $size }}px)] border-b-{{ $color }} border-r-{{ $size }} border-r-transparent"></div>
    @elseif($type === 'square')
        <div class="bg-{{ $color }} h-{{ $size }} w-{{ $size }} rotate-45"></div>
    @endif
</div>
