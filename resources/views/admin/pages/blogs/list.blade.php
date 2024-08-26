@extends('admin.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blogs List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Blogs List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="container card">
            <div class="card-body">

                <div class="row">

                    <div class="">
                        <div class="card-body ">
                            <h5 class="card-title">Blog List Table</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $key => $blog)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>
                                                <img class="rounded" width="120px" src="{{ asset('asset_files/blogs_img/'.$blog['img_url']) }}" alt="">
                                                {{ $blog['title'] }}
                                            </td>
                                            <td>{{ $blog['created_at'] }}</td>
                                            <td>{{ $blog['status'] == 1 ? 'Approved' : 'Rejected' }}</td>
                                            <td>
                                                <a href="{{ route('tool.edit', $blog['id']) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('blog.destroy', $blog['id']) }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
