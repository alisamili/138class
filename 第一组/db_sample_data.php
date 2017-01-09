<?php

$SQL_INS_SAMPLE_DATA =<<< EOD
INSERT INTO `user` VALUES ('1', '张三丰', 'zhangsanfeng', '张三', 'zhang3@gmail.com', '正常', '2017-01-08 06:57:53');
INSERT INTO `user` VALUES ('2', '李四光', 'lisiguang', '李四', 'li4@gmail.com', '正常', '2017-01-08 06:20:53');
INSERT INTO `user` VALUES ('3', '王五', 'wangwu', '隔壁老王', 'laowang@gmail.com', '正常', '2017-01-08 06:59:47');
INSERT INTO `user` VALUES ('4', 'test', 'test', 'ttest', 'test@test.com', '测试', '2017-01-09 00:18:30');
INSERT INTO `course` VALUES ('1', 'Android深入浅出', '教你开发Android应用', '未开课', '2017-01-08 07:01:37');
INSERT INTO `course` VALUES ('2', 'Android NDK开发', '教你开发Android NDK应用', '已开课', '2017-01-08 07:01:47');
INSERT INTO `course` VALUES ('3', '科学上网', '论如何科学上网', '已结课', '2017-01-08 07:03:12');
INSERT INTO `course` VALUES ('4', '编译原理', '形式语言、自动机、编译器设计', '已开课', '2017-01-09 00:19:25');
INSERT INTO `course` VALUES ('5', '操作系统', '操作系统原理与实践，Linux系统源码分析', '已开课', '2017-01-09 00:21:26');
INSERT INTO `course` VALUES ('6', '计算机图形学', '计算机图形学理论、OpenGL', '未开课', '2017-01-09 00:22:08');
INSERT INTO `course` VALUES ('7', '数字图像处理', '数字图像处理、识别、计算机视觉', '已结课', '2017-01-09 00:22:54');
INSERT INTO `community` VALUES ('1', '科学上网爱好者', '科学上网社区', '正常', '2017-01-08 07:04:10');
INSERT INTO `community` VALUES ('2', 'Android开发者社区', 'Android开发者聚集地', '正常', '2017-01-08 07:04:42');
INSERT INTO `community` VALUES ('3', '2048社区', '2048游戏开发者社区', '正常', '2017-01-08 07:05:26');
INSERT INTO `community` VALUES ('4', 'php开发者社区', 'php是世界上最好的语言', '测试', '2017-01-09 00:28:22');
INSERT INTO `course_of_user` VALUES ('1', '1', '正常');
INSERT INTO `course_of_user` VALUES ('1', '2', '正常');
INSERT INTO `course_of_user` VALUES ('1', '3', '正常');
INSERT INTO `course_of_user` VALUES ('2', '1', '正常');
INSERT INTO `course_of_user` VALUES ('2', '3', '正常');
INSERT INTO `course_of_user` VALUES ('3', '2', '正常');
INSERT INTO `course_of_user` VALUES ('3', '3', '正常');
INSERT INTO `course_of_user` VALUES ('4', '1', '测试');
INSERT INTO `course_of_user` VALUES ('4', '2', '测试');
INSERT INTO `course_of_user` VALUES ('4', '3', '测试');
INSERT INTO `course_of_user` VALUES ('4', '4', '测试');
INSERT INTO `course_of_user` VALUES ('4', '5', '测试');
INSERT INTO `course_of_user` VALUES ('4', '6', '测试');
INSERT INTO `course_of_user` VALUES ('4', '7', '测试');
INSERT INTO `community_of_user` VALUES ('1', '1', '正常');
INSERT INTO `community_of_user` VALUES ('2', '3', '正常');
INSERT INTO `community_of_user` VALUES ('2', '2', '正常');
INSERT INTO `community_of_user` VALUES ('3', '3', '正常');
INSERT INTO `community_of_user` VALUES ('3', '2', '正常');
INSERT INTO `community_of_user` VALUES ('1', '2', '正常');
INSERT INTO `community_of_user` VALUES ('3', '1', '正常');
INSERT INTO `community_of_user` VALUES ('4', '1', '测试');
INSERT INTO `community_of_user` VALUES ('4', '2', '测试');
INSERT INTO `community_of_user` VALUES ('4', '3', '测试');
INSERT INTO `community_of_user` VALUES ('4', '4', '测试');
EOD;

$conn->exec($SQL_INS_SAMPLE_DATA);
?>