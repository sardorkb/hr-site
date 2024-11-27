@extends('backend.layouts.master')
@section('title','Vakansiyalar | Baraka Development')
@section('main-content')
<div class="row g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Bo'sh ish o'rinlari ro'yxati</h2>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('jobs.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
            data-placement="bottom" title="Add Brand"><i class="fas fa-plus"></i> Yangi qo'shish</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if (count($vacancies) > 0)
            <table class="table table-bordered" id="vacancy-dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Rasm</th>
                        <th class="sort align-middle ps-4" scope="col" data-sort="title" style="width:150px;">Lavozim
                        </th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Manzil</th>
                        <th class="sort align-middle ps-4" scope="col" data-sort="position" style="width:150px;">Ish joy
                        </th>
                        <th class="sort align-middle ps-4" scope="col" data-sort="bio" style="width:150px;">Qabul qilish
                            sana</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vacancies as $vacancy)
                    <tr class="position-static">
                        <td class="product align-middle ps-4">
                            <img src="{{ asset('storage/' . $vacancy->photo) }}" class="img-fluid zoom"
                                style="max-width: 80px;" alt="{{ $vacancy->photo }}">
                        </td>
                        <td class="product align-middle ps-4">{{$vacancy->title}}</td>
                        <td class="product align-middle ps-4">{{$vacancy->location}}</td>
                        <td class="product align-middle ps-4">
                            {{ $vacancy->category ? $vacancy->category->name : 'No category' }}
                        </td>

                        <td class="product align-middle ps-4">Yopilishga {{ $vacancy->days_left }} kun qoldi</td>
                        <td>
                            <a href="{{ route('jobs.edit', $vacancy->id) }}" class="btn btn-primary btn-sm"
                                data-toggle="tooltip" title="Tahrirlash"><i class="far fa-edit"></i></a>
                            <form method="POST" action="{{ route('jobs.destroy', [$vacancy->id]) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm dltBtn" data-toggle="tooltip"
                                    title="O'chirish"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span style="float:right">{{$vacancies->links()}}</span>
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
$(document).ready(function() {
    $('#vacancy-dataTable').DataTable({
        "columnDefs": [{
            "orderable": false,
            "targets": [4] // Adjusted column index for non-orderable Actions column
        }]
    });

    // Sweet alert confirmation for deletion
    $(document).on('click', '.dltBtn', function(e) {
        e.preventDefault(); // Prevent the default form submission
        var form = $(this).closest('form'); // Find the closest form to the delete button
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit(); // Submit the form if user confirms
            } else {
                swal("Your data is safe!"); // Alert if user cancels
            }
        });
    });
});
</script>

@endpush