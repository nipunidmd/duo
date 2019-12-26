<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>
<body>
  <html xmlns="http://www.w3.org/1999/html">
  <body style="margin-left: auto; margin-right: auto; margin-top: 0px;  display: block; ">


    <div style="width: 80%; margin-right: auto; margin-left: auto; height: 1px; background: #ccc; "></div>

    <div class="hello" style="padding: 40px 0px 0px 15%;">
      <img src="{{asset('assets/img/duo_images/logo1.jpg')}}" width="150px">
    </div>

    <div class="hello" style="width: 70%; margin-left: auto; margin-right: auto; font-size: 30px; padding: 40px 0 0; color: #555;">
      Email From Duo Design New Inquiry
    </div>

    <div class="hello" style="width: 70%; margin-left: auto; margin-right: auto; font-size: 20px; padding: 40px 0 0; color: #555;">
      Hello,
    </div>

    <div style="width: 65%; margin-right: auto; margin-left: auto; padding: 20px 0 40px; text-align: justify; font-size: 18px; color: #555;">
      You have a new email from:- {{$data['name']}},
    </div>
    <div style="width: 65%; margin-right: auto; margin-left: auto; padding: 20px 0 40px; text-align: justify; font-size: 18px; color: #555;">
      Email:- {{$data['email']}},
    </div>
    <div style="width: 65%; margin-right: auto; margin-left: auto; padding: 20px 0 40px; text-align: justify; font-size: 18px; color: #555;">
      Subject:- {{$data['subject']}},
    </div>
    <div style="width: 100%; background: #eaeaea; height: auto; padding: 40px 0; text-align: center;">
      <div style="width: 65%; margin-left: auto; margin-right: auto; color: #555; text-align: justify; font-size: 20px; padding: 0 0 40px;">
        <p>Message :- {{$data['message']}}</p>
      </div>
    </div>
  </span>

  <div style="background: #555; padding: 20px 0; text-align: center">

  </div>

</div>
</body>
</html>
</body>
</html>
