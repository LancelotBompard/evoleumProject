<!-- <div class="flex w-full pl-96 pr-96 flex-wrap pb-32 absolute left-0 " style="background:#FCF0E8">
    <h2 class="text-gray-300 uppercase w-full ml-44 mt-16">
        NOS Dernières publications
    </h2>
    <h1 class="w-full mt-10 ml-32 text-5xl font-extralight">
        Le journal Evoleum 
    </h1>

    <div class="flex flex-wrap">
        <div class="mt-16 -ml-72 mr-10">
            <div class="flex flex-nowrap">
                <img src="./../assets/images/section6FirstImg.png" alt="" class="w-full">
                <div class="relative -left-96 top-10"><h2 class="uppercase text-white ">Article</h2></div>
                <div class="absolute left-40 -ml-3 top-80 pt-10 w-1/4 text-3xl font-extralight"><p class="uppercase text-white">LE DERNIER EPISODE DE  NOTRE PODCAST EST EN LIGNE</p></div>
                <p class="absolute text-white  left-64 top-96 mt-32">22/09/2019</p>
            </div>
        </div>


        <div class="absolute mt-16 ml-44">
            <div class="flex flex-nowrap bg-white" style="width=314px;">
                <img src="./../assets/images/section6FirstImg.png" alt="" class="w-full">
                <div class="relative -left-96 top-10 w-full"><h2 class="uppercase text-white ">Revue de presse</h2></div>
                <div class="absolute left-10 top-16 pt-10 w-1/4 text-3xl font-extralight w-3/5 mr-3"><p class="uppercase text-white">“ EVOLEUM LA MARQUE NUTRI-COSMÉTIQUE REDÉFINIT LA BEAUTÉ EN UN GESTE SAIN ET NATUREL ”</p></div>
                <div class="absolute right-44    bottom-6"><img src="./../assets/images/elleLogo.png" alt="" class=""></div>
            </div>
        </div>
    </div>
    

</div> -->




<div style="height:750px; background: #FCF0E8;" class="text-center flex justify-center items-center flex-col w-full pl-28 pr-28">
    <p>NOS DERNIERES PUBLICATIONS</p>
    <h2 style="font-size:48px">Le journal Evoleum</h2>
    <div class="flex mt-24">
      <div class="" style="color:#fff;width:392px;height:328px; background-image:url('{{ url('./../assets/images/section6FirstImg.png') }}')">
        <p class="mr-72 mt-4">ARTICLE</p>
        <h2 class="mt-14" style="font-size:24px;">LE DERNIER EPISODE DE <br> NOTRE PODCAST EST EN <br> LIGNE</h2>
        <p class="mt-16" style="font-size:14px;">22/09/2019</p>
      </div>
      <div class="" style="width:392px;height:328px; background:#fff; margin-left:20px;">
        <p class="mr-56 mt-4">REVUE DE PRESSE</p>
        <h2 class="mt-4 mr-20 w-full" style="font-size:30px;">“ EVOLEUM LA MARQUE <br> NUTRI-COSMÉTIQUE  <br>REDÉFINIT  LA BEAUTÉ<br> EN UN GESTE SAIN <br>ET NATUREL ”</h2>
        <img class="-mt-4 mx-64" src="{{ url('assets/img/elle.png') }}" alt="">
      </div>
      <div class="" style="color:#fff;width:392px;height:328px; margin-left:20px; background-image:url('{{ url('./../assets/images/section6LastImg.png') }}')">
        <p class="mr-72 mt-4">ARTICLE</p>
        <h2 class="mt-28" style="font-size:24px;">EN DIRECT DE FINLAND</h2>
      </div>
    </div>
    <div class="mt-10">
      @include('components.button', ['text' => 'TOUTES NOS PUBLICATIONS'])
    </div>
  </div>