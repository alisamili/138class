<!-- 我的社区 -->
<ul class="border card_list cf" ontouchstart="this.classList.toggle('hover');">
	<?php 
		//TODO获取社区列表，填充到卡片里
		$sql_get_my_communities =<<< EOD
SELECT 
	`user_id`,
	`cu`.`community_id` AS `community_id`, 
	`c`.`name` 		AS `community_name`,
	`c`.`note` 		AS `community_note`,
	`c`.`status` 	AS `community_status`
FROM 
	`community_of_user` AS `cu` JOIN `community` AS `c`
	ON `cu`.`community_id`=`c`.`community_id` 
WHERE 
	user_id=:uid;
EOD;
		include_once 'db_conn.php';
		$pdo = NULL;
		$results = NULL;
		try {
			$pdo = get_my_pdo($dbname);
			$stat = $pdo->prepare($sql_get_my_communities);
			$stat->bindParam(':uid', $_SESSION['user_id'], PDO::PARAM_STR);

			if ($stat->execute()) {
				$results = $stat->fetchAll();
			} else {

			}

		} catch (PDOException $e)
		{
			echo $e->getMessage().'<br/>';
			echo "异常处理";
			$pdo = NULL;
		}
		$pdo = NULL;
		foreach($results as $record) {

	?>
	<li class="card">
		<a class="card_front cf" href="#">
			<div class="imgbox">
				<img src="http://wikicdn.jikexueyuan.com/project/751/cover/logo.png!list.logo" /><!--50x50-->
			</div>
			<h4 class="h4"><?php echo $record['community_name']; ?> </h4>
			<span>标签：</span>
		</a>
		<p class="card_back">
			<a class="text" href="#">
				<?php echo $record['community_note']; ?>
			</a>
		</p>
	</li>
	
	<?php } ?>
</ul>
