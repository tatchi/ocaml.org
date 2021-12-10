<?php
include 'header.php';
?>
<div class="lg:py-24 py-2">
    <div class="container-fluid space-y-24 lg:space-y-32">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:flex-1 lg:mt-16 my-12">
                <h1 class="lg:pr-10 font-bold">
                    General Purpose, Industrial Strength, Expressive and Safe
                </h1>
                <div class="text-body-400 my-7">
                    OCaml is a general purpose industrial-strength programming language
                    with an emphasis on expressiveness and safety.
                </div>
                <div class="space-x-0 lg:space-x-6">
                    <a href="getting-started.php"><button class="btn btn-lg mb-4 lg:mb-0">Get started</button></a>
                    <a href="whyOCaml.php">
                        <button class="btn btn-lg btn-secondary text-body-600">
                            About OCaml
                        </button>
                    </a>
                </div>
            </div>
            <div class="lg:flex-1 flex justify-center">
                <div class="bg-code-background w-full rounded-3xl codebox relative">
                    <div class="border-solid border-b border-gray-50 border-opacity-30 p-5">
                        <div class="flex space-x-2 mt-2">
                            <div class="h-3 w-3 rounded-full border-2 border-solid border-orange-500 border-opacity-80"></div>
                            <div class="h-3 w-3 rounded-full border-2 border-solid border-yellow-500 border-opacity-80"></div>
                            <div class="h-3 w-3 rounded-full border-2 border-solid border-green-500 border-opacity-80"></div>
                        </div>
                    </div>
                    <div class="flex py-2 px-6 text-white text-opacity-50">
                        <div class="flex pr-5 flex-col space-y-1 text-sm text-right font-medium">
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div>5</div>
                            <div>6</div>
                            <div>7</div>
                            <div>8</div>
                            <div>9</div>
                            <div>10</div>
                            <div>11</div>
                            <div>12</div>
                            <div>13</div>
                            <div>14</div>
                            <div>15</div>
                            <div>16</div>
                        </div>
                        <div class="text-left overflow-auto">
                            <pre class="flex flex-col w-full code-preview text-white text-sm space-y-1 font-medium">
                        <span><span class="text-blue-500 ">let </span><span class="text-code-yellow ">square</span>  x = x * x</span>
                        <span><i class="text-gray-400 ">val square : int -> int = < fun > </i></span>
                        <span>square 3</span>
                        <span><i class="text-gray-400 ">- : int = 9</i></span>
                        <span><span class="text-blue-500 ">let</span> <span class="text-code-yellow ">rec</span> fact x =</span>
                        <span><span class="text-blue-500  ml-4">if</span> x <= 1 <span class="text-blue-500 ">then</span> 1 <span class="text-blue-500">else</span> x * fact (x - 1)</span></span>
                        <span><i class="text-gray-400">val fact : int -> int = < fun ></i></span>
                        <span>fact 5</span>
                        <span><i class="text-gray-400 ">- : int = 120</i></span>
                        <span>square 120</span>
                        <span><i class="text-gray-400">- : int = 14400</i></span>
                    </pre>
                            <textarea class="hidden overflow-hidden w-full h-full resize-none bg-transparent" id="userinput">

                    </textarea>
                        </div>
                        <button class="btn-sm absolute items-center bottom-8 right-8 text-white border border-gray-100 rounded-lg border-opacity-50 flex"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h4 class="font-bold text-body-600">Trusted by Industry Leaders</h4>
            <div class="text-body-400 text-base mt-3">
                These awesome companies and organizations trust our software—along with
                thousands of other developers
            </div>
            <div class="flex flex-row justify-center m-auto flex-wrap py-8 items-center">
                <div class="mx-8 my-4"><img src="img/Facebook.svg" alt="" /></div>
                <div class="mx-8 my-4">
                    <img src="img/janestreet-black.svg" width="104" alt="" />
                </div>
                <div class="mx-8 my-4"><img src="img/Bloomberg.svg" alt="" /></div>
                <div class="mx-8 my-4"><img src="img/tezos.svg" alt="" /></div>
                <div class="mx-8 my-4"><img src="img/aHrefs.svg" alt="" /></div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="container-fluid">
        <div class="py-24 lg:pt-24 space-y-40">
            <div class="flex flex-col lg:flex-row-reverse justify-between items-center">
                <div class="lg:flex-1 mt-10 lg:mt-0">
                    <div class="text-body-400 text-base">
                        <div class="h-12 w-12 text-white rounded-xl flex bg-gradient-to-br from-blue-400 to-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="text-lg my-4 font-bold" style="color: #3182ce">
                            BE SAFE
                        </div>
                        <h3 class="text-body-600 font-bold">Safe and Stable</h3>
                        <div class="my-4 text-lg">
                            Tortor montes, habitasse nibh tempor in tortor, at elementum. In
                            suscipit elementum lacus, cursus malesuada donec. Vulputate et at
                            nulla justo. Quis molestie at commodo ipsum diam fringilla
                            placerat vel. Nibh potenti nec viverra rhoncus vel imperdiet
                            porttitor id. Dolor dignissim mauris nunc, pulvinar laoreet.
                            Semper eget faucibus.
                        </div>
                    </div>
                </div>
                <div class="lg:flex-1 lg:mr-24 lg:mt-0 mt-10 flex justify-center">
                    <img src="img/home/safe-stable.svg" alt="" />
                </div>
            </div>

            <div class="flex flex-col lg:flex-row justify-between">
                <div class="lg:flex-1">
                    <div class="text-body-400 text-base">
                        <div class="h-12 w-12 text-white rounded-xl flex bg-gradient-to-br from-teal-400 to-teal-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 m-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-lg my-4 font-bold text-teal-600">WORK FASTER</div>
                        <h3 class="text-body-600 font-bold">
                            Fast compiler, Efficient applications
                        </h3>
                        <div class="my-4 font-normal text-lg">
                            Tempor in in adipiscing volutpat nunc netus ac bibendum
                            sollicitudin. Phasellus pellentesque ut orci montes, fermentum
                            commodo fermentum, non. Ut aenean sed pulvinar sagittis. Placerat
                            egestas rhoncus nunc, suspendisse sed sed ornare et. Turpis sed
                            maecenas tristique euismod tincidunt sit orci. Risus sapien ac
                            tellus vel consectetur justo, viverra donec. Et mi id purus.
                        </div>
                    </div>
                </div>
                <div class="lg:flex-1 lg:ml-24 lg:mt-0 mt-10 flex justify-center">
                    <img src="img/workfaster.svg" alt="" />
                </div>
            </div>

            <div class="flex flex-col lg:flex-row-reverse justify-between">
                <div class="lg:flex-1 mt-10 lg:mt-0 flex items-center">
                    <div class="text-body-400 text-base">
                        <div class="h-12 w-12 text-white rounded-xl flex bg-gradient-to-br from-purple-400 to-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <div class="text-lg my-4 font-bold text-purple-600">
                            BUILD ANYTHING
                        </div>
                        <h3 class="text-body-600 font-bold">
                            First class editor and tooling
                        </h3>
                        <div class="my-4 text-lg">
                            Amet nam amet, eget aliquam sodales. Porttitor leo justo,
                            tristique porta. Amet placerat amet, quam hendrerit odio diam duis
                            diam vitae. Interdum vel elit nunc ultricies diam cursus. Dictum
                            dictumst volutpat tortor netus non. Commodo massa non mattis
                            libero, amet eleifend nunc. Cras aliquet pharetra tortor eu, ut
                            nulla. Convallis volutpat at velit nec nulla tincidunt.
                        </div>
                        <div class=" w-56">
                            <!-- <img src="img/vscode.svg" class="h-14 w-14" alt="">
            <img src="img/vimlogo.svg" class="h-14  w-14 mx-6" alt="">
            <img src="img/EmacsIcon.svg" class="h-14 w-14" alt=""> -->

                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="img/vscode.svg" width="56px" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/vimlogo.svg" width="56px" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/EmacsIcon.svg" width="56px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:flex-1 lg:mr-24 lg:mt-0 mt-10 flex justify-center">
                    <div class="-ml-40">
                        <div style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            " class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img width="785" src="img/home/vscode-preview.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img width="785" src="img/home/emac-preview.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img width="785" src="img/home/vim-preview.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="bg-pattern py-24 overflow-hidden">
    <div class="container-fluid">
        <div class="">
            <div class="text-center px-15">
                <div class="h-12 w-12 text-white rounded-xl inline-flex bg-gradient-to-br from-red-400 to-red-600">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 m-auto" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                </div>
                <div class="text-lg my-4 font-bold text-red-600">BUILD TOGETHER</div>
                <h3 class="text-white font-bold mb-6">Strong community</h3>
                <div class="text-lg text-white">
                    OCaml has a passionate and diverse community behind it that enriches
                    the experience of everyone working with the language. The community
                    flags problems, develops new solutions, investigates new avenues of
                    research, and keeps OCaml moving forward. This makes OCaml an
                    attractive option as a language with a lot of support and momentum
                    behind it.
                </div>
            </div>
        </div>
    </div>

    <div class="w-screen overflow-hidden py-16 flex flex-col items-center">
        <div class="grid grid-cols-4 gap-6 md:gap-4 md:px-10 lg:px-20 relative left-5 lg:left-28 md:left-16" style="width: 1500px">
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/mirageOS.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">MirageOS</div>
                        <div class="font-normal text-xs mt-1">
                            Library operating system to constructs unikernels
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/JS.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Js_of_ocaml</div>
                        <div class="font-normal text-xs mt-1">
                            Compiler from OCaml to Javascript.
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/cmdliner.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Cmdliner</div>
                        <div class="font-normal text-xs mt-1">
                            Declarative definition of command line interfaces for OCaml
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/irmin.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Irmin</div>
                        <div class="font-normal text-xs mt-1">
                            Distributed database that follows the same design principles as Git
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid grid-cols-4 gap-6 md:gap-4 md:px-10 lg:px-20 mt-6 relative right-5 lg:right-28 md:right-16" style="width: 1500px">
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/dune.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Dune</div>
                        <div class="font-normal text-xs mt-1">
                            A composable build system for OCaml
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/lwt.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Lwt</div>
                        <div class="font-normal text-xs mt-1">
                            OCaml promises and concurrent IO
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/owl.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Owl</div>
                        <div class="font-normal text-xs mt-1">
                            OCaml Scientific and Engineering Computing
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="bg-white p-6 rounded-xl items-center flex card-hover">
                <div class="flex items-center">
                    <img src="img/home/dream.png" alt="" />
                    <div class="flex-col px-6">
                        <div class="text-base font-semibold">Dream</div>
                        <div class="font-normal text-xs mt-1">
                            Tidy Web framework for OCaml and ReasonML
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="py-28 bg-white">
    <div class="container-fluid">
        <div class="text-center px-15">
            <h2 class="text-body-600 font-bold mb-6">Users of OCaml</h2>
            <div class="text-lg text-body-400 mb-16">
                OCaml is used by thousands of developers, companies, research labs,
                teachers, etc. Learn how it fits your use case
            </div>
        </div>
        <div class="
        flex flex-col
        lg:flex-row
        justify-between
        lg:space-x-20
        space-y-10
        lg:space-y-0
      ">
            <div class="shadow-lg p-10 bg-white rounded-xl lg:mb-0">
                <div class="flex flex-row items-center justify-between relative pb-8">
                    <h5 class="font-semibold">For Educators</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                        <div class="
                absolute
                w-20
                h-20
                top-0
                -right-10
                rounded-full
                bg-primary-100
              "></div>
                    </div>
                </div>
                <div>
                    <div class="text-base text-body-600">
                        With its strong security features and high performance, several
                        companies rely on OCaml to keep their data operating both safely and
                        speedily. On this page, you can get an overview of the companies in
                        the community and learn more about how they use OCaml.
                    </div>
                    <button class="btn mt-10">Learn more</button>
                </div>
            </div>
            <div class="shadow-lg p-10 bg-white rounded-xl">
                <div class="flex flex-row items-center justify-between relative pb-8">
                    <h5 class="font-semibold">For Industrial Users</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <div class="
                absolute
                w-20
                h-20
                top-0
                -right-10
                rounded-full
                bg-primary-100
              "></div>
                    </div>
                </div>
                <div>
                    <div class="text-base text-body-600">
                        With its strong security features and high performance, several
                        companies rely on OCaml to keep their data operating both safely and
                        speedily. On this paßge, you can get an overview of the companies in
                        the community and learn more about how they use OCaml.
                    </div>
                    <a href="industrial-users.php"><button class="btn mt-10">Learn more</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-pattern lg:py-32 py-24">
    <div class="container-fluid">
        <div class="">
            <div class="text-center">
                <h2 class="font-bold text-primary-600 mb-6">Curated Resources</h2>
                <div class="text-lg text-white mb-16">
                    Here are some of the reasons why you should use OCamp for your
                    workspace or institution
                </div>
            </div>
            <div class="grid lg:grid-cols-3 gap-8 lg:gap-16">
                <a href="getting-started.php" class="resources-card card-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="font-semibold text-xl mb-3">Getting Started</div>
                    <div>
                        Gravida adipiscing sed neque blandit netus sit. Nulla viverra in
                        posuere etiam ultricies vestibulum turpis dolor. Nibh sit tincidunt
                        elementum justo. Tincidunt id nunc elementum.
                    </div>
                </a>
                <a href="" class="resources-card card-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <div class="font-semibold text-xl mb-3">Language Docs</div>
                    <div>
                        Mi viverra euismod quis tristique sed libero. Aenean in nec faucibus
                        a ac congue sed convallis felis. A proin dictum eros eu orci integer
                        hendrerit tellus. Id turpis aliquet erat velit. Ornare amet
                        sollicitudin elementum in.
                    </div>
                </a>
                <a href="manual.php" class="resources-card card-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <div class="font-semibold text-xl mb-3">Books and Manuals</div>
                    <div>
                        Donec in massa ultrices in vestibulum sem volutpat morbi ornare.
                        Sapien, ac orci, tristique nisl lacinia mi fringilla. Arcu
                        vestibulum egestas quisque tincidunt non elit proin. Et turpis augue
                        lorem risus felis id.
                    </div>
                </a>
                <a href="" class="resources-card card-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                    </svg>
                    <div class="font-semibold text-xl mb-3">Application Guides</div>
                    <div>
                        Faucibus nunc nulla donec dapibus elementum laoreet. Scelerisque
                        interdum bibendum at enim duis tincidunt ac dolor. Turpis congue
                        aenean vitae faucibus. Augue volutpat ornare turpis leo eu quis
                        lorem.
                    </div>
                </a>
                <a href="papers.php" class="resources-card card-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                    </svg>
                    <div class="font-semibold text-xl mb-3">Papers</div>

                    <div>
                        Porttitor commodo amet eget mauris. Diam, imperdiet morbi eget
                        velit. Quisque nibh proin ipsum pulvinar accumsan tortor, et vitae
                        suscipit. Posuere felis velit volutpat scelerisque malesuada. Donec
                        turpis.
                    </div>
                </a>
                <a href="best-practices.php" class="resources-card card-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                    <div class="font-semibold text-xl mb-3">Best Practices</div>
                    <div>
                        Interdum mattis tincidunt sit vel odio fermentum rutrum at. Congue
                        elit aliquet ornare arcu id posuere at malesuada in. Cursus arcu,
                        augue amet felis vestibulum ut. Erat vel sagittis bibendum nulla
                        morbi velit.
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-primary-600 p-16">
    <div class="container-fluid">
        <div class="text-center text-white">
            <h3 class="font-bold mb-6">Opam: the OCaml Package Manager</h3>
            <div class="text-lg mb-8 lg:px-28">
                Opam is a source-based package manager for OCaml. It supports multiple
                simultaneous compiler installations, flexible package constraints, and a
                Git-friendly development workflow.
            </div>
            <a href="success-stories.php"><button class="btn btn-lg btn-tertiary">Success Stories</button></a>
        </div>
    </div>
</div>

<div class="bg-white pt-20 lg:py-20 overflow-hidden">
    <div class="container-fluid">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
            <div class="space-y-8">
                <div class="space-y-6">
                    <h2 class="font-bold">OCaml Packages</h2>
                    <p class="text-lg text-body-400">
                        Explore thousands of open-source OCaml packages with their
                        documentation.
                    </p>
                </div>
                <a href="packages.php">
                    <button class="btn btn-primary btn-lg mt-8 flex items-center">
                        <span>Explore packages</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </a>
            </div>
            <div class="m-auto">
                <img src="img/home/packages-home.png" width="1047" class="max-w-none -mb-72 h-auto" alt="" />
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>