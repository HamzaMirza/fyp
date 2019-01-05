<style>
.panel-heading
{
    color: white !important;
    background: red !important;
}
.panel-footer {
    background-color: brown;
}
</style>
<div class="container">
	<div class="col-md-4 col-md-offset-4" style="margin-top:80px;">
	</div>
</div>
<div class="container">
<div class="row">
        <div class="col-md-10">
               <form class="form-horizontal" action="./services/uploadquestions.php" method="POST"  enctype="multipart/form-data">
			  
				<div class="form-group">
                    <label for="inputQuestion" class="col-sm-2 control-label">Question</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputQuestion"  required="true"   placeholder ="Question" name="inputQuestion" >
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputAnswer" class="col-sm-2 control-label">Answer #1</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer" id="inputAnswer"    placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer1" class="col-sm-2 control-label">Answer #2</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer1" id="inputAnswer1"    placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer2" class="col-sm-2 control-label">Answer #3</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer2" id="inputAnswer2"    placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer3" class="col-sm-2 control-label">Answer #4</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer3" id="inputAnswer3"    placeholder ="Answer" >
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputAnswer4" class="col-sm-2 control-label">Answer #5</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputAnswer4" id="inputAnswer4"    placeholder ="Answer" >
                    </div>
                  </div>
				  <br />
				
				  <div class="form-group">
                    <label for="time" class="col-sm-2 control-label">Time</label>

                    <div class="col-sm-10">
                    <select class="form-control"    placeholder ="time" id="time" name="time">
							 <option value="00:00" selected> 00:00 </option>
						  </select>
                    </div>
                  </div>
                
				  <div class="form-group">
                    <label for="inputDraft" class="col-sm-2 control-label">Save as Draft?</label>

                    <div class="col-sm-10">
                        <select class="form-control"    placeholder ="Save as Draft?" id="inputDraft" name="draft">
							 <option value="0" selected> No </option>
							 <option value="1"> Yes </option>
						  </select>
                    </div>
                  </div>
				   <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-5">
                      <button type="submit" id="save" class="btn btn-lg btn-danger" style="width:100%;" >Submit</button>
                    </div>
				
                  </div>
                </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
<script>
var select = document.getElementById("time");
for(var i=0;i<10;i++)
	for(var j=0;j<60;j++)
		if(j<10)
			select.options[select.options.length] = new Option('0'+i+':'+'0'+j,'0'+i+':'+'0'+j);
		else
			select.options[select.options.length] = new Option('0'+i+':'+''+j,'0'+i+':'+''+j);
	 var createAllErrors = function() {
        var form = $( this );

        var showAllErrorMessages = function() {
           

            // Find all invalid fields within the form.
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

				
                // Find the field's corresponding label
                var label = $( "label[for=" + node.id + "] "),
                    // Opera incorrectly does not fill the validationMessage property.
                    message = node.validationMessage || 'Invalid value.';

            });
			
        };

        // Support Safari
        form.on( "submit", function( event ) {
             if ( this.checkValidity && !this.checkValidity() ) {
			
                $( this ).find( ":invalid" ).first().focus();
				
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
			
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
				  
				console.log( invalidFields);
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );
	
</script>
	<?php
	include("conn/conn.php");
	include("./modals.php");
if( isset($_REQUEST["success"]) )
	{
		if( $_REQUEST["success"]==0 )
			echo '<script> $("#modal-failed").modal();</script>';
		else if( $_REQUEST["success"]==1 )
			echo '<script> $("#modal-success").modal();</script>';
		unset($_REQUEST["success"]);
	}

	?>