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
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
</style>
</head>
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
                        <a class="nav-link" href="http://jfc-csc.herokuapp.com/public/noah/orderlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Hotlist Report Items
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jfc-csc.herokuapp.com/public/noah/hotlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                            Hotlist (3PL)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jfc-csc.herokuapp.com/public/noah/jwslhotlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                            Hotlist (JWSL)
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
    <h1 class="h2">Hotlist Report Items</h1>
      <div class="float-right mb-3">
        <!-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop">Upload Excel Template</button> -->
        <a type="button" href="{{route('sample.create')}}" class="btn btn-info">Create Report Item</a>
      </div>
      <div class="table-responsive">
        <div id="orderTable_wrapper" class="dataTables_wrapper no-footer">
            <div class="dataTables_length" id="orderTable_length">
        </div>
        <div id="orderTable_filter" class="dataTables_filter">
        </div>
        <table id="orderTable" class="table table-striped table-bordered table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="orderTable_info">
          <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SBU: activate to sort column descending" style="width: 30px;">SBU</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="Depot: activate to sort column ascending" style="width: 42px;">Depot</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="Item: activate to sort column ascending" style="width: 74px;">Item</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="UOM: activate to sort column ascending" style="width: 35px;">UOM</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="# of Pallet Used: activate to sort column ascending" style="width: 39px;"># of Pallet Used</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="Actual Balance: activate to sort column ascending" style="width: 55px;">Actual Balance</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="TP/UOM: activate to sort column ascending" style="width: 58px;">TP/UOM</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="Item Type: activate to sort column ascending" style="width: 35px;">Item Type</th>
                <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 46px;">Status</th>
                <th style="width: 120px;" class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
            </tr>
          </thead>
          <tbody>
        @foreach ($datas as $data)
        @csrf
          <tr>
              <td class="sorting_1"> {{$data->sbu}}</td>
              <td> {{$data->depot}}</td>
              <td> {{$data->item}}</td>
              <td> {{$data->UOM}}</td>
              <td> {{$data->Pallet}}</td>
              <td> {{$data->Actual}}</td>
              <td> {{$data->TP}}</td>
              <td> {{$data->ItemType}}</td>
              <td> {{$data->Status}}</td>
            <td>
                <a type="button" href="{{route('sample.edit',$data->id)}}" class="btn btn-info">Update</a> 
                <a type="button" href="{{route('sample.destroy',$data->id)}}" class="btn btn-danger">Delete</a>
            <button style="padding-left: 5px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">Details</button>
              </td>
            </tr>
        @endforeach
        </tbody>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Upload Disposition</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-12 col-md-12">
                          <label>Order Template File</label>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="bookingFile">
                              <label class="custom-file-label" id="bookingFileLabel">Choose file...</label>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" onclick="uploadTemp()" data-dismiss="modal" class="btn btn-info">Upload Template</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Item Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Plant/Depot No.</label>: {{$data->Depot}}
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Requestor Name</label>: Drew
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Requestor Email</label>: Drew@email.com
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">SBU</label>: {{$data->SBU}}
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Item</label>: 4000007033-Wrapper
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Item Category</label>: Food
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">UOM</label>: CSE
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Date Receive</label>: Oct 8, 2020
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">CU Date</label>: Oct 8, 2020
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Standard Shelf Life</label>: 12 days
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Remaining Shelf Life</label>: 12 days
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Item type</label>: Slow Moving
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">TP/UOM</label>: 100
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold"># of Pallet Used</label>: {{$data->Pallet}}
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">SAP Inventory Balance</label>: 6
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Actual Balance</label>: 6
                      </div>
                     
                      <div class="col-sm-12 col-md-12">
                          <hr>
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Date Encoded</label>: Oct 8, 2020
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Request Aging</label>: 6 days
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Date of Sending</label>: Oct 10, 2020
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Date of Disposition</label>: Oct 11, 2020
                      </div>
                      <div class="col-sm-6 col-md-6">
                          <label class="font-weight-bold">Disposition Aging</label>: 5 days
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Date of Contention</label>: Oct 12, 2020
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Date of Disposal</label>: Oct 13, 2020
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Date Closed</label>: Oct 14, 2020
                      </div>
                      <div class="col-sm-12 col-md-12">
                          <label class="font-weight-bold">Last Transaction Date</label>: Oct 14, 2020
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="http://jfc-csc.herokuapp.com/public/assets/dist/js/bootstrap.bundle.min.js"></script>
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
    $(document).ready(function() {
        $('#orderTable').DataTable();
    } );
    
    $('input[type=file]').change(function() {
        let fileID = $(this).attr('id');
        let getlength = $('#' + fileID)[0].files[0].name.length;
        let fileName = $('#' + fileID)[0].files[0].name;
        $('#' + fileID + 'Label').text(fileName);
        if (getlength > 40) {
            $('#' + fileID + 'Label').text(fileName.substring(0, 40) + '...');
        }
    });
    
    /*function uploadTemp() {
      if (confirm("Do you want to upload order request?") == true) {
        $('#orderTable tbody tr:last').after('<tr>'
        +'<td>JB</td>'
        +'<td>F3 Cebu</td>'
        +'<td>4000007033-Wrapper</td>'
        +'<td>CSE</td>'
        +'<td>0.10</td>'
        +'<td>6</td>'
        +'<td>100</td>'
        +'<td>Slow Moving</td>'
        +'<td>Pending</td>'
        +'<td><button type="button" class="btn btn-info">Update</button><button style="padding-left: 5px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">Details</button><</td>'
        +'</tr>'
        +'<tr>'
        +'<td>JB</td>'
        +'<td>F3 Cebu</td>'
        +'<td>4000007523-Saucer gravy</td>'
        +'<td>PC</td>'
        +'<td>2.00</td>'
        +'<td>209</td>'
        +'<td>100</td>'
        +'<td>Slow Moving</td>'
        +'<td>Pending</td>'
        +'<td><button type="button" class="btn btn-info">Update</button><button style="padding-left: 5px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">Details</button></td>'
        +'</tr>'
        +'<tr>'
        +'<td>JB</td>'
        +'<td>F3 Cebu</td>'
        +'<td>4000007356-Dried garlic minced</td>'
        +'<td>PAC</td>'
        +'<td>1.00</td>'
        +'<td>6</td>'
        +'<td>100</td>'
        +'<td>Slow Moving</td>'
        +'<td>Pending</td>'
        +'<td><button type="button" class="btn btn-info">Update</button><button style="padding-left: 5px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">Details</button><</td>'
        +'</tr>'
        +' <tr>'
        +'<td>JB</td>'
        +'<td>F3 Cebu</td>'
        +'<td>4000006948-Stirrer</td>'
        +'<td>CSE</td>'
        +'<td>1.00</td>'
        +'<td>4</td>'
        +'<td>100</td>'
        +'<td>Slow Moving</td>'
        +'<td>Pending</td>'
        +'<td><button type="button" class="btn btn-info">Update</button><button style="padding-left: 5px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">Details</button><</td>'
        +'</tr>');  
      } 
    }
    */
</script>
</div>
</body>
</html>
