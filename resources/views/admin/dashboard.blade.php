@extends('admin.layouts.app')

@section('content')
<style>
    #highchart {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">


             <div id="highchart" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            </div>
            

            {{-- <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing hide">
                <div class="widget-one">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            </div>
                            <div class="w-content">
                                <span class="w-value">3,192</span>
                                <span class="w-numeric-title">Total Orders</span>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="total-orders"></div>
                        </div>
                    </div>
                </div>
            </div> --}}

            


            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Recent Pre-Visit Request</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><div class="th-content">Name</div></th>
                                        <th><div class="th-content">Email</div></th>
                                        <th><div class="th-content">Requested Information</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a href="{{url('/admin/requests')}}" class="btn btn-primary mb-2 mr-2 "> View More</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Recent Registered Class</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><div class="th-content ">User</div></th>
                                        <th><div class="th-content ">Classes</div></th>
                                        <th><div class="th-content">Price</div></th>
                                        <th><div class="th-content">Status</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="{{url('admin/classmanagement/registered-classes')}}" class="btn btn-primary mb-2 mr-2 "> View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
   $('#click').click(function(){
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
	var url = window.location.origin;

    alert(csrf_token);
       $.ajax({
           url:url +"/admin/chart",
           method:"get",
           data:{
           _token: csrf_token,
           },
           dataType: 'json',
           success:function(response)
           {

           }
       })
   })
})

    Highcharts.chart('highchart', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Class Registered In Previous Months',
  },

  xAxis: {
    type: 'category',
    labels: {
      rotation: -45,
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Number of Classes'
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
    pointFormat: 'Classes Taken : <b>{point.y}</b>'
  },
  series: [{
    name: 'Month',
    data: 'a',
    dataLabels: {
      enabled: true,
      rotation: -90,
      color: '#FFFFFF',
      align: 'right',
      format: '{point.y}', // one decimal
      y: 10, // 10 pixels down from the top
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  }]
});
</script>
    
@endsection