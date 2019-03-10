<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FILTERI</title>

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>
    <div class="checkboxs">
        <label for="arts">Full-stack dev</label>
            <input type="checkbox" rel="full" id="arts" />

        <label for="computers"> Back-end dev</label>
            <input type="checkbox" rel="back" id="computers" />
            
        <label for="health">CEO</label>
            <input type="checkbox" rel="ceo" id="health"/>
            
        <label for="video-games"> Front-end dev</label>
            <input type="checkbox" rel="front" id="video-games"/>
           
    </div>
    <ul class="results">
        <!-- <li class="arts computers">Result 1</li>
        <li class="video-games">Result 2</li>
        <li class="computers health video-games">Result 3</li>
        <li class="arts video-games">Result 4</li> -->

        <?php
            require 'connection.php';

            $sql = "SELECT * FROM team";
            $result = $dbc->query($sql);

            $count = $result->num_rows;

            if($count > 0){
                while($row = $result->fetch_assoc()){
                    if($row['position'] == 'CEO'){
                        echo '<li class="ceo">'.$row['name'].'</li>';
                    }
                    if($row['position'] == 'Full-stack dev'){
                        echo '<li class= "full">'.$row['name'].'</li>';
                    }
                    if($row['position'] == 'Front-end dev'){
                        echo '<li class= "front">'.$row['name'].'</li>';
                    }
                    if($row['position'] == 'Back-end dev'){
                        echo '<li class= "back">'.$row['name'].'</li>';
                    }

                }
            }
        ?>

    </ul>

    <script src="filteri.js"></script>
</body>
</html>