@php
$page_name = Request::segment(3);
@endphp
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-time-picker.js')}}"></script>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="{{asset('assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>

<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('plugins/flatpickr/custom-flatpickr.js')}}"></script>

{{-- Maxlength count--}}
<script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
<script src="{{asset('plugins/bootstrap-maxlength/custom-bs-maxlength.js')}}"></script>

{{-- Forms File Upload --}}
<script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script src="{{asset('plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
{{-- Forms Markdown --}}
<script src="{{asset('plugins/editors/markdown/simplemde.min.js')}}"></script>
<script src="{{asset('plugins/editors/markdown/custom-markdown.js')}}"></script>

<script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('plugins/dropify/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dash_1.js')}}"></script>
<script src="{{asset('assets/js/users/account-settings.js')}}"></script>


{{-- Table Datatable Custom --}}
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
 <script src="{{asset('ckeditor/src/ckeditor.js')}}"></script>
 <script src="{{asset('ckeditor/bulid/ckeditor.js')}}"></script>
<!--  <script src="{{asset('ckfinder/config.js')}}"></script> -->

<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/font-icons/feather/feather.min.js')}}"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('plugins/lightbox/photoswipe.min.js')}}"></script>
<script src="{{asset('plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('plugins/lightbox/custom-photswipe.js')}}"></script>

{{-- Input Mask  --}}
<script src="{{asset('plugins/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{asset('plugins/input-mask/input-mask.js')}}"></script>
<script type="text/javascript">
    feather.replace();
</script>



<script>
         
      
         ClassicEditor
        .create( document.querySelector( '#ckeditor' ), {
            toolbar: {
                items: [
                    'heading', '|',
                    'alignment', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                    'link', '|',
                    'bulletedList', 'numberedList', 'todoList',
                    'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor', '|',
                    'code', 'codeBlock', '|',
                    'insertTable', '|',
                    'outdent', 'indent', '|',
                    'uploadImage', 'blockQuote', '|',
                    'undo', 'redo','SourceDialog'
                ],
                shouldNotGroupWhenFull: true
            },

            ckfinder: {
                uploadUrl: '{{route('pages.image').'?_token='.csrf_token()}}'
            }
        })
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })

 
 
    
    $("#logout_form").on("click", function() {
        swal({
            title: 'Logga ut?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK',
            closeOnConfirm: true,
            closeOnCancel: true
        }).then((result) => { 
          if (result.value===true) { 
             $('#logoutform').submit() // this submits the form 
          } 
        }) 
    })
       Highcharts.chart('containers', {
  chart: {
    styledMode: true
  },

  title: {
    text: ''
  },

  xAxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
  },

  series: [{
    type: 'pie',
    allowPointSelect: true,
    keys: ['name', 'y', 'selected', 'sliced'],
    data: [
      ['Aluminum ', 29.9, false],
      ['Clad Wood', 71.5, false],
      ['Window Walls', 106.4, false],
      ['Vinyl ', 129.2, false]
    ],
    showInLegend: true
  }]
});

Highcharts.chart('chart-questreq', {
  chart: {
    type: 'column'
  },
  title: {
    text: ''
  },
  xAxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
  },
  credits: {
    enabled: false
  },
  series: [{
    data: [5, 3, 4, 7, 2] ,  name: 'Quotes'
  }, {
    data: [2, 2,3, 2, 1],  name: 'Orders'
  }]
});

Highcharts.chart('salesBycity', {
  chart: {
    type: 'column'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Rainfall'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Houston',
    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

  }, {
    name: 'Austin',
    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

  }, {
    name: 'Dallas',
    data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

  }]
});

Highcharts.chart('saleByMaterial', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Stacked column chart'
  },
  xAxis: {
    categories: ['Houston', 'Austin', 'Dallas']
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Total fruit consumption'
    }
  },
  tooltip: {
    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
    shared: true
  },
  plotOptions: {
    column: {
      stacking: 'percent'
    }
  },
  series: [{
    name: 'Aluminum',
    data: [5, 3, 4]
  }, {
    name: 'Glass',
    data: [2, 2, 3]
  }, {
    name: 'Wood',
    data: [3, 4, 4]
  }]
});
   
Highcharts.chart('totalSales', {

    title: {
        text: ''
    },

    subtitle: {
        text: ''
    },

    yAxis: {
        title: {
            text: ''
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2010 to 2022'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Sales',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});  
</script>
<script>
    //validation for Pages
   
 // Staff Account Create Form Validation
$(document).ready(function () {
    $('#staffFormValidation').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true,    
            },
            emp_id: {
                required: true,
            },
            country: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            zipcode: {
                required: true,
            },
            doj: {
                required: true,
                date: true
            },
            dob: {
                required: true,
                date: true
            },
            status: {
                required: true,
            },
            roles: {
                required: true
            },
            gender: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $.validator.methods.email = function (value, element) {
        return this.optional(element) || /[a-zA-Z0-9]+@[a-z]+\.[a-z]+/.test(value);
    }
}); 
$(document).ready(function () {
    makechart();
    makechartProduct();
    $('#form1').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true,    
            },
            emp_id: {
                required: true,
                emp_id: true
            },
            country: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            zipcode: {
                required: true,
                minlength: 6,
                maxlength: 6
            },
            doj: {
                required: true,
            },
            dob: {
                required: true,
            },
            status: {
                required: true,
            },
            roles: {
                required: true
            },
            gender: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true

            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $.validator.methods.email = function (value, element) {
        return this.optional(element) || /[a-zA-Z0-9]+@[a-z]+\.[a-z]+/.test(value);
    }
});
$('#rolesform').validate({ 
            rules: {
                name: {
                    required: true
                },
                permission: {
                    required: true
                },
            },
            errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        
        });
// New Customer form validation Manish Kumar
$(document).ready(function () {
    $('#addNewCusForm').validate({
        rules: {
            name: {
                required: true
            },
            last_name: {
                required: true
            },
            email: {
                required: true,
                email: true,    

            },
            gender: {
                required: true,
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
            country: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            zipcode: {
                required: true,
                minlength: 6,
                maxlength: 6,
                number: true
            },
            address: {
                required: true,
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },                          
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }

    });
    $.validator.methods.email = function (value, element) {
        return this.optional(element) || /[a-zA-Z0-9]+@[a-z]+\.[a-z]+/.test(value);
    }
});
// Edit customer info form validation Manish Kumar
$(document).ready(function () {
    $('#cusEditForm').validate({
        rules: {
            name: {
                required: true
            },
            last_name: {
                required: true
            },
            email: {
                required: true,
            },
            gender: {
                required: true
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
            country: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            zipcode: {
                required: true,
                minlength: 6,
                maxlength: 6,
                number: true
            },

        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $.validator.methods.email = function (value, element) {
        return this.optional(element) || /[a-zA-Z0-9]+@[a-z]+\.[a-z]+/.test(value);
    }
});


</script>
<script>
//First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage');
    var secondUpload = new FileUploadWithPreview('mySecondImage');

</script>

<script src="{{ asset('js/backend/admin_custom.js') }}" defer></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.16.0/jquery.validate.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
          tags: "true",
          placeholder: "Select an option",
          allowClear: true
      });
        $('.js-example-basic-multiple').on("change", function(e) { 
           var numInputs = $(this).last().val();

           $("#inputArea").append('<input data-id="+numInputs+" id="cover" value='+numInputs+' name="inputs[]" />');
           alert(numInputs);
       });
    });

    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
      }
      form.classList.add('was-validated');
  }, false);
  });
}, false);


</script>

<script>
    $(document).ready(function() {

        let toast = $('.toast');

        setTimeout(function() {
            toast.toast({
                delay: 5000,
                animation: true
            });
            toast.toast('show');

        }, 2200);

        var data1 = [
        [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
        [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
            data1, data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#1C84C6"],
                xaxis:{
                },
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            }
            );

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [300,50,100],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [70,27,85],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });

    $(window).bind("scroll", function () {
        let toast = $('.toast');
        toast.css("top", window.pageYOffset + 20);

    });
</script>


<script>
  
</script>

<!-- Page-Level Scripts -->
<script>
    // Upgrade button class name
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ]

        });

        });

</script>
<script type="text/javascript">
    $(function () {

        var table = $('.customer-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/customer') }}",
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
     
        //delete function for Categories Manish kumar
function deleteCategories1(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "url": "{{ url('admin/delete-categories') }}",
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    console.log(result.message)
                    if(result.success == false){
                        swal({
                            title: result.message,
                            icon: "error",
                            buttons: true,
                            dangerMode: true,
                        });
                    }else{
                        swal({
                            title: result.message,
                            icon: "success",
                            buttons: true,
                            dangerMode: true,
                        }).then((value) => {
                            if(value) {
                                $('#categoriesListing').DataTable().ajax.reload();
                            } else {}
                        });
                    }
                }
            });
        }
    });
}
//delete function for Page Manish kumar
function deletePage(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "url": "{{ url('admin/delete-page') }}",
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    if(result.success == false){
                        swal({
                            title: result.message,
                            icon: "error",
                            buttons: true,
                            dangerMode: true,
                        });
                    }else{
                        swal({
                            title: "Page Deleted Successfully!!",
                            icon: "success",
                            buttons: true,
                            dangerMode: true,
                        }).then((value) => {
                            if(value) {
                                $('#pages-list-datatable').DataTable().ajax.reload();
                            } else {}
                        });
                    }
                }
            });
        }
    });
}
//delete function for staff  Manish Kumar
function deleteStaff(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "url": "{{ url('admin/delete-staff-member') }}",
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    swal({
                        title: "Staff Deleted Successfully!!",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    }).then((value) => {
                        if(value) {
                            $('#staff-list-datatable').DataTable().ajax.reload();
                        } else {}
                    });
                }
            });
        }
    });
}
      //delete function for Role Manish Kumar
function deleteRole(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "url": "{{ url('admin/destroy-roles') }}",
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    swal({
                        title: "Role Deleted Successfully!!",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    }).then((value) => {
                        if(value) {
                            location.reload();
                        } else {}
                    });
                }
            });
        }
    });
}
      function deleteItem(e){ 
       let id = e.getAttribute('data-id');
       swal({
          title: `Are you sure you want to delete this record?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
         $.ajax({
            "url": "{{ url('admin/usersmanagement/delete') }}",
            "type": "POST",
            "data": {id: id,_token: '{{csrf_token()}}'},
            success: function (result) {
               swal({
                  title: "Customer Account Deleted Successfully!!",
                  icon: "success",
                  buttons: true,
                  dangerMode: true,
              })
               setTimeout(function() {

                location.reload();
            }, 2000);
           }
       });
     }
   });
  }

  function deleteAgent(e){ 
       let id = e.getAttribute('data-id');
       swal({
          title: `Are you sure you want to delete this record?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
         $.ajax({
            "url": "{{ url('admin/agent/delete') }}",
            "type": "POST",
            "data": {id: id,_token: '{{csrf_token()}}'},
            success: function (result) {
               swal({
                  title: "Agent Account Deleted Successfully!!",
                  icon: "success",
                  buttons: true,
                  dangerMode: true,
              })
               setTimeout(function() {

                location.reload();
            }, 2000);
           }
       });
     }
   });
  }

// Function for Customer delete Manish Kumar
function deleteUser(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    swal({
                        title: "User Account Deleted Successfully!!",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    }).then((value) => {
                        if(value) {
                            $('#customer-list-datatable').DataTable().ajax.reload();
                        } else {}
                    });
                }
            });
        }
    });
}
// Function for User Request delete Manish Kumar
function deleteUserReq(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "url": "{{ url('admin/usersrequests/delete') }}",
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    swal({
                        title: "User Request Deleted Successfully!!",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    }).then((value) => {
                        if(value) {
                            $('#request-list-datatable').DataTable().ajax.reload();
                        } else {}
                    });
                }
            });
        }
    });
}

//delete function for Role Manish Sharma
function deleteProduct(e) {
	let id = e.getAttribute('data-id');
	swal({
		title: `Are you sure you want to delete this record?`,
		text: "If you delete this, it will be gone forever.",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if(willDelete) {
			$.ajax({
				"url": "{{ url('admin/delete-products') }}",
				"type": "POST",
				"data": {
					id: id,
					_token: '{{csrf_token()}}'
				},
				success: function(result) {
					swal({
						title: "Product Deleted Successfully!!",
						icon: "success",
						buttons: true,
						dangerMode: true,
					}).then((value) => {
						if(value) {
                            $('#product-list-datatable').DataTable().ajax.reload();
						} else {}
					});
				}
			});
		}
	});
}

//delete function for Classes Manish Sharma

function deleteClass(e) {
    let id = e.getAttribute('data-id');
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if(willDelete) {
            $.ajax({
                "url": "{{ url('admin/classmanagement/delete-class') }}",
                "type": "POST",
                "data": {
                    id: id,
                    _token: '{{csrf_token()}}'
                },
                success: function(result) {
                    console.log(result.message)
                    if(result.success == false){
                        swal({
                            title: result.message,
                            icon: "error",
                            buttons: true,
                            dangerMode: true,
                        });
                    }else{
                        swal({
                            title: result.message,
                            icon: "success",
                            buttons: true,
                            dangerMode: true,
                        }).then((value) => {
                            if(value) {
                                $('#class-list-datatable').DataTable().ajax.reload();
                            } else {}
                        });
                    }
                }
            });
        }
    });
}


$('#country-dd').on('change', function () {
        var idCountry = $('option:selected', this).attr('data-id');
        $("#state-dd").html('');
        $.ajax({
            "url": "{{ url('admin/getstates') }}",
            "type": "POST",
            "data": {
                country_id: idCountry,
                _token: '{{csrf_token()}}'
            },
            "dataType": 'json',
            success: function (result) {
                $('#state-dd').html('<option value="">Select State</option>');
                $.each(result.states, function (key, value) {
                    $("#state-dd").append('<option value="' + value
                        .id + '">' + value.name + '</option>');
                });
                $('#city-dd').html('<option value="">Select City</option>');
            }
        });
    });

     $('#category-dd').on('change', function () {
        var parent_catID = $('option:selected', this).val();
        $("#subcategory-dd").html('');
        $.ajax({
            "url": "{{ url('admin/getsubcategory') }}",
            "type": "POST",
            "data": {
                category_id: parent_catID,
                _token: '{{csrf_token()}}'
            },
            "dataType": 'json',
            success: function (result) {
               $.each(result.subcategory, function (key, value) {
                    $("#subcategory-dd").append('<option value="' + value
                        .id + '">' + value.cat_name + '</option>');
                });
                
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

<script>
    
        //Exiting Customer list Manish Kumar 
         $('#customer-list-datatable').DataTable({
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'role_type', name: 'role_type'},
            {data: 'phone', name: 'phone'},
            {data: 'city', name: 'city'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });

        //Exiting Customer list Manish Kumar 
         $('#pages-list-datatable').DataTable({
            processing: true,
            serverSide: true,
            
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            ajax: "{{ url('/admin/pages') }}",
            columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               
               return nRow;
            }
        }); 
        
        //Exiting Customer list Manish Kumar 
         $('#request-list-datatable').DataTable({
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            ajax: "{{ url('/admin/requests') }}",
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });
        
        


//categories listing Manish Kumar
        $('#categoriesListing').DataTable({
            scrollX: true,
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            
            ajax: "{{ url('/admin/productmanagement/categories') }}",
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'cat_name', name: 'cat_name'},
            {data: 'cat_check_parent', name: 'cat_check_parent'},
            {data: 'sub_cat', name: 'sub_cat'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });
        
        // Listing Staff detail Manish kumar
        $('#staff-list-datatable').DataTable({
            scrollX: true,
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            ajax: "{{ url('/admin/staffmanagement/staffs') }}",
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'roles', name: 'roles'},
            {data: 'phone', name: 'phone'},
            {data: 'emp_id', name: 'emp_id'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });

		  //Products listing Manish Sharma

          $('#product-list-datatable').DataTable({
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            ajax: "{{ url('/admin/productmanagement/products') }}",
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            // {data: 'slug', name: 'slug'},
            // { 
            // data: 'affiliate_url',
            // "render": function(data, type, row, meta){
            //     if(type === 'display'){
            //     data = '<a href="' +data+ '">' + data + '</a>';
            //     }
            //     return data;
            //     }
            // } ,
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });

        //Class listing Manish Sharma

        $('#blog-list-datatable').DataTable({
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
            ajax: "{{ url('/admin/blogs') }}",
            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'body', name: 'body'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });

        //Registered Classes list Manish Kumar 
         $('#registeredClass-list-datatable').DataTable({
            processing: true,
            serverSide: true,
            oLanguage: {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
              ajax: "{{ url('/admin/classmanagement/registered-classes') }}",

            columns: [
            
            {data: 'id', name: 'id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'class_id', name: 'class_id'},
            {data: 'created_at', name: 'created_at'},
            ],
            
            fnRowCallback : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            }
        });


// Creating Slug in Product Module Manish Sharma

$('#ProductTitle').blur(function() {
        var product_title = $("#ProductTitle").val();
        var title = product_title.toLowerCase();
        var arrname = title.replace(/\s/g, "_");
        var alias = $("#ProductSlug").val(arrname);
    });
   

</script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>

<script>
    // var e;
          c1 = $('#style-1').DataTable({
              headerCallback:function(e, a, t, n, s) {
                  e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-outline-info m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
              },
              columnDefs:[ {
                  targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                      return'<label class="new-control new-checkbox checkbox-outline-info  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                  }
              }],
              "oLanguage": {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
              "lengthMenu": [5, 10, 20, 50],
              "pageLength": 5
          });

          multiCheck(c1);

          c2 = $('#style-2').DataTable({
              headerCallback:function(e, a, t, n, s) {
                  e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-outline-info m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
              },
              columnDefs:[ {
                  targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                      return'<label class="new-control new-checkbox checkbox-outline-info  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                  }
              }],
              "oLanguage": {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
              "lengthMenu": [5, 10, 20, 50],
              "pageLength": 5 
          });

          multiCheck(c2);

          c3 = $('#style-3').DataTable({
              columnDefs: [
   { orderable: false, targets: -1 }
],
              "autoWidth": false,
                "scrollX": true,
              "oLanguage": {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
              "stripeClasses": [],
              "lengthMenu": [10, 25, 50, 100],
              "pageLength": 10
          });

          multiCheck(c3);
          c4 = $('#style-4').DataTable({
               columnDefs: [
   { orderable: false, targets: -1 }
],
                "scrollX": true,
              "oLanguage": {
                  "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
              },
              "stripeClasses": [],
              "lengthMenu": [10, 25, 50, 100],
              "pageLength": 10
          });

          multiCheck(c4);
</script>
<script>
    // Staff Edit Form Validation Manish Kumar
    $(document).ready(function () {
        $('#staffEditFormVali').validate({ 
            rules: {
                name: {
                    required: true
                },
                emp_id: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                gender: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                city: {
                    required: true
                },
                zipcode: {
                    required: true
                },
                roles: {
                    required: true
                },
                doj: {
                    required: true
                },
                dob: {
                    required: true
                },
                dob: {
                    required: true
                },
                
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                    
                },
            },
            errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
        $.validator.methods.email = function( value, element ) {
            return this.optional( element ) || /[a-zA-Z0-9]+@[a-z]+\.[a-z]+/.test( value );
        }
    });
    </script>
    <!-- Image Uploader -->
    <script type="text/javascript" src="{{ asset('js/backend/image-uploader.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/backend/image-uploader.min.js') }}"></script>
    <script>
     $(document).ready(function () {
        $('#form13').validate({ 
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true,
                },
                gender: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                city: {
                    required: true
                },
                zipcode: {
                    required: true,
                    minlength: 6,
                    maxlength: 6
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                    
                },
            },
            errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
        $.validator.methods.email = function( value, element ) {
             return this.optional( element ) || /[a-zA-Z0-9]+@[a-z]+\.[a-z]+/.test( value );
        }
    });
    
</script>
<script>
    $(function () {
        // $('.input-images-2').imageUploader({
        //     preloaded: preloaded,
        //     imagesInputName: 'photos',
        //     preloadedInputName: 'old'
        // }); 

        $('.input-images-1').imageUploader();

        // Input and label handler
        $('input').on('focus', function () {
            $(this).parent().find('label').addClass('active')
        }).on('blur', function () {
            if ($(this).val() == '') {
                $(this).parent().find('label').removeClass('active');
            }
        }); 

        // Sticky menu
        let $nav = $('nav'),
            $header = $('header'),
            offset = 4 * parseFloat($('body').css('font-size')),
            scrollTop = $(this).scrollTop();

        // Initial verification
        setNav();

        // Bind scroll
        $(window).on('scroll', function () {
            scrollTop = $(this).scrollTop();
            // Update nav
            setNav();
        });

       /* function setNav() {
            if (scrollTop > $header.outerHeight()) {
                $nav.css({position: 'fixed', 'top': offset});
            } else {
                $nav.css({position: '', 'top': ''});
            }
        }*/
        $('.image-uploader').css('min-height', '25.6rem')
    });
</script>

<script>
    // Categories Form Validation Manish kumar
    $('#categoriesForm').validate({
        rules: {

            cat_name: {
                required: true
            },
            parentid: {
                required: true
            },
            status: {
                required: true,
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
//Category Type selection on add/edit category page
$('#categoriesForm input[type=radio]').change(function() {
    //alert(this.value);
    if (this.value == 1) {
        $("#categoriesForm").validate().resetForm();
        $('#catdiv').show().find('select').attr('name','parentid');
    }else{
        $("#categoriesForm").validate().resetForm();
        $('#catdiv').hide().$('#country-dd').removeAttr('name');
    }
});




$("#timePicker").timepicker({});


</script>
<script>
{{-- Add Product Validation  Manish Sharma--}}
    $('#addproductsForm').validate({
        
       rules: {
           product_image: {
               required: true,
           },
           product_title: {
               required: true,
           },
           product_description: {
               required: true,
           },
           status: {
               required: true,
           },
           product_category: {
               required: true,
           },
           product_price: {
               required: true,
               digits:true,
           },
          
           product_affliate_url: {
               required: true,
           },
           product_meta_title: {
               required: true,
           },
           product_meta_keyword: {
               required: true,
           },
           product_meta_description: {
               required: true
           },
           
       },
       errorElement: 'span',
       errorPlacement: function (error, element) {
           error.addClass('invalid-feedback');
           element.closest('.form-group').append(error);
       },
       highlight: function (element, errorClass, validClass) {
           $(element).addClass('is-invalid');
       },
       unhighlight: function (element, errorClass, validClass) {
           $(element).removeClass('is-invalid');
       }
   });

{{-- Edit Product Validation  Manish Sharma--}}

   $('#editproductsForm').validate({
       rules: {
           product_image: {
               required: true
           },
           product_title: {
               required: true,
           },
           product_description: {
               required: true,
           },
           status: {
               required: true,
           },
           product_category: {
               required: true,
           },
           product_price: {
               required: true,
               digits:true,
           },
           product_slug: {
               required: true,
           },
           product_affliate_url: {
               required: true,
           },
           product_meta_title: {
               required: true,
           },
           product_meta_keyword: {
               required: true,
           },
           product_meta_description: {
               required: true
           },
           
       },
       errorElement: 'span',
       errorPlacement: function (error, element) {
           error.addClass('invalid-feedback');
           element.closest('.form-group').append(error);
       },
       highlight: function (element, errorClass, validClass) {
           $(element).addClass('is-invalid');
       },
       unhighlight: function (element, errorClass, validClass) {
           $(element).removeClass('is-invalid');
       }
});

{{-- Add Class Validation  Manish Sharma--}}
$('#addclassForm').validate({
        
        rules: {
            image: {
                required: true,
            },
            title: {
                required: true,
            },
            description: {
                required: true,
            },
            status: {
                required: true,
            },
            class_note: {
                required: true,
            },
            price: {
                required: true,
                digits:true,
            },
            class_timing: {
                required: true,
            },
            
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    {{-- Edit Class Validation  Manish Sharma--}}
$('#editclassForm').validate({
        
        rules: {
            
            title: {
                required: true,
            },
            description: {
                required: true,
            },
            status: {
                required: true,
            },
            class_note: {
                required: true,
            },
            price: {
                required: true,
                digits:true,
            },
            class_timing: {
                required: true,
            },
            
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

var addproductForm = new FileUploadWithPreview('addproductForm')

</script>
<script>
{{--  Add Class Request Validation Manish Sharma --}}

  $('#addClass').validate({
       rules: {
           first_name: {
               required: true
           },
           last_name: {
               required: true,
           },
           email: {
               required: true,
               email:true,

           },
           city: {
               required: true,
           },
           phone: {
               required: true,
               digits:true,
               minlength:10,
               maxlength:10,
           },
           zipcode: {
               required: true,
                minlength: 6,
                maxlength: 6,
                number: true
           },
           request_info: {
               required: true,
           },
           
       },
       errorElement: 'span',
       errorPlacement: function (error, element) {
           error.addClass('invalid-feedback');
           element.closest('.form-group').append(error);
       },
       highlight: function (element, errorClass, validClass) {
           $(element).addClass('is-invalid');
       },
       unhighlight: function (element, errorClass, validClass) {
           $(element).removeClass('is-invalid');
       }
});
</script>


@yield('scripts')