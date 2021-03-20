<!DOCTYPE html>
<html>
<head>
	<title>Edit Company</title>
</head>
<body>
	<h1>@include('message')</h1>
<form action="{{ route('company.update', $companies->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	Name <input type="name" name="name" value="{{ $companies->name }}"><br>
	Email <input type="email" name="email" value="{{ $companies->email }}"><br>
	Logo <input type="file" name="logo" >
	@if(!empty($companies->logo))
			 <img src="/image/logo/{{ $companies->logo }}" width="100" height="100">
			@endif
	<br>
	Website <input type="name" name="website" value="{{ $companies->website }}"><br>
	<input type="submit" name="update" value="Update">
</form>
<a href="{{ route('company.index') }}"><button type="button">Go Back</button></a>
</body>
</html>