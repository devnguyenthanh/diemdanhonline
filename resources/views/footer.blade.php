
<!-- Jquery JS-->
<script src="{{URL::asset('/template/cool-master/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{URL::asset('/template/cool-master/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{URL::asset('/template/cool-master/vendor/slick/slick.min.js')}}">
</script>
<script src="{{URL::asset('/template/cool-master/vendor/wow/wow.min.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{URL::asset('/template/cool-master/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{URL::asset('/template/cool-master/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{URL::asset('/template/cool-master/js/main.js')}}"></script>
<script src="{{URL::asset('/template/cool-master/js/custom.js')}}"></script>

{{--clock--}}
<script type="text/javascript">

    const getCurrentTimeDate = () => {
        let currentTimeDate = new Date();

        var weekday = new Array(7);
        weekday[0] = "SUN";
        weekday[1] = "MON";
        weekday[2] = "TUE";
        weekday[3] = "WED";
        weekday[4] = "THU";
        weekday[5] = "FRI";
        weekday[6] = "SAT";

        var month = new Array();
        month[0] = "1";
        month[1] = "2";
        month[2] = "3";
        month[3] = "4";
        month[4] = "5";
        month[5] = "6";
        month[6] = "7";
        month[7] = "8";
        month[8] = "9";
        month[9] = "10";
        month[10] = "11";
        month[11] = "12";

        var hours   =  currentTimeDate.getHours();

        var minutes =  currentTimeDate.getMinutes();
        minutes = minutes < 10 ? '0'+minutes : minutes;

        var AMPM = hours >= 12 ? 'PM' : 'AM';

        if(hours === 12){
            hours=12;

        }else{

            hours = hours%12;

        }

        var currentTime = `${hours}:${minutes}${AMPM}`;
        var currentDay = weekday[currentTimeDate.getDay()];

        var currentDate  = currentTimeDate.getDate();
        var currentMonth = month[currentTimeDate.getMonth()];
        var CurrentYear = currentTimeDate.getFullYear();

        var fullDate = `${currentDate} ${currentMonth} ${CurrentYear}`;


        document.getElementById("time").innerHTML = currentTime;
        document.getElementById("day").innerHTML = currentDay;
        document.getElementById("date").innerHTML = fullDate;

        setTimeout(getCurrentTimeDate, 500);

    }
    getCurrentTimeDate();

</script>

</body>

</html>
<!-- end document-->