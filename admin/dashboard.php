<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Удирдлага</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>LifeBlog - Удирдлагын самбар</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Гарах</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>43</span> <br>
				<span>Бүртгэлтэй хэрэглэгчид</span>
			</a>
			<a href="posts.php">
				<span>43</span> <br>
				<span>Бүх нийтлэл</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>Бүх сэтгэгдэл</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Хэрэглэгч нэмэх</a>
			<a href="posts.php">Нийтлэл бичих</a>
		</div>
	</div>
</body>
</html>