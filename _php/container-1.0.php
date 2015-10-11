<!-- [ Post Body ] -->
<div class="container-fluid m-t-10">
	<div class="row">
	
		<!-- [ row-1 ] -->
		<div class="col-md-3">
		<div class="row">
		
			<!-- cards -->
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div class="panel-heading"> 
						<h3 class="panel-title">Personal Information</h3> 
					</div>
					<div class="panel-body">
							Panel content
					</div>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
				<div class="panel-heading"> 
					<h3 class="panel-title">Personal Information</h3> 
				</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
		
		</div>
		</div>
		<!-- [ /. row-1 ] -->
		
		<!-- [ row-2 ] -->
		<div class="col-md-6">
		<div class="row">
		
			<!-- [ cards ] -->
			<div class="col-md-12">
				<div class="panel panel-default panel-fill" data-toggle="modal" data-target="#myModal">
					<div class="panel-heading"> 
						<h3 class="panel-title">Post #1</h3> 
					</div>
					<div class="panel-body">
							Panel content
					</div>
				</div>
			        <!-- [ Modal - card-expanded ]-->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				      <div class="modal-body">
				        <?php
					echo "UserName : ".$_SESSION['UserName'] . "</br>";				
					echo "UserEmail : ".$_SESSION['UserEmail'] . "</br>";
					echo "UserContact : ".$_SESSION['UserContact'] . "</br>";
					echo "UserCity : ".$_SESSION['UserCity'] . "</br>";
					echo "UserClass : ".$_SESSION['UserClass'] . "</br>"; 
					echo "testVar : ".$_SESSION['testVar'] . "</br>";
					?>
				      </div>
				      <div class="modal-footer">
				        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>-->
				      </div>
				    </div>
				  </div>
				 </div>
				<!-- [ /. Modal - card-expanded ]-->
			</div>
		
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div class="panel-heading"> 
						<h3 class="panel-title">Post #2 <small>Ayuit Biu</small></h3> 
					</div>
					<div class="about-info-p">
					<div class="panel-body">
						<strong>Full Name</strong>
						<p class="text-muted">Panel content</p>
					</div>
					</div>
				</div>
			</div>
			<!-- [ /. cards ] -->
		</div>
		</div>
		<!-- [ /. row-2] -->
		
		<!-- [ row-3 ] -->
		<div class="col-md-3">
		<div class="row">
		
			<!-- [ cards ] -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"> 
						 <h3 class="panel-title">Post #2 <small>Ayuit Biu</small></h3> 
					</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
			<!-- [ /. cards ] -->
		</div>
		</div>
		<!-- [ /. row-3 ] -->
	</div>
</div>
<!-- [ /. Post Body ] -->