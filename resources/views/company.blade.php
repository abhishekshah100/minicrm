<!DOCTYPE html>
<html>
<head>
	<title> Company</title>
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
	<a href="{{ route('company.create') }}"><button type="button">Add New Company</button></a>
<table>
	<tr>
		<th>S.N.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Logo</th>
		<th>Website</th>
		<th>Action</th>
	</tr>
	@foreach($companies as $company)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $company->name }}</td>
		<td>{{ $company->email }}</td>
		<td>@if(!empty($company->logo))
			 <img src="/image/logo/{{ $company->logo }}" width="100" height="100">
			@else 
			  <h1>No Image</h1> 
			@endif
		</td>
		<td>{{ $company->website }}</td>
		<td><a href="{{ route('company.edit', $company->id) }}"><button type="button">Edit</button></a><form method="POST" action="{{ route('company.destroy' , $company->id) }}">@csrf @method('DELETE') <button type="submit" onclick="return confirm('Are you sure want to delete this detail?');">Delete</button></form></td>
	</tr>
	@endforeach
</table>
{{ $companies->links() }}
</body>
</html>