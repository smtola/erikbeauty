@extends('layouts.app')

@section('content')

  @include('components.carousel')
  <div class="w-full max-w-screen-2xl mx-auto p-5">
      <div>
        <h6 class="font-bold text-[#ddb7ab] text-[20px] text-center">Erit Beauty Shop</h6>
        <p class="font-['BaskervvilleSC'] text-[40px] text-center my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>

      <div class="grid grid-cols-12  justify-center items-center gap-3 min-h-[40rem] w-full overflow-hidden">
          <a href class="relative col-span-6 bg-[#ddb7ab] h-full rounded-sm">
              <img src="{{url('assets/images/products/pro_1.png')}}" class="absolute inset-0 object-cover object-center w-full h-full">
              <div class="absolute bg-black/50 inset-0"></div>
              <div class="relative grid place-content-center mt-[45%]">
                  <h1 class="text-[#ffffff] text-[50px] font-['BaskervvilleSC']">Plant Extract Toner</h1>
              </div>
          </a>
          <div class="col-span-6 h-full grid gap-3 content-between overflow-hidden rounded-sm">
              <a href class="relative h-[26rem] bg-[#ddb7ab] overflow-hidden">
                <img src="{{url('assets/images/products/pro_6.png')}}" class="absolute inset-0 object-cover object-center w-full h-full">
                <div class="absolute bg-black/50 inset-0"></div>
                <div class="relative grid place-content-center mt-[25%]">
                    <h1 class="text-[#ffffff] text-[50px] font-['BaskervvilleSC']">Softening Toner</h1>
                </div>
              </a>
              <a href class="h-[20rem] bg-[#ddb7ab] overflow-hidden">
                <div class="swiper mySwiper_1">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                      <img src="{{url('assets/images/products/pro_3.png')}}" class="absolute inset-0 object-cover object-center w-full h-full"/>
                      <div class="absolute bg-black/50 inset-0"></div>
                      <div class="relative grid place-content-center">
                          <h1 class="text-[#ffffff] text-[50px] font-['BaskervvilleSC']">Plant Extract Face Cream</h1>
                      </div>
                    </div>
                    <div class="swiper-slide relative">
                      <img src="{{url('assets/images/products/pro_6.png')}}" class="absolute inset-0 object-cover object-center w-full h-full"/>
                      <div class="absolute bg-black/50 inset-0"></div>
                      <div class="relative grid place-content-center">
                          <h1 class="text-[#ffffff] text-[50px] font-['BaskervvilleSC']">Plant Extract Face Cream</h1>
                      </div>
                    </div>
                    <div class="swiper-slide relative">
                      <img src="{{url('assets/images/products/pro_4.png')}}" class="absolute inset-0 object-cover object-center w-full h-full"/>
                      <div class="absolute bg-black/50 inset-0"></div>
                      <div class="relative grid place-content-center">
                          <h1 class="text-[#ffffff] text-[50px] font-['BaskervvilleSC']">Plant Extract Face Cream</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
          </div>
      </div>

      @include('components.products')

    </div>
    <div class="bg-[#f7f2ef] grid grid-cols-12 justify-center items-center gap-4 my-10">
        <div class="col-span-6 p-10">
            <h4 class="text-[20px]">About Us</h4>
            <h1 class="text-[40px]">Meet Ohlolly, Your Skin’s New Best Friend</h1>
            <p class="text-[14px] text-gray-700">
            Founded by two sisters who share a love for beauty and a passion for curating the finest in Korean skincare, Ohlolly is a Los Angeles-based, online destination for authentic K-beauty products.
            <br/>
            <br/>
            When you shop with Ohlolly, it’s like spending time with a good friend, a friend who knows her skincare and always has great recommendations. Our online store is carefully merchandised to make your experience effortless and enjoyable, with in-depth product descriptions and detailed images that let you know exactly what you’re getting.
            </p>

            <button class="bg-[#ddb7ab] px-4 py-3 text-[#ffffff] font-semibold text-[12px] my-5">Learn More</button>
        </div>
        <div class="col-span-6 p-10">
          <div class="w-full overflow-hidden">
            <img src="https://ohlolly.com/cdn/shop/files/About-Us_1400x1400_Founders_2022_a_800x.jpg?v=1655325194" class="w-full object-cover object-center">
          </div>
        </div>
    </div>
@endsection