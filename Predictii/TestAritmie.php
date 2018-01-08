<?php
    include "../global/session.php";
    include "../global/header.php";
    include "../global/dbConnect.php";

    $id_session=0;
    $sql = "SELECT id_user FROM users WHERE user_name='".$login_session."'";
    $result = $conn->query($sql);        
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $id_session=$row["id_user"];
        }
    }
?>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link href="/css/test.css" rel="stylesheet">
    <script src="/js/doctors.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <form action="/Predictii/Rezultat.php" method="post" id="prediction">
        <input type="text" name="question1" value="Sexul" style="display: none">
        <input type="text" name="question2" value="Aveti peste 50 de ani?" style="display: none">
        <input type="text" name="question3" value="Suferiti de diabet?" style="display: none">
        <input type="text" name="question4" value="Aveti pulsul marit?" style="display: none">
        <input type="text" name="question5" value="Ati avut probleme la ultimul test EKG?" style="display: none">
        <div class="timeline-container">
            <h1 class="project-name">Test de Aritmie</h1>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4>Acest test va ajuta in a afla daca suferiti sau nu de aritmie. Raspunsul este in procentaj maxim corect. Consultati un medic in urma efectuarii testului.</h4>
                </div>
            </div>
            <div id="timeline">
                <div class="timeline-item">
                    <div class="timeline-icon success">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="timeline-content">
                        <h2>Alegeti sexul:</h2>
                        <div class="row question">
                            <div class="col-sm-12 text-center">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear1" value="m" autocomplete="off" required> Masculin
                                    </label>
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear1" value="f" autocomplete="off"> Feminin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="timeline-content right">
                        <h2>Aveti peste 50 de ani?</h2>
                        <div class="row question">
                            <div class="col-sm-12 text-center">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear2" value="1" autocomplete="off" required> Da
                                    </label>
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear2" value="0" autocomplete="off"> Nu
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon success">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="timeline-content">
                        <h2>Suferiti de diabet?</h2>
                        <div class="row question">
                            <div class="col-sm-12 text-center">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear3" value="1" autocomplete="off" required> Da
                                    </label>
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear3" value="0" autocomplete="off"> Nu
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="timeline-content right">
                        <h2>Aveti pulsul marit?</h2>
                        <div class="row question">
                            <div class="col-sm-12 text-center">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear4" value="1" autocomplete="off" required> Da
                                    </label>
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear4" value="0" autocomplete="off"> Nu
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon success">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="timeline-content">
                        <h2>Ati avut probleme la ultimul test EKG?</h2>
                        <div class="row question">
                            <div class="col-sm-12 text-center">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear5" value="1" autocomplete="off" required> Da
                                    </label>
                                    <label class="btn btn-warning btn-lg">
                                        <input type="radio" name="answear5" value="0" autocomplete="off"> Nu
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
            <div class="row">
                <div class="col-sm-12 text-center checkButtons">
                    <button type="button" class="btn btn-secondary btn-lg">Elimina date</button>
                    <button type="submit" class="btn btn-success btn-lg">Trimite date</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<script>
    $(function() {
	var timelineBlocks = $('.timeline-item'),
		offset = 0.8;

	hideBlocks(timelineBlocks, offset);

	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
		    ($(this).offset().top > $(window).scrollTop() + $(window).height() * offset) && $(this).find('.timeline-icon, .timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
		    ($(this).offset().top <= $(window).scrollTop() + $(window).height() * offset && $(this).find('.timeline-icon').hasClass('is-hidden')) && $(this).find('.timeline-icon, .timeline-content').removeClass('is-hidden').addClass('animate-it');

		});
	}
});
</script>