<!DOCTYPE html>
<?php 
$connect = new PDO("mysql:host=localhost; dbname = base; charset = utf8", 'root', '');

?>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>F1</title>
  <link rel="manifest" href="manifest.json">
</head>
<body>
 <section>
   <div class="content">
    <h2>Merсedes</h2>
    <h2>Merсedes</h2>
   </div>
 </section>
<div class="фон1">
		
		
		<div class="текст1">
			<pre>Технологии</pre>
		</div>
		
		
		
		<div class="фото1">
			<img src="болид 1.jpeg" alt="нет"/>
		</div>
		
		
		

 <div class="container">
    <div class="center">
      <button class="btn" onclick="window.location.href = 'https://www.mercedesamgf1.com/car/2023-car';" value="w3docs"/>
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
      </button>
    </div>
  </div>
	
		
		
		
		<div class="текст2">
			<pre>Результаты</pre>
		</div>
		
		
		
		<div class="фото2">
			<img src="результаты1.jpg" alt="нет"/>
		</div>
		
		<div class="container2">
    <div class="center2">
      <button class="btn2" onclick="window.location.href = 'https://f1report.ru/teams/2023/mercedes.html';" value="w3docs"/>
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border2">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
      </button>
    </div>
  </div>
		
		<div class="текст3">
			<pre>Команда</pre>
		</div>
		
		
		
		<div class="фото3">
			<img src="команда.jpg" alt="нет"/>
		</div>
		
		
		<div class="container3">
    <div class="center3">
      <button class="btn3" onclick="window.location.href = 'https://www.mercedesamgf1.com/';" value="w3docs"/>
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border3">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
      </button>
    </div>
  </div>
</div>
<br>
  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	    <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	    <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	    <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	    <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
    <div class="a">
	рыбв
</div>
	<div class="container5">
        <h2>Обратная связь</h2>
        <form action="figny2.php" method="post">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="text" name="email" placeholder="Ваш email" required>
            <textarea name="message" placeholder="Сообщение" required></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>

<div id="faq">
    <div>
	<br>
	  <br>
	  <br>
	  <br>
	  <br>
	
	  <br>
	  <br>
	  <br>
      <span class="title">Комментарии</span><br>
 
  
      <? 
        $comments = $connect->query("SELECT * FROM base.fak");
        $comments = $comments->fetchALL(PDO::FETCH_ASSOC);
        foreach($comments as $message ) {
      ?>
	  
  <table>      
  <tr><th>Имя пользоавтеля:</th><th>Почта:</th><th>Сообщение:</th><th>Дата:</th></tr>
    <tr><td><?=$message['name']?></td><td><?=$message['email']?></td> <td><?=$message['message']?></td><td>
      <?=$message['date']?></td></tr>
  
      </table>
    <? } ?>

    </div>
  
  </div>
  <script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('service-worker.js')
        .then(function(registration) {
          console.log('Service Worker зарегистрирован:', registration);
        })
        .catch(function(error) {
          console.log('Ошибка при регистрации Service Worker:', error);
        });
    });
  }
</script>
</body>
</html>