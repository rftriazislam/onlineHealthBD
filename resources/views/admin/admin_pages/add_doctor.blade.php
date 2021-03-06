@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Doctor</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('/admin/save_doctor')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                @if(session('message'))
                <h3 style="color:red;" class="text-center">
                    {{session('message')}}
                </h3>
                @endif
                @foreach($errors->all() as $error)
                 <h3 style="color:red;" class="text-center">
                   {{$error}}
                 
                </h3>
                @endforeach 

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_name" value="{{old('doctor_name')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                      <div class="control-group">
                      <label class="control-label" for="typeahead">Category Name</label>
                        <div class="controls">

                            <select id="selectError3" name="doctor_expart_category_id" value="{{old('doctor_expart_category')}}"  data-rel="chosen">
                                <option >Select Category</option>
                                @foreach($category_disease as $category_v)
                                <option value=" {{$category_v->id}}"> {{$category_v->category_disease_name}}</option>
                                @endforeach
                            </select>
                          
                        </div>


                    </div>
                        <div class="control-group">
                      <label class="control-label" for="typeahead">Department Name</label>
                        <div class="controls">

                            <select id="selectError" name="department_id" value="{{old('department_id')}}"  data-rel="chosen">
                                <option value="0">Select Department Name</option>
                                @foreach($department as $v_department)
                                <option value="{{$v_department->id}}"> {{$v_department->department_name}}</option>
                                @endforeach
                            </select>
                          
                        </div>


                    </div>
                  
                   

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Graduate </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_graduate" value="{{old('doctor_graduate')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Graduate Inistitute </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="graduate_institude" value="{{old('graduate_institude')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Exprience</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_exprience"  value="{{old('doctor_exprience')}}" data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Present Hospital</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="present_hospital" value="{{old('present_hospital')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Address</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_address" value="{{old('doctor_address')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                
                 

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Doctor Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="doctor_description"  id="textarea2" rows="3">{{old('doctor_description')}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Doctor Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="doctor_image" value="{{old('doctor_image')}}" id="fileInput" type="file">
                          <img  width="80px" height="80" src="{{old('doctor_image')}}"> 

                        </div>
                    </div> 








                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Data</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection
