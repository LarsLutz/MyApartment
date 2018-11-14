<?php
include_once 'db.php';

                    $wohnung = array();
                    
                        $sql = "SELECT
                               wohnung
                        FROM
                               user
                        WHERE
                               id = '".mysqli_real_escape_string($connid,$_SESSION['UserID'])."'
                       ";
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $row = mysqli_fetch_assoc($result);
               
                
                $miete = array();
                    $sql = "SELECT
                                 Miete
                        FROM
                                 wohnungen
                        WHERE
                                 idGebaeude = '".$wohnung[] = $row['wohnung']."'
                       "; 
                $result = mysqli_query($connid,$sql) OR die("<pre>\n".$sql."</pre>\n".mysqli_error());
                $row = mysqli_fetch_assoc($result);
                
                            
                  
                            
              
                        ?>


