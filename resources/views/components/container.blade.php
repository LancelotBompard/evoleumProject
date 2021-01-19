<div class="w-full">
    <div class="w-4/5 ">
        @include('components.logo')
        <!-- @include('components.firstImg')
        @include('components.secoundImage')
        @include('components.title', ['text' => 'Soif de beauté, cure de nature'])
        @include('components.paragraphe', ['text' => "Evoleum encapsule le meilleur de la nature pour créer les premiers soins cosmétique-à-boire d’exception à l'éfficacité cliniquement prouvée. "]) -->
    </div>
    <div class="w-4/5">
        <div class="w-max">
            <div class="w-full pl-44 pt-40 ">
                @include('components.title', ['text' => 'Soif de beauté, cure de nature'])
                @include('components.paragraphe', ['text' => "Evoleum encapsule le meilleur de la nature pour créer les premiers soins cosmétique-à-boire d’exception à l'éfficacité cliniquement prouvée. "])
            </div>
            <div class="pt-72 pl-44">
                @include('components.button', ['text' => 'découvrir'])
                @include('components.button', ['text' => 'mon diagnostic'])
            </div>
        </div>

        <div class="imgs">
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
    
</div>