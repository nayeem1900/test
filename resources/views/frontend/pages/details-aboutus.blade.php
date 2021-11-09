

@extends('frontend.layouts.master')
@section('content')<br>

    <section class="baner">

        <div class="container">
            <img src="{{url('public/frontend/image/t.jpg')}}" style="width:100%;">
        </div>

    </section>

    <!--about us-->
  <section class="middle">
      <div class=" container">
          <div class="row">
              <div class="col-md-10 d_aboutus">
                  <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">পরিচিতি</button>
                          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">লক্ষ্য ও উদ্দেশ্য</button>
                          <button class="nav-link" id="v-pills-speciality-tab" data-bs-toggle="pill" data-bs-target="#v-pills-speciality" type="button" role="tab" aria-controls="v-pills-speciality" aria-selected="false">বৈশিষ্ট্য</button>
                          <button class="nav-link" id="v-pills-eduprocess-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eduprocess" type="button" role="tab" aria-controls="v-pills-eduprocess" aria-selected="false">পাঠদান পদ্ধতি</button>
                          <button class="nav-link" id="v-pills-eduevu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eduevu" type="button" role="tab" aria-controls="v-pills-eduevu" aria-selected="false">পাঠদান মূল্যায়ন পদ্ধতি</button>


                      </div>
                      <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><p style="text-align: justify">ইসলামী ব্যাংক বাংলাদেশ লিমিটেড দেশের অন্যতম শীর্ষস্থানীয় সর্বজন স্বীকৃত একটি কল্যাণমুখী ব্যাংক। ব্যাংকের সামাজিক দায়বদ্ধতার দায়িত্ব পালনে নিয়োজিত রয়েছে ইসলামী ব্যাংক ফাউন্ডেশন। ইসলামী ব্যাংক ফাউন্ডেশনের নিজস্ব ব্যবস্থাপনায় ও অর্থায়নে প্রতিষ্ঠিত হয়েছে ইসলামী ব্যাংক মডেল স্কুল এন্ড কলেজ। এটি একটি আধুনিক বাংলা মাধ্যম শিক্ষা প্রতিষ্ঠান। এখানে আধুনিক ও ইসলামী শিক্ষার সমন্বয়ে যুগোপযোগী সিলেবাস প্রনয়ণ করা হয়েছে।</p><br>
                              <p style="text-align: center"></p><br>

                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><p style="text-align: justify">শিশুদের মাঝে সুশিক্ষা প্রদানের মাধ্যমে সৎ যোগ্য ও আদর্শবান নাগরিক তৈরি করা এবং প্রতিযোগিতাপূর্ণ বিশ্বে একবিংশ শতাব্দীর চ্যালেঞ্জ মোকাবেলায় নিজেদেরকে শ্রেষ্ঠত্ব প্রমাণ করার মত জ্ঞানার্জনে সাহায্য করা।</p></div>
                          <div class="tab-pane fade" id="v-pills-speciality" role="tabpanel" aria-labelledby="v-pills-speciality-tab"><p>১.মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষাবোর্ড, ঢাকা কর্তৃক অনুমোদিত।<br>
                                  ২.	নব-নির্মিত সুপরিসর ভবনে শিক্ষা কার্যক্রম পরিচালনা।<br>
                                  ৩.	ইসলামী ব্যাংক ফাউন্ডেশনের ব্যবস্থাপনায় পরিচালিত।<br>
                                  ৪.	প্রশিক্ষণপ্রাপ্ত, দক্ষ ও অভিজ্ঞ শিক্ষকমন্ডলী কর্তৃক পাঠদান।<br>
                                  ৫.	অভিভাবকদের সুচিন্তিত পরামর্শ গ্রহণ এবং বাস্তবায়ন।<br>
                                  ৬.	আধুনিক মাল্টিমিডিয়া প্রজেক্টরের মাধ্যমে পাঠদান।<br>
                                  ৭.	সংগীত, নৃত্য,বক্তিতা, বিতর্ক প্রতিযোগীতা, সাহিত্য চর্চা, চিত্রাঙ্কন ও কম্পিউটার শিক্ষার বিশেষ ব্যবস্থা।<br>
                                  ৮.	সকল পাবলিক পরীক্ষায় এ+ সহ পাশের হার শতভাগ।<br>
                                  ৯.	পুরো ক্যাম্পাস সিসিটিভি ক্যামেরা দ্বারা সার্বক্ষণিক পর্যবেক্ষণ।<br>
                                  ১০.	 নৈতিকতা, আধুনিকতা ও ধর্মীয় অনুশাসন পালনে উদ্বুদ্ধকরণ।<br>
                              </p></div>
                          <div class="tab-pane fade" id="v-pills-eduprocess" role="tabpanel" aria-labelledby="v-pills-eduprocess-tab"><p style="text-align: justify">ইসলামী ব্যাংক মডেল স্কুল এন্ড কলেজ একটি আধুনিক বাংলা মাধ্যম শিক্ষা প্রতিষ্ঠান। জাতীয় শিক্ষানীতি পাঠ্যক্রম ও পাঠ্যসূচী অনুসারে আধুনিক পদ্ধতিতে পাঠদান করা হয়। তবে ইংরেজী, গণিত  ও ধর্মীয় শিক্ষার প্রতি বিশেষ গুরুত্ব প্রদান করা হয়। প্লে গ্রুফ হতে ২য় শেণী পর্যন্ত নিবিড়ভাবে ক্লাস এবং তৃতীয় শ্রেণী থেকে উচ্চতর শ্রেণী পর্যন্ত বিষয়ভিত্তিক রুটিনের মাধ্যমে পাঠদান করা হয়। স্কুল ডায়েরী নিয়মিত যাচাই ও সংরক্ষন করা হয়। সুযোগ্য ও বিষয় ভিত্তিক শিক্ষক মন্ডলী দ্বারা পাঠ পরিকল্পনা প্রণয়ন ও পাঠদান করা হয়। শিক্ষার্থীদেরকে সার্বক্ষণিক যত্ন ও তত্তাবধান করার জন্য সুবিধাজনক সংখ্যায় ভাগ করে পাঠদান কার্যক্রম সুচারুভাবে পরিচালনার জন্য সার্বক্ষণিক মনিটরিং এর ব্যবস্থা রয়েছে।<br>
                                  বি দ্র: পিছিয়ে পড়া শিক্ষার্থীদের জন্য অতিরিক্ত ক্লাসের ব্যবস্থা রয়েছে।
                              </p></div>
                          <div class="tab-pane fade" id="v-pills-eduevu" role="tabpanel" aria-labelledby="v-pills-eduevu-tab"><p style="text-align: justify">ইসলামী ব্যাংক মডেল স্কুল এন্ড কলেজের পাঠদান মূল্যায়নের জন্য সকল শ্রেণীতে প্রতি বছর ২টি সেমিস্টার পরীক্ষা (অর্ধ-বার্ষিক ও বার্ষিক) এবং প্রতিটি সেমিস্টারের আওতায় ২টি করে মর্ধ্যপর্ব পরীক্ষা অনুষ্টিত হয়। সেমিস্টার পরীক্ষার পূর্ণমান -৮০ এবং প্রতিটি মধ্যপর্ব পরীক্ষার পূর্ণমান -২০। ২টি মধ্যপর্ব পরীক্ষার প্রাপ্ত নম্বরের গড় সেমিস্টার পরীক্ষার অর্থ্যাৎ ৮০ নম্বরের পরীক্ষায় প্রাপ্ত নম্বরের সাথে যোগ করে সেমিস্টার পরীক্ষার ফলাফল তেরী করা হয়। অতঃপর ২ সেমিস্টারের গড় নম্বর দিয়ে বার্ষিক চূড়ান্ত ফলাফল তেরী করা হয়। শুধুমাত্র চূড়ান্ত ফলাফলের ভিত্তিতে  শিক্ষার্থীকে পরবর্তী শ্রেণীতে প্রমোশন দেওয়া হয়। পাস মার্ক ৪০% । গ্রেডিং পদ্ধতিতে ফলাফল প্রকাশ করা হয়।
                              </p></div>



                      </div>
                  </div>

              </div>

          </div>

      </div>

  </section>





@endsection