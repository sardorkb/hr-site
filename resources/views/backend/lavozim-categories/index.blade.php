@extends('backend.layouts.master')
@section('title', 'Lavozim uchun kateogiryalar | Baraka Development')
@section('main-content')
<div class="row g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Lavozim uchun kateogiryalar ro'yxati</h2>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('lavozim_categories.create') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
            data-placement="bottom" title="Yangi qo'shish"><i class="fas fa-plus"></i> Yangi qo'shish</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if (count($categories) > 0)
                <table class="table table-bordered" id="category-dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="sort align-middle ps-4" scope="col" data-sort="id" style="width:150px;">Id</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="name" style="width:150px;">Nomi</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="action" style="width:150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="position-static">
                                <td class="product align-middle ps-4">{{ $category->id }}</td>
                                <td class="product align-middle ps-4">{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('lavozim_categories.edit', $category->id) }}" class="btn btn-primary btn-sm"
                                        data-toggle="tooltip" title="Tahrirlash"><i class="far fa-edit"></i></a>
                                    <form method="POST" action="{{ route('lavozim_categories.destroy', $category->id) }}" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger btn-sm dltBtn" data-id="{{ $category->id }}"
                                            title="O'chirish"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <span style="float:right">{{ $categories->links() }}</span>
            @else
                <h6 class="text-center">Ro'yxat bo'sh, iltimos yangi qo'shing!</h6>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        .zoom {
            transition: transform .2s;
        }
        .zoom:hover {
            transform: scale(3.2);
        }
    </style>
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#category-dataTable').DataTable({
                "columnDefs": [{
                    "orderable": false,
                    "targets": [2] // Adjusted column index for non-orderable Actions column
                }]
            });

            // Sweet alert
            $('.dltBtn').click(function (e) {
                var form = $(this).closest('form');
                e.preventDefault();
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
            });
        });
    </script>
@endpush
