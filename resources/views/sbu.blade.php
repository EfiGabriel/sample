<div class="table-responsive">
    <div id="orderTable_wrapper" class="dataTables_wrapper no-footer">
        <div class="dataTables_length" id="orderTable_length">
    </div>
    <div id="orderTable_filter" class="dataTables_filter">
    </div>
    <table id="orderTable" class="table table-striped table-bordered table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="orderTable_info">
      <thead>
        <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label="Depot: activate to sort column ascending" style="width: 42px;">Depot</th>
            <th style="width: 120px;" class="sorting" tabindex="0" aria-controls="orderTable" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
        </tr>
      </thead>
      <tbody>
    
    @csrf
      <tr>
            <a type="button" href="{{route('sample.edit')}}" class="btn btn-info">Update</a> 
            <a type="button" href="{{route('sample.destroy')}}" class="btn btn-danger">Delete</a>
        <button style="padding-left: 5px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop2">Details</button>
          </td>
        </tr>
   
    </tbody>
  </div>
