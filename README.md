# WechatFace

![](https://mmbiz.qlogo.cn/mmbiz/n7ib8SzzHmToRtjPMfDnSrN632pAvBqicjdbreZppicSXKsEqo96GLh56QtFsZpG1QjKJNBIc4l0wk5fGH9xsia4wQ/0?wx_fmt=jpeg)

微软的how-old火了，这里抓取了how-old.net的post提交接口，并扩展在微信中使用how-old接口。

>post提交地址：http://how-old.net/Home/Analyze?isTest=False&source=&faceUrl=$url
>
>替换链接中的$url为图片地址，同时post提交相关数据。
>
>例如：http://how-old.net/Home/Analyze?isTest=False&source=&faceUrl=http://how-old.net/Images/faces2/scroll0012.jpg

###POST提交Demo：

    $data = array();
    $curlobj = curl_init();
    curl_setopt($curlobj, CURLOPT_URL, "http://how-old.net/Home/Analyze?isTest=False&source=&faceUrl=http://how-old.net/Images/faces2/scroll0012.jpg");
    curl_setopt($curlobj, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
    curl_setopt($curlobj, CURLOPT_HEADER, 0);
    curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlobj, CURLOPT_POST, 1);
    curl_setopt($curlobj, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curlobj, CURLOPT_HTTPHEADER, array());
    $rth = curl_exec($curlobj);
    curl_close($curlobj);

###返回格式为json，结果如下：
```json
"{
    \"AnalyticsEvent\": \"[
        \\r\\n{
            \\r\\n\\\"face\\\": {
                \\r\\n\\\"age\\\": 28.0,
                \\r\\n\\\"gender\\\": \\\"Male\\\"\\r\\n
            },
            \\r\\n\\\"event_datetime\\\": \\\"2015-06-03T06: 20: 23.5553948Z\\\",
            \\r\\n\\\"user_id\\\": \\\"ace59916-7cd3-4407-9086-facb1d25ac2f\\\",
            \\r\\n\\\"session_id\\\": \\\"5f749f88-a329-4ea6-ae07-01bf7f870859\\\",
            \\r\\n\\\"submission_method\\\": \\\"Search\\\",
            \\r\\n\\\"user_agent\\\": \\\"Mozilla/4.0(compatible;MSIE6.0;WindowsNT5.1;SV1;.NETCLR2.0.50727;)\\\",
            \\r\\n\\\"location\\\": {
                \\r\\n\\\"latitude\\\": 34.27,
                \\r\\n\\\"longitude\\\": 108.88\\r\\n
            },
            \\r\\n\\\"location_city\\\": {
                \\r\\n\\\"latitude\\\": 34.3,
                \\r\\n\\\"longitude\\\": 108.9\\r\\n
            },
            \\r\\n\\\"is_mobile_device\\\": false,
            \\r\\n\\\"browser_type\\\": \\\"IE\\\",
            \\r\\n\\\"platform\\\": \\\"Windows\\\",
            \\r\\n\\\"mobile_device_model\\\": \\\"Unknown\\\"\\r\\n
        }\\r\\n
    ]\",
    \"Faces\": [
        {
            \"faceId\": null,
            \"faceRectangle\": {
                \"top\": 60,
                \"left\": 68,
                \"width\": 77,
                \"height\": 77
            },
            \"attributes\": {
                \"gender\": \"Male\",
                \"age\": 28.0
            }
        }
    ]
}"

```
返回结果包括，人数、年龄、性别、还有人脸识别的位置（如顶图中黄颜色的框位置），可将Json结果转换为数组后使用。


#融合微信中扩展使用

>融合微信分为两个页面，face.php和api.php
>
>face.php：展示具体效果
>api.php：微信接口

#### 1、api.php

获取微信用户发送图片的地址，微信服务器会给第三方传送$postObj->PicUrl;

将地址作为face.php的url参数传入。

#### 2、face.php

```php
$img = $_get['url'];
$data = array();
$curlobj = curl_init();
curl_setopt($curlobj, CURLOPT_URL, "http://how-old.net/Home/Analyze?isTest=False&source=&faceUrl=".$img);
curl_setopt($curlobj, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
curl_setopt($curlobj, CURLOPT_HEADER, 0);
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlobj, CURLOPT_POST, 1);
curl_setopt($curlobj, CURLOPT_POSTFIELDS, $data);
curl_setopt($curlobj, CURLOPT_HTTPHEADER, array());
$rth = curl_exec($curlobj);
curl_close($curlobj);
```

用js处理$rth结果，详情参考face.php。

----
Email：poach123@126.com


