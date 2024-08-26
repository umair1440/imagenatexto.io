@extends('admin.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tool List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Tool List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="container card">
            <div class="card-body">

                <div class="row">

                    <div class="mt-5">
                        <div class="card-body ">
                            <h5 class="card-title">Tool List Table</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Language</th>
                                        <th scope="col">Is Home</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tools as $key => $tool)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $tool['tool_name'] }}</td>
                                            <td>{{ $tool['tool_lang'] }}</td>
                                            <td>{{ $tool['is_home'] == 1 ? 'Yes' : 'No' }}</td>
                                            <td>{{ $tool['created_at'] }}</td>
                                            <td>
                                                <a href="{{ route('tool.edit', $tool['id']) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('tool.destroy', $tool['id']) }}" method="post">
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
