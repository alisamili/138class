<?php

include 'db_conn.php';

//样本数据状况
$need_sample = TRUE;
$existed_sample = FALSE;

$SQL_CREATE_DB =<<<EOD
DROP DATABASE IF EXISTS edu_sys_db;
CREATE DATABASE IF NOT EXISTS edu_sys_db CHARACTER SET utf8;
USE edu_sys_db;
SET character_set_client=utf8;
SET character_set_connection=utf8;
SET character_set_database=utf8;
SET character_set_results=utf8;
SET character_set_server=utf8;
SET character_set_system=utf8;
SET FOREIGN_KEY_CHECKS=0;
EOD;

$SQL_CREATE_USER_TABLE =<<<EOD
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    `user_id` int(10) NOT NULL AUTO_INCREMENT,
    `username` varchar(32) NOT NULL UNIQUE,
    `password` varchar(32) NOT NULL,
    `nickname` varchar(32) DEFAULT NULL,	
    `email` varchar(32) DEFAULT NULL,
    `status` varchar(10) DEFAULT NULL,
    `created_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
EOD;

$SQL_CREATE_COURSE_TABLE =<<<EOD
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
    `course_id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(32) CHARACTER SET utf8 NOT NULL UNIQUE,
    `note` varchar(128) DEFAULT '' COMMENT '备注',
    `status` varchar(10) DEFAULT NULL,
    `created_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
EOD;

$SQL_CREATE_COMMUNITY_TABLE =<<<EOD
DROP TABLE IF EXISTS `community`;
CREATE TABLE `community` (
    `community_id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(64) NOT NULL UNIQUE,
    `note` varchar(128) DEFAULT NULL,
    `status` varchar(10) DEFAULT NULL,
    `created_time` datetime NOT NULL,
    PRIMARY KEY (`community_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
EOD;

$SQL_CREATE_COURSE_OF_USER_TABLE =<<<EOD
DROP TABLE IF EXISTS `course_of_user`;
CREATE TABLE `course_of_user` (
    `user_id` int(10) NOT NULL,
    `course_id` int(10) NOT NULL,
    `status` varchar(10) DEFAULT NULL,
    PRIMARY KEY (`user_id`,`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
EOD;

$SQL_CREATE_COMMUNITY_USER_TABLE =<<<EOD
DROP TABLE IF EXISTS `community_of_user`;
CREATE TABLE `community_of_user` (
    `user_id` int(10) NOT NULL,
    `community_id` int(10) NOT NULL,
    `status` varchar(10) DEFAULT NULL,
    PRIMARY KEY (`user_id`,`community_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
EOD;

$sql_list = array();
array_push($sql_list,
    $SQL_CREATE_DB, 
    $SQL_CREATE_USER_TABLE, 
    $SQL_CREATE_COURSE_TABLE,
    $SQL_CREATE_COMMUNITY_TABLE, 
    $SQL_CREATE_COURSE_OF_USER_TABLE, 
    $SQL_CREATE_COMMUNITY_USER_TABLE);

try {
    global $conn;
    // 使用 sql 创建数据表
    foreach($sql_list as $sql) {
        $conn->exec($sql);
    }
    echo "数据库创建成功<br/>";

    global $need_sample;
    global $existed_sample;
    if ($need_sample && !$existed_sample) {
        include 'db_sample_data.php';
        echo '样例数据插入成功<br/>';
    }
} catch(PDOException $e)
{
    echo $e->getMessage().'<br/>';
}

$conn = null;	
?> 