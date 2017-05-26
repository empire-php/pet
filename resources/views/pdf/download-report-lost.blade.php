<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perdido</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/yui-reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bosco.css') }}">
    <style>
    html{
    	font-family:Segoe UI Black;
    	margin:0px;
    }
    .pdf-report-phone {
	position: relative;
	background-color: rgba(0, 0, 0, 0.4);
	color: #fff;
	display: block;
	font-size:50px;
	padding-top:5px;
	line-height: 1;
	height: 50px;
	padding-bottom:25px;
	margin-top: -80px;
	text-align: center;
	width: 100%;
	z-index: 1040;
	}
    </style>
</head>
<body style='background-color:white;margin:0px;'>

<div style="width:800px;height:1100px;margin:0 auto;">
      <div class="modal-report-detail-left" style="width:100%;">
        <div class="pdf-report-detail-image">
          <div class="pdf-report-title" style="height:130px;">
            <p style="padding-top:60px;padding-bottom:20px;border-bottom: 1px solid white;font-size:80px;text-align:center;">Perdido</p>
            <p><span style="font-size:20px;font-weight:bold;">Nombre: </span><span style="font-size:24px;font-weight:bold;">{{ $report['name'] }}&nbsp;|&nbsp;</span>
               <span style="font-size:20px;font-weight:bold;">Género: </span><span style="font-size:24px;font-weight:bold;">{{ $report['gender'] }}&nbsp;|&nbsp;</span>
               <span style="font-size:20px;font-weight:bold;">Raza: </span><span style="font-size:24px;font-weight:bold;">{{ $report['race'] }}</span>
            </p>
          </div>
          <div style='text-align:right;height:49px;float:right;background-color:black;color:white;margin-top:1px;padding:20px 20px 0px 20px;'><span style="font-size:24px;">recompansa:&nbsp;</span> <span style="font-size:28px;font-weight:bold;">S/.&nbsp;{{ $report['reward'] }}</span></div>
          <img src="{{ asset('images/pets/'.$report['image']) }}" style="width:100%;top:-51px;">
          <div class='pdf-report-phone'><img src="{{ url('/img/phone.png')}}">&nbsp;&nbsp;{{ $report['user_phone'] }}</div>
        </div>
        <div class="pdf-report-detail-data clearfix" style="height:75px;padding-top:0px;" >
          <div style="width:50%;float:left;font-size: 20px;">
              <img src="{{ url('/img/calendar.png')}}" style="padding-left:20px;padding-top:28px;">&nbsp;&nbsp;{{ $report['date'] }}
          </div>
          <div style="width:50%;float:right;font-size: 20px;">
              <img src="{{ url('/img/location.png')}}" style="padding-left:20px;padding-top:28px;">&nbsp;&nbsp;{{ $report['address'] }}
          </div>
        </div>
        <div class="modal-report-detail-footer">
          <div class="logo-gray" style="padding-right: 2px;"></div>
          <p style="margin-right: 100px;font-size: 16px;">¡Compartiendo la publicación ayudas a reunir una familia! Ayuda a encontrar mascotas perdidas y reportar mascotas encontradas entrando a www.bosco.pe</p>
        </div>
      </div>
</div>
</body>
</html>