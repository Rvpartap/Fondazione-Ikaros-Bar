<tr>
	<td class="header">
		<a href="http://ikarosbar.artglobaltech.com/" style="display: inline-block;">
			@if (trim($slot) === 'Ikaros')
				<img src="https://www.fondazioneikaros.org/wp-content/themes/ikaros/img/icons/favicon.png" class="logo" draggable="false" alt="Fondazione Ikaros Logo">
			@else
				{{ $slot }}
			@endif
		</a>
	</td>
</tr>
