<ul class="border card_list cf" ontouchstart="this.classList.toggle('hover');">
	<?php 
		//获取课程列表，填充到卡片里
		$sql_get_my_courses =<<<EOD
SELECT 
	`user_id`,
	`cu`.`course_id` AS `course_id`, 
	`c`.`name` 		AS `course_name`,
	`c`.`note` 		AS `course_note`,
	`c`.`status` 	AS `course_status`
FROM 
	`course_of_user` AS `cu` JOIN `course` AS `c`
	ON `cu`.`course_id`=`c`.`course_id` 
WHERE 
	`user_id`=:uid;
EOD;
		include_once 'db_conn.php';
		$pdo = NULL;
		$results = NULL;
		try {
			$pdo = get_my_pdo($dbname);
			$stat = $pdo->prepare($sql_get_my_courses);
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
			<h4 class="h4">
				<?php echo $record['course_name'];?>
			</h4>
			<span>
				<?php echo $record['course_status']; ?>
			</span>
		</a>
		<p class="card_back">
			<a class="text" href="#">
				<?php echo $record['course_note']; ?>
			</a>
		</p>
	</li>
	
	<?php } ?>
</ul>