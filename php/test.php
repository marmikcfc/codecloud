<?php
 try {
                require_once 'conf.php';
             
                $stmt = $conn->prepare('SELECT * FROM user_data ');
                $stmt->execute();

                while($row = $stmt->fetch()) {
                        print_r($row);          
                }


        } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
        }


?>
