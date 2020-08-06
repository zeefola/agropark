@extends('layouts.frontend')
@section('title')
     Our Team | {{ config('app.name') }}
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
                    <h2 class="ttm-textcolor-skincolor ">Application Form</h2>
                    <p>Agro-Park Graduate Trainee Program (GTP) 2020 is a 6-month intensive program. Also, note that the training takes place on the farm estate.</p>
                </div>

                <div class="comment-respond">
                   
                    <form action="/graduate-trainee" method="post" id="commentform" class="comment-form">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Title</label>
                                            </div>
                                            
                                            <select class="form-control" v-model="formData.title">
                                                <option selected disabled>Select Title</option>
                                                <option v-for="(title, index) in titles" :key="index+'title'" :value="title"> {{ title }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>

                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Surname"  type="text" v-model="formData.surname">
                                </p>
                            </div>


                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Other Names"  type="text" v-model="formData.other_names">
                                </p>
                            </div>


                            <div class="col-lg-6">
                                <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Gender</label>
                                            </div>
                                            
                                            <select class="form-control" v-model="formData.gender">
                                                <option selected disabled>Select Gender</option>
                                                <option v-for="(gender, index) in genders" :key="index+'gender'" :value="gender"> {{ gender }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Age"  type="number" v-model="formData.age">
                                </p>
                            </div>

                            <div class="col-lg-6">
                                <p class="comment-form-author">
                                    <input  placeholder="Course Of Study"  type="text" v-model="formData.course_of_study">
                                </p>
                            </div>

                            <div class="col-lg-6">
                                 <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Highest Qualification</label>
                                            </div>
                                            
                                            <select class="form-control" v-model="formData.qualification">
                                                <option selected disabled>Select Qualification</option>
                                                <option v-for="(qualification, index) in qualifications" :key="index+'qualification'" :value="qualification"> {{ qualification }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                

                            </div>

                            <div class="col-lg-6">
                                 <p class="comment-form-email">
                                    <input placeholder="Email" v-model="formData.email" type="email" >
                                </p>
                            
                            </div>

                            <div class="col-lg-6">
                                 <p class="comment-form-email">
                                    <input placeholder="Telephone" v-model="formData.telephone" type="tel" >
                                </p>
                            </div>

                            <div class="col-lg-6">
                                <p class="comment-form-email">
                                    <input placeholder="State" v-model="formData.state" type="text" >
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-form-author">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupSelect01" class="input-group-text" style="color: rgb(146, 117, 125); font-size: 0.9rem;">Area Of Interest</label>
                                            </div>
                                            <select class="form-control" v-model="formData.area_of_interest">
                                                <option selected disabled>Select Area of Interest</option>
                                                <option v-for="(interest, index) in area_of_interests" :key="index+'interest'" :value="interest"> {{ interest }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="comment-notes">By submitting this form, you admit to the full understanding that Agro Park internship programme is not a full employment and you are ready to abide by the rules and regulations during the duration of your internship at Agro Park. </p>
                        <p class="form-submit">
                            <input type="button" @click.prevent="submit('SUBMIT_GRADUATE_TRAINEE_FORM')" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" value="Submit Form">
                        </p>
                    </form>
                </div>

            </div>
        </div><!-- row end -->
    </div>
</section>
@endsection