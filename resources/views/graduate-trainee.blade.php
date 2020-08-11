@extends('layouts.frontend')
@section('title')
    Graduate Trainee | {{ config('app.name') }}
@endsection

@section('breadcrumb')
    @includeIf('layouts.breadcrumb' , [ 'title' => 'Graduate Trainee' , 'subtitle' => 'Graduate Trainee'])
@endsection

@section('main_content')
<section class="ttm-row break-991-colum ttm-bgcolor-white clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-35">
                    @includeIf('layouts.error_template')
                    <h2 class="ttm-textcolor-skincolor ">Application Form</h2>
                    <p>Agro-Park Graduate Trainee Program (GTP) 2020 is a 6-month intensive program. Also, note that the training takes place on the farm estate.</p>
                </div>

                <div class="comment-respond">
                   
                    <form action="/graduate-trainee" method="post" id="commentform">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Title</label>
                                            </div>
                                            
                                            <select class="form-control" name="title">
                                                <option value=" ">Select Title</option>
                                                <option value="mr"> Mr </option>
                                                <option value="mrs"> Mrs </option>
                                                <option value="miss"> Miss </option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>

                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Surname"  type="text" name="surname">
                                </p>
                            </div>


                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Other Names"  type="text" name="other_names">
                                </p>
                            </div>


                            <div class="col-lg-6">
                                <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Gender</label>
                                            </div>
                                            
                                            <select class="form-control" name="gender">
                                                <option value=" ">Select Gender</option>
                                                <option value="male"> Male </option>
                                                <option value="female"> Female </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Age"  type="text" name="age">
                                </p>
                            </div>

                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Course Of Study"  type="text" name="course">
                                </p>
                            </div>

                            <div class="col-lg-6">
                                 <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Highest Qualification</label>
                                            </div>
                                            
                                            <select class="form-control" name="qualification">
                                                <option value=" ">Select Qualification</option>
                                                <option value="undergraduate">  Undergraduate </option>
                                                <option value="ond"> OND </option>
                                                <option value="hnd">  HND </option>
                                                <option value="bsc"> BSC  </option>
                                                <option value="msc"> MSC </option>
                                                <option value="phd">  PHD </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                

                            </div>

                            <div class="col-lg-6">
                                 <p class="comment-form-email">
                                    <input placeholder="Email" name="email" type="email" >
                                </p>
                            
                            </div>

                            <div class="col-lg-6">
                                 <p class="comment-form-email">
                                    <input placeholder="Telephone" name="phone" type="tel" >
                                </p>
                            </div>

                            <div class="col-lg-6">
                                <p class="comment-form-email">
                                    <input placeholder="State" name="state" type="text" >
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Area Of Interest</label>
                                            </div>
                                            <select class="form-control" name="interest">
                                                <option value=" ">Select Area of Interest</option>
                                                <option value="crop_production"> Crop Production </option>
                                                <option value="agro_processing"> Agro Processing </option>
                                                <option value="agricultural_technology"> Agricultural Technology </option>
                                                <option value="farm_administration"> Farm Administration </option>
                                                <option value="livestock_production"> Livestock Production </option>
                                                <option value="animal_nutrition_and_feed_production"> Animal Nutrition And Feed Production </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                        <p class="comment-notes">By submitting this form, you admit to the full understanding that Agro Park internship programme is not a full employment and you are ready to abide by the rules and regulations during the duration of your internship at Agro Park. </p>
                        <p class="form-submit">
                            <input type="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" value="Submit Form">
                        </p>
                    </form>
                </div>

            </div>
        </div><!-- row end -->
    </div>
</section>
@endsection