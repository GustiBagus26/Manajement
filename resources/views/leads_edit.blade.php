@extends('dashboard')

@section('content')
<div class="p-5">
    <div class="card" style="margin: 20px;">
        <div class="card-header"><h1>Lead Manage</h1></div>
        <div class="card-body">
            <div class="card-body">
    <h5><i class="bi bi-house-door pe-2"></i>General</h5><br>
<form action="{{ route('leads', $karyawans->id) }}" method="post">
    @csrf
    <div class="container">
        <label>Branch Office:</label>
        <input type="text" name="branch_Office" value="{{ $karyawans->branch_Office }}" class="form-control mb-2">
        <label>Full Name:</label>
        <input type="text" name="full_name" value="{{ $karyawans->full_name }}" class="form-control mb-2">
        <label>Address:</label>
        <input type="text" name="address" value="{{ $karyawans->address }}" class="form-control mb-2">
        <label>Email:</label>
        <input type="text" name="email" value="{{ $karyawans->email }}" class="form-control mb-2">
        <label>Phone Number:</label>
        <input type="text" name="phone" value="{{ $karyawans->phone }}" class="form-control mb-2">
    </div>
<div class="p-4">
    <h5><i class="bi bi-info-circle pe-2"></i>Other Information</h5>
</div>
    <div class="container">
        <label>Status:</label>
        <input type="text" name="status" value="{{ $karyawans->status }}" class="form-control mb-2">
        <label>Probability:</label>
        <input type="text" name="probability" value="{{ $karyawans->probability }}" class="form-control mb-2">
        <label>Lead Type:</label>
        <input type="text" name="lead_type" value="{{ $karyawans->lead_type }}" class="form-control mb-2">
        <label>Lead Channel:</label>
        <input type="text" name="lead_channel" value="{{ $karyawans->lead_channel }}" class="form-control mb-2">
        <label>Lead Media:</label>
        <input type="text" name="lead_media" value="{{ $karyawans->lead_media }}" class="form-control mb-2">
        <label>Lead Source:</label>
        <input type="text" name="lead_source" value="{{ $karyawans->lead_source }}" class="form-control mb-2">
        <label>Lead Number:</label>
        <input type="text" name="lead_number" value="{{ $karyawans->lead_number }}" class="form-control mb-2">
        <label>Notes:</label>
        <input type="text" name="notes" class="form-control mb-2">
    </div><br>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary">Edit</button>
        <a class="btn btn-success" href="leads">Cencel</a>
    </div>
</form><br>
            </div>
        </div>
</div>
@endsection