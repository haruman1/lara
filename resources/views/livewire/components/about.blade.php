<div id="aboutus-section">
    <div class='mx-auto max-w-7xl px-4 py-24 my-32 lg:px-10 bg-lightgrey rounded-3xl relative'>
        <img src="{{ asset('images/aboutus/dots.svg') }}" alt="pattern" class='absolute bottom-1 -left-20' />
        <h3 class='text-center text-blue text-lg tracking-widest'>ABOUT US</h3>
        <h4 class='text-center text-4xl lg:text-65xl font-bold'>Know more about us.</h4>
        <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 my-16 gap-x-16 lg:gap-x-32'>
        </div>
        @foreach ($aboutData as $data)
            <div class='hover:bg-navyblue bg-white rounded-3xl mt-16 pt-10 pl-8 pb-10 pr-6 shadow-xl group'>
                <h4 class='text-4xl font-semibold  text-black mb-5 group-hover:text-white'>{{ $data['heading'] }}
                </h4>
                <img src=" {{ asset($data['imgSrc']) }} " width="100" height="100" alt="icon" class='mb-5' />
                <h4 class='text-lg font-normal text-black group-hover:text-offwhite mb-5'>{{ $data['paragraphs'] }}
                </h4>
                <a href="#"
                    class='text-lg font-semibold group-hover:text-white text-blue hover-underline'>{{ $data['link'] }}
                    <x-heroicon-o-chevron-right class="h-5 w-5 inline" /> </a>
        @endforeach
    </div>
</div>
