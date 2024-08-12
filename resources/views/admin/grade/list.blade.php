<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table <a href="{{route('empform')}}">Add New</a></h2>

@if(Session('info'))
<div class="alert alert-success">
    {{Session::get('info')}}
</div>

@endif

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Cell</th>
    <th>Voter Id</th>
  </tr>

  @foreach ($employee as $value)
    <tr>
        <td>{{$value->full_name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->cell}}</td>
        <td>{{$value->voter_id_no}}</td>
    </tr>
  @endforeach

</table>

</body>
</html>

