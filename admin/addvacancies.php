<div class="container">
   <h1 class="page-header">Add Vacancies</h1>
   <div class="row">
      <div class="col-md-10">
         <form class="form-horizontal form_div">
            <div class="alert alert-danger hide" role="alert"  id="dangerAlert">
               <a class="alert-link" id="errorMsg"></a>
            </div>
            <div class="alert alert-success hide" role="alert"  id="successAlert">
               <a class="alert-link" id="successMsg"></a>
            </div>
            <div class="form-group">
               <label for="title" class="col-sm-2 control-label">Title</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control"  placeholder ="Title" name="title" required/>
               </div>
            </div>
            <div class="form-group">
               <label for="lastDate" class="col-sm-2 control-label">Last Date</label>
               <div class="col-sm-10">
                  <input type="date" class="form-control" name="lastDate"  placeholder ="lastDate" required />
               </div>
            </div>
            <div class="form-group">
               <label for="seats" class="col-sm-2 control-label">Seats</label>
               <div class="col-sm-10">
                  <input type="number" class="form-control" name="seats"  min="1" steps="1" placeholder ="Number of Positions Available" required/>
               </div>
            </div>
            <div class="form-group">
               <label for="minexperience" class="col-sm-2 control-label">Min Experience <br /> (In Years)</label>
               <div class="col-sm-10">
                  <input type="number" class="form-control" name="minexperience" placeholder ="Minimum Experience (e.g. 1.5)" required/>
               </div>
            </div>
            <div class="form-group">
               <label for="avgsalary" class="col-sm-2 control-label">Average Salary<br /> (In PKR)</label>
               <div class="col-sm-10">
                  <input type="number" class="form-control" name="avgsalary"  placeholder ="Average Salary (e.g. 15000)" required/>
               </div>
            </div>
            <div class="form-group">
               <label for="designation" class="col-sm-2 control-label">Designation</label>
               <div class="col-sm-10">
                  <select class="form-control"    placeholder ="Designation"  id="designation" required="true">
                  </select>
               </div>
            </div>
	   <div class="form-group">
               <label for="role" class="col-sm-2 control-label">Role</label>
               <div class="col-sm-10">
                  <select class="form-control"    placeholder ="role"  id="role" required/>
                  </select>
               </div>
            </div>
            <br />
            <div class="form-group">
               <label for="city" class="col-sm-2 control-label">City</label>
               <div class="col-sm-10">
                  <select class="form-control" id="city" required>
                     <option value="karachi" selected> Karachi </option>
		     <option value="lahore" selected> Lahore </option>
		     <option value="islamabad" selected> Islamabad </option>
		     <option value="faislabad" selected> Faislabad </option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="status" class="col-sm-2 control-label">Status</label>
               <div class="col-sm-10">
                  <select class="form-control"    placeholder ="Status"  id="status" required>
                     <option value="0" selected> Closed </option>
                     <option value="1"> Open </option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-4 col-sm-offset-5">
                  <button type="button" id="save" class="btn btn-lg btn-default" style="width:100%;" onClick="reqAddVacancy()">Submit</button>
               </div>
            </div>
         </form>
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</div>