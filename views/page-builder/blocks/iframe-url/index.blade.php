<div class="container mx-auto  {{ $class ?? '' }} w-full lg:{{ $block->get('width') }}  ">
    <iframe
        src="{{ $block->get('iframe-url') }}"
        width="100%"
        height="{{ $block->get('height_desktop') }}"
        title="{{ $block->get('description') }}"
    ></iframe>
</div>
