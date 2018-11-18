
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
              	
                <h2>contact<span class="fa fa-angle-double-right"></span></h2>  	

			<table class="table">
				<br>
				<thead>
				
					<th>contact Name</th>
					<th>contact Email</th>
					<th>Message</th>
									
				</thead>

				<tbody>
					
					@foreach ($contact as $contact)
						
						<tr>
							
							<td>{{ $contact->name }}</td>
							<td>{{ $contact->email }}</td>
							<td>{{ $contact->message }}</td>
							
						</tr>

					@endforeach

					
					

				</tbody>
			</table>
		</div>
	</div>

</div>
</div>
</section>
@endsection

	
	

