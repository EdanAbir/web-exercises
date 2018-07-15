<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="includes/SetsScript.js" async></script>
    <script src="data/work.json"></script>
    <link rel="stylesheet" href="includes/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Food</title>
</head>

<body>
<header>
    <div class="topNav" style="position: fixed">
        <a class="logoImage" href="index.html"></a>
        <h4>Food</h4>
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
</header>

        <div class="foodTab">
            <table class="table">
        <tbody>
        <?php
				include('db.php');
				$query1 = "SELECT * FROM user_test_232";
				$result = mysqli_query($connection, $query1);
				if (!$result)
				{
	    			die("DB query failed");
				}
					while($row = mysqli_fetch_assoc($result)) {
				    if ($row["id"] % 2 != 0){
				        if ($row["id"]  == 1){
                            echo '<tr class="p-3 mb-2 bg-info text-white" onclick="window.location=\'breakfast.html\'">';
                            echo '<td><span>'. $row["food"] .'</span></td>';
                        }
                        else {
                            echo '<tr class="p-3 mb-2 bg-info text-white">';
                            echo '<td><span>' . $row["food"] . '</span></td>';
                        }
                    }
		    else {
                echo '<td><span>' . $row["food"] . '</span></td>';
            }
        echo '</tr>';
        }
        ?>
        </tbody>
            </table>
        </div>

    <footer>
        <i class="fa fa-user" aria-hidden="true"><h5>Profile</h5></i>
        <div onclick="location.href = 'workout.html'">
            <i class="fas fa-dumbbell" aria-hidden="true"><h5>Workout</h5></i></div>
        <div onclick="location.href = 'schedule.html'">
            <i class="fa fa-calendar" aria-hidden="true"><h5>Schedule</h5></i></div>
        <div onclick="location.href = 'partners1.html'">
            <i class="fa fa-users" aria-hidden="true"><h5>Partners</h5></i></div>
        <div onclick="location.href = 'food.php'">
            <i class="fa fa-cutlery" aria-hidden="true"><h5>Food</h5></i></div>
    </footer>
    </body>
</html>