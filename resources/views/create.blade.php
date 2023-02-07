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
        <form class="d-flex" action="{{route('people.store')}}" method="POST">
            @csrf
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">First name</label>
                    <input type="text" name="first_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Date of birth</label>
                    <input type="date" name="date_of_birth" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Height</label>
                    <input type="number" name="height" id="" class="form-control" placeholder="" aria-describedby="helpId" min="0" max="250">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
      </div>
    </main>
</body>

</html>