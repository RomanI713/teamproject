@extends('layouts.admin')


@section('maincontent')

<div class="container-scroller">
 @include('adminpart.probanner')
    <!-- partial:partials/_navbar.html -->
    @include('adminpart.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('adminpart.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><a href="{{route('expertiselist')}}">Back</a></h4>
                  <p class="card-description"> Basic form elements </p>
                  <form action="" method="POST" class="forms-sample">
                    @csrf

                    <div class="form-group">
                      <label for="skill_year">Skill Year</label>
                      <input type="text" name="skill_year" id="skill_year" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="designation	">Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>

                  </form>
                </div>
              </div>


          </div>
        </div>

       {{--  @include('adminpart.mainpanel')  --}}
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('adminpart.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection
