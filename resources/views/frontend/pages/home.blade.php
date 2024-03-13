@extends('frontend.layout.app')

@push('custom_css')
    {{-- <link rel="stylesheet" href="{{ asset('library/jquery-modal/modal.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('library/raw-zoom-animated-modal/style.css') }}" />
    <style>
        @media (max-width:1150px) {
            .product {
                height: 100%;
            }
        }

        @media (max-width:400px) {
            .sm-1 {
                font-size: 18px;
            }

            .sm-2 {
                font-size: 12px;
            }

            .sm-3 {
                font-size: 16px;
            }
        }
    </style>
@endpush

@push('custom_js')
    {{-- <script src="{{ asset('library/jquery-modal/modal.min.js') }}"></script> --}}
    <script src="{{ asset('library/raw-zoom-animated-modal/main.js') }}"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "cards",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        })
    </script>
@endpush

@section('content')
    <div class="mt-[30px] max-sm:mt-[50px] px-[100px] max-lg:px-[60px] max-md:px-[40px] max-sm:px-[20px]">
        {{-- ------header-section----- --}}
        <section class="">
            <div>
                <h1 class="sm-1 text-center text-[30px] font-[600] text-[#1e90ff]">
                    আপনার ছোট্ট সোনামণি হাসিখুশি এবং প্রাণবন্ত থাকুক এইটা কে না চাই??
                </h1>
            </div>

            <div class="mt-[20px]">
                <p class="sm-2 text-center text-[18px] font-[600] text-[black]">
                    আপনার ছোট্ট সোনামণিকে এই রোজা এবং ঈদে খুশি রাখতে এবং ধার্মিক হতে তাইতাই ডট কম নিয়ে এসেছে ছেলে বাবুদের
                    জন্য বিশেষ এক উপহার ।
                </p>
            </div>

            <div class="height-[300px] mx-auto mt-[20px] flex justify-center">
                <div class="flex flex-col justify-center items-center">
                    <p>আমাদের এই উপহার বক্সটিতে কি কি থাকছে তা জানতে নিচের ভিডিওটি দেখুন</p>
                    <div>
                        <iframe
                            src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Ftaitai.com.babyshop%2Fvideos%2F235836562239107%2F&show_text=false&width=476&t=0"
                            width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                            allowFullScreen="true">
                        </iframe>
                    </div>
                </div>

            </div>
            <div class="mt-[20px]">
                <p class="sm-3 text-center text-[18px] font-[600] text-[black]">
                    নবজাতক বাবা-মায়ের জন্য এটি বেস্ট কম্বো প্যাকেজ কারণ এই সবগুলো জিনিস </br>বেবির জন্মের সময় থেকেই অবশ্যই
                    লাগবে।
                </p>
            </div>
            <x-order-btn />
        </section>
        {{-- ----header-section--end-- --}}
        {{-- ------------why-buy-section---- --}}
        <section>
            {{-- <div>
                <h2 class="sm-1 mt-[20px] text-center text-[30px] font-[600] text-[#D92044] underline">আমাদের থেকে কেন
                    কিনবেন ?
                </h2>
            </div> --}}
            <div>
                <button class="sm-1 mt-[20px] text-center text-[30px] font-[600] text-[#D92044] underline">
                    মেয়ে বাবুদের প্যাকেজটি দেখতে এখানে ক্লিক করুন
                </button>
            </div>
            <div class="mt-6 grid grid-cols-2 max-md:grid-cols-1">
                <div class="product h-[500px] border-[1px] border-[black] p-2">
                    <img class="container h-full" src="http://combo.taitaikids.com/public/storage/product/baby-clothes.png"
                        alt="">
                </div>
                <div class="border-[1px] border-[black] p-2">
                    <p class="mb-[2px] text-[18px] font-[500] text-[black]">
                        ১.আমরা প্রায় দীর্ঘ দুই বছর নবজাতকের পণ্য নিয়ে কাজ করছি এবং খুবই আস্থার সাথে প্রায়  ৫০০০
                        বাবা-মাকে গুণগত পণ্য দিয়ে সহায়তা করতে পেরেছি।
                    </p><br />
                    <p class="my-[2px] text-[18px] font-[500] text-[black]">
                        ২.শুধুমাত্র আমরাই দিচ্ছি এই সকল মানসম্মত প্রোডাক্ট গুলো মার্কেট চ্যালেঞ্জ সর্বনিম্ন মূল্যে।

                    </p><br />
                    <p class="my-[2px] text-[18px] font-[500] text-[black]">
                        ৩. আমরা সম্পূর্ণ ক্যাশ অন হোম ডেলিভারি সার্ভিস দিয়ে থাকি। কোন টাকা অগ্রিম প্রদান করতে হয় না।
                        এমনকি ডেলিভারি চার্জও নয়।
                    </p><br />
                    <p class="my-[2px] text-[18px] font-[500] text-[black]">
                        ৪.ডেলিভারি ম্যান দাঁড়িয়ে থাকা অবস্থায় প্রোডাক্ট খুলে কোয়ালিটি চেক করে তারপরে মূল্য পরিশোধের
                        সুবিধা।
                    </p><br />
                    <p class="mt-[20px] text-[18px] font-[500] text-[black]">
                        ৫.আমাদের রয়েছে সার্বক্ষণিক কাস্টমার কেয়ার সার্ভিস। যে কোন সমস্যা দ্রুত সমাধানের নিশ্চয়তা।
                    </p>
                </div>
            </div>
            <x-order-btn />
        </section>
        {{-- ------------why-buy-section-end--- --}}
        {{-- --offer-section--- --}}
        <section>
            <div>
                <h2 class="sm-1 mt-[20px] text-center text-[30px] font-[600] text-[#D92044] underline">আমাদের থেকে কেন
                    কিনবেন ?
                </h2>
            </div>
            <div class="mt-[10px] flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-b bg-white">
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <th scope="col"
                                            class="border-[1px] border-[black] px-4 py-2 text-center text-[20px] font-[600] text-gray-900">
                                            ক্রমিক নং
                                        </th>
                                        <th scope="col"
                                            class="border-[1px] border-[black] px-6 py-2 text-center text-[20px] font-[600] text-gray-900">
                                            আইটেম সমূহ
                                        </th>
                                        <th scope="col"
                                            class="border-[1px] border-[black] px-4 py-2 text-center text-[20px] font-[600] text-gray-900">
                                            মূল্য টাকা
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-[1px] border-[black]">

                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            1.
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-[18px] font-[600] text-gray-900">
                                            <div class="flex justify-between">
                                                <span> ৪ পিস্ ডাবল লেয়ার নকশি কাঁথা</span><span>(১৬০ X ৪)</span>
                                            </div>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ৬৪০/- টাকা
                                        </td>
                                    </tr>
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            2.
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-[18px] font-[600] text-gray-900">
                                            <div class="flex justify-between">
                                                <span> ৪ পিস্ বেক্সি ভয়েল মাল্টিকালার সুতি নিমা</span> <span>(৫০ X ৪)</span>
                                            </div>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ২০০ /- টাকা
                                        </td>
                                    </tr>
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            3.
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-[18px] font-[600] text-gray-900">
                                            ৪ পিস্ ডাবল লেয়ার সুতি ন্যাপি
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ৮০/- টাকা
                                        </td>
                                    </tr>
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            4.
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-[18px] font-[600] text-gray-900">
                                            ৪ পিস্ ক্যাপ টাওয়ালে
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ২৫০ /- টাকা
                                        </td>
                                    </tr>
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            5.
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-[18px] font-[600] text-gray-900">
                                            ৪ পিস্ এম সাইজের ইউরিনমেট
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ১৫০ /- টাকা
                                        </td>
                                    </tr>
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            6.
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-[18px] font-[600] text-gray-900">
                                            ১ পিস্ কভার সহ সরিষা বালিশ
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ৩৬০ /- টাকা
                                        </td>
                                    </tr>
                                    <tr class="border-[1px] border-[black] bg-white">
                                        <td colspan="2"
                                            class="whitespace-nowrap border-[1px] border-[black] px-6 py-2 text-center text-[18px] font-[600] text-gray-900">

                                        </td>
                                        <td
                                            class="whitespace-nowrap border-[1px] border-[black] px-4 py-2 text-center text-[18px] font-[600] text-gray-900">
                                            ১৬৮০/- টাকা
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- --offer-section-end-- --}}

        {{-- ---price--section---- --}}
        <section>
            <div class="mx-[80px] max-sm:mx-[2px] mt-[20px] rounded-[5px] border-[1px] border-[black] py-[40px]">
                <P class="sm-1 text-center text-[25px] text-[#100D71]">
                    অফার প্রাইস ১৫৫০/- টাকা
                </P>
                <P class="sm-1 text-center text-[25px] text-[#CD7168]">
                    সাথে সারা বাংলাদেশ ডেলিভারি চার্জ ফ্রি
                </P>
            </div>
            <x-order-btn />
        </section>
        {{-- ---price--section-end--- --}}

        <section>
            <div>
                <h2 class="sm-1 mt-[20px] text-center text-[30px] font-[600] text-[#D92044] underline">
                    আমাদের প্রোডাক্ট গুলোর বৈশিষ্ট্য
                </h2>
            </div>
            <div class="mt-6 grid grid-cols-2 max-md:grid-cols-1">
                <div class="product h-[600px] border-[1px] border-[black] p-2">
                    <img class="container h-full" src="http://combo.taitaikids.com/public/storage/product/baby-clothes2.png"
                        alt="">
                </div>
                <div class="border-[1px] border-[black] p-2">
                    <p class="mb-[2px] text-[18px] font-[500] text-[black]">
                        #এই বান্ডেল অফার এ প্রথমেই থাকছে ৪ পিস্ ভিন্ন ভিন্ন কালারের ডাবল লেয়ার নকশি কাঁথা ।১০০% সুতি
                        কাপড়ের তৈরি সম্পূর্ণভাবে হাতে সেলাই করা এবং সাইট এর বর্ডার গুলো লেস লাগানো যা কিনা কাথাগুলোকে করেছে
                        আরো আকর্ষণীয়। কাথাগুলো ৩২ ইঞ্চি লম্বা 26 ইঞ্চি চওড়া। শূন্য থেকে 16 মাস অব্দি ব্যবহার উপযোগী।
                    </p><br />
                    <p class="my-[2px] text-[18px] font-[500] text-[black]">
                        #এরপর থাকছে ৪ পিস্ প্রিমিয়াম বেক্সি ভয়েল কাপড়ের মাল্টি কালার সুতি নিমা যা কিনা খুবই মোলায়েম এবং
                        আরামদায়ক।

                    </p><br />
                    <p class="my-[2px] text-[18px] font-[500] text-[black]">
                        #৪ পিস্ ডবল লেয়ার সুতি ন্যাপি যা কিনা সোনামনির জন্য অত্যন্ত উপযোগী।
                    </p><br />
                    <p class="my-[2px] text-[18px] font-[500] text-[black]">
                        #১ পিস্ উন্নত মানের ক্যাপ টাওয়েল।
                    </p><br />
                    <p class="mt-[20px] text-[18px] font-[500] text-[black]">
                        #১ পিস্ এম সাইজের ইউরিনমেট শীত, গ্রীষ্ম ও বর্ষায় সোনামনির ঘন ঘন টয়লেট এর চমৎকার সমাধান।
                    </p>
                    <p class="mt-[20px] text-[18px] font-[500] text-[black]">
                        #১ পিস্ সরিষা বালিশ সাথে কভার যা কিনা শিশুর মাথার আকৃতি ঠিক করবে এবং ঠান্ডার সমস্যা দূর করতে সহায়ক
                        ভূমিকা রাখবে।
                    </p>
                </div>
            </div>
            <x-order-btn />
        </section>

        {{-- ---customer--review-section--- --}}
        <section>
            <div>
                <h2 class="sm-1 mb-[20px] mt-[50px] text-center text-[25px] font-[600] text-[#D92044] underline">
                    যারা আমাদের থেকে নিয়েছেন তাদের মন্তব্য
                </h2>
            </div>
            <div><img class="mx-auto" src="http://combo.taitaikids.com/public/storage/product/baby-clothes3.png"
                    alt=""></div>
            <div class="flex flex-col">
                <span class="my-[10px] text-center text-[25px] font-[600] text-[black]">ডেলিভারি চার্জ সম্পূর্ণ </span>
                <span class="text-center text-[20px] font-[500] text-[#935E5Ek]">(সীমিত সময়ের জন্য)</span>
                <span class="text-center text-[20px] font-[500] text-[#935E5Ek]"> আমরা দিচ্ছি সারাদেশে ক্যাশ অন হোম
                    ডেলিভারি
                    সার্ভ</span>
            </div>
            <x-order-btn />
        </section>
        {{-- ---customer--review-end-section-- --}}

        {{-- -----footer-section---------- --}}
        <section class="mb-[100px]">
            <div class="text-center">
                <button class="sm-1 mt-[20px] text-center text-[30px] font-[600] text-[#D92044] underline card_btn">
                    কিভাবে অর্ডার করবেন দেখাতে ক্লিক করুন
                </button>
            </div>

            {{-- kivabe order korben (direction in text ) --}}
            {{-- <div>
                <div>
                    <h2 class="sm-1 mb-[20px] mt-[100px] max-sm:mt-[50px] text-center text-[25px] font-[600] text-[black]">
                        কিভাবে অর্ডার করবেন দেখাতে ক্লিক করুন?
                    </h2>
                </div>
                <div>
                    <p class="sm-2 mb-[20px] mt-[30px] text-[18px] font-[600] tracking-[2px] text-[black]">
                        আমরা আমাদের এই কম্বো প্যাকেজটিকে তিনটি ক্যাটাগরিতে বিভক্ত করেছি ।যারা ইয়োলো কালার ক্যাপ টাওয়ালে,
                        সরিষা
                        বালিশ এবং ইউরিন মেট সহ প্যাকেজটিতে হলুদ কালারের কম্বিনেশনে চাচ্ছেন তারা ভাইভ এই অপশনটি সিলেক্ট করুন
                        । যারা পিংক কালার কম্বিনেশনে কম্বো প্যাকেজটি চাচ্ছেন তারা পিংক ভাইভ এই অপশনটি সিলেক্ট করুন । যারা
                        আকাশী
                        কালার কম্বিনেশনে কম্বো প্যাকেজটি চাচ্ছেন তারা ব্লু ভাইভ পাবে এই অপশনটি সিলেক্ট করুন।অর্ডার করতে
                        ক্যাটাগরি সিলেক্ট করে নিচের ফর্মে আপনার নাম, পুর্ণ ঠিকানা এবং মোবাইল নং লিখুন । তারপর নিচে PLACE
                        ORDER
                        বাটনে ক্লিক করুন ।আপনার অর্ডারটি সঠিকভাবে সম্পন্ন হবে।
                    </p>
                </div>
            </div> --}}
            <div id="order_btn">
                <p class="sm-1 mt-[20px] text-[20px] font-[700]">
                    কার জন্য নিতে চান ?
                </p>
                <div class="mt-[20px] pl-[40px]">
                    <label class="sm-1 my-[10px] mt-[-8px] text-[20px] font-[700] card_btn">
                        <input type="radio" name="gender" class="mr-2 h-[20px] w-[20px]" />ছেলে
                    </label> <br />
                    <label class="sm-1 mt-[-8px] text-[20px] font-[700] card_btn">
                        <input type="radio" name="gender" class="mr-2 h-[20px] w-[20px]" />মেয়ে
                    </label>
                </div>

            </div>

            <div id="order">
                <h2 class="sm-1 text-[30px] text-[#ff4500]">CHOOSE PRODUCT CATEGORY</h2>
                <div class="mt-[20px] pl-[40px] max-sm:pl-[0px]">
                    <div class="flex gap-2">
                        <input type="checkbox" class="h-[20px] w-[20px]" />
                        <label class="sm-1 mt-[-8px] text-[20px] font-[700]">
                            NEW BORN CARE BUNDLE (15 IN 1) X 1 <br />YELLOW VIVE
                        </label>
                    </div>
                    <div class="mt-[15px] flex gap-2">
                        <input type="checkbox" class="h-[20px] w-[20px]" />
                        <label class="sm-1 mt-[-8px] text-[20px] font-[700]">
                            NEW BORN CARE BUNDLE (15 IN 1) X 1 <br />BLUE VIVE
                        </label>
                    </div>
                    <div class="mt-[15px] flex gap-2">
                        <input type="checkbox" class="h-[20px] w-[20px]" />
                        <label class="sm-1 mt-[-8px] text-[20px] font-[700]">
                            NEW BORN CARE BUNDLE (15 IN 1) X 1 <br />PINK VIVE
                        </label>
                    </div>
                </div>
            </div>
            <div class="mt-[50px]">
                <div>
                    <h2 class="sm-1 text-[30px] text-[#ff4500]">BILLING DETAILS </h2>
                </div>
                <div class="mt-[20px] pl-[40px] max-sm:pl-[0px]">
                    <div>
                        <label class="sm-1 mt-[-8px] text-[20px] font-[700]">
                            আপনার নাম লিখুন
                        </label><br />
                        <input type="text"
                            class="my-[10px] w-full rounded-[5px] border-[1px] border-[black] pl-[10px] py-[10px]" />
                    </div>
                    <div>
                        <label class="sm mt-[-8px] text-[20px] font-[700]">
                            আপনার ঠিকানা লিখুন
                        </label><br />
                        <input type="text"
                            class="my-[10px] w-full rounded-[5px] border-[1px] border-[black] pl-[10px] py-[10px]" />
                    </div>
                    <div>
                        <label class="sm-1 mt-[-8px] text-[20px] font-[700]">
                            মোবাইল নাম্বার
                        </label><br />
                        <input type="text"
                            class="my-[10px] w-full rounded-[5px] border-[1px] border-[black] pl-[10px] py-[10px]" />
                    </div>
                </div>


            </div>
        </section>
        {{-- -----Modal content----- --}}<!--====== The modal for girl product images ======-->
        {{-- demo modal  --}}
        {{-- <div class="modal">
            <div class="modal_wrapper">
                <div class="modal_content">
                    <h1>Girl porduct images</h1>
                </div>
            </div>
        </div> --}}
        {{-- modal for vieo which about kivabe order korben --}}
        <div class="modal">
            <div class="modal_wrapper">
                <div class="modal_content">
                     <iframe
                            src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Ftaitai.com.babyshop%2Fvideos%2F235836562239107%2F&show_text=false&width=476&t=0"
                            width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                            allowFullScreen="true">
                        </iframe>
                </div>
            </div>
        </div>
        <!--====== The modal for girl product images ======-->
        <div class="modal">
            <div class="modal_wrapper">
                <div class="modal_content">
                    <div class="swiper mySwiper md:h-[500px] md:w-[500px] h-[300px] w-[300px]">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img class="" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img class="" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img class="" src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== The modal for girl product images ======-->
        <div class="modal">
            <div class="modal_wrapper">
                <div class="modal_content">
                    <h1>Girl porduct images</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
