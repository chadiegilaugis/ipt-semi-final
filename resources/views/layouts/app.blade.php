<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


                <div class="container">
                    <a class="text-white nav-link" href="{{ route('home') }}">Destination</a>
                </div>

                <div class="container d-flex align-items-center justify-content-end">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('create-destination') }}">Create new Destination</a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('destination-list-show') }}">Destination List</a>
                      </li>


                    </ul>
                </div>

              </nav>


          @yield('content')
    </body>
</html>
