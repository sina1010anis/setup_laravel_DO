<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
            <!-- Email input -->
            <div id="app">
                <div class="form-outline mb-4">
                <input type="text" name="name" v-model="txt_search" v-on:keydown="test()" id="form1Example1" class="form-control" />
                </div>
                <p>@{{'text test:'+text }}</p>
                <div v-if="datas != null">
                    <div class="alert alert-success" v-for="(data, index) in datas" @key="index">
                        <strong>Success!</strong> @{{data.name}}
                      </div>
                </div>
            </div>
            <!-- Submit button -->
    </body>
    @vite('resources/js/app.js')
</html>
