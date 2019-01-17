<div class="container" >
   <h1 class="page-header">Admins</h1>
   <div class="alert alert-danger hide" role="alert"  id="dangerAlert">
						<a class="alert-link" id="errorMsg"></a>
					</div>
   <div class="col-md-10 col-md-offset-1">
      <div class="table-responsive">
		<table id="adminTable" class="table table-bordered table table-hover" cellspacing="0" width="100%">
		   <colgroup>
			  <col>
			  <col>
			  <col>
		   </colgroup>
		   <thead>
			  <tr>
				 <th>Admin ID</th>
				 <th >Name</th>
				 <th >Email</th>
				 <th>Action</th>
			  </tr>
		   </thead>
		   <tbody id="admin_body">
		   </tbody>
		</table>
         <center>
            <div id="pager">
               <ul id="pagination" class="pagination-sm"></ul>
            </div>
      </div>
      </center>
   </div>
</div>

<div class="modal modal-danger fade" id="modal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="closeModel()">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" style="text-align:center; color:red;">Confirmation</h4>
					  </div>
					  <div class="modal-body" >
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
							<p  style="text-align:center;">
								Are You Sure You want to delete admin? <span id="modal-data"></span>  <span id="modal-data-id" class="hide"></span>
							</p>	
						</div>
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger pull-right" onClick="deleteAdmin()">Yes</button>
					  </div>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
	</div>