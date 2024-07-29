<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <center>
  <h1>All Product List</h1>
<br><br>
  <a class="btn btn-success" href="{{url('/')}}">Add Products</a>
  <br><br>
  <table border="2px">
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Delete</th>
    <th>Update</th>
 
  @foreach($data as $data)
  <tr>
    <td> {{$data -> Title}} </td>
    <td>  {{$data -> Description}} </td>
    <td> <img  height="100px" width="100px" src="{{ asset('product/' . $data->Image) }}" alt="Product Image">
    </td>
    <td><a onclick="return confirm('Are you sure to delete??');" class="btn btn-danger" href="{{url('delete_product',$data->id)}}">Delete</a></td>
    <td><a onclick="return confirm('Are you sure to update??');" class="btn btn-primary" href="{{url('update_product',$data->id)}}">Update</a></td>
</tr>
  <br>
  @endforeach


</table>
</center>
</body>
</html>