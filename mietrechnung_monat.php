<?php
include_once 'db.php';

                    $email = array();
                    
                        $sql = "SELECT
                               email
                        FROM
                               user
                        WHERE
                               id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $reihe = mysqli_fetch_assoc($result);
               
                
                $monat = array();
                    $sql = "SELECT
                                 Einzugsdatum
                        FROM
                                 personen
                        WHERE
                                 Email = '".$email[] = $reihe['email']."'
                       "; 
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $reihe = mysqli_fetch_assoc($result);

                        ?>