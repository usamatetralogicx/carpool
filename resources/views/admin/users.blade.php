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
                                <h4 class="card-title">Users Table</h4>
                                <h6 class="card-subtitle">Data table</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th >ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                               
                                                <th>Block</th>
                                                <th>Closed Account</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @php
                                          $count=1;
                                          @endphp
                                           @foreach($users as $user)
                                           <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                             <td>{{$user->block}}</td>
                                            <td>{{$user->closed_account}}</td>
                                            <!-- <td>{{$user->created_at->diffForHumans()}}</td> -->

                                            <td>
                 @if($user->block==0)
                                               <button type="button" class="btn waves-effect waves-light  btn-primary button-status" data-id="{{$user->id}}"><i class="fa fa-check-circle" rel="tooltip" title="UnBlock"></i></button>
                                              @else
                                               <button type="button" class="btn waves-effect waves-light  btn-primary button-status" data-id="{{$user->id}}"><i class="fa fa-ban" rel="tooltip" title="Unblock"></i></button>

                                              @endif
                                              
                &nbsp 
              <button type="button" class="btn waves-effect waves-light  btn-danger del-button" rel="tooltip" title="Delete" data-id="{{$user->id}}"><i class="fa fa-trash "></i></button>
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
                url:"{{ url('users/delete')}}/"+id,
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
  $(document).ready(function(){
   $(document).on('click','.button-status',function(){
              
             var id = $(this).data("id");

             bootbox.confirm("Do you really want to change the status?", function(getresult) {
               if(getresult){
              $.ajax({
                url:"{{url('users/block')}}/"+id,
                method : 'get',
                
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