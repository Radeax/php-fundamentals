<?php session_start();

if(isset($_POST['reset'])) {
    session_destroy();
}

if(empty($_SESSION)) {
    $_SESSION['answer'] = rand(1,100);
}
$again = "";
$guess = "";
$submit = "";
$response;
$hide = "d-none";
$color = "bg-danger";

            
if(isset($_POST['guess'])) {
    $hide = "";
    $guess = intVal($_POST['guess']);
    $answer = $_SESSION['answer'];

    switch(true) {
        case ($guess > $answer):
            $response = "Too high!";
            break;
        case ($guess < $answer):
            $response = "Too low!";
            break;
        default:
            $response = "$answer was the number!";
            $color = "bg-success";
            $again = '<form action="index.php" method="post">
                        <input type="hidden" name="reset" value="true">
                        <button class="btn btn-primary mx-auto" type="submit">Try again!</button>
                    </form>';
            $submit = "d-none";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Great Number Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<main class="container mt-5">
    <div class="d-flex flex-column text-center">
        <h1 class="display-4">Welcome to the Great Number Game!</h1>
        <p>I am thinking of a number between 1 and 100</p>
        <p>Take a guess!</p>
    </div>
    <div class="card mx-auto mb-4 <?php echo "$color $hide" ?>" style="width: 300px; height: 300px;">
        <div class="card-body d-flex align-items-center flex-column justify-content-center">
            <h2 class="mx-auto text-white text-center mb-4"><?php echo $response ?></h2>
            <?php echo $again ?>
        </div> <!-- card-body -->
    </div> <!-- card -->
    <form action="index.php" method="post">
        <div class="form-group flex-column text-center <?php echo $submit ?>">
            <input class="form-control col-2 mx-auto mb-2" type="number" id="guess" name="guess" placeholder="<?php echo $guess ?>">
            <button class="btn btn-primary mx-auto" type="submit">Submit</button>
        </div> <!-- col -->
    </form>
</main>
</body>
<script>
    window.onload = () => {
        let input = document.getElementById("guess");
        input.focus();
        input.select();
    }
</script>
</html>