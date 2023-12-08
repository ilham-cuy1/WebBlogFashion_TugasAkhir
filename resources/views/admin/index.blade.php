<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts Home | ADM AlbarStyle </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <h3>ADM AlbarStyle</h3>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item{{ request()->is('admin') ? 'active' : '' }}">
                            <a href="/admin" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->is('admin/posts', 'admin/style') ? 'active' : '' }} has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Posts</span>
                            </a>
                            <ul class="submenu {{ request()->is('admin/posts', 'admin/style') ? 'active' : '' }}">
                                <li class="submenu-item {{ request()->is('admin/posts') ? 'active' : '' }}">
                                    <a href="/admin/posts">Home</a>
                                </li>
                                <li class="submenu-item {{ request()->is('admin/style') ? 'active' : '' }}">
                                    <a href="/admin/style">Style</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item{{ request()->is('admin/about') ? 'active' : '' }}">
                            <a href="/admin/about" class="sidebar-link">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>About</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"></ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/admin/logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>POSTS HOME</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                        <li class="breadcrumb-item">Posts</li>
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-0 shadow-sm rounded mt-3">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">TAMBAH POST</a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="" method="get">
                                                    <div class="input-group">
                                                        <input type="search" name="keyword_admin" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                                                        <button class="btn btn-primary" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-bordered table-light">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">GAMBAR</th>
                                                        <th scope="col">JUDUL</th>
                                                        <th scope="col">CONTENT</th>
                                                        <th scope="col">AKSI</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                $no = 1;
                                                @endphp

                                                <tbody>
                                                    @forelse ($posts as $index => $post)
                                                    <tr>
                                                        <td>{{ $index + $posts->firstItem() }}</td>
                                                        <td class="">
                                                            <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 180px;">
                                                        </td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{!! Str::limit($post->content, 170, '...') !!}</td>
                                                        <td class="text-center">
                                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark mb-2">SHOW</a>
                                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary mb-2">EDIT</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger hapus mb-2">HAPUS</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <div class="alert alert-danger">
                                                        Tidak Ada Data Untuk Ditampilkan
                                                    </div>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $posts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; AlbarStyle</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-gauge-high fa-lg" style="color: #0d6efd;"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-folder-plus fa-lg" style="color: #0d6efd;"></i><span class="ms-1 d-none d-sm-inline">Post</span></a>
                        </li>

                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <h3 class="text-center my-4">HALAMAN ADMIN</h3>
                                <hr>
                            </div>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-check me-3 fa-lg"></i> {{ $message }} 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                    <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">GAMBAR</th>
                                                <th scope="col">JUDUL</th>
                                                <th scope="col">CONTENT</th>
                                                <th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($posts as $post)
                                            <tr>
                                                <td class="text-center">
                                                    <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px;">
                                                </td>
                                                <td>{{ $post->title }}</td>
                                                <td>{!! $post->content !!}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark mb-3">SHOW</a>
                                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary mb-3">EDIT</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <div class="alert alert-danger">
                                                Data Post belum Tersedia.
                                            </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $posts->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @if(Session::has('success'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }
        toastr.success("{{ Session::get('success') }}", 'BERHASIL!', {
            timeOut: 4000
        });
    </script>
    @elseif(Session::has('error'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }
        toastr.error("{{ Session::get('error') }}", 'GAGAL!', {
            timeOut: 4000
        });
    </script>
    @endif

    <script type="text/javascript">
        $('.hapus').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            swal.fire({
                    title: 'Yakin Akan Menghapus Data Ini?',
                    text: "Data Akan Dihapus Permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#435ebe',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Delete!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>
</body>

</html>