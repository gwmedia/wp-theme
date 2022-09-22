<div class="flex mx-auto mt-12 text-xs {{ $classes ?? 'w-4/5 lg:w-3/5' }} {{ $text_color ?? 'text-purple' }} ">
	@include('components.link.opening', [
		'href' => get_home_url(),
		'alt' => 'Homepagina',
		'class' => 'self-center mr-1',
	])
		<i class="fa-solid fa-house mr-4"></i>
	@include('components.link.closing')
	
    <div>
        {!! yoast_breadcrumb() !!}
    </div>
</div>