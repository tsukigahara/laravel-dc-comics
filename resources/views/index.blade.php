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
            <a class="btn btn-primary" href="{{route('people.create')}}" role="button">Add person</a>
        <table class="table">
         <thead>
    <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($people as $person)
        <tr>
          <th scope="row">{{$person->id}}</th>
          <td>{{$person->first_name}}</td>
          <td>{{$person->last_name}}</td>
          <td>
              {{-- se volessi passare piu parametri?  usando questo non va ['id'=>$person->id]--}}
              <form class="form-inline"action="{{ route('people.destroy', $person->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a class="btn btn-primary" href="{{route('people.show', $person->id)}}" role="button">Details</a>
                  <input class="btn btn-outline-danger" type="submit" value="Delete">
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
        </div>
    </main>

</body>

</html>
