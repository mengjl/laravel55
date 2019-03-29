<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>足球竞猜列表页面</title>
</head>
<body>
    <div>
        <table>

            <thead>
            <tr>
                <td>球队</td>
                <td>操作</td>
            </tr>
            </thead>

            <tbody>
               @if(!empty($list))
                   @foreach($list as $key=>$value)
                       <tr>
                           <td>{{$value['team_a']}} VS {{$value['team_b']}}</td>
                           <td>
                               @if(strtotime($value['end_at'])>time())
                                   <a href="#">竞猜</a>

                               @else
                                   <a href="#">查看结果</a>
                               @endif
                           </td>
                       </tr>
                   @endforeach
               @endif
            </tbody>
        </table>
    </div>
</body>
</html>