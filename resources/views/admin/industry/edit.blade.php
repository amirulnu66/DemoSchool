@extends('admin.layouts.master')
@section('title', 'User Create')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Create User From
                    </header>

                    @if(Session::has('msg'))
                        {{Session::get('msg')}}
                    @endif

                     <?php
                                    $section_one=json_decode($industry[0]['content']); 
                                    $section_two=json_decode($industry[1]['content']); 
                                    $section_three=json_decode($industry[2]['content']); 
                                    $section_four=json_decode($industry[3]['content']); 
                                    $section_five=json_decode($industry[4]['content']);
                              ?>
                    <div class="panel-body">
                        <form action="{{URL::to('admin/industry/updateIndustry/'.$industry[0]['page_id'])}}"  enctype="multipart/form-data" method="post" role="form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Industry Name</label>
                                <input class="form-control" name="page_name" id="exampleInputEmail1" placeholder="Enter Full Name"  value="<?php echo $industry[0]['page_name'] ?>"type="text">
                            </div>

                            <input type="file" name="image_one" value="<?php echo isset($section_five->image_0)?$section_five->image_0:''; ?>"><br>
                             <input type="hidden" name="hidden_image_0" value="<?php echo isset($section_five->image_0)?$section_five->image_0:''; ?>">
                            <img height="150px" width="200px;" src="<?php echo isset($section_five->image_0)?$section_five->image_0:''; ?>">

                               <input type="file" name="image_two" value="<?php echo isset($section_five->image_1)?$section_five->image_1:''; ?>"><br>
                             <input type="hidden" name="hidden_image_1" value="<?php echo isset($section_five->image_1)?$section_five->image_1:''; ?>">
                            <img height="150px" width="200px;" src="<?php echo isset($section_five->image_1)?$section_five->image_1:''; ?>">

                            <h2>Section One</h2>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input class="form-control" name="section[1][industry_name]" id="exampleInputEmail1" value="<?php echo $section_one->industry_name ?>" placeholder="Enter Idrustry Name" type="text">
                            </div>

                            <div class="form-group">
                                <label for="email">Service Short Desc</label>
                                <textarea class="form-control"  name="section[1][industry_sort]"> <?php echo $section_one->industry_sort ?></textarea>
                            </div>

                            <!--  <div class="form-group">
                                <label for="email">Image Upload</label>
                                <input type="file" class="form-control"  name="test">
                            </div> -->


                           <h2>Seciton Two</h2>

                             <div class="form-group">
                                <label for="email">Indrustry First Heading</label>
                                <input type="text" value="<?php echo $section_two->heading_one; ?>" class="form-control"  name="section[2][heading_one]">
                            </div>

                           <div class="form-group">
                            <label >Summary</label>
                                 <textarea  name="section[2][industry_desc_one]" class="summary"><?php echo $section_two->industry_desc_one; ?></textarea>
                            </div>

                             <div class="form-group">
                                <label for="email">Indrustry Second Heading</label>
                                <input type="text" class="form-control"  name="section[2][heading_one]" value="<?php echo $section_two->heading_one; ?>">
                            </div>

                             <div class="form-group">
                                <label for="email">Indrustry Second Desc</label>
                               <textarea class="form-control"  name="section[2][industry_desc_two]"><?php echo $section_two->industry_desc_two; ?></textarea>
                            </div>

                              <div class="form-group">
                                <label for="email">Indrustry Third Desc</label>
                               <textarea class="form-control"  name="section[2][industry_desc_three]"><?php echo $section_two->industry_desc_three; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Main Description</label>
                              <textarea  name="section[2][industry_main_desc]" class="summary"><?php echo $section_two->industry_main_desc; ?></textarea>
                            </div>

                        <h2>Seciton Three</h2>

                            <div class="form-group">
                                <label for="email">Feature Section Name</label>
                                <input class="form-control" name="section[3][feature_name]" id="email" placeholder="Enter Email Address" value="<?php echo $section_three->feature_name; ?>" type="text">
                            </div>

                            <div class="form-group">
                                <label for="email">Key One</label>
                                <input type="text" class="form-control" value="<?php echo $section_four->one; ?>"   name="section[4][one]">
                            </div>
                                  <div class="form-group">
                                <label for="email">Key Two</label>
                                <input type="text" class="form-control"  value="<?php echo $section_four->two; ?>" name="section[4][two]">
                            </div>


                            <div class="form-group">
                                <label for="email">Key Three</label>
                               <input type="text" class="form-control" value="<?php echo $section_four->three; ?>"  name="section[4][three]">
                            </div>


                         <div class="form-group">
                                <label for="email">Key Four</label>
                                <input type="text" class="form-control" value="<?php echo $section_four->four; ?>"  name="section[4][four]">
                            </div>

                           <div class="form-group">
                                <label for="email">Key Five</label>
                                <input type="text" class="form-control" value="<?php echo $section_four->five; ?>"  name="section[4][five]">
                            </div>

                            <div class="form-group">
                                <label for="email">Key Six</label>
                                <input type="text" class="form-control"  value="<?php echo $section_four->six; ?>" name="section[4][six]">
                            </div>

                            <div class="form-group">
                                <label for="email">Key Seven</label>
                                <input type="text" class="form-control" value="<?php echo $section_four->seven; ?>"  name="section[4][seven]">
                            </div>

                            <div class="form-group">
                                <label for="email">Key Eight</label>
                                <input type="text" class="form-control" value="<?php echo $section_four->eight; ?>" name="section[4][eight]">
                            </div>


                            <h2>Section Five </h2>

                              <div class="form-group">
                                <label for="email">Why Venus IT</label>
                                <textarea class="form-control"  name="section[4][why_venus]"><?php  if(!empty($section_four->why_venus)){ echo $section_four->why_venus; } ?> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Benefits With Us</label>
                                <textarea class="form-control"  name="section[4][benefits]"><?php  if(!empty($section_four->benefits)){ echo $section_four->benefits; } ?></textarea>
                            </div>


                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

        </div>
</section>
@stop