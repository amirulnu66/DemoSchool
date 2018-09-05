@extends('admin.layouts.master')
@section('title', 'Update Institute Information')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-10">
                <section class="panel">
                    <header class="panel-heading">
                      Update Institute Information 
                    </header>
                    <!-- institutue array type convart to json_decode -->
                    @php $setting_info =json_decode($institute->institute_info);@endphp
                    

                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    
                    <div class="panel-body">
                        <form action="{{URL::to('/admin/institute/setting/update')}}" enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $institute->id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Name</label>
                                <input class="form-control" name="scl_name" id="exampleInputEmail1" type="text" value="{{ $institute->scl_name }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Email</label>
                                <input class="form-control" name="scl_email" id="exampleInputEmail1" type="text" value="{{ $institute->scl_email }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Phone</label>
                                <input class="form-control" name="scl_phone" id="exampleInputEmail1" type="text" value="{{ $institute->scl_phone }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="edit-image50">Institute Logo</label>
                                
                                <input type="file" name="scl_logo" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Address</label>
                                <input class="form-control" name="scl_address" id="exampleInputEmail1" type="text" value="{{ $institute->scl_address }}">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Copyright</label>
                                <input class="form-control" name="copyright" id="exampleInputEmail1" type="text" value="{{ $institute->copyright }}">
                            </div>
                            
                            <div class="row">
                                
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <input class="form-control" name="institute_info[fb]" id="exampleInputEmail1" type="text" value="{{ $setting_info->fb }}">
                                </div>
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input class="form-control" name="institute_info[tw]" id="exampleInputEmail1" type="text" value="{{ $setting_info->tw }}">
                                </div>
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Google+</label>
                                    <input class="form-control" name="institute_info[gl]" id="exampleInputEmail1" type="text" value="{{ $setting_info->gl }}">
                                </div>
                                <div class="form-group col-md-3 col-xs-12">
                                    <label for="exampleInputEmail1">Linkedin</label>
                                    <input class="form-control" name="institute_info[ln]" id="exampleInputEmail1" type="text" value="{{ $setting_info->ln }}">
                                </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="edit-image50">Gov Holiday List (www.shed.gov.bd)</label>
                                
                                <input type="file" name="holiday_list" id="exampleInputFile">
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Institute Description</label>
                                <textarea class="form-control" name="scl_description" rows="3">{{ $institute->scl_description }}</textarea>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop