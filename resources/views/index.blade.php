<!-- 配置文件 -->
<script type="text/javascript" src="{{asset('ueditor/ueditor.config.js')}}"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{asset('ueditor/ueditor.all.js')}}"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container', {
      'serverUrl': '{{$ueditorUrl}}'
    });
    ue.ready(function(){
    	ue.execCommand('serverparam', '_token', '{{csrf_token()}}');
    });
</script>