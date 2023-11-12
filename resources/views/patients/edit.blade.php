<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Patient</h1>
    <form method="post" action="{{route('patient.update', ['patient' => $patient])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$patient->name}}"/>
            @error('Name')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <label>Year</label>
            <input type="text" name="year" placeholder="Year" value="{{$patient->year}}"/>
            @error('year')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <label>Month</label>
            <input type="text" name="month" placeholder="Month" value="{{$patient->month}}"/>
            @error('month')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="date" placeholder="Date" value="{{$patient->date}}"/>
            @error('date')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <input type="submit" value="Save a New Patient" />
        </div>
    </form>
</body>
</html>