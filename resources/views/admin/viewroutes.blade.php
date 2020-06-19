@extends('layouts.app_admin')
@section('title','Admin Panel')
@section('content')
   <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Routes</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th >ID</th>
                                                <th>Per Km</th>
                                                <th>Fare</th>
                                                <th>Created at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@php
                                        	$count=1;
                                        	@endphp
                                           @foreach($routes as $route)
                                           <tr>
                                           	<td>{{$count++}}</td>
                                           	<td>{{$route->Per_KM}}</td>
                                           	<td>{{$route->Fare}}</td>
                                           	<td>{{$route->created_at->diffForHumans()}}</td>
                                           	<td>
              <a class="btn waves-effect waves-light  btn-success" rel="tooltip" title="Edit" href="{{url('routes/edit/'.$route->id)}}"><i class="fa fa-pencil-square-o fa-lg"></i></a>&nbsp
              <button type="button" class="btn waves-effect waves-light  btn-danger del-button" rel="tooltip" title="Delete" data-id="{{$route->id}}"><i class="fa fa-trash fa-lg"></i></button>
            </td>

                                           </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>


@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
   $(document).on('click','.del-button',function(){
              var el=this;
            var token = $("meta[name='csrf-token']").attr("content");
             var id = $(this).data("id");

             bootbox.confirm("Do you really want to delete record?", function(getresult) {
               if(getresult){
              $.ajax({
                url:"{{ url('routes/delete')}}/"+id,
                method : 'post',
                data: { id: id,
                  "_token": token,
                 },
                success: function(result){

                  if(result.status == 0){
                    bootbox.alert({
          title: "Message",
          message:result.message,
          callback: function(){
              window.setTimeout(function(){location.reload()},2000);

}
});
                  }
                  else{
                    // $(el).closest('tr').css('background','tomato');
                   //  $(el).closest('tr').fadeOut(800,function(){
                   //  $(this).remove();
                   //  });
      
                    bootbox.alert({
              title: "Message",
              message:result.message,
              callback: function(){
               //window.setTimeout(function(){location.reload()},1000)
              }
              });
                  }
                }});
              }
              });
            });
      });
	
</script>
@endsection