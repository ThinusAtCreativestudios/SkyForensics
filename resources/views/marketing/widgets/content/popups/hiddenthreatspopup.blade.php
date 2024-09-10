@php
    $whenShowing = implode(' ', [
        'data-[visible=true]:backdrop-blur',
        'data-[visible=true]:opacity-1',
    ]);
    $whenHiding = implode(' ', [
        'data-[visible=false]:pointer-events-none',
        'data-[visible=false]:hidden',
        'data-[visible=false]:opacity-0',
        'data-[visible=false]:overflow-scroll',
    ]);
@endphp

<div id="{{ $id }}"
     data-visible="false"
     class="fixed inset-0 z-[5] w-screen flex justify-center p-6 sm:p-12 transition-opacity duration-300 {{ $whenShowing }} {{ $whenHiding }}"
>
    <div class="dark_scrollbar relative h-[750px] overflow-auto w-[650px] px-[40px] py-[40px] md:px-[100px] md:py-[60px] bg-black rounded-2xl text-white flex flex-col gap-[48px]">
        <div class="flex justify-center">
            <span class="block h-[180px] w-[215px] relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 652" fill="none" class="h-full mx-auto max-h-[150px]">
                    <path d="M36.6397 104.903C39.227 95.6207 44.3194 85.2431 56.5812 71.8331C68.8429 58.4231 79.9279 50.3593 87.6412 46.0868M60.036 172.654C54.9895 165.753 42.4084 142.432 48.6881 115.498C55.6328 85.7122 79.8159 67.967 86.6247 62.8104M100.55 53.3886C104.074 47.974 116.253 42.7515 120.443 43.8937M66.1451 129.608C66.3203 117.967 74.6918 91.306 94.515 75.2468C118.202 56.0577 136.361 53.5459 146.807 53.7161M66.9125 145.713C67.8676 151.371 76.5694 184.089 84.7107 192.046M109.366 209.649C100.641 202.892 82.9755 169.09 80.7006 151.512C78.4256 133.933 81.1502 109.43 98.5928 93.9968C116.035 78.5636 147.504 63.2567 168.378 61.8069M191.897 84.7944C173.039 79.356 143.812 80.9084 126.313 90.9708M109.448 104.606C87.1825 143.673 107.387 191.768 131.214 215.647M132.097 186.392C141.225 202.991 145.19 210.999 153.029 218.662M125.709 174.832C110.103 138.319 120.956 120.579 131.603 111.496C142.249 102.413 165.17 97.0589 188.261 107.817C194.589 110.765 205.604 111.185 209.737 106.956M219.243 131.011C197.163 131.282 157.532 108.492 140.699 125.112C123.866 141.731 140.791 190.164 171.509 216.645M222.14 150.969C206.989 157.422 168.586 136.422 159.394 143.384C150.202 150.345 155.168 167.01 162.461 179.454M172.45 192.76C183.797 204.796 190.219 208.159 192.011 208.336M203.889 202.818C189.114 188.378 166.594 175.226 173.975 167.675C181.355 160.124 208.341 172.326 218.447 168.621M214.485 188.961C212.977 187.488 210.496 178.566 206.067 183.097C203.706 185.513 198.291 181.402 195.276 178.454" stroke="#FF00004A" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <g clip-path="url(#clip0_93_52)">
                        <path d="M36.6397 104.903C39.227 95.6207 44.3194 85.2431 56.5812 71.8331C68.8429 58.4231 79.9279 50.3592 87.6412 46.0868M60.036 172.654C54.9895 165.753 42.4084 142.432 48.6881 115.498C55.6328 85.7122 79.8159 67.9669 86.6247 62.8104M100.55 53.3886C104.074 47.974 116.253 42.7515 120.443 43.8937M66.1451 129.608C66.3203 117.967 74.6918 91.306 94.515 75.2468C118.202 56.0577 136.361 53.5459 146.807 53.7161M66.9125 145.713C67.8676 151.371 76.5694 184.089 84.7107 192.046M109.366 209.649C100.641 202.892 82.9755 169.09 80.7006 151.512C78.4256 133.933 81.1502 109.43 98.5928 93.9968C116.035 78.5636 147.504 63.2567 168.378 61.8069M191.897 84.7944C173.039 79.356 143.812 80.9084 126.313 90.9708M109.448 104.606C87.1825 143.673 107.387 191.768 131.214 215.647M132.097 186.392C141.225 202.991 145.19 210.999 153.029 218.662M125.709 174.832C110.103 138.319 120.956 120.579 131.603 111.496C142.249 102.413 165.17 97.0589 188.261 107.817C194.589 110.765 205.604 111.185 209.737 106.956M219.243 131.011C197.163 131.282 157.532 108.492 140.699 125.112C123.866 141.731 140.791 190.164 171.509 216.645M222.14 150.969C206.989 157.422 168.586 136.422 159.394 143.384C150.202 150.345 155.168 167.01 162.462 179.454M172.45 192.76C183.797 204.796 190.219 208.159 192.011 208.336M203.889 202.818C189.114 188.378 166.594 175.226 173.975 167.675C181.355 160.124 208.341 172.326 218.447 168.621M214.485 188.961C212.977 187.488 210.496 178.566 206.067 183.097C203.706 185.513 198.291 181.402 195.276 178.454" stroke="#636363" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <path d="M407.961 651.5L293.961 442.5L355.461 411L469.461 617.5C463.961 621.667 450.961 631.2 442.961 636C434.961 640.8 416.294 648.333 407.961 651.5Z" fill="url(#paint0_linear_93_52)"/>
                    <path d="M407.961 651.5L293.961 442.5L355.461 411L469.461 617.5C463.961 621.667 450.961 631.2 442.961 636C434.961 640.8 416.294 648.333 407.961 651.5Z" fill="url(#paint1_linear_93_52)"/>
                    <path d="M344.961 414.5C344.961 413.7 343.961 414 342.961 413.5C346.961 412.833 354.061 410.7 354.461 411.5C355.211 413 343.461 425.5 332.461 432C321.461 438.5 304.461 445 299.461 445C295.666 445 294.461 444.5 293.961 442L304.961 435C304.961 435 304.461 437 306.961 436.5C309.461 436 324.561 429.4 328.961 427C334.461 424 344.961 415.5 344.961 414.5Z" fill="url(#paint2_linear_93_52)"/>
                    <path d="M303.961 437L283.961 404L322.961 378L344.961 414.5C342.961 416.667 336.761 422.3 327.961 427.5C319.161 432.7 308.294 436 303.961 437Z" fill="url(#paint3_linear_93_52)"/>
                    <path d="M82.4611 107.5L116.962 82.5C102.128 97.6667 68.0615 143 66.4615 181C64.4615 228.5 72.4609 284 141.961 348.5C197.561 400.1 275.628 398.333 307.961 391L283.961 408C271.294 414.667 188.5 414.5 160 398C93.3495 359.413 56.2469 320.5 41.9612 236.5C31.9612 177.7 62.4609 127 82.4611 107.5Z" fill="url(#paint4_linear_93_52)"/>
                    <path d="M301.461 150.5C353.861 198.1 353.961 272 347.461 303C357.961 269.667 368.861 189.3 328.461 134.5C288.061 79.7 197.961 84.6667 157.961 94C183.961 93 249.061 102.9 301.461 150.5Z" fill="black" fill-opacity="0.13"/>
                    <path d="M331.467 166C273.461 67 140.461 104.5 124.467 113C163.961 59.5003 277.081 53.7738 354.461 156C463.461 300 317.5 362 317.5 362C317.5 362 389.473 265 331.467 166Z" fill="url(#paint5_linear_93_52)"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M319.088 387.362C404.087 344.362 424.087 252.862 379.588 162.362C342.775 87.4924 230.315 22.1054 139.588 66.3619C57.587 106.362 47.9414 214.548 91.5868 291.862C144.087 384.862 257.459 418.54 319.088 387.362ZM306.008 365.954C378.765 332.942 393.267 245.394 358.508 173.454C323.227 100.434 224.01 56.0683 163.01 86.9544C94.5098 121.638 67.0078 196.954 119.007 288.454C158.066 357.182 252.01 390.455 306.008 365.954Z" fill="url(#paint6_linear_93_52)"/>
                    <defs>
                        <linearGradient id="paint0_linear_93_52" x1="471.961" y1="604.5" x2="282.961" y2="444" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#616161"/>
                            <stop offset="1" stop-color="#272727"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_93_52" x1="408.461" y1="502.5" x2="345.961" y2="545" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#616161"/>
                            <stop offset="1" stop-color="#272727"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_93_52" x1="354.461" y1="413.5" x2="299.961" y2="443" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#303030"/>
                            <stop offset="1" stop-color="#191919"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear_93_52" x1="336.961" y1="396" x2="295.961" y2="425.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#616161"/>
                            <stop offset="1" stop-color="#1B1B1B"/>
                        </linearGradient>
                        <linearGradient id="paint4_linear_93_52" x1="73.9609" y1="125" x2="195.461" y2="408.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#181818"/>
                            <stop offset="1"/>
                        </linearGradient>
                        <linearGradient id="paint5_linear_93_52" x1="377.287" y1="155.596" x2="124.467" y2="278.363" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#353535"/>
                            <stop offset="1" stop-color="#181818"/>
                        </linearGradient>
                        <linearGradient id="paint6_linear_93_52" x1="402.961" y1="216" x2="54.9609" y2="200.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#616161"/>
                            <stop offset="1" stop-color="#272727"/>
                        </linearGradient>
                        <clipPath id="clip0_93_52">
                            <rect width="167" height="71" fill="white" transform="translate(0 119.568) rotate(-45.655)"/>
                        </clipPath>
                    </defs>
                </svg>
                <span class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent to-[#000000]"></span>
            </span>
        </div>
        <div class="flex flex-col gap-[20px] sm:gap-[38px]">
            <h1 class="text-white text-[24px] sm:text-[28px] font-semibold">Uncover Hidden Threats Before They Escalate</h1>
            <p class="text-[#777D85] text-[14px] sm:text-[16px]">
                By identifying potential threats early and implementing targeted interventions, Sky Forensics can
                minimise risk before it escalates, creating a safer and more secure environment.
                <br>
                <br>
                Our proactive approach means fewer incidents, less disruption, and greater peace of mind for your
                business.
            </p>
        </div>
        <div class="flex flex-col gap-[20px] sm:gap-[38px] border-t-[1px] border-t-white pt-[38px]">
            <p class="text-[#bdbdbd] text-[14px] sm:text-[18px] font-semibold text-center">
                “I needed them to be as discreet as possible, mainly because of my children. I cannot convey to you how
                professional and efficient they were. Paul Smuts was truly amazing, sympathetic, and professional. I
                would highly recommend Sky Forensics to anyone”
            </p>
            <p class="text-[#bdbdbd] text-[16px] sm:text-[18px] font-semibold text-center">
                Nancy Hunt
            </p>
        </div>
    </div>
</div>
