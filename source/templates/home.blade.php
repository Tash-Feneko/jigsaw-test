@extends('templates.master')

@section('body')
<main class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <section class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="introdution">
            @include('_ogolne.str_glowna_wstep')
        </div>
        <div class="-mt-24 -mb-48 lg:-mt-10 lg:mb-0 xl:-mr-10 ml-5 flex-shrink-0">
            <picture>
                <source srcset="/dist/img/symbol_light.svg"
                        media="(prefers-color-scheme: dark)">
                <img class="h-auto w-auto ml-auto opacity-5 lg:opacity-10" src="/dist/img/symbol_dark.svg" alt=""/>
            </picture>
        </div>
    </section>
    <section class="mb-24">
        <div>
            <h1 class="inline-block mr-4 text-purple-700 dark:text-purple-300 mb-0 text-4xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline mr-3 h-12 align-middle -mt-8 -mb-6">
                    <path d="M15.46,5.14,14.05,3.75l1.93-2,1.41,1.4ZM11,.09H9V2.86h2ZM3.66,7.68H.91v2H3.66Zm15.43,0H16.34v2h2.75ZM6,3.75,4,1.79,2.61,3.19,4.54,5.14Zm6.71,12.72h0A2.53,2.53,0,0,1,10.13,19H9.87a2.53,2.53,0,0,1-2.53-2.53h5.32ZM10,3.89A5.24,5.24,0,0,0,4.62,9,5.34,5.34,0,0,0,6.41,12.9a3.11,3.11,0,0,1,1.2,2.39v.55h4.78v-.55a3.11,3.11,0,0,1,1.2-2.39A5.34,5.34,0,0,0,15.38,9,5.24,5.24,0,0,0,10,3.89Zm2,7a5.85,5.85,0,0,0-1.75,2.37H9.77A5.85,5.85,0,0,0,8,10.92,2.8,2.8,0,0,1,7.17,9,2.7,2.7,0,0,1,10,6.44,2.7,2.7,0,0,1,12.83,9,2.8,2.8,0,0,1,12,10.92Z" />
                </svg>
                <span class="align-middle">Poradniki</span>
            </h1>
            <p class="inline-block">
                <a href="/poradniki" class="border-b-0">
                    Więcej poradników
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 inline-block align-middle mb-1 mr-1">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
        <ul class="flex-1 flex list-none -mr-6 md:-mr-2 -ml-6 py-2 overflow-auto">
            @foreach($poradniki as $poradnik)
                    <li class="slider-item flex flex-1 md:w-auto md:flex-shrink mx-2">
                        <a class="excerpt-card flex flex-grow border-b-0 bg-gray-200 hover:bg-indigo-100 dark:bg-gray-800 dark:hover:bg-blue-900 shadow rounded-lg break-words px-4 py-6" href="{{ $poradnik->getUrl() }}">
                            <article class="flex flex-grow flex-col">
                                <h2 class="font-semibold leading-tight text-2xl mb-0">
                                    {!! $poradnik->title() !!}
                                </h2>
                                <p class="mb-0 text-gray-700 font-normal text-sm dark:text-gray-300">
                                    {!! $poradnik->excerpt() !!}
                                </p>
                            </article>
                        </a>
                    </li>
                @break($loop->iteration === 3)
            @endforeach
            @if(count($poradniki) < 2)
                <li class="slider-item hidden sm:flex flex-1 md:w-auto md:flex align-stretch-shrink mx-2">
                    <div class="placeholder excerpt-card flex-grow flex justify-center items-center text-center">
                        <span>Już niedługo pojawi się tu więcej poradników!</span>
                    </div>
                </li>
            @endif
        </ul>
    </section>
    <section class="mb-24">
        <div>
            <h1 class="inline mr-4 text-purple-700 dark:text-purple-300 text-4xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline mr-3 h-12 align-middle -mt-8 -mb-6">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                </svg>
                Aktualności
            </h1>
            <p class="inline-block">
                <a href="/aktualnosci" class="border-b-0">
                    Więcej aktualności
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 inline-block align-middle mb-1 mr-1">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
        <div>
            <article class="news-entry on-homepage break-words bg-white dark:bg-gray-800 shadow rounded-lg px-4 py-6">
                <header class="float-right text-indigo-700 dark:text-indigo-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 inline-block align-middle mb-1 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="align-middle">{{ Jenssegers\Date\Date::createFromTimestamp($page->getModifiedTime())->format('j F Y') }}</span>
                </header>
                {!! $aktualnosci->first()->getContent() !!}
            </article>
        </div>
    </section>
    <section>
        <div>
            <h1 id="faq" class="inline mr-4 text-purple-700 dark:text-purple-300 text-4xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline mr-3 h-12 align-middle -mt-8 -mb-6">
                    <path d="M10,1.81A8.19,8.19,0,1,1,1.81,10,8.21,8.21,0,0,1,10,1.81m1.2,9.24A3.32,3.32,0,1,0,7.26,6.11l-.65,1,2,1.29.65-1A1,1,0,0,1,10,7a1,1,0,0,1,0,2H8.86V12.1H11.2Zm0,2.25H8.86v2.33H11.2Z" />
                </svg>
                Pytania i odpowiedzi
            </h1>
        </div>
        <div class="faq-section mt-8">
            @include('_ogolne.faq')
        </div>
    </section>
    <section class="clear-both pt-24">
        <h1 class="inline mr-4 text-purple-700 dark:text-purple-300 text-4xl">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline mr-3 h-12 align-middle -mt-8 -mb-6">
                <path d="M6.41,12.35.77,9,3.43,7.63l5.68,3Zm2.91-1-2.9,1.81L4.36,11.94v2.68l5,3.19Zm-.18-8L6.41,1.69.71,5.11,3.44,6.82Zm9.79,1.71-5.7-3.42L10.5,3.4l5.7,3.42Zm-3.22,7-2.07,1.1-3.33-1.85v6.53l5.4-3.24Zm.49-4.43-5.64,3,3.09,1.72,5.64-3Z" />
            </svg>
            Dodatkowe materiały
        </h1>
        <p class="inline-block">
            <a href="/materialy" class="border-b-0">
                Zobacz materiały
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 inline-block align-middle mb-1 mr-1">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </section>
</main>
@endsection
