@extends('layouts.adminlayout')

@section('content')



<center><h3 style="padding: 2px;">User List</h3></center>
<hr>

<div>
	
	<table class="table table-striped table-light">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  	
  	@foreach ($registeruser as $registeruserr)
  	
    <tr>
    
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>{{ $registeruserr->id }}</td>
      <td>{{ $registeruserr->name }}</td>
      <td>{{ $registeruserr->email }}</td>
    </tr>
    @endforeach

  </tbody>
</table>

					<div style="margin-left: 40%;">
      <ul class="pagination">
        {{ $registeruser->links() }}
      </ul>
    </div>
    </div>

</div>
  

@endsection