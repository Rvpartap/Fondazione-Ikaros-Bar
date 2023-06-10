@component('mail::layout')

	{{-- Header --}}
	
	@slot('header')
		@component('mail::header', ['url' => config('app.url')])
			
			<center><img src="https://www.fondazioneikaros.org/wp-content/themes/ikaros/img/icons/favicon.png" width="50px" alt="Ikaros Logo" /></center>		
			
			Fondazione Ikaros Bar
			
			<!-- {{ config('app.name') }} -->

		@endcomponent
	@endslot

	{{-- Body --}}
	
	{{ $slot }}

	{{-- Subcopy --}}
	
	@isset($subcopy)
		@slot('subcopy')
			@component('mail::subcopy')

				{{ $subcopy }}
			
			@endcomponent
		@endslot
	@endisset

	{{-- Footer --}}
	
	@slot('footer')
		@component('mail::footer')
			
			&copy; 2022 - {{ date('Y') }} Fondazione Ikaros Bar. @lang('All rights reserved.')
			
			<!-- {{ config('app.name') }} -->
		
		@endcomponent
	@endslot
@endcomponent
