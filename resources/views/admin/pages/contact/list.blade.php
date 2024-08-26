@extends('admin.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contacts List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Contacts List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="container card">
            <div class="card-body">

                <div class="row">

                    <div class="">
                        <div class="card-body ">
                            <h5 class="card-title">Contact List Table</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Created At</th>
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            {{-- <td>
                                                <img class="rounded" width="120px" src="{{ asset('asset_files/contacts_img/'.$contact['img_url']) }}" alt="">
                                                {{ $contact['name'] }}
                                            </td> --}}
                                            <td>{{ @$contact['name'] }}</td>
                                            <td>{{ @$contact['email'] }}</td>
                                            <td>{{ @$contact['message'] }}</td>
                                            <td>{{ @$contact['created_at'] }}</td>
                                            {{-- <td>{{ $contact['status'] == 1 ? 'Approved' : 'Rejected' }}</td> --}}
                                            {{-- <td>
                                                <a href="{{ route('tool.edit', $contact['id']) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('contact.destroy', $contact['id']) }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td> --}}
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
