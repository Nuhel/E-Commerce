<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warehouse - New Post! </title>
</head>
<body>
    <h1>A new post is waiting for you...</h1>
   @if(Session::has('id')) 
   <?php $id = Session::get('id');
   		$email = Session::get('email');
  ?>
     <a href="{{ route('showsingle', $id) }}"> click this link to see!</a> <br><br>
     <a href="{{ route('unsubscribe', $email) }}" type="button" style="background-color: #4683EC; padding:10px; text-decoration: none; margin-top: 3px; color: white;">Unsubscribe</a>

     
     
    @endif

</body>
</html>