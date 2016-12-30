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

# 牛B