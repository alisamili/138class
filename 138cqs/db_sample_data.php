<?php

$SQL_INS_SAMPLE_DATA =<<< EOD
INSERT INTO `user` VALUES ('1', '张三丰', 'zhangsanfeng', '张三', 'zhang3@gmail.com', '正常', '2017-01-08 06:57:53');
INSERT INTO `user` VALUES ('2', '李四光', 'lisiguang', '李四', 'li4@gmail.com', '正常', '2017-01-08 06:20:53');
INSERT INTO `user` VALUES ('3', '王五', 'wangwu', '隔壁老王', 'laowang@gmail.com', '正常', '2017-01-08 06:59:47');
INSERT INTO `course` VALUES ('1', 'Android深入浅出', '教你开发Android应用', '未开课', '2017-01-08 07:01:37');
INSERT INTO `course` VALUES ('2', 'Android NDK开发', '教你开发Android NDK应用', '已开课', '2017-01-08 07:01:47');
INSERT INTO `course` VALUES ('3', '科学上网', '论如何科学上网', '已结课', '2017-01-08 07:03:12');
INSERT INTO `community` VALUES ('1', '科学上网爱好者', '科学上网社区', '正常', '2017-01-08 07:04:10');
INSERT INTO `community` VALUES ('2', 'Android开发者社区', 'Android开发者聚集地', '正常', '2017-01-08 07:04:42');
INSERT INTO `community` VALUES ('3', '2048社区', '2048游戏开发者社区', '正常', '2017-01-08 07:05:26');
INSERT INTO `course_of_user` VALUES ('1', '1', '正常');
INSERT INTO `course_of_user` VALUES ('1', '2', '正常');
INSERT INTO `course_of_user` VALUES ('1', '3', '正常');
INSERT INTO `course_of_user` VALUES ('2', '1', '正常');
INSERT INTO `course_of_user` VALUES ('2', '3', '正常');
INSERT INTO `course_of_user` VALUES ('3', '2', '正常');
INSERT INTO `course_of_user` VALUES ('3', '3', '正常');
INSERT INTO `community_of_user` VALUES ('1', '1', '正常');
INSERT INTO `community_of_user` VALUES ('2', '3', '正常');
INSERT INTO `community_of_user` VALUES ('2', '2', '正常');
INSERT INTO `community_of_user` VALUES ('3', '3', '正常');
INSERT INTO `community_of_user` VALUES ('3', '2', '正常');
INSERT INTO `community_of_user` VALUES ('1', '2', '正常');
INSERT INTO `community_of_user` VALUES ('3', '1', '正常');
EOD;

$conn->exec($SQL_INS_SAMPLE_DATA);
?>