<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>

<script>
    $(function () {
        $("#simple_paginate").DataTable({
            "language": {
                "paginate": {
                    "next": "بعدی",
                    "previous" : "قبلی"
                }
            },
            "info" : false,
        });
    // $('#simple_paginate').DataTable({
    //     "language": {
    //         "paginate": {
    //             "next": "بعدی",
    //             "previous" : "قبلی"
    //         }
    //     },
    //     "info" : false,
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "autoWidth": false
    // });
    });
</script>
