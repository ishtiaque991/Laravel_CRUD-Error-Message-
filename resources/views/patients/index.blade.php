<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Patient</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('patient.create')}}">Create a Patient</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Month</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
                @foreach($patients as $patient )
                <tr>
                    <td>{{$patient->id}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->year}}</td>
                    <td>{{$patient->month}}</td>
                    <td>{{$patient->date}}</td>
                    <td>
                        <a href="{{route('patient.edit', ['patient' => $patient])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('patient.destroy', ['patient' => $patient])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</body>
</html>