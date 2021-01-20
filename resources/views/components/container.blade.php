<div class="container">
    <div class=" flex flex-wrap -mx-1 w-full">
        <div class="w-4/5 ">
            @include('components.logo')
            <!-- @include('components.firstImg')
            @include('components.secoundImage')
            @include('components.title', ['text' => 'Soif de beauté, cure de nature'])
            @include('components.paragraphe', ['text' => "Evoleum encapsule le meilleur de la nature pour créer les premiers soins cosmétique-à-boire d’exception à l'éfficacité cliniquement prouvée. "]) -->
        </div>
        <div class="w-4/5 pb-32">
            <div class="w-max">
                <div class="w-full pl-44 pt-40 ">
                    @include('components.title', ['text' => 'Soif de beauté, cure de nature'])
                    @include('components.paragraphe', ['text' => "Evoleum encapsule le meilleur de la nature pour créer les premiers soins cosmétique-à-boire d’exception à l'éfficacité cliniquement prouvée. "])
                </div>
                <div class="pt-72 pl-44" style="z-index:5">
                    @include('components.button', ['text' => 'découvrir'])
                    @include('components.button', ['text' => 'mon diagnostic'])
                </div>
            </div>

            <div class="imgs" style="z-index:1">
                <div>
                    @include('components.firstImg')
                </div>
                <div>
                    @include('components.secoundImage')
                </div>
                <div>
                    @include('components.thirdImg')
                </div>
            </div>
        </div>


        <div>
            <div class="pt-60 pl-44">
                @include('components.section2page1')
            </div>
            <div class="bg-black text-white w-96  left-3/4 relative -top-1/3 h-auto ">
                @include('components.section2page1Card')
            </div>

        </div>
        
    </div>
</div>