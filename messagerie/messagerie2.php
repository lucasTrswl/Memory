<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Notre super chat !</title>
  <link rel="stylesheet" href="messagerie.css">
</head>
<body>
  <header>
    <h1>The Chat</h1>
  </header>
 
  
  <section class="chat">
    <div class="messages">
     
    </div>
    <div class="user-inputs">
      <form action="handler.php?task=write" method="POST">
        <input type="text" name="author" id="author" placeholder="Pseudo">
        <input type="text" id="content" name="content" placeholder="Ecrivez votre message">
        <button type="submit">🔥 Envoyer !</button>
      </form>
    </div>
  </section>
  <script src="./app.js"></script>
</body>
</html>