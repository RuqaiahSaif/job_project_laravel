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
            <th>services Name </th>
<th>services description </th>
<th>services image </th>

            <th>statues</th>

            <th>action</th>
          </tr>
        </thead>
        <tbody>

@foreach ($allservices as $serv )



          <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $serv->name }}</td>
            <td>{{ $serv->description }}</td>
            <td> <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">

              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{ $serv->image }}" alt="Avatar" class="rounded-circle">
              </li>
            </ul></td>
            <td>  @if($serv->is_active==1)
            <span class="badge bg-label-success me-1">active</span>

            @else
            <span class="badge bg-label-danger me-1">nonactive</span>
            @endif</td>
              <td>
              <a href="{{ route('edit_services',$serv->id) }}"class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <a href="{{ route('toggle_services',$serv->id) }}" class="btn btn-icon btn-outline-dribbble">
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
