<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
echo '<script>';
echo 'let empId = ' . $id . ';';
echo '</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Update -->
    <section id="update-container">
        <h4 style="text-align: center; margin: 50px 0;">Update Form</h4>

        <div style="border: 0.1px solid #B4B4B3; margin: 4rem; padding: 2rem; border-radius: 0.4rem">
            <!-- Row-1 -->
            <div class="container">
                <?php echo $id ?>
                <form id="update-form" action="update.php?id=<?php echo $id ?>" method="post">
                    <div class="row">
                        <div class="col-sm"> 
                            <label for="newfname">FName</label>
                        </div>
                        <div class="col-sm">
                            <input type="text" name="newfname" class="form-control" id="newfname" placeholder="Enter First Name">
                        </div>
                        <div class="col-sm">
                            <label>Qualification</label>
                        </div>
                        <div class="col-sm">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <input name="newqualification[]" class="form-check-input" type="checkbox" id="ten" value="10">
                                        <label class="form-check-label" for="ten">
                                            10
                                        </label>
                                    </div>

                                    <div class="col-sm">
                                        <input name="newqualification[]" class="form-check-input" type="checkbox" id="tenplustwo" value="10+2">
                                        <label class="form-check-label" for="tenplustwo">
                                            10+2
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <input name="newqualification[]" class="form-check-input" type="checkbox" id="bca" value="bca">
                                        <label class="form-check-label" for="bca">
                                            BCA
                                        </label>
                                    </div>

                                    <div class="col-sm">
                                        <input name="newqualification[]" class="form-check-input" type="checkbox" id="mca" value="mca">
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
                        <label for="newlname">LName</label>
                    </div>
                    <div class="col-sm">
                        <input name="newlname" type="text" class="form-control" id="newlname" placeholder="Enter Last Name">
                    </div>
                    <div class="col-sm">
                        <label for="newskills">Skills</label>
                    </div>
                    <div class="col-sm">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <input name="newskill[]" class="form-check-input" type="checkbox" id="newphp" aria-checked="false" value="php">
                                    <label class="form-check-label" for="php">
                                        php
                                    </label>
                                </div>

                                <div class="col-sm">
                                    <input name="newskill[]" class="form-check-input" type="checkbox" id="newjs" aria-checked="false" value="Js">
                                    <label class="form-check-label" for="js">
                                        Js
                                    </label>

                                </div>

                                <div class="col-sm">
                                    <input name="newskill[]" class="form-check-input" type="checkbox" id="newjava" aria-checked="false" value="Java">
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
                        <label for="newmobile">Mobile</label>
                    </div>
                    <div class="col-sm">
                        <input minlength="10" name="newmobile" maxlength="10" type="text" class="form-control" id="newmobile" placeholder="Enter Mobile Number">
                        <div class="mobile-container">
                            <p id="mobile-err"></p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <label for="newframework">Frameworks</label>
                    </div>
                    <div class="col-sm">
                        <div class="container">
                            <div class="row">
                                <div class="php_container">
                                    <div class="col-sm">
                                        <input name="newframework[]" class="form-check-input" type="checkbox" id="newlaravel" value="Laravel">
                                        <label class="form-check-label" for="laravel">
                                            Laravel
                                        </label>
                                    </div>

                                    <div class="col-sm">
                                        <input name="newframework[]" class="form-check-input" type="checkbox" id="newcakephp" value="CakePHP">
                                        <label class="form-check-label" for="cakephp">
                                            CakePHP
                                        </label>
                                    </div>
                                </div>

                                <div class="js_container">
                                    <div class="col-sm">
                                        <input name="newframework[]" class="form-check-input" type="checkbox" id="newexpress" value="ExpressJS">
                                        <label class="form-check-label" for="express">
                                            Express.js
                                        </label>
                                    </div>
                                    <div class="col-sm">
                                        <input name="newframework[]" class="form-check-input" type="checkbox" id="newnext" value="NextJS">
                                        <label class="form-check-label" for="newnext">
                                            Next.js
                                        </label>
                                    </div>
                                </div>

                                <div class="java_container">
                                    <div class="col-sm">
                                        <input name="newframework[]" class="form-check-input" type="checkbox" id="newhibernate" value="Hibernate">
                                        <label class="form-check-label" for="newhibernate">
                                            Hibernate
                                        </label>
                                    </div>

                                    <div class="col-sm">
                                        <input name="newframework[]" class="form-check-input" type="checkbox" id="newspring" value="Spring">
                                        <label class="form-check-label" for="newspring">
                                            Spring
                                        </label>
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
                        <label for="newemail">Email</label>
                    </div>
                    <div class="col-sm">
                        <input name="newemail" type="email" class="form-control" id="newemail" placeholder="Enter Email">
                        <div class="email-container">
                            <p id="newemail-err"></p>
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
                        <label for="newgender">Gender</label>
                    </div>
                    <div class="col-sm">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <input name="newgender" class="form-check-input" type="radio" name="newgender" id="newmale" value="male">
                                    <label class="form-check-label" for="newmale">
                                        Male
                                    </label>
                                </div>
                                <div class="col-sm">
                                    <input name="newgender" class="form-check-input" type="radio" name="newgender" id="newfemale" value="female">
                                    <label class="form-check-label" for="newfemale">
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
                        <label for="newcity">City</label>
                    </div>
                    <div class="col-sm">
                        <select name="newcity" class="form-select">
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
                        <label for="newstate">State</label>
                    </div>
                    <div class="col-sm">
                        <select name="newstate" class="form-select">
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
                <input type="submit" name="Submit" value="Update" class="btn btn-success">
            </div>

            </form>
        </div>￼
        </div>

    </section>



    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(() => {
            console.log("empId", empId);
            $.get(`updatedData.php?id=${empId}`, (data, status) => {
                const obj = JSON.parse(data);
                console.log(obj);

                $("#newfname").val(obj[0].fname);
                $("#newlname").val(obj[0].lname);
                $("#newmobile").val(obj[0].mobile);
                $("#newemail").val(obj[0].email);

                $(`input[name='newgender'][value=${obj[0].gender}]`).prop(
                    "checked",
                    true
                );
                $(`.form-select option[value="${obj[0].city}"]`).prop("selected", true);
                $(`.form-select option[value="${obj[0].state}"]`).prop("selected", true);

                for (q of obj[1]) {
                    $(`input[name='newqualification[]'][value='${q}']`).prop(
                        "checked",
                        true
                    );
                }

                for (s of obj[2]) {
                    $(`input[name='newskill[]'][value='${s}']`).prop("checked", true);
                }

                for (f of obj[3]) {
                    $(`input[name='newframework[]'][value='${f}']`).prop("checked", true);
                }

            });
        })
    </script>
</body>

</html>