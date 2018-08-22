<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="{{ $base }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="h-100">
    <div class="container-fluid h-100">
        <div class="row h-100">

            {{-- 左側選單 --}}
            <div class="col-lg-2 h-100 bg-light">
                <nav class="nav flex-column mt-5">
                    <a class="nav-link active" href="admin/users"><i class="fas fa-users"></i> Users</a>
                    <a class="nav-link" href="admin/status"><i class="fas fa-sliders-h"></i> Status</a>
                    <a class="nav-link" href="admin/types"><i class="fas fa-certificate"></i> Types</a>
                    <a class="nav-link" href="admin/images"><i class="far fa-image"></i> Images</a>
                    <a class="nav-link" href="admin/articles"><i class="far fa-newspaper"></i> Articles</a>
                    <a class="nav-link disabled" href="admin/files"><i class="far fa-file"></i> Files</a>
                </nav>
            </div>

            {{-- 右側區塊 --}}
            <div class="col-lg-10 h-100 bg-white">
                {{-- 導覽列 --}}
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="admin/profile">
                            <i class="fas fa-user">{{-- profile --}}</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/logout">
                            <i class="fas fa-sign-out-alt">{{-- logout --}}</i>
                        </a>
                    </li>
                </ul>

                {{-- 麵包屑 --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>

                {{-- 內容區塊 --}}
                <div class="content">
                    <h1>{{ $h1 }}</h1>
                    <div class="content-section">
                        @yield('content')
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>