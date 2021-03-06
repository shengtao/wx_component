## 微信开放平台 公众号第三平台类库 

wx_component 2.0 微信公众号第三平台类库，PHP版本。

wx_component 2.0 是根据[微信官方开放平台](https://open.weixin.qq.com/)提供的文档开发的PHP类库，
第三方平台使用此类库，可以在部署代码和代公众号实现业务时，更加容易、方便上手。
wx_component 2.0 增加了代公众号实现对微信支付的支持

## 下载
你可以 clone 这个仓库，自行下载使用。

## 实现功能
1. 实现公众号授权和绑定
2. 代公众号实现业务
3. 代公众号使用JS SDK
4. 第三方平台事件通知处理
5. 实现公众号全网发布接入检测的自动化测试代码
6. 代公众号实现对微信支付的支持，包含：
    * 微信被扫支付 
    * 微信扫码支付 
    * 微信JSAPI支付 
    * 微信地址本 
    * 微信订单查询 
    * 微信订单退款 
    * 微信订单退款查询 
    * 微信对账单下载
7. 增加微信开放平台网站应用微信扫码登录支持
8. 增加微信开放平台官方JS SDK DEMO的整体实现
9. 增加对composer的支持

## 简单使用说明
1. 假设配置网站根目录为/data/wx_component/
2. 网站目录结构为/data/wx_component/example/和/data/wx_component/src/
3. 假设网站域名为www.xxx.com
4. 配置公众号第三方平台参数
    * 授权事件接收URL：http://www.xxx.com/example/component_event.php
    * 公众号消息与事件接收URL:http://www.xxx.com/example/appevent/$APPID$
    * 根据需要配置其他参数
5. 把配置的第三方平台参数配置/example/config.php
6. 配置完成后，等待component_verify_ticket消息（10分钟1次）到来后，进行全网发布接入检测。
7. 如果不成功，检查以下几项
    * 检查/example/目录是否可写
    * 检查/example/cache/目录的日志文件，查看原因
    * 检查apache rewrite模块是否开启，是否支持.htaccess
8. 发布成功后，用浏览器打开example的php样例，检测授权、js_sdk功能。

## Composer安装说明
1. composer require lv_fan2008/wx_component
2. composer中文文档参考[http://docs.phpcomposer.com/](http://docs.phpcomposer.com/)

## 我的测试环境
1. 使用的是阿里云主机
2. 操作系统为Debian 8.0 64Bits
3. Apache/2.4.10 (Debian) PHP 5.6.27
4. php扩展模块有curl openssl

## 建议和疑问

如果你有好的建议或者疑问，欢迎给我提issue或pull request，或者发邮件到lv_fan2008@sina.com 。
也可以加入到QQ群519270384进行讨论。

## LICENSE

[MIT](https://opensource.org/licenses/MIT)，尽情享受开源代码。

