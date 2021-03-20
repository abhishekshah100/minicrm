<!DOCTYPE html>
<html>
<head>
	<title> Employee</title>
	<style>
	table, td, th {
	  border: 1px solid black;
	}

	table {
	  width: 100%;
	  border-collapse: collapse;
	}
</style>
</head>
<body>
	@include('top_menu')
	<h1>@include('message')</h1>
	<a href="{{ route('employee.create') }}"><button type="button">Add New Employee</button></a>
<table>
	<tr>
		<th>S.N.</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Company Name</th>
		<th>Phone Number</th>
		<th>Action</th>
	</tr>
	@foreach($employees as $employee)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $employee->fname }}</td>
		<td>{{ $employee->lname }}</td>
		<td>{{ $employee->email }}</td>
		<td>{{ $employee->company->name }}</td>
		<td>{{ $employee->phone }}</td>
		<td><a href="{{ route('employee.edit', $employee->id) }}"><button type="button">Edit</button></a><form method="POST" action="{{ route('employee.destroy' , $employee->id) }}">@csrf @method('DELETE') <button type="submit" onclick="return confirm('Are you sure want to delete this detail?');">Delete</button></form></td>
	</tr>
	@endforeach
</table>
{{ $employees->links() }}
</body>
</html>