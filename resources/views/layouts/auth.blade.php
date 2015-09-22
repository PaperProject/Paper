<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentication | Project S</title>

  <!-- Vendor -->
  {!! HTML::style('css/app.css') !!}
  {!! HTML::style('css/bootstrap-social.css') !!}
  {!! HTML::script('js/vendor.js') !!}

  <!-- Custom -->
  {!! HTML::style('css/custom_form.css') !!}

</head>
<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      @yield('content')
    </div>
  </div>
</body>
</html>
