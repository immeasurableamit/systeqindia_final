@extends('layout.master')

@section('title')
Labour | Systeqindia Facility Management Services
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
                        <h6 class="card-title mb-0">Category</h6>
                        <div>
                            <a href="{{ route('labour-management.create') }}" class="btn btn-primary mb-3">+ Add labour</a>
                        </div>
                    </div>
                    @include('flash::message')


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Name</th>
                                    <th>mobile</th>
                                    <th>Aadhar No</th>
                                    <th>address</th>
                                    <th>status</th>

                                    <th class="custom-width-action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($labours as $labour)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $labour->name }}</td>
                                        <td>{{ $labour->mobile }}</td>
                                        <td>{{ $labour->aadhar_no }}</td>
                                        <td>{{ $labour->address }}</td>
                                        <td>{{ $labour->mobile }}</td>
                                        <td>

                                            @if ($labour->status == 1)
                                            <span class="badge badge-success">Active</span>
                                            @else
                                            <span class="badge badge-danger">Disable</span>
                                            @endif

                                    </td>

                                        <td>
                                            <div>
                                                <a href="{{ route('labour-management.edit', ['labour_management' => $labour->id]) }}"
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

                        {{ $labours->links('admin.pagination.custom') }}

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
