# 云签到

> cas(cloud add sign)
> 
> emmmm.......

主要是利用php来设置一个定时任务,实现每日签到

然后就是签到的封包了

不过php是单线程的,效率挺低,后面可以改成多进程的模式提高效率

监控文件:app\admin\ctrl\monitor.php

现在只能通过浏览器访问来开启监控....

http://url/index.php?c=monitor&a=start&m=admin

总之现在是一个很不完善的玩意=_=
## 支持平台

- [x] 百度贴吧
- [x] b站直播
- [x] 网易云
- [ ] V2EX
- [ ] 联通客户端

## TODO

- [ ] 注册
- [ ] 优化操作流程
- [ ] 更多的平台
- [ ] 漂亮的页面(至少能看吧)

