<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
           <a class="btn btn-primary" href="{{route('people.index')}}" role="button">Go back</a>
        <table class="table">
         <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Date of birth</th>
          <th scope="col">Height(cm)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$person->id}}</th>
          <td>{{$person->first_name}}</td>
          <td>{{$person->last_name}}</td>
          <td>{{$person->date_of_birth}}</td>
          <td>{{$person->height}}</td>
        </tr>
      </tbody>
    </table>
        </div>
    </main>

</body>

</html>
