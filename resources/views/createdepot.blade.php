<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Drew Idiesca">
    <title>CSC Systems</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="http://jfc-csc.herokuapp.com/public/dashboard.css" rel="stylesheet">
    <link href="http://jfc-csc.herokuapp.com/public/bootstrap-datepicker.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
  <body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: red;">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="http://jfc-csc.herokuapp.com/public/home/splash"><b>CSC Systems</b></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="http://jfc-csc.herokuapp.com/public">Sign out</a>
    </li>
  </ul>
</nav><div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sample.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Hotlist Report Items
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('depot.create')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                            Hotlist Depot
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sbu.create')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                            Hotlist SBU
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('item.create')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                            Hotlist Item
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jfc-csc.herokuapp.com/public/noah/report">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jfc-csc.herokuapp.com/public/home/splash">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                            Back to Main Menu
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    </div>
    <h1 class="h2">Create Depot</h1>
    <br>
    <i style="color: red;">NOTE: if there are same items still for 
    disposition/acknowledgement item creation will not go through and prompt users why </i>
    <form action="{{route('depot.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <label>Plant/Depot No.:</label>
                <input type="text" id="name" name="name">
            </div>
        </div>
    <br>
    <div class="float-left mb-3">
        <button type="submit" onclick="save()" class="btn btn-primary">Submit</button>
        <button type="button" onclick="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</main>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script><script src="http://jfc-csc.herokuapp.com/public/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="http://jfc-csc.herokuapp.com/public/dashboard.js"></script>
<script src="http://jfc-csc.herokuapp.com/public/bootstrap-datepicker.js"></script>


<script>
    function save() {
        if (confirm("Do you want to save order request?") == true) {
            location.replace("http://127.0.0.1:8000/sample");
        } 
    }

    function cancel() {
        if (confirm("Do you want to cancel order request?") == true) {
            location.replace("http://127.0.0.1:8000/sample");
        } 
    }

    $("#itemSelect").change(function(){
        $("#itemCat").html("<b>"+$("#itemSelect").val()+" Category</b>")
        $("#itemUOM").html("<b>"+$("#itemSelect").val()+" UOM</b>")
    });

    $("#consumeDate").change(function(){
        var cuDate = new Date($("#consumeDate").val());
        var currentDate = new Date();
        var diffDays = getRemainingShelfLife(cuDate, currentDate)
        var SSL = $("#ItemSSL").val();
        $("#ItemRSS").html("<b>"+diffDays+" DAYS</b>");
        
        if(diffDays <= 0) {
            $("#itemType").html("<b>Lapsed</b>");
        } else if(diffDays <= 15 && SSL > 30 || diffDays <= 8 && SSL <= 30) {
            $("#itemType").html("<b>not acceptable</b>");
        } else {
            $("#itemType").html("<b>Near Lapsed</b>");
        }
    });

    $("#ItemSSL").keyup(function(){
        var cuDate = new Date($("#consumeDate").val());
        var currentDate = new Date();
        var diffDays = getRemainingShelfLife(cuDate, currentDate)
        var SSL = $("#ItemSSL").text();
        $("#ItemRSS").html("<b>"+diffDays+" DAYS</b>");
        
        if(diffDays <= 0) {
            $("#itemType").html("<b>Lapsed</b>");
        } else if(diffDays <= 15 && SSL > 30 || diffDays <= 8 && SSL <= 30) {
            $("#itemType").html("<b>not acceptable</b>");
        } else {
            $("#itemType").html("<b>Near Lapsed</b>");
        }
    });

    function getRemainingShelfLife(cuDate, currentDate){
        const diffTime = Math.abs(cuDate - currentDate);
        const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
        return diffDays;
    }

    $('.datepicker').datepicker();
</script>
</div></body></html>
