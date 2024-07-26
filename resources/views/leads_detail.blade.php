@extends('dashboard')

@section('content')
<div class="p-5">
    <h1>Lead Detail</h1>
<form action="{{ route('leads.show', $karyawans->id) }}">
    @csrf
    <div class="card" style="margin: 20px;">
        <div class="card-header">Lead Detail</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-text text-warning fs-4">{{ $karyawans->lead_number }}<a class="btn bg-warning"><i class="bi bi-house-door pe-1"></i>{{ $karyawans->branch_Office }}</a></h5>
                <p class="card-text fs-4">Full Name : {{ $karyawans->full_name }}</p>
                <p class="card-text fs-4">Address : {{ $karyawans->address }}</p>
                <p class="card-text fs-4">Email : {{ $karyawans->email }}</p>
                <p class="card-text fs-4">Phone No. : {{ $karyawans->phone }}</p>
                <p class="card-text fs-4">Status : {{ $karyawans->status }}</p>
                <p class="card-text fs-4">Probability : {{ $karyawans->probability }}</p>
                <p class="card-text fs-4">Lead Type : {{ $karyawans->lead_type }}</p>
                <p class="card-text fs-4">Lead Source : {{ $karyawans->lead_source }}</p>
                <p class="card-text fs-4">Lead Media : {{ $karyawans->lead_media }}</p>
                <p class="card-text fs-4">Lead Channel : {{ $karyawans->lead_channel }}</p>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-success" href="leads">Back</a>
    </div>
</form><br>
</div>
@endsection