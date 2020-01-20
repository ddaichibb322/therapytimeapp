@section('head')
<title>@yield('title') | Therapy Time</title>

<meta charset="UTF-8">
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script> 


@endsection