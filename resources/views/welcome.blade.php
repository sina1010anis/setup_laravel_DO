<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <form action="{{route('elsticsearch')}}" method="POST">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="name" id="form1Example1" class="form-control" />
              <label class="form-label" for="form1Example1">Email address</label>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
          </form>
          @if(isset($datas))
            @foreach ($datas as $data)
                    <div>
                        {{$data['name']}}
                    </div>
            @endforeach
          @endif
    </body>
</html>
