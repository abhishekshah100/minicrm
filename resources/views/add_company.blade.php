<!DOCTYPE html>
<html>
<head>
	<title>Add Company</title>
</head>
<body>
	<h1>@include('message')</h1>
<form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	Name <input type="name" name="name" value="{{ old('name') }}"><br>
	Email <input type="email" name="email" value="{{ old('email') }}"><br>
	Logo <input type="file" name="logo"><br>
	Website <input type="name" name="website" value="{{ old('website') }}"><br>
	<input type="submit" name="submit">
</form>
<a href="{{ route('company.index') }}"><button type="button">Go Back</button></a>
</body>
</html>