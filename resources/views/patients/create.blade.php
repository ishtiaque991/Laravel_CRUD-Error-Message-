<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Patient</h1>
    <div>
        <a href="{{route('patient.index')}}">Go to index</a>
    </div>
    <form method="post" action="{{route('patient.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
            @error('name')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <label>Year</label>
            <input type="text" name="year" placeholder="Year" />
            @error('year')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <label>Month</label>
            <input type="text" name="month" placeholder="Month" />
            @error('month')
            <span class="error">{{$message}}</span><br>
            @enderror
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="date" placeholder="Date" />
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