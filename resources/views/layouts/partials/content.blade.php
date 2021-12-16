
<div class="d-flex flex-row flex-column-fluid container">
    <div class="main d-flex flex-column flex-row-fluid">
        
        <div class="subheader py-2 py-lg-6" id="kt_subheader">
            <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Reports</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Application</a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
               
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-light-primary btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                        <span class="opacity-60 font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                        <span class="font-weight-bold" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="content flex-column-fluid" id="kt_content">
            
            @yield('master-artikel')

        </div>
        
    </div>
</div>