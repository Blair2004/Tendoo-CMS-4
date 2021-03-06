@extends( 'dashboard.layout.master' )

@section( 'dashboard.body' )

<div class="app-body-inner">
	<div class="row-col">
		<div class="row-row">
			<div class="row-col">
				<div class="col-xs w modal fade aside aside-md b-r" id="subnav">
					<div class="row-col light bg">
				      	<!-- flex content -->
				      	<div class="row-row">
					      	<div class="row-body scrollable hover">
						      	<div class="row-inner">
							      	<!-- content -->
							      	<div class="navside m-t">
								      	<nav class="nav-border b-primary" data-ui-nav="">
									        <ul class="nav">
											  	<li class="active">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label warn rounded">32</b>
									                  	</span>
												      	<span class="nav-text">All</span>
												    </a>
											  	</li>
											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label primary rounded">4</b>
									                  	</span>
												      	<span class="nav-text">Company</span>
												    </a>
											  	</li>
											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label rounded">10</b>
									                  	</span>
												      	<span class="nav-text">Personal</span>
												    </a>
											  	</li>
											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label rounded">6</b>
									                  	</span>
												      	<span class="nav-text">Team</span>
												    </a>
											  	</li>

												<li class="nav-header hidden-folded m-t">
									                <span class="block p-t b-t text-sm text-muted _600">Tags</span>
									            </li>

											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label label-xs primary">&nbsp;</b>
									                  	</span>
												      	<span class="nav-text">Clients</span>
												    </a>
											  	</li>
											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label label-xs warn">&nbsp;</b>
									                  	</span>
												      	<span class="nav-text">Suppliers</span>
												    </a>
											  	</li>
											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label label-xs">&nbsp;</b>
									                  	</span>
												      	<span class="nav-text">Competitors</span>
												    </a>
											  	</li>
											  	<li>
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label label-xs success">&nbsp;</b>
									                  	</span>
												      	<span class="nav-text">Corps</span>
												    </a>
											  	</li>
											</ul>
										</nav>
									</div>
							    </div>
					      	</div>
					    </div>
				      	<!-- / -->
				      	<!-- footer -->
					    <div class="p-a b-t">
					        <a href="#" class="btn btn-xs rounded primary"><i class="fa fa-plus m-r-xs"></i> New Group</a>
					    </div>
					    <!-- / -->
				    </div>
				</div>
				<div class="col-xs modal fade aside aside-sm  b-r" id="list">
					<div class="row-col">
						<div class="row-row">
							<div class="row-col">
								<!-- col -->
								<div class="col-xs w-40 white bg b-r">
									<div class="row-col">
										<div class="row-row">
									      	<div class="row-body scrollable hover">
										      	<div class="row-inner">
										      		<div class="text-center text-sm p-y-sm">
														<a href="#" class="block text-muted">A</a>
														<a href="#" class="block text-muted active text-primary _600">B</a>
														<a href="#" class="block text-muted">C</a>
														<a href="#" class="block text-muted">D</a>
														<a href="#" class="block text-muted">E</a>
														<a href="#" class="block text-muted">F</a>
														<a href="#" class="block text-muted">G</a>

														<a href="#" class="block text-muted">H</a>
														<a href="#" class="block text-muted">I</a>
														<a href="#" class="block text-muted">J</a>
														<a href="#" class="block text-muted">K</a>
														<a href="#" class="block text-muted">L</a>
														<a href="#" class="block text-muted">M</a>
														<a href="#" class="block text-muted">N</a>

														<a href="#" class="block text-muted">O</a>
														<a href="#" class="block text-muted">P</a>
														<a href="#" class="block text-muted">Q</a>
														<a href="#" class="block text-muted">R</a>
														<a href="#" class="block text-muted">S</a>
														<a href="#" class="block text-muted">T</a>

														<a href="#" class="block text-muted">U</a>
														<a href="#" class="block text-muted">V</a>
														<a href="#" class="block text-muted">W</a>
														<a href="#" class="block text-muted">X</a>
														<a href="#" class="block text-muted">Y</a>
														<a href="#" class="block text-muted">Z</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-xs">
									<div class="row-col white bg">
								      	<!-- flex content -->
								      	<div class="row-row">
									      	<div class="row-body scrollable hover">
										      	<div class="row-inner">
										      		<!-- left content -->
										      		<div class="list" data-ui-list="b-r b-3x b-primary" data-ui-list-target="#detail" data-ui-list-target-class="show">
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle blue-grey">
										      			            R
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Radionomy</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            radionomy@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle brown">
										      			            RO
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Rita Ora</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            rita-ora@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle pink">
										      			            JG
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Judith Garcia</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            judith-garcia@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle light-blue">
										      			            K
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Kygo</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            kygo@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle blue">
										      			            P
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Postiljonen</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            postiljonen@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle grey">
										      			            S
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Summerella</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            summerella@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle cyan">
										      			            PN
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Pablo Nouvelle</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            pablo-nouvelle@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle indigo">
										      			            FH
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Fifth Harmony</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            fifth-harmony@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle green">
										      			            JS
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">Jeremy Scott</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            jeremy-scott@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item ">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle teal">
										      			            R
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-tag"></i>
										      			              	Tag item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	Edit item
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	Delete item
										      			              </a>
										      			              <div class="dropdown-divider"></div>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-ellipsis-h"></i>
										      			              	More action
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">RYD</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            ryd@gmail.com
										      			        </small>
										      			      </div>
										      			    </div>
										        	</div>
										        	<!-- / -->
										      	</div>
										    </div>
								      	</div>
								      	<!-- / -->
								    </div>
								</div>
							</div>
						</div>

					    <!-- footer -->
					    <div class="white bg p-a b-t clearfix">
					      	<div class="btn-group pull-right">
					            <a href="#" class="btn btn-xs white circle"><i class="fa fa-fw fa-angle-left"></i></a>
					            <a href="#" class="btn btn-xs white circle"><i class="fa fa-fw fa-angle-right"></i></a>
					        </div>
					      	<span class="text-sm text-muted">Total: <strong>10</strong></span>
					    </div>
					    <!-- / -->
					</div>
				</div>
				<div class="col-xs hidden-lg-up" id="detail">
					<div class="row-col white bg">
				      	<!-- flex content -->
				      	<div class="row-row">
					      	<div class="row-body scrollable hover">
						      	<div class="row-inner">
							      	<!-- content -->
							      	<div class="p-a-lg text-center">
							      		<img src="images/a3.jpg" class="w circle animated rollIn" alt=".">
							      		<div class="animated fadeInUp">
								      		<div>
									      		<span class="text-md m-t block">Judith Garcia</span>
									      		<small class="text-muted">Product Designer</small>
								      		</div>
								      		<div class="block clearfix m-t">
								              <a href="" class="btn btn-icon btn-social rounded indigo">
								                <i class="fa fa-facebook"></i>
								                <i class="fa fa-facebook"></i>
								              </a>
								              <a href="" class="btn btn-icon btn-social rounded light-blue">
								                <i class="fa fa-twitter"></i>
								                <i class="fa fa-twitter"></i>
								              </a>
								              <a href="" class="btn btn-icon btn-social rounded red">
								                <i class="fa fa-google-plus"></i>
								                <i class="fa fa-google-plus"></i>
								              </a>
								            </div>
							            </div>
							      	</div>
									<div class="p-a-md animated fadeInUp">
								        <ul class="nav">
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-map-marker"></i>
								                	</span>
								                	<span>Paris</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-phone"></i>
								                	</span>
								                	<span>123-456-789</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-birthday-cake"></i>
								                	</span>
								                	<span>July 03</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-envelope"></i>
								                	</span>
								                	<span>Judithgarcia@gmail.com</span>
								              	</a>
								            </li>
								        </ul>
							        </div>
							        <!-- / -->
							    </div>
					      	</div>
					    </div>
				      	<!-- / -->

					    <!-- footer -->
					    <div class="p-a b-t clearfix">
					      	<div class="pull-right">
					            <a href="#" class="btn btn-xs white rounded">
					            	<i class="fa fa-trash m-r-xs"></i>
					            	Delete
					            </a>
					        </div>
					      	<a href="#" class="btn btn-xs primary rounded">
				            	<i class="fa fa-pencil m-r-xs"></i>
				            	Edit
				            </a>
					    </div>
					    <!-- / -->
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection