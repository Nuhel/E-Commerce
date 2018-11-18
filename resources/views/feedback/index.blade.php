
@extends('layouts.template')

@section('content')

<style>
.table {
    margin: auto;
    margin-top: 200px;
    
}
</style>

<section id="courseArchive">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="courseArchive_sidebar">
         
              <div class="single_sidebar">	
              	<br>
              	<div class="single_sidebar">	
              	
                <h2>feedback<span class="fa fa-angle-double-right"></span></h2>  	

			<table class="table">
				<br>
				<thead>
				
					<th>feedback Name</th>
					<th>feedback Email</th>
					<th>Subject</th>
					<th>Department</th>
					<th>Mail</th>
					<th>Check</th>
					
					
				</thead>

				<tbody>
					
					@foreach ($feedback as $feedback)
						
						<tr>
							
							<td>{{ $feedback->name }}</td>
							<td>{{ $feedback->email }}</td>
							<td>{{ $feedback->subject }}</td>
							<td>{{ $feedback->department }}</td>
							<td>{{ $feedback->mail }}</td>
							<td>{{ $feedback->check }}</td>
							
							
							
							
							
							<!-- 
							<td><a href="{{ route('feedback.show', $feedback->id) }}" class="btn btn-default btn-sm">See Details</a></td> -->
						</tr>

					@endforeach

					
					

				</tbody>
			</table></div>
	</div>

</div>
</div>
</section>
@endsection

	
	

