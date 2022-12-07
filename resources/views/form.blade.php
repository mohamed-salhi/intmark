@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/Mystyle.css') }} " />
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <div class="container py-5">
        <div class="row parent justify-content-around">
            <div class="col-lg-5 col-md-12 col-sm-12 Contact-Information">
                <h3>ابقى على تواصل معنا</h3>
                <p>اتصل بنا أو أطلب الاتصال بنا في أي وقت ، ونسعى للرد على جميع
                    الاستفسارات في غضون 24 ساعة في أيام العمل. سنكون سعداء للإجابة على
                    أسئلتك .
                </p>
                <div>
                    <p class="title">البريد الإلكتروني :</p>
                    <div class="information">
                        <i class="bx bx-envelope"></i>
                        <p>intmark.business@gmail.com</p>
                    </div>
                </div>
                <div>
                    <p class="title">رقم الهاتف :</p>
                    <div class="information">
                        <i class="bx bxs-phone-call"></i>
                        <p>intmark.business@gmail.com</p>
                    </div>
                </div>
                <div>
                    <p class="title">تابعونا على :</p>
                    <div class="information">
                        <!-- icon -->
                        <i class="bx bxl-youtube"></i>
                        <i class="bx bxl-instagram"></i>
                        <i class="bx bxl-facebook"></i>
                        <i class="bx bxl-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 message">
                <p class="ready">هل أنتم مستعدين للبدء معنا ؟</p>
                <form class="send-message">
                    <input type="text" placeholder="الاسم بالكامل *" class="name" />
                    <input type="email" placeholder="البريد الإلكتروني *" class="email" />
                    <textarea class="text-area" cols="30" rows="5" placeholder="اكتب رسالتك .."></textarea>
                    <div class="submit">
                        <button type="submit">ارسل الرسالة</button>
                        <!-- icon -->
                        <i class="bx bx-left-arrow-alt"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
