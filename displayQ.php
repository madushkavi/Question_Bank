<?php include('db.php'); ?>

<?php
$checkid = $_GET['id'];
$sql = "SELECT * FROM approveq WHERE id='$checkid'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 0)
{
    header('location: quections.php');
}else
{
        $answera = '';
        $answerb = '';
        $answerc = '';
        $answerd = '';
        $question = '';

        $answera_class = '';
        $answerb_class = '';
        $answerc_class = '';
        $answerd_class = '';

        $answer_box_disable = '';
        $answer_style_display = '';

        $answer_react_image_a = "data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=";
        $answer_react_image_b = "data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=";
        $answer_react_image_c = "data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=";
        $answer_react_image_d = "data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=";

        if (isset($_GET["id"]) && $_GET["id"] != null) {
            $id = $_GET["id"];
            $sql = "SELECT * FROM approveq WHERE id='$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $answera = $row["answera"];
                    $answerb = $row["answerb"];
                    $answerc = $row["answerc"];
                    $answerd = $row["answerd"];
                    $question = $row["question"];
                }
            } else {
                echo "0 results";
            }
        }

        if (isset($_GET["id"]) && $_GET["id"] != null && isset($_GET["answer"]) && $_GET["answer"] != null) {

            $answera_class = 'answer_box';
            $answerb_class = 'answer_box';
            $answerc_class = 'answer_box';
            $answerd_class = 'answer_box';

            $answer_box_disable = 'disabled';
            $answer_style_display = 'answer_style_display';

            $id = $_GET["id"];
            $answer_id = $_GET["answer"];
            $answer = '';
            $sql = "SELECT * FROM approveq WHERE id={$id}";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    switch ($answer_id) {
                        case 1:
                            $answer = $row["answera"];
                            if ($row["answera"] == $row["correctOne"]) {
                                $answera_class .= " correct_answer_box";
                                $answer_react_image_a = './images/happy.png';
                            } else {
                                $answera_class .= " wrong_answer_box";
                                $answer_react_image_a = './images/sad.png';
                            }
                            break;
                        case 2:
                            $answer = $row["answerb"];
                            if ($row["answerb"] == $row["correctOne"]) {
                                $answerb_class .= " correct_answer_box";
                                $answer_react_image_b = './images/happy.png';
                            } else {
                                $answerb_class .= " wrong_answer_box";
                                $answer_react_image_b = './images/sad.png';
                            }
                            break;
                        case 3:
                            $answer = $row["answerc"];
                            if ($row["answerc"] == $row["correctOne"]) {
                                $answerc_class .= " correct_answer_box";
                                $answer_react_image_c = './images/happy.png';
                            } else {
                                $answerc_class .= " wrong_answer_box";
                                $answer_react_image_c = './images/sad.png';
                            }
                            break;
                        case 4:
                            $answer = $row["answerd"];
                            if ($row["answerd"] == $row["correctOne"]) {
                                $answerd_class .= " correct_answer_box";
                                $answer_react_image_d = './images/happy.png';
                            } else {
                                $answerd_class .= " wrong_answer_box";
                                $answer_react_image_d = './images/sad.png';
                            }
                            break;

                        default:
                            # code...
                            break;
                    }
                    if ($answer == $row["correctOne"]) {
                        // echo 'correct';

                    } else {
                        // echo 'wrong';
                        switch ($row["correctOne"]) {
                            case $row["answera"]:
                                $answera_class .= " correct_answer_box";
                                $answer_react_image_a = './images/correct.png';
                                break;
                            case $row["answerb"]:
                                $answerb_class .= " correct_answer_box";
                                $answer_react_image_b = './images/correct.png';
                                break;
                            case $row["answerc"]:
                                $answerc_class .= " correct_answer_box";
                                $answer_react_image_c = './images/correct.png';
                                break;
                            case $row["answerd"]:
                                $answerd_class .= " correct_answer_box";
                                $answer_react_image_d = './images/correct.png';
                                break;

                            default:
                                # code...
                                break;
                        }
                    }
                }
            } else {
                echo "0 results";
            }
        }

        $conn->close();

        ?>

        <html>

        <head>
            <title>Web Technology</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <link rel="stylesheet" type=text/css  href=stylesheet.css?v=1>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/font-awesome.min.css">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <style>
                a {
                    color: black;
                    text-decoration: none;
                }

                #qi {
                    background-color: antiquewhite;
                    border: black dotted 2px;
                }

                #ux {
                    text-align: center;
                    width: 80%;
                    height: 70%;

                }
            </style>
        </head>

        <body>
            <div id="container">
                <header>
                    <div class="inner">
                        <div class="logo">
                            <div>
                                <!-- The below line can be an image or a h1, either will work -->
                                <img src="uoj_logo.png" alt="Google logo">

                                <!-- <h1>My Logo</h1> -->
                            </div>

                        </div>

                        <nav>
                            <!-- Each of the below lines look complicated. There is a reason for this markup though!
                            <li> tag will be the container for the table.
                            <span> will be the part that centers the content inside it
                            <a> is the actual clickable part -->

                            <li><span><a href="">Home</a></span></li>
                            <li><span><a href="">About us</a></span></li>
                            <li><span><a href="">LMS</a></span></li>
                            <li><span><a href="" class="button">Contact</a></span></li>
                    <li><span><a href="login.php" class="lg">Log Out</a></span></li>
                            <!-- On the line above, remove the class="button" if you don't want the final
                            element to be a button -->
                        </nav>
                    </div>
                </header>
                <div id="main">
                    <div id="ux">
                        <h2>
                            <label2 id="qi">Question <?php echo $_GET["id"]; ?> </label2><br><br>
                        </h2>

                        <h5><?php echo $question; ?> ?</h5><br>

                        <form action="displayQ.php" method="GET">

                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />

                            <style>
                                .answers_div_double {
                                    display: flex;
                                    justify-content: space-between;
                                    margin-bottom: 25px;
                                }

                                .answers_div_double .btn-outline-success {
                                    width: 49%;
                                    height: 70px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .answer_submit {
                                    width: 100%;
                                }

                                .btn-outline-success {
                                    background-color: #f6f7f9;
                                }

                                .answer_div_footer a {
                                    background-color: #f6f7f9;
                                }

                                .answer_div_footer {
                                    display: flex;
                                    justify-content: space-between;
                                    margin-top: 20px;
                                }

                                .answer_box {
                                    opacity: 1 !important;
                                    position: relative;
                                }

                                .correct_answer_box {
                                    background-color: #198754 !important;
                                    color: white !important;
                                }

                                .wrong_answer_box {
                                    background-color: red !important;
                                    color: white !important;
                                }

                                .answer_style_display {
                                    display: none !important;
                                }

                                .btn-check:active+.btn-outline-success,
                                .btn-check:checked+.btn-outline-success,
                                .btn-outline-success.active,
                                .btn-outline-success.dropdown-toggle.show,
                                .btn-outline-success:active,
                                .btn-outline-success:hover {
                                    background-color: rgb(96, 96, 235) !important;
                                }

                                .answer_box span {
                                    position: absolute;
                                    right: 10px;
                                    width: 63px;
                                }
                            </style>
                            <div class="answers_div_double">

                                <input <?php echo $answer_box_disable; ?> type="radio" class="btn-check" name="answer" id="answer1" autocomplete="off" value="1">
                                <label class="btn btn-outline-success <?php echo $answera_class; ?>" for="answer1"><?php echo $answera; ?>
                                    <span><img src="<?php echo $answer_react_image_a; ?>" alt="" srcset="" width="100%"></span>
                                </label>

                                <input <?php echo $answer_box_disable; ?> type="radio" class="btn-check" name="answer" id="answer2" autocomplete="off" value="2">
                                <label class="btn btn-outline-success <?php echo $answerb_class; ?>" for="answer2"><?php echo $answerb; ?>
                                    <span><img src="<?php echo $answer_react_image_b; ?>" alt="" srcset="" width="100%"></span>
                                </label>

                            </div>
                            <div class="answers_div_double">
                                <input <?php echo $answer_box_disable; ?> type="radio" class="btn-check" name="answer" id="answer3" autocomplete="off" value="3">
                                <label class="btn btn-outline-success <?php echo $answerc_class; ?>" for="answer3"><?php echo $answerc; ?>
                                    <span><img src="<?php echo $answer_react_image_c; ?>" alt="" srcset="" width="100%"></span>
                                </label>

                                <input <?php echo $answer_box_disable; ?> type="radio" class="btn-check" name="answer" id="answer4" autocomplete="off" value="4">
                                <label class="btn btn-outline-success <?php echo $answerd_class; ?>" for="answer4"><?php echo $answerd; ?>
                                    <span><img src="<?php echo $answer_react_image_d; ?>" alt="" srcset="" width="100%"></span>
                                </label>

                            </div>
                            <div class="<?php echo $answer_style_display; ?>">
                                <button type="submit" class="btn btn-primary btn-lg btn-block answer_submit">Submit</button>
                            </div>
                        </form>
                        <!-- <br>
                            <a href="http://localhost/PROJECT/displayQ.php?id=<?php echo $_GET["id"] + 1; ?>">Next</a>
                            <br> -->
                        <div class="answer_div_footer">
                            <a type="button" class="btn btn-outline-info" href="displayQ.php?id=<?php echo $_GET["id"] - 1; ?>">Back</a>
                            <button type="button" class="btn btn-outline-info <?php echo $answer_style_display; ?>" onclick="clearAnswers()">Clear Answer</button>
                            <a type="button" class="btn btn-outline-info" href="displayQ.php?id=<?php echo $_GET["id"] + 1; ?>">Next</a>
                        </div>

                    </div>


                </div>
            </div>



            <div id="footer">
            
                        <ul>

                        </ul>
            </div>
            </div>

    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    </body>

    </html>

<?php } ?>