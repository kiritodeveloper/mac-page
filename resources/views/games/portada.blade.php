@extends('layouts.app')

@include('partials._flotante')
@section('content')
<style type="text/css">
  

.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #33FFB5;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #050E0B;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAdVBMVEUAAAD////ExMQPDw/y8vLe3t7t7e37+/t1dXX09PTR0dH39/eVlZXl5eUbGxvOzs64uLi+vr4gICB9fX2goKBJSUlXV1ddXV3Y2Ng4ODipqak/Pz8pKSmwsLCMjIwICAiFhYUzMzNtbW2QkJAUFBRiYmJRUVGeNuQ6AAADD0lEQVR4nO3a23aqMBCAYcJRQZSDUhAVsdb3f8SNQUTU7urah6D8300RWXWYlQyTqKYBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgTxijwA0OqqN4DYktjraq43gFpSlzJfxCdSQvYCNORqojeQFxkyxzmamOpfe+xJmzUR1Mz0X1yBrX6VqqDqe/inyj1+V9uxo5PBNrq3i53Bndc1kc+M38c6vXoTzySiUB9shGTrJZ2xsY+VYXF/ypprnCdqvRNVcYZx9sO71BlExcW1zR41D4pZY4wpwqjlaxJjVpYSyaItWRynPr6tJ06FWrOJcm3b9NlBxxpXWci6W2qOahZfz8L9+YezdFZ/Ze0ybyQJe1bac6XqXC3ydLfGnGTKST2enlTHW8KiXfjynLO/7xQkv4kWakp9ML1RGrU1gyL+v5bbLSudcctp1WXekHaicTEGjTcTuiblqHqspHX80F3kp1zMoEdX6i0rSWcpCJSfl5kSXHr5N0kcBP1TGrUs9C4dmWuaofesJ1vTYx62xfTq5GmT/U7iE6jpggz6rVzEd2W7dCedH1+ef3AfX3cOzO9arZsi3HuS1VibzV7Ood/8nPCDXzTVQ3b85d8aGd1s6OeTEL83b4XbKf+whbM97CtNleSE677UGSH9ppV7fri5vZuX/qQ/5SyVBvebr/YC1XhoE8ec6WFVWvDL16t5OscaQ2aFWuHnWdIuV4wooPI1d4WdHZ4Kom7SDFnSQ4bZGywzhf1I2FXeVm31lvD3TJ89EdWU2RGiey0hjbmTWbyEkXpe1VQ+208m6yUrkTqp9qV8eq3e6K/3eUPRFdbY3WRWp87wvVsukgBruUNjrbo3ZbpO7IZN1yJv85xB7pFG49aovUHcVuud4M+duwzkbpYDcUHtRZJSeqo+m57UWunIF25g+7+JmMSFUH03eXq2R+JfOD8qZ/x7eKdrPKGXJX8Jh23yFUHUr/FUHTvjOwHrCVSx6dXD3EOIxGueogAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8C/9AlOCJVTjt7LaAAAAAElFTkSuQmCC");
    background-size: cover;
    height: 135px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #050E0B;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

</style>

 <section class="main_slider_area">
<br>
<br>
<br>
<br>
<br>
<br>
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="container">
			  <div class="row">
			    <div class="col-lg-3 col-sm-6">

			            <div class="card hovercard">
			                <div class="cardheader">

			                </div>
			                <div class="avatar">
			                    <img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzvOhnTXP1KuoYEElcPODEZkPPm0ZnmUdGkezPDzo5ZYKNoBhXcg">
			                </div>
			                <div class="info">
			                    <div class="title">
			                        <a>PIEDRA PAPEL O TIJERA</a>
			                    </div>
			                    <div class="desc">juego basico de piedra papel o tijera </div>
			                    <div class="desc">te divertiras</div>

			                </div>
			                <div class="bottom">
			                    <a class="btn btn-primary btn-twitter btn-sm" target="_blank" rel="noopener noreferrer" href="gamesppt">
			                        <i class="fa fa-gamepad"></i>
			                    </a>
			                    
			                </div>
			            </div>

			     </div>
                                <div class="col-lg-3 col-sm-6">

                        <div class="card hovercard">
                            <div class="cardheader">

                            </div>
                            <div class="avatar">
                                <img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXl2ZkNSfsqg2ycdEMXc2dhcqq7H-Zp3H2hbhVlwnnieQcDVeN">
                            </div>
                            <div class="info">
                                <div class="title">
                                    <a>ALICE</a>
                                </div>
                                <div class="desc">Inteligencia Artifial </div>
                                <div class="desc">capas de jugar ajedres</div>
                                <div class="desc">te divertiras ademas que ella aprende</div>
                            </div>
                            <div class="bottom">
                                <a class="btn btn-primary btn-twitter btn-sm" target="_blank" rel="noopener noreferrer" href="gameschess">
                                    <i class="fa fa-gamepad"></i>
                                </a>
                                
                            </div>
                        </div>

                 </div>
			  </div>
			</div>	
 </section>


@endsection
