<div class="container">
 <h1 class="page-header">Add Questions</h1>
<div class="row">
        <div class="col-md-10 form_div">
               <form class="form-horizontal" method="POST"  enctype="multipart/form-data">
				<div class="alert alert-danger hide" role="alert"  id="dangerAlert">
						<a class="alert-link" id="errorMsg"></a>
					</div>
				<div class="alert alert-success hide" role="alert"  id="successAlert">
						<a class="alert-link" id="successMsg"></a>
					</div>
				<div class="form-group">
                    <label for="inputQuestion" class="col-sm-2 control-label">Question</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  required="true"   placeholder ="Question" name="inputQuestion" >
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputAnswer" class="col-sm-2 control-label">Answer #1</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer"  placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer1" class="col-sm-2 control-label">Answer #2</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer1"  placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer2" class="col-sm-2 control-label">Answer #3</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer2" placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer3" class="col-sm-2 control-label">Answer #4</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer3"  placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputCorrect" class="col-sm-2 control-label">Correct Answer</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputCorrect" placeholder ="Correct Option" >
                    </div>
                  </div>
				  <br />
				
				  <div class="form-group">
                    <label for="time" class="col-sm-2 control-label">Time</label>

                    <div class="col-sm-10">
                    <select class="form-control" id="time" >
							 <option value="00:00" selected> 00:00 </option>
						  </select>
                    </div>
                  </div>
                
				  <div class="form-group">
                    <label for="inputDraft" class="col-sm-2 control-label">Save as Draft?</label>

                    <div class="col-sm-10">
                        <select class="form-control"    placeholder ="Save as Draft?"  id="draft">
							 <option value="0" selected> No </option>
							 <option value="1"> Yes </option>
						  </select>
                    </div>
                  </div>
				   <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-5">
                      <button type="button" id="save" class="btn btn-lg btn-danger" style="width:100%;" onClick="reqAddQuestion()">Submit</button>
                    </div>
				
                  </div>
                </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
