@extends('layouts.adminlayout')

@section('content')

@if(Session::has('success'))
        
            <div class="">
                <div id="charge-message" class="alert alert-success">
                    <p style="font-style: italic; font-weight: bold; margin-top: 7px;">{{ Session::get('success') }}</p>
                </div>
            </div>
        
    @endif



<center><h3 style="padding: 30px;">Admin List</h3></center>

<div>
	
	<table class="table table-striped table-light">
  <thead>
    <tr>
  
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
  	
    <?php $i =1; ?>
  	@foreach ($admin as $admin)
    @if($admin->id != $i)

  	
    <tr>
    
      <td></td>
      <td></td>
      <td></td>
      <td>{{ $admin->id }}</td>
      <td>{{ $admin->email }}</td>
      <td><a href="{{route('removeadmin', $admin->id)}}">Remove</a></td>
    </tr>
    <?php $i++; ?>
    @endif
    @endforeach

  </tbody>
</table>

					

</div>
  

@endsection