<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="{{ $base }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="h-100">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-2 h-100 bg-light">
                <nav class="nav flex-column mt-5">
                    <a class="nav-link active" href="admin/users">Users</a>
                    <a class="nav-link" href="admin/status">Status</a>
                    <a class="nav-link" href="admin/types">Types</a>
                    <a class="nav-link" href="admin/images">Images</a>
                    <a class="nav-link disabled" href="admin/articles">Articles</a>
                    <a class="nav-link disabled" href="admin/files">Files</a>
                </nav>
            </div>
            <div class="col-lg-10 h-100 bg-white">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="admin/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/logout">Logout</a>
                    </li>
                </ul>

                <div class="content">
                    <h1>標題</h1>
                    <div class="content-section">
                        @yield('content')
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>