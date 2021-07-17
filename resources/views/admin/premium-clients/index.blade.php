@extends('layout.master')

@section('title')
Premium Clients | Systeqindia Facility Management Services
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between align-items-center mb-20">
                        <h6 class="card-title mb-0">Premium Clients</h6>
                        <div>
                            <a href="{{ route('premium-clients.create') }}" class="btn btn-primary mb-3">+ Add Premium Clients</a>
                        </div>
                    </div>
                    @include('flash::message')


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th class="custom-width-action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($premium_clients as $premium_client)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img class=""
                                                src="{{ PREMIUM_CLIENTS_IMAGE_URL . '/' . $premium_client->id . '/' . $premium_client->image }}"
                                                alt="slider image">
                                        </td>
                                        <td>{{ $premium_client->title }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ route('premium-clients.edit', ['premium_client' => $premium_client->id]) }}"
                                                    class="mr-2">
                                                    <i class="fa fa-edit text-info font-18"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <br>

                        {{ $premium_clients->links('admin.pagination.custom') }}

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
