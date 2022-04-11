@extends('admin.layout.master')
@section('content')

          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




            <!-- Multi Column with Form Separator -->
            <!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Bordered Table</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>


          <tr>
              <th>#</th>
            <th>usre Name </th>
            <th> user email</th>

            {{-- <th>statues</th> --}}

            <th>action</th>
          </tr>

        </thead>
        <tbody>


   @foreach ($allusers as $user  )
          <tr>

            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>

{{-- @if ({{ $user->is_active==1 }})
 <span class="badge bg-label-success me-1">active</span>
@else
<span class="badge bg-label-danger me-1">not active</span>
@endif --}}



             {{-- </td> --}}
            <td>
              <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
              </div>    </td>

          </tr>

            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
          </div>


 @endsection
