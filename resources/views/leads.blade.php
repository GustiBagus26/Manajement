@extends('dashboard')

    @section('content')
<div class="p-5">
    <div class="card" style="margin: 20px;">
        <div class="card-header"><h1>Lead Manage</h1></div>
        <div class="card-body">
            <div class="card-body">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end ms-auto">
        <a class="btn btn-success" href="leads_create">Add New +</a>
    </div><br>
    <form action="{{ route('leads.search') }}" method="get" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Leads</th>
                <th scope="col">Primary Contact</th>
                <th scope="col">Info</th>
                <th scope="col">Info Source</th>
                <th scope="col">Assigned To</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody><br>
            @foreach ($karyawans as $no=>$tes)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $tes->full_name }} <br>
                    <a>{{ $tes->address }}</a><br>
                    <a>{{ $tes->lead_number }}</a><br>
                    <h6 class="text-secondary">Branch Office:</h6>
                    <a>{{ $tes->branch_Office }}</a><br>
                </td>
                <td>{{ $tes->email }} <br>
                    <a>{{ $tes->phone }}</a><br>
                </td>
                <td>
                    <h6 class="text-secondary">Probability:</h6>
                    <a>{{ $tes->probability }}</a><br>
                    <a>Notes: -</a><br><br>
                    <h6 class="text-secondary">Status:</h6>
                    <a>{{ $tes->status }}</a><br>
                    <a>Notes: -</a><br>
                </td>
                <td>
                    <h6 class="text-secondary">Type:</h6>
                    <a>{{ $tes->lead_type }}</a><br>
                    <h6 class="text-secondary">Channel:</h6>
                    <a>{{ $tes->lead_channel }}</a><br>
                    <h6 class="text-secondary">Media:</h6>
                    <a>{{ $tes->lead_media }}</a><br>
                    <h6 class="text-secondary">Source:</h6>
                    <a>{{ $tes->lead_source }}</a><br>
                </td>
                <td>+ADD ASSIGNEE</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('leads.show', $tes->id) }}">Detail</a></li>
                            <li><a class="dropdown-item" href="{{ route('leads.edit', $tes->id) }}">Edit</a></li>
                            <form action="{{ route('leads.delete', $tes->id) }}" method="post">
                                @csrf
                            <button class="btn text-danger">Delete</button>
                            </form>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
        </div>
    </div>
</div>
@endsection
