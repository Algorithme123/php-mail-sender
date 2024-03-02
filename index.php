<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Contactez-nous</h1>
    
<form action="traitement.php" method="POST">

<div class="form-group">
        <label class="sr-only" for="inputName">Nom</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="">
        
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="inputName">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="">
        
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="inputName">Message</label>
        <input type="text" class="form-control" name="message" id="message" placeholder="">
        
    </div>
    
    
   <button> Envoyez</button>
</form>

</body>
</html>