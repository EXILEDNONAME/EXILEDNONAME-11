<div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
  <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">

    <div class="text-dark order-2 order-md-1">
      <span class="text-muted font-weight-bold mr-2">2020&copy;</span>
      <a href="/" target="_blank" class="text-dark-75 text-hover-primary">
        @php
        $title = \DB::table('system_settings')->first();
        echo $title->application_name;
        @endphp
      </a>
    </div>


    <div class="nav nav-dark">
      <a href="javascript:void(0);" class="nav-link pl-0 pr-5"> About </a>
      <a href="javascript:void(0);" class="nav-link pl-0 pr-5"> Team </a>
      <a href="javascript:void(0);" class="nav-link pl-0 pr-0"> Contact </a>
    </div>

  </div>
</div>
