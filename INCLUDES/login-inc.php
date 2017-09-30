<?php

session_start();

if (isset($_POST['submit'])) {

    include 'dbh-inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pass)) {
        header("Location: ../index.php?login=empty");
        exit();
    }
            else {
                $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck < 1) {
                    header("Location: ../index.php?login=error");
                    exit();
                }
                else {
                    if ($row = mysqli_fetch_assoc($result)) {
                        $passCheck = $row['user_pass'];
                        if ($pass != $passCheck) {
                            header("Location: ../index.php?login=error");
                            exit();
                        }
                        elseif ($pass == $passCheck) {
                            //Login in the user here
                            $_SESSION['u_id'] = $row['user_id'];
                            $_SESSION['u_uid'] = $row['user_uid'];
                            header("Location: ../demo.php?login=success");
                            exit();
                        }

                    }
                }
            }
        }
    else {
        header("Location: ../index.php?login=error");
        exit();
    }
