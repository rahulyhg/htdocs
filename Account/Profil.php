<?php
    include "../global/session.php";
    if($login_session == ''){
         header("Location: /Account/Login.php");
    } else {    
        include "../global/header.php";
        include "../global/dbConnect.php";
        
        //Profilul userului
        $first_name="";
        $last_name="";
        $phone_number="";
        $email="";
        $sql = "SELECT `first_name`, `last_name`, `phone_number`, `email` FROM users where `user_name`='".$login_session."'";
        $result = $conn->query($sql);        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $first_name=$row["first_name"];
                $last_name=$row["last_name"];
                $phone_number=$row["phone_number"];
                $email=$row["email"];
            }
        }
        
        //Programarile userului
        $start_reservation="";
        $grade="";
        $last_name="";
        $first_name="";   
        $job_title="";
        $sql = "SELECT r.`start_reservation`,d.grade, d.`last_name`, d.`first_name`, d.`job_title` FROM users u join reservations r on u.`id_user`=r.`id_user` join `doctors` d on r.`id_doctor`=d.`id_doctor`";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $start_reservation=$row["start_reservation"];
                $grade=$row["grade"];
                $last_name=$row["last_name"];
                $first_name=$row["first_name"];
                $job_title=$row["job_title"];
            }
        }
?>

<html>
<head>
    <title>Profilul meu</title>
    <link href="/css/profil.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
</head>
<body>
    <div class="row call-to-action">
        <div class="container size">
            <div class="row well">
                <div class="col-sm-5">
                    <div class="well">
                        <h3><a href="#"><strong>Profilul meu:</strong></a></h3>
                        <h4><strong>Nume: </strong><?php echo $last_name?></h4>
                        <h4><strong>Prenume: </strong><?php echo $first_name?></h4>
                        <h4><strong>Nr. telefon: </strong><?php echo $phone_number?></h4>
                        <h4><strong>Email: </strong><?php echo $email?></h4>
                    </div>
                    <div class="well">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Schimba parola</button>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <h3><a href="#"><strong>Abonamentele mele</strong></a></h3>
                                <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                            </div>
                            <div class="well">
                                <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row well">
                                <h3><a href="#"><strong>Programarile mele:</strong></a></h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 well text-center">
                                    <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                    <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                    <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                                    <h4 class="text-center"><button type="button" class="btn btn-danger btn-lg">Danger</button></h4>
                                </div>
                                <div class="col-sm-6 well text-center">
                                    <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                    <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                    <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                                    <h4 class="text-center"><button type="button" class="btn btn-danger btn-lg">Danger</button></h4>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-6 well text-center">
                                    <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                    <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                    <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                                    <h4 class="text-center"><button type="button" class="btn btn-danger btn-lg">Danger</button></h4>
                                </div>
                                <div class="col-sm-6 well text-center">
                                    <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                    <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                    <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                                    <h4 class="text-center"><button type="button" class="btn btn-danger btn-lg">Danger</button></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 well text-center">
                                    <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                    <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                    <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                                    <h4 class="text-center"><button type="button" class="btn btn-danger btn-lg">Danger</button></h4>
                                </div>
                                <div class="col-sm-6 well text-center">
                                    <h4><strong>Data si ora programare: </strong><?php echo $start_reservation?></h4>
                                    <h4><strong>Doctor: </strong><?php echo $grade." ".$last_name." ".$first_name?></h4>
                                    <h4><strong>Specialitate: </strong><?php echo $job_title?></h4>
                                    <h4 class="text-center"><button type="button" class="btn btn-danger btn-lg">Danger</button></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>

<?php
    }
?>