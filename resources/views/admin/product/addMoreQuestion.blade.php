
									
								
									
									
								</tr>
								<tr class="panel panel-default delete_add_more_question_section_{{$counterQueAns}}" rel="{{$counterQueAns}}">
								
									<td>		
										<div class="mws-form-item">
										 {!! Form::text("queans[$counterQueAns][question]",'', ['class'=>'form-control']) !!}
											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 {!! Form::text("queans[$counterQueAns][answer]",'', ['class'=>'form-control']) !!}
											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
									
									<td>
									    	 <a href="javascript:void(0);" onclick="del_question_answer_row('{{$counterQueAns}}');" class="btn btn-danger btn-small" >
			<i class="fa fa-trash-o"></i>
		</a>
			
									</td>
								
									
									
								</tr>