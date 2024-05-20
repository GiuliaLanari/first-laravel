<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield("title")</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  @include('includes.nav')

  <div class="conteiner mt-5">

    @yield("content")


  </div>

  <footer class="mt-5">
    <div class="d-flex footer">
    <div>
    <ion-icon name="logo-facebook"></ion-icon>
    </div>
    <div>
    <ion-icon name="logo-instagram"></ion-icon>
    </div>
    <div>
    <ion-icon name="logo-twitter"></ion-icon>
    </div>
    </div>
    <div class="copy-right">&copy;2024 Lanari Giulia</div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>