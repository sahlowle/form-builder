@extends('layouts.app')

@prepend('scripts')
	<script type="text/javascript">
		window.FormBuilder = {
			csrfToken: '{{ csrf_token() }}',
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" defer></script>
	<script src="{{ asset('formbuilder/js/jquery-ui.min.js') }}" defer></script>
	<script src="{{ asset('formbuilder/js/sweetalert.min.js') }}" defer></script>
	<script src="{{ asset('formbuilder/js/jquery-formbuilder/form-builder.min.js') }}" defer></script>
	<script src="{{ asset('formbuilder/js/jquery-formbuilder/form-render.min.js') }}" defer></script>
	<script src="{{ asset('formbuilder/js/parsleyjs/parsley.min.js') }}" defer></script>
	<script src="{{ asset('formbuilder/js/clipboard/clipboard.min.js') }}?b=ck24" defer></script>
	<script src="{{ asset('formbuilder/js/moment.js') }}"></script>
	<script src="{{ asset('formbuilder/js/footable/js/footable.min.js') }}" defer></script>
	<script src="{{ asset('formbuilder/js/script.js') }}{{ App\Helper::bustCache() }}" defer></script>
@endprepend

@prepend('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('formbuilder/js/footable/css/footable.standalone.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('formbuilder/css/styles.css') }}{{ App\Helper::bustCache() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endprepend
