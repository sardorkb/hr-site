@extends('backend.layouts.master')
@section('title', 'Arizalar | Baraka Development')
@section('main-content')
<div class="row g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Arizalar ro'yxati</h2>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="sort align-middle ps-4" scope="col" style="width:50px;">№</th>
                        <!-- Counter Column -->
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">F.I.Sh.</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Yoshi</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Yashash manzili</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Ish joyi manzili</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Ish joyi turi</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Lavozim</th>
                        <th class="sort align-middle ps-4" scope="col" style="width:150px;">Ariza holati</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $index => $application)
                    <tr class="position-static">
                        <td class="product align-middle ps-4">{{ $index + 1 }}</td> <!-- Counter Number -->
                        <td class="product align-middle ps-4">
                            <a href="{{ route('application.edit', $application->id) }}">{{ $application->fullname }}</a>
                        </td>

                        <td class="product align-middle ps-4">{{ $application->age }}</td>
                        <td class="product align-middle ps-4">{{ $application->address }}</td>
                        <td class="product align-middle ps-4">{{ $application->job_location }}</td>
                        <td class="product align-middle ps-4">{{ $application->job_location_type }}</td>
                        <td class="product align-middle ps-4">{{ $application->position }}</td>
                        @php
                        $statusColor = '#FFFFFF'; // Default color

                        if ($application->status === 'Tekshiruv jarayonida') {
                        $statusColor = '#FFA500';
                        } elseif ($application->status === 'Qoniqarsiz') {
                        $statusColor = '#FF0000';
                        } elseif ($application->status === 'Qoniqarli') {
                        $statusColor = '#90EE90';
                        } elseif ($application->status === 'Ishga qabul qilindi') {
                        $statusColor = '#026e0d';
                        } elseif ($application->status === 'Ishdan bo\'shatildi') {
                        $statusColor = '#808080';
                        } elseif (empty($application->status)) {
                        $statusColor = '#0000FF'; // Color for "Ko'rilmagan"
                        }
                        @endphp

                        <td class="product align-middle ps-4" style="color: {{ $statusColor }};">
                            {{ $application->status ?: 'Ko\'rilmagan' }}
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection