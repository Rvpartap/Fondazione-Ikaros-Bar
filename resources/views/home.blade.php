<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<body>

<script type="text/javascript">
        var username = '{{ Auth::user()->name }}';
        if (username.includes("admin")){
           var homeredir = '/{{ Auth::user()->name }}/home';
        }
        else{
	 homeredir = '/ordini';
        }
	console.log('redirigo a' . homeredir);
	window.location.href = homeredir;
</script>
</body>
</html>
