			<link rel="stylesheet" href="css/font-awesome.min.css">

			<nav class="navbar navbar-header navbar-light " style="background-color: #363636; color:white">
			    <div class="container-fluid">
			        <div class="navbar-header">
			            <p class="navbar-text pull-right text-white">
			            <h3>Quiz pour nouveaux candidats</h3>
			            </p>
			        </div>
			        <div class="nav navbar-nav navbar-right">
			            <a href="logout.php" class="text-white"><?php echo $name ?> <i class="fa fa-power-off"></i></a>
			        </div>
			    </div>
			</nav>
			<div id="sidebar" class="bg-light">
			    <div id="sidebar-field">
			        <a href="home.php" class="sidebar-item text-dark">
			            <div class="sidebar-icon"><i class="fa fa-home"> </i></div> Accueil
			        </a>
			    </div>
			    <?php if ($_SESSION['login_user_type'] != 3) : ?>
			    <?php if ($_SESSION['login_user_type'] == 1) : ?>
			    <div id="sidebar-field">
			        <a href="faculty.php" class="sidebar-item text-dark">
			            <div class="sidebar-icon"><i class="fa fa-users"> </i></div> Liste prof
			        </a>
			    </div>
			    <?php endif; ?>
			    <div id="sidebar-field">
			        <a href="student.php" class="sidebar-item text-dark">
			            <div class="sidebar-icon"><i class="fa fa-users"> </i></div> Liste candidats
			        </a>
			    </div>
			    <div id="sidebar-field">
			        <a href="quiz.php" class="sidebar-item text-dark">
			            <div class="sidebar-icon"><i class="fa fa-list"> </i></div> Liste Quiz
			        </a>
			    </div>
			    <div id="sidebar-field">
			        <a href="history.php" class="sidebar-item text-dark">
			            <div class="sidebar-icon"><i class="fa fa-history"> </i></div> Meilleurs score quiz
			        </a>
			    </div>
			    <?php else : ?>
			    <div id="sidebar-field">
			        <a href="student_quiz_list.php" class="sidebar-item text-dark">
			            <div class="sidebar-icon"><i class="fa fa-list"> </i></div> Liste QUIZ
			        </a>
			    </div>
			    <?php endif; ?>

			</div>
			<script>
$(document).ready(function() {
    var loc = window.location.href;
    loc.split('{/}')
    $('#sidebar a').each(function() {
        // console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
        if ($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)) {
            $(this).addClass('active')
        }
    })
})
			</script>