@extends('admin.layout.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




        <!-- Multi Column with Form Separator -->
        <div class="card mb-4">
            <h5 class="card-header">Multi Column with Form Separator</h5>
            {{-- @if ($errors->any())
  @foreach ($errors->all() as $err)
  <p class="alert alert-danger">{{ $err }}</p>

  @endforeach --}}

            {{-- @endif --}}
            <form class="card-body" action="{{ route('save_services') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h6>1. services Details</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">services Name</label>
                        <input name="name" type="text" id="multicol-username" class="form-control"
                            placeholder="john.doe" />
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">services description</label>
                        <input name="description" type="text" id="multicol-username" class="form-control" />
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">services image</label>
                        <input name="image" type="file" id="multicol-username" class="form-control" />
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                     <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">

                    <option value="1">active</option>
                    <option value="-1">nonactive</option>
                  </select>
                </div>
              </div>
            </div>
                </div>


                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>

    </div>
@endsection
