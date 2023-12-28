<!DOCTYPE html>
<html lang="en">
	@include('theme.auth.head')
	<body>
		{{$slot}}
		@include('theme.auth.js')
	</body>
</html>