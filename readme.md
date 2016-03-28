A p2p library
================
## use Json Web Token authorization 
We can pass the token in two ways: passing it as a simple request parameter, or in the header with this specific item: 
Authorization: Bearer {token_goes_here}
## RESTFUL API GOES HERE
## Signup
url:
```html
POST : /api/auth/signup
```
params:
* name
* email
* password
return:
```html
{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3AycC1saWIuZGV2XC9hcGlcL2F1dGhcL2xvZ2luIiwi
aWF0IjoxNDU5MTU1MDQxLCJleHAiOjE0NTkxNTg2NDEsIm5iZiI6MTQ1OTE1NTA0MSwianRpIjoiYWJiZDUzZGE4MWI5OTkwODU0NWEwNDk1ZmFlOTIyOTMifQ.tf
zgBxalsokgff18rPOVnw8Bx08kifaGZpxEz53iAkY"
}
```
## Login
url:
```html
POST : /api/auth/login
```
params:
* email
* password
return:
```html
{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3AycC1saWIuZGV2XC9hcGlcL2F1dGhcL2xvZ2luIiwi
aWF0IjoxNDU5MTU1MDQxLCJleHAiOjE0NTkxNTg2NDEsIm5iZiI6MTQ1OTE1NTA0MSwianRpIjoiYWJiZDUzZGE4MWI5OTkwODU0NWEwNDk1ZmFlOTIyOTMifQ.tf
zgBxalsokgff18rPOVnw8Bx08kifaGZpxEz53iAkY"
}
```
## Get All Books
url:
```html
GET : /api/books
```
return
```html
[
  {
    "id": 1,
    "title": "火星救援",
    "author": "[美] 安迪·威尔",
    "pubdate": "2015-10-1",
    "publisher": "译林出版社",
    "rating": "8.9",
    "isbn": "9787544757225",
    "author_intro": "安迪·威尔 (Andy 
Weir)，从15岁起就被美国国家实验室聘为软件工程师。执着的太空宅男，沉迷于相对论物理、轨道力学和载人飞船。《火星救援》是他的处女
作。\n2009年，安迪·威尔陆续将他的小说《火星救援》贴在自己的个人网站上，供人免费阅读。在众多读者的强烈要求下，他在亚马逊平台上
发布了作品，收费0.99美金，哪知花钱买他小说的读者比免费阅读的读者更多。2013年3月，兰登书屋以六位数买下小说的版权。仅仅四天后，
安迪·威尔又接到了来自20世纪福克斯电影公司的橄榄枝。2015年，由大导演雷德利·斯科特执",
    "image": "https://img3.doubanio.com/mpic/s28315660.jpg",
    "catalog": "",
    "summary": "六天前，马克·沃特尼成为了第一批行走在火星上的人。如今，他也将成为第一个葬身火星的人。\n一场突如其来的风暴让阿
瑞斯三船员被迫放弃任务。撤离过程中，沃特尼遭遇意外，被孤身一人丢在了这片寸草不生的红色荒漠中，剩余的补给也远不够撑到救援可能
抵达的那一天。\n当然，沃特尼也不准备坐以待毙，凭借着他的植物学家和机械工程师背景，他决定跟火星来一场不是你死就是我活的过家家
游戏。",
    "created_at": "2016-03-28 02:21:01",
    "updated_at": "2016-03-28 02:21:01"
  },
  {
    "id": 2,
    "title": "从0到1",
    "author": "彼得·蒂尔 布莱克·马斯特斯",
    "pubdate": "2015-1-1",
    "publisher": "中信出版股份有限公司",
    "rating": "7.6",
    "isbn": "9787508649719",
    "author_intro": "彼得•蒂尔（Peter 
Thiel）\n被誉为硅谷的天使，投资界的思想家。1998年创办PayPal并担任CEO，2002年将PayPal以15亿美元出售给eBay，把电子商务带向新纪
元。2004年做了首笔在Facebook的外部投资，并担任董事。同年成立软件公司Palantir，服务于国防安全与全球金融领域的数据分析。蒂尔联
合创办了Founders Fund基金，为LinkedIn、SpaceX、Yelp等十几家出色的科技新创公司提供早期资金，其中多家公司由PayPal的同事负责营运
，这些人在硅谷有“Pa",
    "image": "https://img3.doubanio.com/mpic/s28012945.jpg",
    "catalog": "前言\n第1章 未来的挑战\n第2章 像1999 年那样狂欢\n第3章 所有成功的企业都是不同的\n第4章 竞争意识\n第5章 
后发优势\n第6章 成功不是中彩票\n第7章 向钱看\n第8章 秘密\n第9章 基础决定命运\n第10章 打造帮派文化\n第11章 
顾客不会自动上门\n第12章 人类和机器\n第13章 绿色能源与特斯拉\n第14章 创始人的悖论\n结语 
停滞不前，还是临近奇点\n致谢\n插图版权声明",
    "summary": "图书简介：\nhttp://v.youku.com/v_show/id_XOTA0NjcyMzE2.html?wm=3333_2001\n硅谷创投教父、PayPal创始人作品，斯
坦福大学改变未来的一堂课，为世界创造价值的商业哲学。\n在科技剧烈改变世界的今天，想要成功，你必须在一切发生之前研究结局。\n你
必须找到创新的独特方式，让未来不仅仅与众不同，而且更加美好。\n从0到1，为自己创造无限的机会与价值！\nPaypal创始人、Facebook第
一位外部投资者彼得•蒂尔在本书中详细阐述了自己的创业历程与心得，包括如何",
    "created_at": "2016-03-28 02:21:08",
    "updated_at": "2016-03-28 02:21:08"
  }
```
## Add a book
url:
```html
POST : /api/books
```
params:
* isbn
return
```html
```
## Get a book detail
url:
```html
GET : /api/books/{id}
```
params:
* {id} book id
return
```html
{
  "book": {
    "id": 1,
    "title": "火星救援",
    "author": "[美] 安迪·威尔",
    "pubdate": "2015-10-1",
    "publisher": "译林出版社",
    "rating": "8.9",
    "isbn": "9787544757225",
    "author_intro": "安迪·威尔 (Andy 
Weir)，从15岁起就被美国国家实验室聘为软件工程师。执着的太空宅男，沉迷于相对论物理、轨道力学和载人飞船。《火星救援》是他的处女
作。\n2009年，安迪·威尔陆续将他的小说《火星救援》贴在自己的个人网站上，供人免费阅读。在众多读者的强烈要求下，他在亚马逊平台上
发布了作品，收费0.99美金，哪知花钱买他小说的读者比免费阅读的读者更多。2013年3月，兰登书屋以六位数买下小说的版权。仅仅四天后，
安迪·威尔又接到了来自20世纪福克斯电影公司的橄榄枝。2015年，由大导演雷德利·斯科特执",
    "image": "https://img3.doubanio.com/mpic/s28315660.jpg",
    "catalog": "",
    "summary": "六天前，马克·沃特尼成为了第一批行走在火星上的人。如今，他也将成为第一个葬身火星的人。\n一场突如其来的风暴让阿
瑞斯三船员被迫放弃任务。撤离过程中，沃特尼遭遇意外，被孤身一人丢在了这片寸草不生的红色荒漠中，剩余的补给也远不够撑到救援可能
抵达的那一天。\n当然，沃特尼也不准备坐以待毙，凭借着他的植物学家和机械工程师背景，他决定跟火星来一场不是你死就是我活的过家家
游戏。",
    "created_at": "2016-03-28 02:21:01",
    "updated_at": "2016-03-28 02:21:01",
    "store": [
      {
        "id": 1,
        "owner": 1,
        "book_id": 1,
        "borrower": 1,
        "available": 0,
        "created_at": "2016-03-28 02:21:01",
        "updated_at": "2016-03-28 07:19:03",
        "owner_name": "Egg Egg",
        "borrower_name": "Egg Egg"
      }
    ]
  }
}
```
## Borrow a book
url:
```html
POST : /api/borrow
```
params:
* storeId 
return
```html
```
## Get all borrowed books
url:
```html
GET : /api/borrow
```
return
```html
[
  {
    "id": 1,
    "owner": 1,
    "book_id": 1,
    "borrower": 1,
    "available": 0,
    "created_at": "2016-03-28 02:21:01",
    "updated_at": "2016-03-28 07:19:03",
    "book": {
      "id": 1,
      "title": "火星救援",
      "author": "[美] 安迪·威尔",
      "pubdate": "2015-10-1",
      "publisher": "译林出版社",
      "rating": "8.9",
      "isbn": "9787544757225",
      "author_intro": "安迪·威尔 (Andy 
Weir)，从15岁起就被美国国家实验室聘为软件工程师。执着的太空宅男，沉迷于相对论物理、轨道力学和载人飞船。《火星救援》是他的处女
作。\n2009年，安迪·威尔陆续将他的小说《火星救援》贴在自己的个人网站上，供人免费阅读。在众多读者的强烈要求下，他在亚马逊平台上
发布了作品，收费0.99美金，哪知花钱买他小说的读者比免费阅读的读者更多。2013年3月，兰登书屋以六位数买下小说的版权。仅仅四天后，
安迪·威尔又接到了来自20世纪福克斯电影公司的橄榄枝。2015年，由大导演雷德利·斯科特执",
      "image": "https://img3.doubanio.com/mpic/s28315660.jpg",
      "catalog": "",
      "summary": "六天前，马克·沃特尼成为了第一批行走在火星上的人。如今，他也将成为第一个葬身火星的人。\n一场突如其来的风暴让
阿瑞斯三船员被迫放弃任务。撤离过程中，沃特尼遭遇意外，被孤身一人丢在了这片寸草不生的红色荒漠中，剩余的补给也远不够撑到救援可
能抵达的那一天。\n当然，沃特尼也不准备坐以待毙，凭借着他的植物学家和机械工程师背景，他决定跟火星来一场不是你死就是我活的过家
家游戏。",
      "created_at": "2016-03-28 02:21:01",
      "updated_at": "2016-03-28 02:21:01"
    }
  },
  {
    "id": 2,
    "owner": 1,
    "book_id": 2,
    "borrower": 1,
    "available": 0,
    "created_at": "2016-03-28 02:21:08",
    "updated_at": "2016-03-28 08:41:20",
    "book": {
      "id": 2,
      "title": "从0到1",
      "author": "彼得·蒂尔 布莱克·马斯特斯",
      "pubdate": "2015-1-1",
      "publisher": "中信出版股份有限公司",
      "rating": "7.6",
      "isbn": "9787508649719",
      "author_intro": "彼得•蒂尔（Peter 
Thiel）\n被誉为硅谷的天使，投资界的思想家。1998年创办PayPal并担任CEO，2002年将PayPal以15亿美元出售给eBay，把电子商务带向新纪
元。2004年做了首笔在Facebook的外部投资，并担任董事。同年成立软件公司Palantir，服务于国防安全与全球金融领域的数据分析。蒂尔联
合创办了Founders Fund基金，为LinkedIn、SpaceX、Yelp等十几家出色的科技新创公司提供早期资金，其中多家公司由PayPal的同事负责营运
，这些人在硅谷有“Pa",
      "image": "https://img3.doubanio.com/mpic/s28012945.jpg",
      "catalog": "前言\n第1章 未来的挑战\n第2章 像1999 年那样狂欢\n第3章 所有成功的企业都是不同的\n第4章 竞争意识\n第5章 
后发优势\n第6章 成功不是中彩票\n第7章 向钱看\n第8章 秘密\n第9章 基础决定命运\n第10章 打造帮派文化\n第11章 
顾客不会自动上门\n第12章 人类和机器\n第13章 绿色能源与特斯拉\n第14章 创始人的悖论\n结语 
停滞不前，还是临近奇点\n致谢\n插图版权声明",
      "summary": "图书简介：\nhttp://v.youku.com/v_show/id_XOTA0NjcyMzE2.html?wm=3333_2001\n硅谷创投教父、PayPal创始人作品，
斯坦福大学改变未来的一堂课，为世界创造价值的商业哲学。\n在科技剧烈改变世界的今天，想要成功，你必须在一切发生之前研究结局。\n
你必须找到创新的独特方式，让未来不仅仅与众不同，而且更加美好。\n从0到1，为自己创造无限的机会与价值！\nPaypal创始人、Facebook
第一位外部投资者彼得•蒂尔在本书中详细阐述了自己的创业历程与心得，包括如何",
      "created_at": "2016-03-28 02:21:08",
      "updated_at": "2016-03-28 02:21:08"
    }
  }
]
```
## Return a book
url:
```html
POST : /api/return
```
params:
* storeId
return 
```html
```
A p2p library
use Json Web Token authorization
We can pass the token in two ways: passing it as a simple request parameter, or in the header with this specific item: Authorization: Bearer {token_goes_here}

RESTFUL API GOES HERE
Signup
url:

POST : /api/auth/signup
params:

name
email
password
return:

{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3AycC1saWIuZGV2XC9hcGlcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNDU5MTU1MDQxLCJleHAiOjE0NTkxNTg2NDEsIm5iZiI6MTQ1OTE1NTA0MSwianRpIjoiYWJiZDUzZGE4MWI5OTkwODU0NWEwNDk1ZmFlOTIyOTMifQ.tfzgBxalsokgff18rPOVnw8Bx08kifaGZpxEz53iAkY"
}
Login
url:

POST : /api/auth/login
params:

email
password
return:

{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3AycC1saWIuZGV2XC9hcGlcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNDU5MTU1MDQxLCJleHAiOjE0NTkxNTg2NDEsIm5iZiI6MTQ1OTE1NTA0MSwianRpIjoiYWJiZDUzZGE4MWI5OTkwODU0NWEwNDk1ZmFlOTIyOTMifQ.tfzgBxalsokgff18rPOVnw8Bx08kifaGZpxEz53iAkY"
}
Get All Books
url:

GET : /api/books
return

[
  {
    "id": 1,
    "title": "火星救援",
    "author": "[美] 安迪·威尔",
    "pubdate": "2015-10-1",
    "publisher": "译林出版社",
    "rating": "8.9",
    "isbn": "9787544757225",
    "author_intro": "安迪·威尔 (Andy Weir)，从15岁起就被美国国家实验室聘为软件工程师。执着的太空宅男，沉迷于相对论物理、轨道力学和载人飞船。《火星救援》是他的处女作。\n2009年，安迪·威尔陆续将他的小说《火星救援》贴在自己的个人网站上，供人免费阅读。在众多读者的强烈要求下，他在亚马逊平台上发布了作品，收费0.99美金，哪知花钱买他小说的读者比免费阅读的读者更多。2013年3月，兰登书屋以六位数买下小说的版权。仅仅四天后，安迪·威尔又接到了来自20世纪福克斯电影公司的橄榄枝。2015年，由大导演雷德利·斯科特执",
    "image": "https://img3.doubanio.com/mpic/s28315660.jpg",
    "catalog": "",
    "summary": "六天前，马克·沃特尼成为了第一批行走在火星上的人。如今，他也将成为第一个葬身火星的人。\n一场突如其来的风暴让阿瑞斯三船员被迫放弃任务。撤离过程中，沃特尼遭遇意外，被孤身一人丢在了这片寸草不生的红色荒漠中，剩余的补给也远不够撑到救援可能抵达的那一天。\n当然，沃特尼也不准备坐以待毙，凭借着他的植物学家和机械工程师背景，他决定跟火星来一场不是你死就是我活的过家家游戏。",
    "created_at": "2016-03-28 02:21:01",
    "updated_at": "2016-03-28 02:21:01"
  },
  {
    "id": 2,
    "title": "从0到1",
    "author": "彼得·蒂尔 布莱克·马斯特斯",
    "pubdate": "2015-1-1",
    "publisher": "中信出版股份有限公司",
    "rating": "7.6",
    "isbn": "9787508649719",
    "author_intro": "彼得•蒂尔（Peter Thiel）\n被誉为硅谷的天使，投资界的思想家。1998年创办PayPal并担任CEO，2002年将PayPal以15亿美元出售给eBay，把电子商务带向新纪元。2004年做了首笔在Facebook的外部投资，并担任董事。同年成立软件公司Palantir，服务于国防安全与全球金融领域的数据分析。蒂尔联合创办了Founders Fund基金，为LinkedIn、SpaceX、Yelp等十几家出色的科技新创公司提供早期资金，其中多家公司由PayPal的同事负责营运，这些人在硅谷有“Pa",
    "image": "https://img3.doubanio.com/mpic/s28012945.jpg",
    "catalog": "前言\n第1章 未来的挑战\n第2章 像1999 年那样狂欢\n第3章 所有成功的企业都是不同的\n第4章 竞争意识\n第5章 后发优势\n第6章 成功不是中彩票\n第7章 向钱看\n第8章 秘密\n第9章 基础决定命运\n第10章 打造帮派文化\n第11章 顾客不会自动上门\n第12章 人类和机器\n第13章 绿色能源与特斯拉\n第14章 创始人的悖论\n结语 停滞不前，还是临近奇点\n致谢\n插图版权声明",
    "summary": "图书简介：\nhttp://v.youku.com/v_show/id_XOTA0NjcyMzE2.html?wm=3333_2001\n硅谷创投教父、PayPal创始人作品，斯坦福大学改变未来的一堂课，为世界创造价值的商业哲学。\n在科技剧烈改变世界的今天，想要成功，你必须在一切发生之前研究结局。\n你必须找到创新的独特方式，让未来不仅仅与众不同，而且更加美好。\n从0到1，为自己创造无限的机会与价值！\nPaypal创始人、Facebook第一位外部投资者彼得•蒂尔在本书中详细阐述了自己的创业历程与心得，包括如何",
    "created_at": "2016-03-28 02:21:08",
    "updated_at": "2016-03-28 02:21:08"
  }
Add a book
url:

POST : /api/books
params:

isbn
return


Get a book detail
url:

GET : /api/books/{id}
params:

{id} book id
return

{
  "book": {
    "id": 1,
    "title": "火星救援",
    "author": "[美] 安迪·威尔",
    "pubdate": "2015-10-1",
    "publisher": "译林出版社",
    "rating": "8.9",
    "isbn": "9787544757225",
    "author_intro": "安迪·威尔 (Andy Weir)，从15岁起就被美国国家实验室聘为软件工程师。执着的太空宅男，沉迷于相对论物理、轨道力学和载人飞船。《火星救援》是他的处女作。\n2009年，安迪·威尔陆续将他的小说《火星救援》贴在自己的个人网站上，供人免费阅读。在众多读者的强烈要求下，他在亚马逊平台上发布了作品，收费0.99美金，哪知花钱买他小说的读者比免费阅读的读者更多。2013年3月，兰登书屋以六位数买下小说的版权。仅仅四天后，安迪·威尔又接到了来自20世纪福克斯电影公司的橄榄枝。2015年，由大导演雷德利·斯科特执",
    "image": "https://img3.doubanio.com/mpic/s28315660.jpg",
    "catalog": "",
    "summary": "六天前，马克·沃特尼成为了第一批行走在火星上的人。如今，他也将成为第一个葬身火星的人。\n一场突如其来的风暴让阿瑞斯三船员被迫放弃任务。撤离过程中，沃特尼遭遇意外，被孤身一人丢在了这片寸草不生的红色荒漠中，剩余的补给也远不够撑到救援可能抵达的那一天。\n当然，沃特尼也不准备坐以待毙，凭借着他的植物学家和机械工程师背景，他决定跟火星来一场不是你死就是我活的过家家游戏。",
    "created_at": "2016-03-28 02:21:01",
    "updated_at": "2016-03-28 02:21:01",
    "store": [
      {
        "id": 1,
        "owner": 1,
        "book_id": 1,
        "borrower": 1,
        "available": 0,
        "created_at": "2016-03-28 02:21:01",
        "updated_at": "2016-03-28 07:19:03",
        "owner_name": "Egg Egg",
        "borrower_name": "Egg Egg"
      }
    ]
  }
}
Borrow a book
url:

POST : /api/borrow
params:

storeId
return

Get all borrowed books
url:

GET : /api/borrow
return

[
  {
    "id": 1,
    "owner": 1,
    "book_id": 1,
    "borrower": 1,
    "available": 0,
    "created_at": "2016-03-28 02:21:01",
    "updated_at": "2016-03-28 07:19:03",
    "book": {
      "id": 1,
      "title": "火星救援",
      "author": "[美] 安迪·威尔",
      "pubdate": "2015-10-1",
      "publisher": "译林出版社",
      "rating": "8.9",
      "isbn": "9787544757225",
      "author_intro": "安迪·威尔 (Andy Weir)，从15岁起就被美国国家实验室聘为软件工程师。执着的太空宅男，沉迷于相对论物理、轨道力学和载人飞船。《火星救援》是他的处女作。\n2009年，安迪·威尔陆续将他的小说《火星救援》贴在自己的个人网站上，供人免费阅读。在众多读者的强烈要求下，他在亚马逊平台上发布了作品，收费0.99美金，哪知花钱买他小说的读者比免费阅读的读者更多。2013年3月，兰登书屋以六位数买下小说的版权。仅仅四天后，安迪·威尔又接到了来自20世纪福克斯电影公司的橄榄枝。2015年，由大导演雷德利·斯科特执",
      "image": "https://img3.doubanio.com/mpic/s28315660.jpg",
      "catalog": "",
      "summary": "六天前，马克·沃特尼成为了第一批行走在火星上的人。如今，他也将成为第一个葬身火星的人。\n一场突如其来的风暴让阿瑞斯三船员被迫放弃任务。撤离过程中，沃特尼遭遇意外，被孤身一人丢在了这片寸草不生的红色荒漠中，剩余的补给也远不够撑到救援可能抵达的那一天。\n当然，沃特尼也不准备坐以待毙，凭借着他的植物学家和机械工程师背景，他决定跟火星来一场不是你死就是我活的过家家游戏。",
      "created_at": "2016-03-28 02:21:01",
      "updated_at": "2016-03-28 02:21:01"
    }
  },
  {
    "id": 2,
    "owner": 1,
    "book_id": 2,
    "borrower": 1,
    "available": 0,
    "created_at": "2016-03-28 02:21:08",
    "updated_at": "2016-03-28 08:41:20",
    "book": {
      "id": 2,
      "title": "从0到1",
      "author": "彼得·蒂尔 布莱克·马斯特斯",
      "pubdate": "2015-1-1",
      "publisher": "中信出版股份有限公司",
      "rating": "7.6",
      "isbn": "9787508649719",
      "author_intro": "彼得•蒂尔（Peter Thiel）\n被誉为硅谷的天使，投资界的思想家。1998年创办PayPal并担任CEO，2002年将PayPal以15亿美元出售给eBay，把电子商务带向新纪元。2004年做了首笔在Facebook的外部投资，并担任董事。同年成立软件公司Palantir，服务于国防安全与全球金融领域的数据分析。蒂尔联合创办了Founders Fund基金，为LinkedIn、SpaceX、Yelp等十几家出色的科技新创公司提供早期资金，其中多家公司由PayPal的同事负责营运，这些人在硅谷有“Pa",
      "image": "https://img3.doubanio.com/mpic/s28012945.jpg",
      "catalog": "前言\n第1章 未来的挑战\n第2章 像1999 年那样狂欢\n第3章 所有成功的企业都是不同的\n第4章 竞争意识\n第5章 后发优势\n第6章 成功不是中彩票\n第7章 向钱看\n第8章 秘密\n第9章 基础决定命运\n第10章 打造帮派文化\n第11章 顾客不会自动上门\n第12章 人类和机器\n第13章 绿色能源与特斯拉\n第14章 创始人的悖论\n结语 停滞不前，还是临近奇点\n致谢\n插图版权声明",
      "summary": "图书简介：\nhttp://v.youku.com/v_show/id_XOTA0NjcyMzE2.html?wm=3333_2001\n硅谷创投教父、PayPal创始人作品，斯坦福大学改变未来的一堂课，为世界创造价值的商业哲学。\n在科技剧烈改变世界的今天，想要成功，你必须在一切发生之前研究结局。\n你必须找到创新的独特方式，让未来不仅仅与众不同，而且更加美好。\n从0到1，为自己创造无限的机会与价值！\nPaypal创始人、Facebook第一位外部投资者彼得•蒂尔在本书中详细阐述了自己的创业历程与心得，包括如何",
      "created_at": "2016-03-28 02:21:08",
      "updated_at": "2016-03-28 02:21:08"
    }
  }
]
Return a book
url:

POST : /api/return
params:

storeId
return

