<script src="{{ url('/') }}/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{ url('/') }}/assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="{{ url('/') }}/assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ url('/') }}/assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('/') }}/assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ url('/') }}/assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('/') }}/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });

    @if(Session::get('data'))
        <?php
            $data   =   Session::get('data');
            Session::forget('data');
        ?>
        color = Math.floor((Math.random() * 4) + 1);

        $.notify({
            icon: "notifications",
            message: "{{ $data['message'] }}"
        }, {
            type: type[color],
            timer: 4000,
            placement: {
                from: 'top',
                align: 'right'
            }
        });
    @endif
</script>