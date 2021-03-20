<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>
	<h1>@include('message')</h1>
<form action="{{ route('employee.update', $employee->id)}}" method="POST">
	@csrf
	@method('PUT')
	First Name <input type="name" name="fname" value="{{ $employee->fname }}"><br>
	Last Name <input type="name" name="lname" value="{{ $employee->lname }}"><br>
	Email <input type="email" name="email" value="{{ $employee->email }}"><br>
	Phone <input type="number" name="phone" value="{{ $employee->phone }}"><br>
	Company Name <select name="company_id">
		<option value="">Select Company</option>
		@foreach($companies as $company)
			<option value="{{ $company->id }}" {{ $company->id==$employee->company_id?'selected':''}}>{{ $company->name }}</option>
		@endforeach
	</select><br>
	<input type="submit" name="update">
</form>
<a href="{{ route('employee.index') }}"><button type="button">Go Back</button></a>
</body>
</html>