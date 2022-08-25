@extends('admin.layouts.app')

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{$method}}  {{$pageName}}</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
          
            <div class="col-lg-12">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{$method}}  {{$pageName}}</h5>
                           
                        </div>
                        <div class="ibox-content">
                           
  {!! Form::open(['role' => 'form','route' => "admin.save.employee",'class' => 'mws-form','method' => 'post', 'files' => true]) !!}

                      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Vendor Name*</label>

                                    <div class="col-sm-4">
                                       {!! Form::text('name', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]) !!}
                                        
                                    <span class="" style="color:red"> {{ $errors->first('name')}} <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Email*</label>

                                    <div class="col-sm-4">
                                        {!! Form::text('email', '',['class' => 'form-control']) !!}
                                    <span class="" style="color:red"> {{ $errors->first('email')}} <span>

                                    </div>
                                </div>
                                
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Password*</label>

                                    <div class="col-sm-4">
                                       {!! Form::password('password',['class' => 'form-control']) !!}
                                        
                                    <span class="" style="color:red"> {{ $errors->first('password')}} <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Contact No.</label>

                                    <div class="col-sm-4">
                                        {!! Form::text('mobile', '',['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]) !!}
                                    <span class="" style="color:red"> {{ $errors->first('designation')}} <span>

                                    </div>
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                  
                                    <label class="col-sm-2 col-form-label">Address</label>

                                    <div class="col-sm-4">
                                        {!! Form::textarea('address', null, ['class'=>'form-control','rows'=>'2']) !!}
                                    <span class="" style="color:red"> {{ $errors->first('address')}} <span>

                                    </div>
                                    
                                </div>
                               
                                
                             
                                

                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
        
        
         <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{$pageName}} List </h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                        <th width="5%">#</th>
                                        <th width="10%">Employee Name </th>
                                         <th width="5%">Email</th>
                                        <th width="10%">Mobile</th>
                                        <th width="8%">Address</th>
                                        <th width="10%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($result as $key=>$val)
                                   
                                    <tr>
                                        <td>{{$key+ 1}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->email}}</td>
                                        <td>{{$val->mobile}}</td>
                                         <td>{{$val->address}}</td>
                                         
                                             <td>
							@if($val->status	== 1)
								<span class="label label-success" >Activated </span>
							@else
								<span class="label label-warning" >Deactivated </span>
							@endif
						</td>
					
					
                                        <td>
                                            @if($val->status == 1)
							
								{!! Html::decode(link_to_route('admin.status.employee','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate' ,'onclick'=>'return changeStatus();'])) !!}
							@else
							
								
									{!! Html::decode(link_to_route('admin.status.employee','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate','onclick'=>'return changeStatus();'])) !!}
							@endif 
                                       

                                        {!! Html::decode(link_to_route('admin.edit.employee','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])) !!}
                                        {!! Html::decode(link_to_route('admin.delete.employee','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-warning','title'=>'Delete','onclick'=>'return deleteConfirm();'])) !!}
                                    
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
