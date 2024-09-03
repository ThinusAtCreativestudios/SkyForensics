<div class="relative overflow-hidden  w-full px-4 sm:px-6 md:px-8">
    <div class="absolute z-[1] top-0 left-[50%] -translate-x-[50%] w-full pointer-events-none">
        @include('marketing.widgets.vectors.howwedoitlight', ['class' => 'w-[1440px]'])
    </div>
    <div class="relative z-[2] w-full h-[500px] md:h-[445px] lg:h-[800px] max-w-[1040px] mx-auto pt-[30px] sm:pt-[80px]">
        <span class="absolute z-[1] top-[200px] sm:top-0 -right-[180px] sm:-right-[200px] pointer-events-none">
            @include('marketing.widgets.vectors.howwedoittactics', ['class' => 'h-[600px] lg:h-[800px]'])
        </span>
        <div class="z-[1] absolute inset-0 top-0 left-0 right-0 bottom-0 bg-gradient-to-br from-transparent to-[#0d0d0d] pointer-events-none"></div>

        <span class="hidden md:flex relative z-[2] gap-2 items-center">
            <span class="bg-red-900 rounded-full w-[30px] h-[15px]"></span>
            <span class="text-[#BEBEBE] text-[16px]">Our team goes beyond the surface</span>
        </span>
        <h3 class="relative z-[2] text-[28px] sm:text-[36px] md:text-[42px] 2xl:text-[48px] max-w-[250px] sm:max-w-[380px] 2xl:max-w-[540px] text-[#f6f7f7] font-semibold">Relentless in the Pursuit of Truth</h3>
        <p class="relative z-[2] text-[14px] sm:text-[16px] md:text-[18px] 2xl:text-[24px] max-w-[250px] md:max-w-[280px] text-[#BEBEBE] font-[300] mt-2">We consistently deliver results when others can’t.</p>
        <div class="relative z-[2] mt-[32px] flex gap-4">
            <button title="Checkout how Sky Forensics can help get to the truth with polygraphs in the Garden Route" class="bg-[#E1E1E1] text-[#1B1C1C] hover:bg-white font-semibold text-[14px] px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors duration-300">
                What are our tactics?
            </button>
            <button title="Speak to a specialist investigator in the Garden Route" class="hidden sm:flex gap-2 items-center text-[#c4c4c4] hover:bg-[#202020] hover:text-[#EAEAEA] text-[14px] px-4 py-2 md:px-6 md:py-3 rounded-lg transition-colors duration-300">
                <span class="bg-gradient-to-r from-[#F4F5F6] to-[#8B9099] text-transparent bg-clip-text">
                    Speak to an investigator
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="13" viewBox="0 0 9 13" fill="none">
                    <path d="M2 1.5L6.68607 5.76006C7.1225 6.15682 7.1225 6.84318 6.68607 7.23994L2 11.5" stroke="#8D929B" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>
</div>
