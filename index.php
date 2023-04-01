<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style type="text/css">
    .container {
        max-width: 700px;
        margin: 50px auto;
    }
    form {
        border: 1px solid red;
        background: skyblue;
        padding: 40px 50px 45px;
    }
    .form-control:focus {
        border-color: #000;
        box-shadow: none;
    }
    .error {
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }
    .form-control.error {
        border-color: red;
        padding: .375rem .75rem;
    }
</style>
<body>
<?php
if(isset($_POST['register']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$education=$_POST['education'];
$study=$_POST['study'];
$yop=$_POST['yop'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$hoby=$_POST['hoby'];
$exp=$_POST['exp'];
$courses=$_POST['courses'];
$resume=$_POST['resume'];
$comment=$_POST['comment'];

$c= new mysqli("localhost:3306","root","","chandhuu");

$x=$c->query("INSERT INTO form (nam,email,education,study,yop,gender,address,hoby,exp,courses,resume,comment) VALUES ('$name','$email','$education','$study','$yop','$gender','$address','$hoby','$exp','$courses','$resume','$comment')"); 
}

?>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Application form
        </h2>
        <!-- Form validation  -->
       
        <!-- Contact form -->
        <form action="" method="post" novalidate>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control">
                       
                    </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" name="email" class="form-control">
                    <!-- Error -->
                    
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Education</label>
                <div class="col-sm-8">
                    <select id="education" name="education" class="form-control">
                        <option selected="" disabled>...</option>
                        <option value="Graduation">Graduation</option>
                        <option value="Post Graduation">Post Graduation</option>
                    </select>
                    
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Field of study</label>
                <div class="col-sm-8">
                    <select id="study" name="study" class="form-control">
                        <option selected="" disabled>...</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="BCom">BCom</option>
                        <option value="Bsc">Bsc</option>
                        <option value="M.Tech">M.Tech</option>
                        
                        
                    </select>
                    
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">YOP</label>
                <div class="col-sm-8">
                    <select id="yop" name="yop" class="form-control">
                        <option selected="" disabled>...</option>
                        <option value="2019">20</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2023</option>
                        <option value="2023">2023</option>
                        
                    </select>
                    
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Gender</legend>
                    <div class="col-sm-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group row">
                <label class="col-sm-4 col-form-label">Address</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                    
                </div>
            </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-4">Hobbies</div>
                <div class="col-sm-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" name="hoby" value="Drawing" class="custom-control-input" id="drawing">
                        <label class="custom-control-label" for="drawing">Drawing</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" name="hoby" value="Singing" class="custom-control-input" id="singing">
                        <label class="custom-control-label" for="singing">Singing</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" name="hoby" value="Dancing" class="custom-control-input" id="dancing">
                        <label class="custom-control-label" for="dancing">Dancing</label>
                    </div>
                    
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Experience</legend>
                    <div class="col-sm-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Fresher" name="exp" value="Fresher" class="custom-control-input">
                            <label class="custom-control-label" for="Fresher">Fresher</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="0-3" name="exp" value="0-3" class="custom-control-input">
                            <label class="custom-control-label" for="0-3">0-3</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="3-6" name="exp" value="3-6" class="custom-control-input">
                            <label class="custom-control-label" for="3-6">3-6</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Courses</label>
                <div class="col-sm-8">
                    <select id="courses" name="courses" class="form-control">
                        <option selected="" disabled>...</option>
                        <option value="Full stack web developer">Full stack web developer</option>
                        <option value="Python">Python</option>
                        <option value="java">java</option>
                        <option value="Others">others</option>
                        
                    </select>
                    
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Resume</label>
                <div class="col-sm-8">
            <input type="file"  name="resume">
            </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Comment</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="comment" id="comment" rows="4"></textarea>
                    
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12 mt-3">
                    <button type="submit" name="register" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>