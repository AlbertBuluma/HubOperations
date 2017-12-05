@extends('layouts.app')
@section('title', 'View All Hubs')
@section('content')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css" />
@append
@section('listpagejs')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
<script>
		$(document).ready(function() {
			//$('#listtable').DataTable();
			$('#listtable').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					
					{
						extend: 'excelHtml5',
						exportOptions: {
							columns: ':visible'
						}
					},
					{
						extend: 'pdfHtml5',
						exportOptions: {
							columns: ':visible'
						}
					},
					'colvis'
				]
			} );
		} );
	</script> 
@append
<div class="box box-info"> 
  <!-- /.box-header -->
  <div class="box-body table-responsive">
    <table id="listtable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Health Region</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      
      @foreach ($hubs as $hub)
      <tr>
        <td><a href="{{ route('hub.show', $hub->id ) }}">{{ $hub->hubname }}</a></td>
        <td>{{ $hub->healthregion }}</td>
        <td><a href="{{ route('hub.edit', $hub->id ) }}"><i class="fa fa-fw fa-edit"></i>Update</a>&nbsp; <a href="{{ route('hub.destroy', $hub->id ) }}"><i class=" fa fa-fw fa-trash-o"></i>Delete</a></td>
      </tr>
      @endforeach
        </tbody>
      
    </table>
  </div>
  <!-- /.box-body --> 
  
</div>
@endsection