@php
    $hx = 'h'. ($type ?? '3');

    if(!empty($title)) {
		if(empty($heading) && !empty($title->get('title'))) {
			$heading = $title->get('title');
		}

		if(!empty($title->get('text_color'))) {
			$text_color = $title->get('text_color');
		}
    }
@endphp

<{{$hx}} @if($id ?? '') id="{{ $id }}" @endif
    class="font-head inline-block align-text-top z-10 @if($show_line ?? false) mt-4 @endif {{ $class ?? '' }} text-{{ $text_color ?? '' }}">
    {!! $heading !!}
</{{$hx}}>

@if(!empty($title) && !empty($title->get('subtitle')))
    @include('components.content', [
	    'content' => $title->get('subtitle'),
    ])
@endif