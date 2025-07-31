<footer class="app-footer">
  <!--begin::To the end-->
  {{-- <div class="float-end d-none d-sm-inline">Anything you want</div> --}}
  <!--end::To the end-->
  <!--begin::Copyright-->
  <strong>
    Copyright &copy; {{ date('Y')}}&nbsp;
    <a href="https://amwebbers.com/" class="text-decoration-none">Admin Dashboard</a>.
  </strong>
  All rights reserved.
  <!--end::Copyright-->
</footer>


<div class="modal fade" id="alertModel" tabindex="-1" aria-labelledby="alertModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" id="frmAlertModel">
      @csrf
      <input type="hidden" name="alertPageId" id="alertPageId">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="alertModelLabel">Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="alertModelBody">
          <p>Are you sure to delete this Page</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="alertModelBtnCalcel">Close</button>
          <button type="submit" class="btn btn-danger" id="alertModelBtnOk">Delete</button>
    </form>
  </div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="getReportModal" tabindex="-1" aria-labelledby="getReportModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="getReportModalLabel">Get Report</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" id="getReportForm" action="{{ route('report.download') }}">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-12 col-md-4">
                  <div class="mb-3">
                    <label for="formFName" class="form-label">Year</label>
                    <select class="form-control" name="year">
                      <option value="">Select Year</option>
                      @for ($year = date('Y'); $year >= 2000; $year--)
              <option value="{{ $year }}">{{ $year }}</option>
            @endfor
                    </select>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="mb-3">
                    <label for="formMonth" class="form-label">Month</label>
                    <select class="form-control" name="month">
                      <option value="">Select Month</option>
                      @foreach ([
                1 => 'January',
                2 => 'February',
                3 => 'March',
                4 => 'April',
                5 => 'May',
                6 => 'June',
                7 => 'July',
                8 => 'August',
                9 => 'September',
                10 => 'October',
                11 => 'November',
                12 => 'December'
              ] as $num => $name)
                            <option value="{{ $num }}">{{ $name }}</option>
            @endforeach
                                                                                                                    </select>
                                                                                                  </div>
                </div>
                
                <div class="col-12 col-md-4">
                <div class="mb-3">
                    <label for="formDay" class="form-label">Day</label>
                    <select class="form-control" name="day">
                      <option value="">Select Day</option>
                      @for ($day = 1; $day <= 31; $day++)
            <option value="{{ $day }}">{{ $day }}</option>
            @endfor
    </select>
  </div>
</div>
              </div>
              <div class="col-md-12 mt-20">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                  </div>
                  <div class="col-12 col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Get Report</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

