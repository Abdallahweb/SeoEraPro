<footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2025 <div class="bullet"></div> Developed By <a
                        href="https://abdallahweb.github.io/resume/">Abdallah Fouad</a>
                </div>
                <div class="footer-right"></div>
            </footer>
        </div>
    </div>



    <script src="{{asset('Dashboard/dist/modules/jquery.min.js')}}"></script>
    <script src="{{asset('Dashboard/dist/modules/popper.js')}}"></script>
    <script src="{{asset('Dashboard/dist/modules/tooltip.js')}}"></script>
    <script src="{{asset('Dashboard/dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Dashboard/dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('Dashboard/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
    <script src="{{asset('Dashboard/dist/js/sa-functions.js')}}"></script>

    <script src="{{asset('Dashboard/dist/modules/chart.min.js')}}"></script>
    <script src="{{asset('Dashboard/dist/modules/summernote/summernote-lite.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    function confirmation(ev){
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    swal({
        title : "Are You Sure To Delete This",
        text : "This Delete Will Be Parment",
        icon : "warning",
        buttons : true,
        dangerMode : true
    }).then((willCancel)=>{
        if(willCancel){
            window.location.href = urlToRedirect;
        }
    })

    }



    function confirmationProd(ev){
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');

    swal({
        title : "Are You Sure To Delete This",
        text : "This Delete Will Be Parment",
        icon : "warning",
        buttons : true,
        dangerMode : true
    }).then((willCancel)=>{
        if(willCancel){
            window.location.href = urlToRedirect;
        }
    })

    }
</script>

    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                label: 'Statistics',
                data: [460, 458, 330, 502, 430, 610, 488],
                borderWidth: 2,
                backgroundColor: 'rgb(87,75,144)',
                borderColor: 'rgb(87,75,144)',
                borderWidth: 2.5,
                pointBackgroundColor: '#ffffff',
                pointRadius: 4
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 150
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }]
            },
        }
    });
    </script>
    <script src="{{asset('Dashboard/dist/js/scripts.js')}}"></script>
    <script src="{{asset('Dashboard/dist/js/custom.js')}}"></script>
    <script src="{{asset('Dashboard/dist/js/demo.js')}}"></script>
