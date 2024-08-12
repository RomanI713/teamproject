<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('gradesave')}}" method="POST">

        @csrf
        <label for="full_name">Full_name</label>
        <input type="text" name="full_name" id="">
        <label for="email">Email</label>
        <input type="email" name="email" id="">
        <label for="cell">Phone number</label>
        <input type="number" name="cell" id="">
        <label for="voter_id_no">Voter Id</label>
        <input type="number" name="voter_id_no" id="">

        <input type="submit" value="Save">
    </form>
</body>
</html>
