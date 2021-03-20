<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<h1>@include('message')</h1>
<form action="{{ route('employee.store') }}" method="POST">
	@csrf
	First Name <input type="name" name="fname" value="{{ old('fname') }}"><br>
	Last Name <input type="name" name="lname" value="{{ old('lname') }}"><br>
	Email <input type="email" name="email" value="{{ old('email') }}"><br>
	Phone <input type="number" name="phone" value="{{ old('phone') }}"><br>
	Company Name <select name="company_id">
		<option value="">Select Company</option>
		@foreach($companies as $company)
			<option value="{{ $company->id }}" {{ $company->id==old('company_id')?'selected':''}}>{{ $company->name }}</option>
		@endforeach
	</select><br>
	<input type="submit" name="submit">
</form>
<a href="{{ route('employee.index') }}"><button type="button">Go Back</button></a>
</body>
</html>