<!DOCTYPE html>
<html>
  <head>
    <!--第一个参数是该区块的变量名称，第二个参数是当指定变量值为空值时使用的默认值-->
    <title>@yield('title', 'Sample') - Laravel新手入门教程</title>
  </head>
  <body>
    <!--表示该占位区域将用于显示content区块的内容，而content区块的内容将由继承自default视图的子视图定义-->
    @yield('content')
  </body>

</html>