# ThinkPHP框架文件夹粗略说明
>ThinkPHP

>>Application

>>>Admin

>>>Common

>>>Home

>>>>Common

>>>>Conf

>>>>Controller '与数据库交互的文件目录'

>>>>>IndexController.class.php

>>>>Model

>>>>View '写静态网页的文件目录'

>>>>>index.html 

>>>Runtime

>>Public

>>ThinkPHP



# 数据库规格说明
数据库名：edu_sys_db
* 表
  * essaylist

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |uid    |int(10)    |NO    |PRI  |         |auto_increment|
    |head   |varchar(64)|NO    |     |         |              |
    |body   |varchar(64)|NO    |     |         |              |
    |picture|varchar(64)|NO    |     |         |              |

  * 课程 course

    | Field      | Type       | Null | key | Deafult | Extra        |
    |:-----------|:---------- |:-----|:----|:--------|:-------------|
    |id          |int(10)     |NO    |PRI  |         |auto_increment|
    |name        |varchar(32) |NO    |     |         |              |
    |note        |varchar(128)|NO    |     |         |              |
    |status      |varchar(10) |NO    |     |         |              |
    |created_time|timestamp   |NO    |     |         |              |

  * 用户 user

    | Field      | Type       | Null | key | Deafult | Extra        |
    |:-----------|:---------- |:-----|:----|:--------|:-------------|
    |id          |int(10)     |NO    |PRI  |     |auto_increment|
    |username    |varchar(32) |NO    |     |         |              |
    |password    |varchar(64) |NO    |     |         |              |
    |nickname    |varchar(32) |NO    |     |         |              |
    |email       |varchar(64) |NO    |     |         |              |
    |created_time|timestamp   |NO    |     |         |              |
    |status      |varchar(10) |NO    |     |         |              |

  * 社区 community

    | Field | Type       | Null | key | Deafult | Extra        |
    |:----- |:---------- |:-----|:----|:--------|:-------------|
    |id     |int(10)     |NO    |PRI  |         |auto_increment|
    |name   |varchar(32) |NO    |     |         |              |
    |note   |varchar(128)|NO    |     |         |              |
    |status |varchar(10) |NO    |     |         |              |

  * 用户的课程 course_of_user

    | Field    | Type      | Null | key | Deafult | Extra        |
    |:---------|:----------|:-----|:----|:--------|:-------------|
    |user_id   |int(10)    |NO    |PRI  |         |              |
    |course_id |int(10)    |NO    |PRI  |         |              |
    |status    |varchar(64)|NO    |     |         |              |

  * 用户的社区 community_of_user

    | Field       | Type      | Null | key | Deafult | Extra        |
    |:----------- |:----------|:-----|:----|:--------|:-------------|
    |user_id      |int(10)    |NO    |PRI  |         |              |
    |community_id |int(10)    |NO    |PRI  |         |              |
    |status       |varchar(10)|NO    |     |         |              |
