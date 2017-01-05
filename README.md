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



# 数据库结构
* class
  * essaylist

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |uid    |int(10)    |NO    |PRI  |NULL     |auto_increment|
    |head   |varchar(64)|NO    |     |         |              |
    |body   |varchar(64)|NO    |     |         |              |
    |picture|varchar(64)|NO    |     |         |              |

  * 课程 course

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |id     |int(10)    |NO    |PRI  |NULL     |auto_increment|
    |name   |varchar(64)|NO    |     |         |              |
    |note   |varchar(64)|NO    |     |         |              |
    |status |varchar(64)|NO    |     |         |              |
    |created_time   |varchar(64)|NO    |     |         |              |


  * 用户 user

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |id    |int(10)    |NO    |PRI  |NULL     |auto_increment|
    |username   |varchar(64)|NO    |     |         |              |
    |pwd   |varchar(64)|NO    |     |         |              |
    |nickname|varchar(64)|NO    |     |         |              |
    |email|varchar(64)|NO    |     |         |              |
    |created_time|varchar(64)|NO    |     |         |              |
    |status|varchar(64)|NO    |     |         |              |



  * 社区 community

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |id    |int(10)    |NO    |PRI  |NULL     |auto_increment|
    |name   |varchar(64)|NO    |     |         |              |
    |note   |varchar(64)|NO    |     |         |              |
    |status|varchar(64)|NO    |     |         |              |

  * 用户的课程 course_of_user

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |user_id    |int(10)    |NO    |PRI  |NULL     |auto_increment|
    |course_id   |varchar(64)|NO    |     |         |              |
    |status   |varchar(64)|NO    |     |         |              |

  * 用户的社区 community_of_user

    | Field | Type      | Null | key | Deafult | Extra        |
    |:----- |:----------|:-----|:----|:--------|:-------------|
    |user_id    |int(10)    |NO    |PRI  |NULL     |auto_increment|
    |community_id   |varchar(64)|NO    |     |         |              |
    |status   |varchar(64)|NO    |     |         |              |
