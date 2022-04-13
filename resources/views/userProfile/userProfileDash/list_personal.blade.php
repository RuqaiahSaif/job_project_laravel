@extends('userProfile.userlayout.master')
   @section('content1')

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
            <th>NAME</th>
          <th>EMAIL</th>
          <th>PHONE</th>
          <th>ADDRESS</th>
          <th>GENDER</th>
          <th>Status</th>
          <th>Actions</th>
          </tr>
        </thead>
        <tbody>

@foreach ($allpersonals as $per )



          <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $per->name }}</td>
            <td>{{ $per->email }}</td>
            <td>{{ $per->phone }}</td>
            <td>{{ $per->address }}</td>
            <td>{{ $per->gender }}</td>
            <td>  @if($per->is_active==1)
            <span class="badge bg-label-success me-1">active</span>

            @else
            <span class="badge bg-label-danger me-1">nonactive</span>
            @endif</td>
              <td>
              <a href="{{ route('edit_services',$per->id) }}"class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <a href="{{ route('toggle_services',$per->id) }}" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-trash me-1"></i>
              </a>
                 </td>

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
