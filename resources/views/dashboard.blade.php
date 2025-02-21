<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Auth::user()->company)
                <!-- Company Details Card -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">
                    <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-6">
                        <div class="flex-shrink-0">
                            <!-- Display the company logo based on the stored logo identifier -->
                            @if(Auth::user()->company->logo === 'icon1')
                            <svg width="100px" height="100px" viewBox="0 0 281.25 281.25" id="svg2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">
                                    <defs id="defs4"/>
                                    <g id="layer1" transform="translate(6984.8564,-3399.5356)">
                                    <g id="g19544" transform="translate(-2254.8251,-358.73635)">
                                    <path d="m -4555.7561,3790.6272 c -12.4453,1.8285 -23.7972,9.0681 -30.7013,19.5831 -5.5623,8.4716 -8.0838,18.7666 -7.0697,28.8501 a 4.6875,4.6875 0 0 0 5.1325,4.195 4.6875,4.6875 0 0 0 4.1949,-5.1325 c -0.7932,-7.8872 1.2302,-16.1391 5.5811,-22.7655 5.3767,-8.1888 14.5346,-14.0318 24.2267,-15.4559 a 4.6875,4.6875 0 0 0 3.9551,-5.3174 4.6875,4.6875 0 0 0 -5.3193,-3.9569 z" id="path2297" style="color:#000000;fill:#333333;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"/>
                                    <path d="m -4620.9324,3789.08 c -1.1976,-0.019 -2.3957,0 -3.5926,0.06 -3.1917,0.1584 -6.3716,0.5964 -9.4977,1.3202 a 4.6875,4.6875 0 0 0 -0.3515,0.1428 4.6875,4.6875 0 0 0 -0.6757,0.2728 4.6875,4.6875 0 0 0 -0.6244,0.3809 4.6875,4.6875 0 0 0 -0.5529,0.4651 4.6875,4.6875 0 0 0 -0.4761,0.5511 4.6875,4.6875 0 0 0 -0.39,0.6244 4.6875,4.6875 0 0 0 -0.2784,0.6647 4.6875,4.6875 0 0 0 -0.1776,0.7086 4.6875,4.6875 0 0 0 -0.06,0.7324 4.6875,4.6875 0 0 0 -0.031,0.3717 c 0.9,12.0915 7.4118,23.4138 17.4115,30.271 7.7511,5.3152 17.251,7.6649 26.5466,6.8262 0.1615,-3.2539 0.6805,-6.4812 1.5399,-9.6185 -7.8155,1.3063 -16.2706,-0.472 -22.7838,-4.9384 -6.3957,-4.3858 -11.0487,-11.4662 -12.7386,-19.0777 9.0581,-1.1713 18.5426,0.4399 26.6418,4.6179 4.7806,2.466 9.1175,5.8224 12.7387,9.8089 0.5679,-1.0405 1.1749,-2.0605 1.8273,-3.0542 1.1094,-1.6894 2.3444,-3.284 3.6695,-4.7955 -4.0612,-4.1401 -8.7742,-7.6295 -13.9362,-10.2923 -7.4859,-3.8616 -15.8259,-5.9091 -24.2083,-6.0425 z m 27.1984,44.978 c -3.2486,0.3875 -6.4229,1.3369 -9.3292,2.8839 -4.46,2.3738 -8.169,5.9987 -10.6457,10.4022 -2.4183,4.2999 -3.4452,8.8375 -4.2298,12.9786 -0.7826,4.1309 -1.3555,7.9476 -2.4811,11.2371 -2.1646,6.3257 -6.75,12.0679 -11.9567,17.5855 -5.2215,5.5334 -11.2142,11.068 -15.9613,18.1549 -5.5686,8.3129 -8.7769,18.0316 -9.56,27.9144 -0.7826,9.8745 0.8409,19.8166 4.3982,28.9618 4.7844,12.2996 13.0774,23.1405 23.6957,30.9778 10.6183,7.8373 23.4212,12.5675 36.5845,13.515 a 4.6875,4.6875 0 0 0 0.091,-0.018 4.6875,4.6875 0 0 0 0.081,0.026 c 14.4317,0.5153 28.9094,-3.5381 40.9735,-11.4752 12.0642,-7.9372 21.518,-19.6282 26.7572,-33.0853 3.5605,-9.1452 5.1848,-19.0868 4.4019,-28.9618 -0.7837,-9.8835 -3.9926,-19.6018 -9.5618,-27.9144 -4.7477,-7.0864 -10.7398,-12.6214 -15.9613,-18.1549 -5.2065,-5.5176 -9.7941,-11.258 -11.9586,-17.5837 -1.1256,-3.2896 -1.6984,-7.1078 -2.4811,-11.239 -0.7846,-4.1411 -1.8115,-8.6786 -4.2298,-12.9785 -2.4766,-4.4035 -6.1876,-8.0266 -10.6475,-10.4004 -2.6894,-1.4314 -5.6065,-2.3584 -8.6005,-2.7997 -0.025,1.3503 0.021,2.7004 0.1556,4.0393 a 4.6875,4.6875 0 0 1 -3.7921,5.0702 c 0.2807,0 0.5609,-0.024 0.8423,-0.01 2.4335,0.1577 4.8531,0.8333 6.9891,1.9703 2.8482,1.516 5.2996,3.9076 6.8811,6.7199 1.565,2.7829 2.4634,6.2863 3.1916,10.1294 0.7299,3.8528 1.3164,8.1309 2.8216,12.5299 2.8923,8.4528 8.496,15.1394 14.0094,20.9821 5.4986,5.8272 11.0446,11.0489 14.9909,16.9391 4.6106,6.8816 7.3433,15.0873 8.0053,23.4356 0.6627,8.3569 -0.7173,16.924 -3.7921,24.8218 -4.5176,11.6036 -12.7713,21.8085 -23.1738,28.6524 -10.3703,6.8227 -22.9637,10.3629 -35.3705,9.9444 -11.3425,-0.8264 -22.4888,-4.9467 -31.6388,-11.7004 -9.1639,-6.7638 -16.3988,-16.2191 -20.5279,-26.8341 -3.0726,-7.8991 -4.4508,-16.4667 -3.7885,-24.8236 0.6615,-8.3483 3.392,-16.5561 8.0017,-23.4375 3.9457,-5.8903 9.4941,-11.1121 14.9927,-16.9391 5.5133,-5.8426 11.1169,-12.5292 14.0094,-20.9821 1.5052,-4.3989 2.0918,-8.6769 2.8217,-12.5299 0.7281,-3.8429 1.6246,-7.3429 3.1897,-10.1257 1.5817,-2.8124 4.031,-5.2077 6.8792,-6.7237 2.8481,-1.5158 6.2008,-2.2085 9.4171,-1.95 a 4.6875,4.6875 0 0 0 0.2454,-0.046 4.6875,4.6875 0 0 1 -4.5319,-4.1602 c -0.1674,-1.6647 -0.23,-3.3353 -0.2069,-5.0024 z m -32.3217,102.301 a 4.6875,4.6875 0 0 0 -4.6619,4.715 c 0.071,12.3639 6.5125,24.2233 16.8457,31.0126 6.3312,4.1599 13.8666,6.312 21.4398,6.1248 a 4.6875,4.6875 0 0 0 4.5703,-4.801 4.6875,4.6875 0 0 0 -4.801,-4.5703 c -5.6241,0.1391 -11.3584,-1.5014 -16.0602,-4.5904 -7.5762,-4.9779 -12.5675,-14.1637 -12.6196,-23.2288 a 4.6875,4.6875 0 0 0 -4.7131,-4.6619 z" id="path2238" style="color:#000000;fill:#2aff2a;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"/>
                                    </g>
                                    </g>
                                    </svg>
                            @elseif(Auth::user()->company->logo === 'icon2')
                            <svg width="100px" height="100px" viewBox="0 0 281.25 281.25" id="svg2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">
                                                <defs id="defs4"/>
                                                <g id="layer1" transform="translate(6984.8564,-3697.2496)">
                                                <g id="g25569" transform="translate(-2256.2244,-367.4373)">
                                                <path d="m -4584.2308,4135.6675 c -1.9341,0.028 -3.8704,0.2166 -5.788,0.5713 -7.2141,1.3341 -13.9019,4.9469 -18.9733,10.2484 a 4.6875,4.6875 0 0 0 -0.727,0.9961 4.6875,4.6875 0 0 0 -0.01,0.01 l -86.3837,159.375 a 4.6875,4.6875 0 0 0 -0.2563,1.0748 4.6875,4.6875 0 0 0 -0.2838,1.1865 4.6875,4.6875 0 0 0 0.2856,1.1389 4.6875,4.6875 0 0 0 0.2802,1.1151 4.6875,4.6875 0 0 0 0.073,0.075 4.6875,4.6875 0 0 0 0.813,0.8386 4.6875,4.6875 0 0 0 0.9027,0.857 4.6875,4.6875 0 0 0 0.073,0.068 4.6875,4.6875 0 0 0 1.0491,0.2509 4.6875,4.6875 0 0 0 1.2177,0.2911 4.6875,4.6875 0 0 0 1.1261,-0.2856 4.6875,4.6875 0 0 0 1.1224,-0.282 l 159.17,-88.7036 a 4.6875,4.6875 0 0 0 0.108,-0.073 4.6875,4.6875 0 0 0 0.062,-0.027 c 7.8838,-4.842 13.1396,-13.2849 14.004,-22.4964 0.6677,-7.1148 -1.2938,-14.3173 -5.4712,-20.1123 a 4.6875,4.6875 0 0 0 -0.013,-0.018 c -0.028,-0.039 -0.054,-0.078 -0.082,-0.1172 a 4.6875,4.6875 0 0 0 -0.031,-0.033 4.6875,4.6875 0 0 0 -0.5054,-0.5805 l -38.3551,-36.9342 a 4.6875,4.6875 0 0 0 -0.029,-0.022 4.6875,4.6875 0 0 0 -0.2032,-0.1886 c -5.9692,-5.0214 -13.5263,-7.879 -21.2457,-8.1958 -0.6433,-0.026 -1.2871,-0.035 -1.9318,-0.026 z m 0.1154,9.3896 c 6.083,-0.059 12.2886,2.0671 16.9281,5.9272 l 37.8918,36.4874 c 2.713,3.8739 4.0395,8.8425 3.598,13.5461 -0.5751,6.1287 -4.3075,12.1344 -9.5471,15.3663 l -144.9353,80.7678 29.436,-54.3109 12.2919,8.507 a 4.6875,4.6875 0 0 0 6.5222,-1.1883 4.6875,4.6875 0 0 0 -1.1865,-6.5204 l -13.1341,-9.0894 16.4428,-30.3369 20.4016,18.3087 a 4.6875,4.6875 0 0 0 6.6211,-0.357 4.6875,4.6875 0 0 0 -0.3589,-6.6193 l -22.0697,-19.8065 15.8002,-29.1522 28.4363,25.9717 a 4.6875,4.6875 0 0 0 6.6229,-0.3003 4.6875,4.6875 0 0 0 -0.3003,-6.6211 l -30.1556,-27.5427 3.0029,-5.5408 c 3.6362,-3.6252 8.4489,-6.1643 13.4931,-7.0972 1.3788,-0.255 2.785,-0.3855 4.1986,-0.3992 z" id="path4934" style="color:#000000;fill:#fba021;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"/>
                                                <path d="m -4484.6727,4096.862 a 4.6875,4.6875 0 0 0 -3.2684,1.4776 l -46.9299,50.0574 12.5006,-42.691 a 4.6875,4.6875 0 0 0 -3.1824,-5.8173 4.6875,4.6875 0 0 0 -5.8154,3.1824 l -15.8497,54.1278 10.9003,10.4956 53.9374,-20.5243 a 4.6875,4.6875 0 0 0 2.7118,-6.0498 4.6875,4.6875 0 0 0 -6.0462,-2.7118 l -41.8817,15.9375 46.4942,-49.5941 a 4.6875,4.6875 0 0 0 -0.2143,-6.6248 4.6875,4.6875 0 0 0 -3.3563,-1.2652 z" id="path4954" style="color:#000000;fill:#333333;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"/>
                                                </g>
                                                </g>
                                            </svg>
                            @elseif(Auth::user()->company->logo === 'icon3')
                            <svg width="100px" height="100px" viewBox="0 0 281.25 281.25" id="svg2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">
                                                <defs id="defs4"/>
                                                <g id="layer1" transform="translate(6402.3564,-3399.5356)">
                                                <g id="g20620" transform="translate(-2268.3792,-357.45635)">
                                                <path d="m -4036.9139,3873.6784 c -14.5628,0 -26.4697,11.9051 -26.4697,26.4679 0,14.1599 11.2585,25.8049 25.2685,26.4386 -1.7709,3.5459 -2.774,7.5362 -2.774,11.7517 0,13.6688 10.4902,24.9965 23.8202,26.336 -1.7573,3.535 -2.7521,7.5097 -2.7521,11.7078 0,14.5628 11.9069,26.4715 26.4697,26.4715 14.5629,0 26.4679,-11.9087 26.4679,-26.4715 0,-4.158 -0.973,-8.0975 -2.699,-11.6071 13.9763,-0.6708 25.1935,-12.3013 25.1935,-26.4367 0,-4.2542 -1.022,-8.2787 -2.8235,-11.8488 13.3646,-1.3053 23.8916,-12.6479 23.8916,-26.3415 0,-14.5628 -11.905,-26.4679 -26.4679,-26.4679 -9.0075,0 -16.9944,4.5575 -21.7803,11.4788 -4.7859,-6.9218 -12.7742,-11.4788 -21.7823,-11.4788 -9.0079,0 -16.9964,4.557 -21.7822,11.4788 -4.7859,-6.9213 -12.7727,-11.4788 -21.7804,-11.4788 z m 0,9.375 c 9.4963,0 17.0929,7.5966 17.0929,17.0929 0,9.4961 -7.5966,17.0948 -17.0929,17.0947 -9.4962,0 -17.0947,-7.5986 -17.0947,-17.0947 0,-9.4962 7.5985,-17.0929 17.0947,-17.0929 z m 43.5626,0 c 9.4962,0 17.0929,7.5967 17.0929,17.0929 0,9.4961 -7.5967,17.0947 -17.0929,17.0947 -9.4962,0 -17.0947,-7.5986 -17.0947,-17.0947 0,-9.4962 7.5985,-17.0929 17.0947,-17.0929 z m 43.5626,0 c 9.4962,0 17.0929,7.5967 17.0929,17.0929 0,9.4961 -7.5967,17.0947 -17.0929,17.0947 -9.4961,0 -17.0947,-7.5986 -17.0947,-17.0947 0,-9.4962 7.5986,-17.0929 17.0947,-17.0929 z m -64.6307,38.1884 c 9.4962,0 17.0929,7.5986 17.0929,17.0948 0,6.0164 -3.0514,11.2662 -7.7014,14.3097 -0.743,0.3681 -1.466,0.7709 -2.168,1.2048 -2.1908,1.0136 -4.6352,1.5802 -7.2235,1.5802 -9.4962,0 -17.0947,-7.5985 -17.0947,-17.0947 0,-9.4962 7.5985,-17.0948 17.0947,-17.0948 z m 43.5626,0 c 9.4962,0 17.0929,7.5986 17.0929,17.0948 0,9.4962 -7.5967,17.0947 -17.0929,17.0947 -9.4962,0 -17.0947,-7.5985 -17.0947,-17.0947 0,-9.4962 7.5985,-17.0948 17.0947,-17.0948 z m -22.4945,38.0457 c 9.4962,0 17.0929,7.5966 17.0929,17.0929 0,9.4962 -7.5967,17.0965 -17.0929,17.0965 -9.4962,0 -17.0947,-7.6003 -17.0947,-17.0965 0,-6.015 3.0515,-11.2646 7.6996,-14.3079 0.7455,-0.3692 1.4711,-0.7712 2.1753,-1.2066 2.1894,-1.0119 4.6336,-1.5784 7.2198,-1.5784 z" id="path2601" style="color:#000000;fill:#355fd1;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"/>
                                                <path d="m -3956.8931,3792.4217 c -12.8604,1.558 -24.7351,8.7372 -32.0893,19.4018 -1.3241,1.9201 -2.4683,3.9201 -3.49,5.9638 -1.209,-2.4197 -2.6888,-4.7075 -4.4256,-6.8061 -4.9292,-5.956 -11.7425,-10.2085 -19.2591,-12.0172 -1.8791,-0.4521 -3.7859,-0.7477 -5.7037,-0.8899 -5.6899,-0.422 -11.4539,0.516 -16.7303,2.7576 v 0 c -0.058,0.024 -0.1163,0.047 -0.174,0.071 a 4.6875,4.6875 0 0 0 -0.5126,0.3241 4.6875,4.6875 0 0 0 -0.6464,0.4083 4.6875,4.6875 0 0 0 -0.4889,0.542 4.6875,4.6875 0 0 0 -0.4669,0.5622 4.6875,4.6875 0 0 0 -0.2985,0.6683 4.6875,4.6875 0 0 0 -0.26,0.5841 c -0.016,0.061 -0.03,0.1235 -0.046,0.185 -1.9248,7.3495 -1.1933,15.2445 2.0581,22.1137 3.2792,6.9278 8.9895,12.5398 15.9742,15.6958 5.299,2.3943 11.1914,3.324 16.9702,2.6788 2.3376,-0.261 4.6343,-0.7818 6.8499,-1.5363 -1.3497,10.3429 -1.1156,20.88 0.6904,31.1554 1.8054,-0.3925 3.6747,-0.6115 5.5938,-0.6115 1.3169,0 2.6081,0.1087 3.8745,0.2966 -2.4103,-12.6431 -2.1839,-25.8103 0.694,-38.3514 1.5477,-6.7447 3.859,-13.1707 7.5183,-18.4772 5.7691,-8.3659 15.4108,-14.1951 25.4993,-15.4175 a 4.6875,4.6875 0 0 0 4.0887,-5.2185 4.6875,4.6875 0 0 0 -5.2166,-4.0887 z m -67.7893,14.9395 c 2.1371,-0.015 4.272,0.2235 6.3336,0.7196 5.4974,1.3228 10.6222,4.521 14.2273,8.877 3.4972,4.2258 5.6421,9.6679 6.0278,15.1611 -2.8635,1.734 -6.1203,2.8656 -9.4336,3.2355 -4.0768,0.4552 -8.3302,-0.2189 -12.0685,-1.908 -4.9001,-2.2141 -9.0613,-6.2982 -11.3617,-11.1584 -1.9711,-4.1643 -2.6326,-9.0257 -1.9061,-13.5993 2.627,-0.8577 5.4059,-1.3077 8.1812,-1.3275 z" id="path2867" style="color:#000000;fill:#333333;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"/>
                                                </g>
                                                </g>
                                            </svg>
                            @else
                                <svg class="w-24 h-24 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            @endif
                        </div>
                        <div class="mt-6 md:mt-0">
                            <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
                                {{ Auth::user()->company->name }}
                            </h3>
                            @if(Auth::user()->company->description)
                                <p class="mt-3 text-gray-600 dark:text-gray-300">
                                    {{ Auth::user()->company->description }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <!-- Leave Company Button (nur für Debugging) -->
                    <form action="{{ route('company.leave') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg transition duration-300">
                            Leave Company (Debug)
                        </button>
                    </form>
                </div>
            @else
                <!-- Call-to-Action für Nutzer ohne Unternehmen -->

                <div class="bg-gradient-to-r from-green-300 via-blue-300 to-purple-300 dark:from-green-800 dark:via-blue-800 dark:to-purple-800 shadow-xl rounded-lg p-8 mb-5 text-center">
                    <div class="text-6xl mb-5">
                        👋
                    </div>
                    <h1 class="text-4xl font-bold text-white">
                        Willkommen beim Südwestfalen-IT Strategy Lab
                    </h1>
                    <p class="mt-4 text-lg text-white opacity-80">
                        Dein Unternehmensplanspiel für IT-Management und digitale Transformation.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8 text-center">
                    <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">
                        Du bist aktuell keinem Unternehmen zugeordnet.
                    </h3>
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                        <a href="{{ route('company.join.form') }}"
                           class="px-8 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow transition duration-300">
                            Unternehmen beitreten
                        </a>
                        <a href="{{ route('company.create') }}"
                           class="px-8 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow transition duration-300">
                            Unternehmen gründen
                        </a>
                    </div>
                </div>
            @endif

            @if(Auth::user()->company)
                <!-- Quartalsanzeige -->
                <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8 mt-4">
                    <div class="flex flex-col items-center">
                        <!-- Jahr -->
                        <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-4">2025</h3>
                        <!-- Quartals-Timeline -->
                        <div class="flex items-center space-x-2">
                            <!-- Q1 (aktuell) -->
                            <div class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg">
                                Q1
                            </div>
                            <span class="text-gray-600 dark:text-gray-400">&gt;</span>
                            <!-- Q2 -->
                            <div class="px-4 py-2 bg-green-100 text-blue-500 font-semibold rounded-lg">
                                Q2
                            </div>
                            <span class="text-gray-600 dark:text-gray-400">&gt;</span>
                            <!-- Q3 -->
                            <div class="px-4 py-2 bg-green-100 text-blue-500 font-semibold rounded-lg">
                                Q3
                            </div>
                            <span class="text-gray-600 dark:text-gray-400">&gt;</span>
                            <!-- Q4 -->
                            <div class="px-4 py-2 bg-green-100 text-blue-500 font-semibold rounded-lg">
                                Q4
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-red-400 to-yellow-400 text-white p-6 rounded-lg shadow-lg text-center">
                    <!-- Fire Emoji -->
                    <div class="text-5xl mb-2">🔥</div>
                    <!-- Main Text -->
                    <h3 class="text-2xl font-bold">Ergebnisse für Quartal 1 liegen vor</h3>
                    <!-- Optional Subtext -->
                    <p class="mt-2 text-lg">
                        Entdecken Sie die neuesten Leistungsdaten und Erfolge Ihres Unternehmens.
                    </p>
                    <div class="mt-4">
                        <a href="/reports" class="inline-block px-6 py-3 bg-white text-red-500 font-semibold rounded-full shadow-md hover:bg-gray-100 transition duration-300">
                            Zu den Ergebnissen
                        </a>
                    </div>
                </div>

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                    <!-- Card 1: Umsatz -->
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Umsatz</h4>
                        <p class="mt-2 text-2xl font-bold text-green-600 dark:text-green-400">€1.200.000</p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Gesamtumsatz im Quartal</p>
                    </div>
                    <!-- Card 2: Gewinn -->
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Gewinn</h4>
                        <p class="mt-2 text-2xl font-bold text-green-600 dark:text-green-400">€300.000</p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Reingewinn</p>
                    </div>
                    <!-- Card 3: Kunden -->
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Kunden</h4>
                        <p class="mt-2 text-2xl font-bold text-green-600 dark:text-green-400">850</p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Neue Kunden</p>
                    </div>
                    <!-- Card 4: Aufträge -->
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Aufträge</h4>
                        <p class="mt-2 text-2xl font-bold text-green-600 dark:text-green-400">120</p>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Aktuelle Aufträge</p>
                    </div>
                </div>
<!-- Core Decisions Section -->
<div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8 mt-8">
    <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">Kernentscheidungen für das nächste Quartal</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Decision 1: Marketing-Investition -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <!-- Checkmark Indicator -->
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Marketing-Investition</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Wie viel Budget möchten Sie in Marketing investieren?</p>
            <div class="mt-4">
                <select @change="selected = true" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Bitte wählen</option>
                    <option value="low">Niedrig</option>
                    <option value="medium">Mittel</option>
                    <option value="high">Hoch</option>
                </select>
            </div>
        </div>

        <!-- Decision 2: Produktionskapazität -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Produktionskapazität</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Möchten Sie Ihre Produktionskapazität erweitern?</p>
            <div class="mt-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-blue-600" name="production" value="expand" @change="selected = true">
                    <span class="ml-2">Erweitern</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio text-blue-600" name="production" value="maintain" checked @change="selected = true">
                    <span class="ml-2">Beibehalten</span>
                </label>
            </div>
        </div>

        <!-- Decision 3: Personalentscheidungen -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Personalentscheidungen</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Planen Sie neue Mitarbeiter einzustellen?</p>
            <div class="mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-600" name="hire" value="yes" @change="selected = $event.target.checked">
                    <span class="ml-2">Ja, einstellen</span>
                </label>
            </div>
        </div>

        <!-- Decision 4: F&E-Investition -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">F&E-Investition</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Wie viel in Forschung &amp; Entwicklung investieren?</p>
            <div class="mt-4">
                <select @change="selected = true" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Bitte wählen</option>
                    <option value="low">Niedrig</option>
                    <option value="medium">Mittel</option>
                    <option value="high">Hoch</option>
                </select>
            </div>
        </div>

        <!-- Decision 5: Preisstrategie -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Preisstrategie</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Wie sollen Ihre Preise gestaltet werden?</p>
            <div class="mt-4">
                <select @change="selected = true" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Bitte wählen</option>
                    <option value="competitive">Wettbewerbsfähig</option>
                    <option value="premium">Premium</option>
                    <option value="discount">Rabatt</option>
                </select>
            </div>
        </div>

        <!-- Decision 6: Kundenservice -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Kundenservice</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Möchten Sie in verbesserten Kundenservice investieren?</p>
            <div class="mt-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-blue-600" name="customer_service" value="improve" @change="selected = true">
                    <span class="ml-2">Verbessern</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio text-blue-600" name="customer_service" value="maintain" checked @change="selected = true">
                    <span class="ml-2">Beibehalten</span>
                </label>
            </div>
        </div>

        <!-- Decision 7: Lieferantenverhandlung -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Lieferantenverhandlung</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Sollen Sie bessere Konditionen aushandeln?</p>
            <div class="mt-4">
                <select @change="selected = true" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Bitte wählen</option>
                    <option value="negotiate">Verhandeln</option>
                    <option value="accept">Akzeptieren</option>
                </select>
            </div>
        </div>

        <!-- Decision 8: Finanzielle Restrukturierung -->
        <div class="relative bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md" x-data="{ selected: false }">
            <div x-show="selected" class="absolute top-2 right-2">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Finanzielle Restrukturierung</h4>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Möchten Sie Ihre Finanzstruktur anpassen?</p>
            <div class="mt-4">
                <select @change="selected = true" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Bitte wählen</option>
                    <option value="optimize">Optimieren</option>
                    <option value="restructure">Restrukturieren</option>
                    <option value="maintain">Beibehalten</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mt-6 text-center">
        <button type="button" class="px-8 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-300">
            Entscheidungen speichern
        </button>
    </div>
</div>
@endif

        </div>
    </div>
</x-app-layout>
