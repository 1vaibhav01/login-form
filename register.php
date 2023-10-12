<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Create data -->
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Registration Form</h1>

        <div style="border: 0.1px solid #B4B4B3; margin: 4rem; padding: 2rem; border-radius: 0.4rem">
            <div class="container">
                <form id="add-container" action="create.php" method="post">
                    <!-- Row-1 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <label for="fname">FName</label>
                            </div>
                            <div class="col-sm">
                                <input type="fname" name="fname" class="form-control" id="fname" placeholder="Enter First Name" required>
                            </div>
                            <div class="col-sm">
                                <label>Qualification</label>
                            </div>
                            <div class="col-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <input name="qualification[]" class="form-check-input" type="checkbox" id="ten" value="10">
                                            <label class="form-check-label" for="ten">
                                                10
                                            </label>
                                        </div>

                                        <div class="col-sm">
                                            <input name="qualification[]" class="form-check-input" type="checkbox" id="tenplustwo" value="10+2">
                                            <label class="form-check-label" for="tenplustwo">
                                                10+2
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <input name="qualification[]" class="form-check-input" type="checkbox" id="bca" value="bca">
                                            <label class="form-check-label" for="bca">
                                                BCA
                                            </label>
                                        </div>

                                        <div class="col-sm">
                                            <input name="qualification[]" class="form-check-input" type="checkbox" id="mca" value="mca">
                                            <label class="form-check-label" for="mca">
                                                MCA
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />
                    <!-- Row-2 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <label for="lname">LName</label>
                            </div>
                            <div class="col-sm">
                                <input name="lname" type="lname" class="form-control" id="lname" placeholder="Enter Last Name" required>
                            </div>
                            <div class="col-sm">
                                <label for="skills">Skills</label>
                            </div>
                            <div class="col-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <input name="skill[]" class="form-check-input" type="checkbox" id="php" aria-checked="false" value="PHP">
                                            <label class="form-check-label" for="php">
                                                php
                                            </label>
                                        </div>

                                        <div class="col-sm">
                                            <input name="skill[]" class="form-check-input" type="checkbox" id="js" aria-checked="false" value="Js">
                                            <label class="form-check-label" for="js">
                                                Js
                                            </label>

                                        </div>

                                        <div class="col-sm">
                                            <input name="skill[]" class="form-check-input" type="checkbox" id="java" aria-checked="false" value="Java">
                                            <label class="form-check-label" for="java">
                                                Java
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <br />
                    <!-- Row-3 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="col-sm">
                                <input minlength="10" name="mobile" maxlength="10" type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
                                <div class="mobile-container">
                                    <p id="mobile-err"></p>
                                </div>
                            </div>
                            <div class="col-sm">
                                <label for="framework">Frameworks</label>
                            </div>

                            <div class="col-sm">
                                <div class="container">
                                    <div class="framework-container">
                                        <p id="framework-err"></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="php_container">
                                                <div class="col-sm">
                                                    <input name="framework[]" class="form-check-input" type="checkbox" id="laravel" value="Laravel">
                                                    <label class="form-check-label" for="laravel">
                                                        Laravel
                                                    </label>
                                                </div>

                                                <div class="col-sm">
                                                    <input name="framework[]" class="form-check-input" type="checkbox" id="cakephp" value="CakePHP">
                                                    <label class="form-check-label" for="cakephp">
                                                        CakePHP
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="js_container">
                                                <div class="col-sm">
                                                    <input name="framework[]" class="form-check-input" type="checkbox" id="express" value="ExpressJS">
                                                    <label class="form-check-label" for="express">
                                                        Express.js
                                                    </label>
                                                </div>
                                                <div class="col-sm">
                                                    <input name="framework[]" class="form-check-input" type="checkbox" id="next" value="NextJS">
                                                    <label class="form-check-label" for="next">
                                                        Next.js
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="java_container">
                                                <div class="col-sm">
                                                    <input name="framework[]" class="form-check-input" type="checkbox" id="hibernate" value="Hibernate">
                                                    <label class="form-check-label" for="hibernate">
                                                        Hibernate
                                                    </label>
                                                </div>

                                                <div class="col-sm">
                                                    <input name="framework[]" class="form-check-input" type="checkbox" id="spring" value="Spring">
                                                    <label class="form-check-label" for="spring">
                                                        Spring
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <br />
                    <!-- Row-4 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-sm">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                                <div class="email-container">
                                    <p id="email-err"></p>
                                </div>
                            </div>
                            <div class="col-sm">
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                    </div>

                    <br />
                    <!-- Row-5 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <input name="gender" class="form-check-input" type="radio" name="gender" id="male" value="male">
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="col-sm">
                                            <input name="gender" class="form-check-input" type="radio" name="gender" id="female" value="female">
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm">
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                    </div>

                    <br />
                    <!-- Row-6 -->
                    <div class="container">

                        <div class="row">
                            <div class="col-sm">
                                <label for="city">City</label>
                            </div>
                            <div class="col-sm">
                                <select name="city" class="form-select" required>
                                    <option value="" selected>Select City</option>
                                    <option value="Lucknow">Lucknow</option>
                                    <option value="Noida">Noida</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Gurgaon">Gurgaon</option>
                                </select>

                            </div>
                            <div class="col-sm">
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                    </div>

                    <br />
                    <!-- Row-7 -->
                    <div class="container">

                        <div class="row">
                            <div class="col-sm">
                                <label for="state">State</label>
                            </div>
                            <div class="col-sm">
                                <select name="state" class="form-select" required>
                                    <option value="" selected>Select State</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Gujrat">Gujrat</option>
                                </select>

                            </div>
                            <div class="col-sm">
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                    </div>
                    <br />
                    <hr />
                    <br />

                    <div class="text-center">
                        <input type="submit" name="Submit" value="Register" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./register.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>