<div class="bg-gray-100 p-10 mb-10 rounded relative">
    <div class="text-4xl mb-10 text-center">
        @if($toggle)
            <span class="text-red-500">{{ $article?->title }}</span>
        @else
            @lang('app.news.news')
        @endif
    </div>

    @if($toggle)
        <article class="flex flex-col shadow mt-4 mb-20  z-10">
            <!-- Article Image -->
                <x-close method="toggle" class="rounded bg-black absolute top-2 right-2 h-8 w-8 text-white hover:text-orange-400 hover:cursor-pointer"></x-close>
            <a href="#" class="hover:opacity-75">
                <img src="{{$article?->urlToImage}}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">

                <p href="#" class="text-sm pb-8">
                    By <a href="#" class="font-semibold hover:text-gray-800">{{ $article?->author }}</a>, Published on April 25th,
                    2020
                </p>
                <h1 class="text-2xl font-bold pb-3">{{$article?->description}}</h1>
                <div>
                    <p class="text-lg">{{$article?->content}}</p>
                </div>
            </div>

        </article>
    @endif

    @if(!$toggle)
        <div class="grid grid-cols-3 gap-8">
            {{--        <button >zzzz</button>--}}
            @foreach($news as $article)
                <div role="listitem" class=" relative mt-16 mb-32 sm:mb-24 hover:cursor-pointer hover:bg "
                     wire:click="showArticle({{$article}})" data-modal-toggle="defaultModal">
                    <div class="rounded overflow-hidden shadow-md bg-white hover:bg-gray-100">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="{{ $article['urlToImage'] }}" alt="Display Picture of Andres Berlin"
                                     role="img"
                                     class="rounded-full object-cover h-full w-full shadow-md"/>
                            </div>
                        </div>
                        <div class="px-6 my-16">
                            <h1 class="font-bold text-3xl text-center mb-1">{{$article['title']}} </h1>
                            <p class="text-gray-800 text-sm text-center">{{$article['author']}}</p>
                            <p class="text-center text-gray-600 text-base pt-3 font-normal">{{ $article['description'] }}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    @endif
</div>

