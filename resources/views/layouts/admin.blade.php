<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="http://fonts.googleapis.com/css?family=Chelsea+Market" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<header>
    <div class="container-fluid ">
    </div>

    </div>
</header>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">


<div id="mySidenav" class="sidenav">

    <a class="justify-content-center align-items-center logo" href="{{route('admin.index')}}">
        <div class="wrapper-logo-admin d-flex flex-row justify-content-center align-items-center">
            <img src="{{asset('assets/imgs/logo-cre.svg')}}" class="adminImgLogoMenu" alt="Global notes logo">
        </div>
    </a>


    <a href="/admin" ><i class="far fa-address-book mr-3"></i></a>
    <a href="//admin"><i class="fas fa-fingerprint mr-3"></i></a>
    <hr>
    <a href="{{route('admin.folders.index')}}"><i class="fas fa-folder mr-3"></i></a>
    <a href="{{route('admin.blocknotes.index')}}"> <i class="fas fa-clipboard mr-3"></i></a>
    <a href="{{route('admin.notes.index')}}"><i class="far fa-sticky-note mr-3"></i></a>



    <hr>
    <form action="{{ route('logout' ) }}" method="post">
        @csrf
        <button type="submit" class="btn button-text-color" value=""><i class="fas fa-sign-out-alt"></i></button>
    </form>

</div>

<div id="main">
    @yield('content')
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
</body>

</html>
