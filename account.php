<?php 
	session_start(); 

	$first_name = $_SESSION['first_name'].PHP_EOL;
	$last_name = $_SESSION['last_name'].PHP_EOL;
	$gender = $_SESSION['gender'].PHP_EOL;
	$age = $_SESSION['age'].PHP_EOL;
	$email = $_SESSION['email'].PHP_EOL;
	$password = $_SESSION['password'].PHP_EOL;

	if($_SESSION['email'] == "") {
	    header("Location: index.html");
		exit();
	}
?>

<html>

<head>
	<meta charset=utf-8>
	<title>Account Info</title>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="row">
		<div class="col-md-8">
			<label>
				<h3>
					<?php
						echo "Welcome $first_name!";
					?>
				</h3>
			</label>
		</div>
		<div class="col-md-4">
			<form action="logout.php" method="post" >
				<button type="submit" class="btn btn-danger">Logout</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h1>recusandae sequi sapiente facilis dolore quo</h1>
<h2>in dolorum quae quam id deleniti quia est deleniti</h2>
<h3>repellat cumque aliquid excepturi quae ut enim itaque rerum reiciendis beatae fugiat</h3>
<h4>laborum nisi facilis quos dolore excepturi accusantium illo ab sit</h4>
<h5>cupiditate sint iusto enim sed minima consequuntur</h5>
<h6>vel impedit error molestias eaque aliquid corporis id fuga sequi</h6>
<p>Laborum repellendus ab sed sapiente, libero cumque expedita voluptas, molestiae fugit, repellendus ad, error. Repellendus eum quasi labore placeat expedita eos voluptates dicta facilis eos, a. Id laboriosam totam suscipit accusamus similique cum voluptatibus. Sed similique dolor nam dolorem reprehenderit suscipit debitis distinctio sunt suscipit. Suscipit accusamus dolores consequuntur hic saepe aliquid dolor adipisci nobis, libero qui. Tempore nemo error voluptatum at iste quaerat ipsam suscipit aspernatur est accusantium est, dolores. Dolorem aliquid optio, cumque corporis eum illo fugiat corporis asperiores nulla sit a.</p>

<h2>quidem facilis sint nisi beatae doloribus odit</h2>
<p>Quos nulla numquam facere facilis quas illo vel exercitationem nobis alias temporibus ex dolorem. Exercitationem quidem nostrum error iste aliquam autem facilis vitae odit. Iste a nostrum, obcaecati, fuga autem sed enim minima repudiandae. Pariatur laboriosam nemo fugit maxime sequi unde cupiditate minima. Molestiae voluptas porro corporis, repudiandae expedita sunt cupiditate.</p>

<h3>harum quidem consequatur tenetur fugiat blanditiis</h3>
<p>Minus, doloremque ab expedita maxime, cumque omnis earum nemo ea, cupiditate illum fugit. Aspernatur suscipit, sapiente eaque odio similique similique rem explicabo, voluptates illum, vel voluptas hic. Neque fuga doloremque similique, nesciunt veritatis, delectus dolorum aliquam. Nulla quis assumenda, quasi earum exercitationem id vitae, asperiores, alias magni.</p>

<h4>enim veniam dolores deleniti in veniam asperiores nulla ducimus ipsum quod repellendus</h4>
<p>Ea dignissimos possimus temporibus eos quos alias totam nostrum non tenetur soluta illum modi. Et suscipit, ab, saepe suscipit quos corrupti corporis nulla perspiciatis quibusdam, itaque dicta natus. Laboriosam, possimus nulla libero, illo exercitationem temporibus illo ipsum tenetur impedit rem non veritatis. Delectus officiis voluptatum eos enim numquam ratione fugiat at error, voluptas, tempora. Iusto hic culpa cupiditate id, officia repudiandae laudantium mollitia.</p>

<h5>laudantium distinctio distinctio quam suscipit culpa tenetur suscipit suscipit</h5>
<p>Sunt assumenda, optio, voluptas perspiciatis voluptates, minima officiis. Corrupti ab voluptatum et nemo blanditiis perferendis excepturi eum, veniam voluptatum magnam aperiam, mollitia. Dolore architecto saepe vel fuga quaerat ex accusantium placeat nemo error magnam. Dicta, recusandae, voluptates placeat, illum eveniet voluptatem incidunt tempora, cum. Hic natus aperiam delectus repellendus vitae dolores eius quas repellendus, numquam maiores nesciunt.</p>

<h6>autem vero laboriosam excepturi in facere magnam incidunt molestiae fugiat</h6>
<p>Non commodi praesentium dolores ullam, rerum, alias quasi maiores, qui totam recusandae nobis. Corporis totam ab est, consectetur deserunt, laborum dolor totam, tempora rem at blanditiis, possimus. Architecto voluptates laboriosam soluta molestiae possimus perferendis enim, dolorem magnam dolores culpa.</p>

<ol>
<li>voluptatibus in doloremque voluptatibus</li>
<li>placeat minus libero earum numquam</li>
<li>nihil non quasi</li>
<li>saepe amet sunt itaque rerum</li>
<li>commodi dolores</li>
</ol>

<ul>
<li>Magni tempore et repellat aut eligendi, consequuntur, quaerat veniam ipsam. Sit saepe laudantium ullam architecto, voluptas est voluptate cupiditate molestias nam aliquam, culpa quibusdam. Voluptas, blanditiis, exercitationem id, amet pariatur soluta, excepturi. Aspernatur aliquid illum reprehenderit doloremque, quisquam quia dolor ullam eveniet sunt id blanditiis. Minus vel ipsa tempora maxime similique iste reiciendis molestias commodi.</li>
<li>Nam praesentium, necessitatibus temporibus dolor cum sequi, aut delectus fuga. Maxime iusto repudiandae earum minus accusantium deleniti sed, quae provident dolorum. Beatae placeat qui, dicta ipsam, culpa atque cupiditate.</li>
<li>Blanditiis minus deserunt illum delectus eligendi veritatis pariatur, voluptate. Cumque consequatur sint nihil recusandae, aperiam repellendus dolorem laboriosam asperiores alias eum. Neque et consequatur, ea commodi accusamus, nam doloribus ipsam.</li>
<li>Et nobis molestiae doloribus iure quibusdam nemo dolores perferendis, in laboriosam recusandae. Hic blanditiis consectetur impedit fugit est, delectus error id accusantium aspernatur atque nulla necessitatibus. Blanditiis amet quas sint illo voluptas, fuga quos inventore soluta, ipsam. Dolore cumque nesciunt quidem nobis aspernatur id labore nam accusamus ut repellat. Ipsam excepturi pariatur voluptatem, architecto iusto, eius, voluptatibus minus.</li>
<li>Inventore eius impedit tempora nobis iste, harum asperiores minima. Hic quisquam repellat hic unde libero omnis suscipit pariatur quod dolor sunt. Nulla, est reiciendis enim repudiandae natus quo incidunt ut repellat perspiciatis, voluptate ipsa. Excepturi suscipit optio consequatur in, ipsum, exercitationem dolore error explicabo. Reprehenderit, error sequi, est quam aperiam, in eligendi similique animi unde aspernatur.</li>
</ul>

<blockquote>Sequi delectus, earum incidunt fugit quam est molestiae delectus, nulla possimus. </blockquote>

<code>
Quas Nesciunt Enim Fugit
Iste Temporibus Possimus Ab Architecto Consectetur Eos
Asperiores Reprehenderit At Qui Ea Dolorem Eligendi
</code>

<dl>
<dt>reprehenderit </dt>
<dd>Ut error libero sapiente, voluptatibus quaerat inventore corrupti neque cum molestias quis. </dd>
</dl>


		</div>
	</div>
</body>

<script>

</script>

</html>