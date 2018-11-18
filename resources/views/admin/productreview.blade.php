@extends('layouts.adminlayout')

@section('content')


<div>					
   <table class="table">
                <br>
                <thead>
                    

                    <th>Customer Name</th>
                    <th>Review</th>
                    <th>Time</th> 
                    <th>update</th>
                    <th>Delete</th>
                    
                </thead>

                <tbody>
					<h5 style="margin-left: 2%; font-style: italic;margin-bottom: 1%;">{{ $product->comments()->count() }} Review On This Product</h5>
           			<?php $i=0; ?>
                     @foreach($product->comments as $comment)
                     <?php $i++;
                     if ($i>0) { ?>
                         
                      
                <tr>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</td>
                        
                        <td>
                                <a href="{{ route('comments.edit', $comment->id) }}"><span class="glyphicon glyphicon-pencil"></span>Update</a>
                        </td>
                        <td>
                                <a href="{{ route('comments.delete', $comment->id) }}"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                        </td>
                </tr>
                <?php } ?>        
            @endforeach
                </tbody>
            </table>

</div>
</div>
@endsection