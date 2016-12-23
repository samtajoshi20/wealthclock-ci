<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.min.css" />
<div class="page-header">
							<h1>
								Add Contact
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->


<div class="row">
	<form name="addContactForm" class="form-horizontal" novalidate>
	<div class="col-sm-12">
	<h4 class="header green clearfix">Contact Location Details</h4>
			<div class="form-group">

				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Contact Name<span class="red-star">*</span></label>
				<input id="form-field-1" name="name" class="col-sm-8" placeholder="Full Name" type="text" ng-model="contact.name" required>
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				</div>
				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Company Group</label>
				<input id="form-field-1" class="col-sm-8" placeholder="Company Group" name="companyGroup" ng-model="contact.companyGroup" type="text">
				</div>
				
			</div>
			<div class="form-group">

				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Email<span class="red-star">*</span></label>
				<input id="form-field-1" name="email" class="col-sm-8" placeholder="Please Enter Email" type="email" ng-model="contact.email" required>
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				</div>
				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Label<span class="red-star">*</span></label>
				<input id="form-field-1" class="col-sm-8" name="label" placeholder="Label for recall" type="text" ng-model="contact.label" required>
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				</div>
				
			</div>
			<div class="form-group">
				
				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Address<span class="red-star">*</span></label>
				<textarea id="form-field-1" name="address" class="col-sm-8" placeholder="Address of Contact" ng-model="contact.address" required></textarea>
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				</div>
				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Place<span class="red-star">*</span></label>
				<input id="form-field-1" class="col-sm-8" placeholder="Place/Branch/Office" name="place" ng-model="contact.place" type="text" required>
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				</div>
				
			</div>
			<div class="form-group">

				<div class="col-sm-6">
				<label class="col-sm-4 control-label">PinCode<span class="red-star">*</span></label>
				<input id="form-field-1" class="col-sm-8" name="contactPinCode" ng-model="contact.pinCode" placeholder="PinCode" type="text" required>
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				</div>
				<div class="col-sm-6">
					
				<label class="col-sm-4 control-label">City<span class="red-star">*</span></label>
				&nbsp;
				
				<select id="city" name="city" class="select2 col-sm-8" data-placeholder="Click to Choose..." ng-model="contact.city"  ng-options="city.name for city in cityList">
									<option value=""></option>
											</select>
								<span style="margin-left:50px;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCityModal" title="Add new row">Add City</span>
				
				
				
				<label class="col-sm-4 control-label">&nbsp;</label>
				
				
				</div>
				
			</div>
		</div>
		<div class="col-sm-12">
			<h4 class="header green clearfix">Contacting Details</h4>

				<div class="form-group">
						<div class="col-sm-6">
							<label>Landline</label>
						</div>
						<div class="col-sm-3">
							<label>Mobile</label>
						</div>
						<div class="col-sm-3">
							<label>Fax</label>
						</div>
		
						<div class="col-sm-3">
							<input id="form-field-1" class="col-sm-12" placeholder="Landline 1" type="text" ng-model="city.landline1" name="landline1" />
							</div>
						<div class="col-sm-3">
						<input id="form-field-1" class="col-sm-12" placeholder="Landline 2" type="text" ng-model="city.landline2" name="landline2" />
						</div>
						<div class="col-sm-3">
							<input id="form-field-1" class="col-sm-12" placeholder="Mobile 1" type="text" ng-model="city.mobile1" name="mobile1" />				
						</div>
						<div class="col-sm-3">
							<input id="form-field-1" class="col-sm-12" placeholder="Fax 1" type="text" ng-model="city.fax1" name="fax1">				
						</div>
				</div>


				<div class="form-group">
				
				<div class="col-sm-3">
							<input id="form-field-1" class="col-sm-12" placeholder="Landline 3" type="text" name="landline3" ng-model="city.landline3" name="landline3" />
							</div>
						<div class="col-sm-3">
						<input id="form-field-1" class="col-sm-12" placeholder="Landline 4" type="text" ng-model="city.landline4" name="landline4" />
						</div>
						<div class="col-sm-3">
							<input id="form-field-1" class="col-sm-12" placeholder="Mobile 2" type="text" ng-model="city.mobile2" name="mobile2" />				
						</div>
						<!--<div class="col-sm-3">-->
						<!--	<input id="form-field-1" class="col-sm-12" placeholder="Fax 1" type="text">				-->
						<!--</div>-->
				</div>

				<div class="form-group">
						<div class="col-sm-3">
							<label>Alternate Email</label>
						</div>
						<div class="col-sm-3">
							<label>Website</label>
						</div>
						<div class="col-sm-6">
							<label>&nbsp;</label>
						</div>
				
						<div class="col-sm-3">
							<input id="form-field-1" class="col-sm-12" placeholder="Alternate Email" type="email" ng-model="city.alternateEmail" name="alternateEmail" />
							
							</div>
						<div class="col-sm-3">
						<input id="form-field-1" class="col-sm-12" placeholder="Website" type="text" ng-model="city.website" name="website" />
						</div>
						<!--<div class="col-sm-3">-->
						<!--	<input id="form-field-1" class="col-sm-12" placeholder="Mobile 1" type="text">				-->
						<!--</div>-->
						<!--<div class="col-sm-3">-->
						<!--	<input id="form-field-1" class="col-sm-12" placeholder="Fax 1" type="text">				-->
						<!--</div>-->
				</div>


				
			</div>
			
			
			<div class="col-sm-12">
			<h4 class="header green clearfix">Source Details</h4>
					<div class="form-group">				
						<div class="col-sm-6">
							<label class="col-sm-4 control-label">Source Type<span class="red-star">*</span></label>
							<select id="sourceType" name="sourceTypeId" class="select2 col-sm-12" data-placeholder="Click to Choose Soruce..." ng-model="contact.sourceType"  ng-options="source.source for source in sourceTypeList">
																					<option value=""></option>
							</select>
							
							<label class="col-sm-4 control-label">&nbsp;</label>				
							
						</div>
						
						<div class="col-sm-6">
							<label class="col-sm-4 control-label">Source Details<span class="red-star">*</span></label>
								<input class="col-sm-8" type="text" placeholder="Source Details" name="sourceDetails" ng-model="contact.sourceDetails" required />
							<label class="col-sm-4 control-label">&nbsp;</label>				
							
						</div>
					</div>
					
					<div class="form-group">				
						<div class="col-sm-6">
							<label class="col-sm-4 control-label">Source Status</label>
								<input class="col-sm-8" type="text" placeholder="Source Status" name="sourceStatus" ng-model="contact.sourceStatus" />
							<label class="col-sm-4 control-label">&nbsp;</label>				
						</div>
						
						<div class="col-sm-6">
							<label class="col-sm-4 control-label">Business Value</label>
								<input class="col-sm-8" type="text" placeholder="Business Value" name="businessValue" ng-model="contact.businessValue" />
							<label class="col-sm-4 control-label">&nbsp;</label>				
							
						</div>
					</div>
					
					<div class="form-group">				
						<div class="col-sm-6">
							<label class="col-sm-4 control-label">R. M.<span class="red-star">*</span></label>
							<select id="RM" name="RM" class="select2 col-sm-8" data-placeholder="Click to Choose RM..." ng-model="contact.RM"  ng-options="RM.name for RM in RMList">
																					<option value=""></option>
							</select>
								
							<label class="col-sm-4 control-label">&nbsp;</label>				
							
						</div>
						
						<div class="col-sm-6">
							<label class="col-sm-4 control-label">Accompany R. M.<span class="red-star">*</span></label>
								<select id="ARM" name="ARM" class="select2 col-sm-8" data-placeholder="Click to Choose ARM..." ng-model="contact.ARM"  ng-options="ARM.name for ARM in ARMList">
																					<option value=""></option>
							</select>
								
								
							
							
						</div>
					</div>
			</div>
			
			<div class="col-sm-12">
			<h4 class="header green clearfix">Interested Products</h4>
				<div class="form-group">

				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Products</label>
				<select id="product" name="product" class="select2 col-sm-8" data-placeholder="Click to Choose Product..." ng-model="contact.product"  ng-options="product.product for product in productList" >
						<option value=""></option>
				</select>
							
				</div>
				<div class="col-sm-6">
				<label class="col-sm-4 control-label">Information</label>
				<input id="form-field-1" class="col-sm-8" placeholder="Information" name="information" ng-model="contact.information" type="text">
				</div>
				
			</div>
				
			</div>
			
			<div class="col-sm-12">
			<h4 class="header green clearfix">Follow Up</h4>
				<div class="form-group">
					<div class="col-sm-6">
						<label class="col-sm-4 control-label">Type</label>
						<input id="form-field-1" name="type" class="col-sm-8" placeholder="Type" type="text" ng-model="contact.type">
					</div>
					
						<div class="col-sm-6">
						<label class="col-sm-4 control-label">Status</label>
						<input id="form-field-1" name="status" class="col-sm-8" placeholder="Status" type="text" ng-model="contact.status">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-6">
						<label class="col-sm-4 control-label">Next Follow up Date</label>
						<input id="followDate" name="followDate" class="col-sm-8" placeholder="Next Follow up Date" type="text" ng-model="contact.followDate">
					</div>
						<div class="col-sm-6">
						<label class="col-sm-4 control-label">Next Follow up Time</label>
						<input id="form-field-1" name="followTime" class="col-sm-8" placeholder="Next Follow up Time" type="text" ng-model="contact.followTime">
					</div>
			</div>
				
			<div class="form-group">
					<div class="col-sm-6">
						<label class="col-sm-4 control-label">Notify</label>
						<select id="notify" name="notify" class="select2 col-sm-8" data-placeholder="Click to Choose Person..." ng-model="contact.notify"  ng-options="notify.name for notify in notifyList" >
																					<option value=""></option>
							</select>
					</div>
						<div class="col-sm-6">
						<label class="col-sm-4 control-label">Remark</label>
						<input id="form-field-1" name="remark" class="col-sm-8" placeholder="Remark" type="text" ng-model="contact.remark">
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					&nbsp;
				</div>
			</div>
			<div class="form-group">
			<div class="col-md-offset-4 col-md-8">
				<button class="btn btn-info" ng-click="saveContact(contact)" ng-disabled="addContactForm.$invalid">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<button class="btn" type="reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>
			</div>
			</div>
										
				</form>
	<!--Add City Modal Begins-->
				
				<!-- Modal -->
					<div class="modal fade" id="addCityModal" role="dialog">
					  <div class="modal-dialog modal-sm">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add City</h4>
						  </div>
						  <form name="addCityForm" novalidate>
						  <div class="modal-body">
							
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
									<div class="col-sm-12">
									<input id="form-field-1" class="col-sm-12" name="name" placeholder="City Name" ng-model="city.name" required="" type="text">
									</div>
								</div>
								</div>
								<div class="form-group">
								<div class="col-sm-12">
									<div class="col-sm-12">
										<select id="state" name="stateId" class="select2 col-sm-12" data-placeholder="Click to Choose State..." ng-model="city.stateId"  ng-options="state.name for state in stateList">
																					<option value=""></option>

											</select>
									</div>
								</div>
								</div>
								
							

								
								</div>
							</div>	
								
						  </div>
						  <div class="modal-footer">
							<button class="btn btn-info" ng-click="saveCity(city)" ng-disabled="addCityForm.$invalid" id="gritter-error">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Save
							</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</form>
					  </div>
						</div>
					  </div>
					</div>
				<!--Add City Modal Ends-->
				
				<div id="gritter-notice-wrapper" style="display: none;">
					<div class="gritter-item-wrapper " style="" role="alert">
						<div class="gritter-top"></div>
						<div class="gritter-item">
						<div class="gritter-without-image">{{message}}</div>
						<div style="clear:both"></div>
						</div>
						<div class="gritter-bottom"></div>
					</div>
				</div>
	
</div>

</div><!-- /.col -->
						</div><!-- /.row -->
							<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content --> 
<script type="text/javascript">
			
			jQuery(function($){
				//////////////////
				//select2
				$('.select2').css('width','200px').select2({allowClear:true})
					
				//in ajax mode, remove remaining elements before leaving page
				$(document).one('ajaxloadstart.page', function(e) {
					$('[class*=select2]').remove();
					
				});
				jQuery( "#followDate" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false,
					//isRTL:true,
			
					
					/*
					changeMonth: true,
					changeYear: true,
					
					showButtonPanel: true,
					beforeShow: function() {
						//change button colors
						var datepicker = $(this).datepicker( "widget" );
						setTimeout(function(){
							var buttons = datepicker.find('.ui-datepicker-buttonpane')
							.find('button');
							buttons.eq(0).addClass('btn btn-xs');
							buttons.eq(1).addClass('btn btn-xs btn-success');
							buttons.wrapInner('<span class="bigger-110" />');
						}, 0);
					}
			*/
				});
				jQuery( "#followTime" ).timepicker({
					showOtherMonths: true,
					selectOtherMonths: false,
					//isRTL:true,
			
					
					/*
					changeMonth: true,
					changeYear: true,
					
					showButtonPanel: true,
					beforeShow: function() {
						//change button colors
						var datepicker = $(this).datepicker( "widget" );
						setTimeout(function(){
							var buttons = datepicker.find('.ui-datepicker-buttonpane')
							.find('button');
							buttons.eq(0).addClass('btn btn-xs');
							buttons.eq(1).addClass('btn btn-xs btn-success');
							buttons.wrapInner('<span class="bigger-110" />');
						}, 0);
					}
			*/
				});	
				
			
			});
			
			
</script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>