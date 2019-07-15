<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>News Sport</title>
    <link href="{{asset('template/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('template/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="{{asset('template/stylesheet" type="text/css')}}" href="assets/css/zabuto_calendar.css">
    <link rel="{{asset('template/stylesheet" type="text/css')}}" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="{{asset('template/stylesheet" type="text/css" href="assets/lineicons/style.css')}}">    
    
    <!-- Custom styles for this template -->
    <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('template/assets/js/chart-master/Chart.js')}}"></script>
     <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  </head>

  <body>
    <div>
      @include('header')
      @yield('main')
    </div>
    @yield ('footer')


    <script src="{{asset('template/assets/js/jquery.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('template/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.nicescroll.js" type="text/javascript')}}"></script>
    <script src="{{asset('template/assets/js/jquery.sparkline.js')}}"></script>
    <script src="{{asset('template/assets/js/common-scripts.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('template/assets/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/js/gritter-conf.js')}}"></script>

    <!-- script for this page -->
     <script src="{{asset('template/assets/js/sparkline-chart.js')}}"></script>
	<script src="{{asset('template/assets/js/zabuto_calendar.js')}}"></script>	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <script>
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader= new FileReader();

                reader.onload = function(e){
                    $('#blah')
                        .attr('src',e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
  

  </body>
</html> 
