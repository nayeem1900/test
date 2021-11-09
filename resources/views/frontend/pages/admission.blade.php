

@extends('frontend.layouts.master')
@section('content')<br>

    <section class="baner">

        <div class="container">
            <img src="{{url('public/frontend/image/w1.jpg')}}" style="width: 100%"height="700px">

        </div>
    </section>

    <!--about us-->
<section class="admission_info">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <p style="padding: 25px 0px 0px 40px"  >ভর্তি পদ্ধতিঃ ছাত্র-ছাত্রী ভর্তি করার ক্ষেত্রে সরকারী নিয়মানুযায়ী বয়স বিবেচনা করা হয়। ১ম শ্রেণী থেকে প্রার্থীকে অবশ্যই ৫০ নম্বরের ভর্তি পরীক্ষায় অংশগ্রহণ করতে হবে। ৫০ নম্বরের বণ্টন: গণিত-২০, বাংলা-১০, ইংরেজী-১৫, এবং সাধারণ জ্ঞান-৫। প্রার্থীর ভর্তি পরীক্ষা ছাড়াও অন্যান্য বিষয়াবলী ভর্তি কমিটির কাছে বিবেচ্য। ২য় শ্রেণী থেকে ১০ম শ্রেণী পর্যন্ত ভর্তির সময় অবশ্যই ছাড়পত্র ও নম্বরপত্র জমা দিতে হবে। <br>
                    বি দ্র: ২০২২ শিক্ষাবর্ষে করোনাকালীন সময়ে বিশেষ ছাড়ে সরকারী নির্দেশনার আলোকে ছাত্র-ছাত্রী ভর্তি চলছে। <br></p>



                <style>
                    table, th, td {
                        border: 1px solid black;
                        border-collapse: collapse;
                    }
                </style>

                <h3 style="text-align: center">ভর্তি ফি ও বেতনঃ</h3>



                <table style="width:50%"align="center">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>শ্রেণী</th>
                        <th>ভর্তি ফি</th>
                        <th>সেশন ফি</th>
                        <th>বেতন</th>
                        <th>অর্ধ-বার্ষিক/ বার্ষিক/নির্বাচন/মডেল পরীক্ষার ফি</th>
                        <th>মধ্যপর্ব পরীক্ষার ফি</th>
                    </tr>
                    @foreach($allData as $key=>$admission)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td >{{$admission->class}}</td>
                            <td style="text-align: right">{{$admission->admission_fee}}</td>
                            <td style="text-align: right">{{$admission->session_fee}}</td>
                            <td style="text-align: right">{{$admission->salary}}</td>
                            <td style="text-align: right">{{$admission->half_yearly_fee}}</td>
                            <td style="text-align: right">{{$admission->middle_fee}}</td>
                        </tr>
                    @endforeach

                </table>

            </div>


            <div class="col-md-12">


                <style>
                    table, th, td {
                        border: 1px solid black;
                        border-collapse: collapse;
                    }
                </style>

                <h5 style="text-align: center">অন্যান্য ফি সমূহঃ</h5>



                <table style="width:20%"align="center">
                    <tr>
                        <th>পুনঃভর্তি</th>
                        <th>ছাডপত্র</th>
                        <th>প্রত্যয়নপত্র</th>
                        <th>জরিমানা</th>

                    </tr>

                    <tr>

                        <td>১,০০০/-</td>
                        <td>৫০০/-</td>
                        <td>১০০/-</td>
                        <td>৫০/-</td>

                    </tr>

                </table>


            </div>
            <div class="col-md-12">
                <h5 style="padding-left: 40px">শৃঙ্খলাবিধি</h5>
                <p style="padding-left: 40px">ক্লাস শুরু হওয়ার ১০ মিনিট পূর্বে শিক্ষার্থীদের জন্য ইউনিফর্ম পরিধান কওে প্রতিষ্ঠানে আসা বাধ্যতামূলক। ছুটির পূর্বে ক্যাম্পাস ত্যাগ করা নিষিদ্ধ। বিশেষ কারণে ছুটির প্রয়োজন হলে প্রধান শিক্ষকের অনুমতি নিতে হয়।বিনা অনুমতিতে অনুপস্থিত থাকলে প্রতি দিনের জন্য ৫০/- (পঞ্চাশ) টাকা জরিমানা আদায় করা হয়। বিনা অনুমতিতে ১ (এক) মাস অনুপস্থিত থাকলে স্কুল কতৃপক্ষ ভর্তি বাতিল করার ক্ষমতা রাখেন। বিদ্যালয়ের শৃঙ্খলা ও নৈতিকতা পরিপন্থী কোন কার্যকলাপের সাথে জড়িত হলে স্কুল থেকে তাৎক্ষণিক বহিষ্কার করা হয়। </p>

            </div>
            <div class="col-md-12">
                <h5 style="padding-left: 40px">ক্লাশের সময়</h5>
                <p style="padding-left: 40px">প্রভাতি শাখা: সকাল ৭:৪৫ ঘটিকা থেকে ১১.৪৫ ঘটিকা<br>
                    দিবা শাখা: দুপুর  ১২:০৫ ঘটিকা থেকে  ০৪.১৫ ঘটিকা
                </p>
            </div>
        </div>
    </div>
</section><br>





@endsection