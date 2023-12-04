<x-app-layout>
    <title>{{ isset($pageTitle) ? $pageTitle : 'Tasco' }}</title>
    <main>

        <section class="">
            <!-- Start: Hero Section-->

            <!-- Start: Hero Background Image -->
            <div class="relative flex items-center justify-center w-full h-screen text-center bg-center bg-cover">
                <!-- style="background-image:url();" -->

                <!-- Start: Hero Background Color -->
                <div class="absolute top-0 bottom-0 left-0 right-0 bg-blue-50 opacity-80"></div>
                <div class="z-10 px-4 sm:px-6 lg:px-8">
                    <div class="text-center">

                        <div class="flex items-center justify-center">
                            <img src="{{ asset('images/Logo3.png') }}" alt="Logo" width="300">
                        </div>

                        <h1 class="mb-6 text-5xl font-bold tracking-tight md:text-6xl">
                            Welcome to <span class="text-blue-500">Tasco</span>
                        </h1>

                        <p
                            class="mb-6 tracking-wide text-xl text-gray-500 sm:mt-5 sm:text-md sm:max-w-xl sm:mx-auto md:mt-5">
                            Discover a new level of convenience and reliability with Tasco, your trusted local service
                            management partner. We take pride in offering a wide range of services to meet
                            your
                            needs.
                        </p>

                        <div class="justify-center sm:flex">
                            <div class="">
                                <a href="{{ route('app.home') }}#browse"
                                    class="flex items-center justify-center w-full font-medium px-8 py-3 text-white bg-blue-500 rounded-md shadow hover:bg-blue-500 ">
                                    Get started</a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('app.learnMore') }}"
                                    class="flex items-center justify-center w-full font-medium px-8 py-3 text-blue-600 rounded-md shadow border border-blue-500">
                                    Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- End: Hero Section-->
        </section>

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <a id="browse"></a>
        <!-- Start: Browse Section -->
        <section class="relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">

                <!-- Start: Heading-->
                <div class="text-center mx-auto mb-5 lg:px-20">
                    <h2 class=" leading-normal mb-4 text-4xl font-bold text-black" id="browse">Browse</h2>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">See what the community
                        offers
                    </p>
                </div>

                <div class="flex flex-wrap flex-row -mx-12 pb-20">
                    <div
                        class="group relative cursor-pointer overflow-hidden bg-white border rounded-lg pt-10 pb-8 shadow-md ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:mt-7 sm:px-10">
                        <a href="{{ route('app.Calendar') }}">
                            <span
                                class="absolute top-10 z-0 h-20 w-20 rounded-full bg-blue-500 transition-all duration-300 group-hover:scale-[10]"></span>
                            <div class="relative z-10 mx-auto max-w-md">
                                <span
                                    class="grid h-20 w-20 place-items-center rounded-full bg-blue-500 transition-all duration-300 group-hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"
                                            fill="rgba(255,255,255,1)"></path>
                                    </svg>

                                </span>
                                <div
                                    class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p>Elevate your schedule with TasCo's intuitive calendar feature, simplifying local
                                        management and optimizing your planning.</p>
                                </div>
                                <div class="pt-5 text-base font-semibold ">
                                    <p>
                                        <a href="{{ route('app.Calendar') }}"
                                            class="text-blue-500 transition-all duration-300 group-hover:text-white">View
                                            Calendar
                                            &rarr;
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>

                    <div
                        class="group relative cursor-pointer overflow-hidden bg-white border rounded-lg pt-10 pb-8 shadow-md ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:mt-7 sm:px-10">
                        <a href="{{ route('app.Services') }}">
                            <span
                                class="absolute top-10 z-0 h-20 w-20 rounded-full bg-blue-500 transition-all duration-300 group-hover:scale-[10]"></span>
                            <div class="relative z-10 mx-auto max-w-md">
                                <span
                                    class="grid h-20 w-20 place-items-center rounded-full bg-blue-500 transition-all duration-300 group-hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M5.32894 3.27158C6.56203 2.8332 7.99181 3.10749 8.97878 4.09446C10.0997 5.21537 10.3014 6.90741 9.58382 8.23385L20.2925 18.9437L18.8783 20.3579L8.16933 9.64875C6.84277 10.3669 5.1502 10.1654 4.02903 9.04421C3.04178 8.05696 2.76761 6.62665 3.20652 5.39332L5.44325 7.63C6.02903 8.21578 6.97878 8.21578 7.56457 7.63C8.15035 7.04421 8.15035 6.09446 7.56457 5.50868L5.32894 3.27158ZM15.6963 5.15512L18.8783 3.38736L20.2925 4.80157L18.5247 7.98355L16.757 8.3371L14.6356 10.4584L13.2214 9.04421L15.3427 6.92289L15.6963 5.15512ZM8.97878 13.2868L10.393 14.7011L5.08969 20.0044C4.69917 20.3949 4.066 20.3949 3.67548 20.0044C3.31285 19.6417 3.28695 19.0699 3.59777 18.6774L3.67548 18.5902L8.97878 13.2868Z"
                                            fill="rgba(255,255,255,1)"></path>
                                    </svg>

                                </span>
                                <div
                                    class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p>TasCo provide a variety of local services to enhance your operations, ensuring
                                        smooth efficiency and customized solutions tailored to your needs.
                                    </p>
                                </div>
                                <div class="pt-5 text-base font-semibold ">
                                    <p>
                                        <a href="{{ route('app.Services') }}"
                                            class="text-blue-500 transition-all duration-300 group-hover:text-white">View
                                            Services
                                            &rarr;
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>

                    <div
                        class="group relative cursor-pointer overflow-hidden bg-white border rounded-lg pt-10 pb-8 shadow-md ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:mt-7 sm:rounded-lg sm:px-10">
                        <a href="{{ route('app.customerService') }}">
                            <span
                                class="absolute top-10 z-0 h-20 w-20 rounded-full bg-blue-500 transition-all duration-300 group-hover:scale-[10]"></span>
                            <div class="relative z-10 mx-auto max-w-md">
                                <span
                                    class="grid h-20 w-20 place-items-center rounded-full bg-blue-500 transition-all duration-300 group-hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M19.9381 8H21C22.1046 8 23 8.89543 23 10V14C23 15.1046 22.1046 16 21 16H19.9381C19.446 19.9463 16.0796 23 12 23V21C15.3137 21 18 18.3137 18 15V9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9V16H3C1.89543 16 1 15.1046 1 14V10C1 8.89543 1.89543 8 3 8H4.06189C4.55399 4.05369 7.92038 1 12 1C16.0796 1 19.446 4.05369 19.9381 8ZM3 10V14H4V10H3ZM20 10V14H21V10H20ZM7.75944 15.7849L8.81958 14.0887C9.74161 14.6662 10.8318 15 12 15C13.1682 15 14.2584 14.6662 15.1804 14.0887L16.2406 15.7849C15.0112 16.5549 13.5576 17 12 17C10.4424 17 8.98882 16.5549 7.75944 15.7849Z"
                                            fill="rgba(255,255,255,1)"></path>
                                    </svg>

                                </span>
                                <div
                                    class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                    <p>If you have any questions, feedback, or partnership inquiries, TasCo's customer
                                        service is here to listen and assist—your satisfaction is our priority!</p>
                                </div>
                                <div class="pt-5 text-base font-semibold leading-7">
                                    <p>

                                        <a href="{{ route('app.customerService') }}"
                                            class="text-blue-500 transition-all duration-300 group-hover:text-white">View
                                            Customer Services
                                            &rarr;
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
        </section>
        <!-- End: Browse Section -->

        <!-- Start: Roles Section -->
        <section class="relative pt-20 pb-8 md:pt-16 md:pb-0">

            <div class="container xl:max-w-6xl mx-auto px-4">

                <!-- Start: Heading-->

                <div class="text-center mx-auto mb-12 lg:px-20">
                    <h2 class=" leading-normal mb-4 text-4xl font-bold text-black">The Roles</h2>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">in our community</p>
                </div>
                <!-- End: Heading -->

                <div class="lg:flex border rounded-md shadow-md border-blue-500 mb-12">
                    <div class="relative w-full mb-10 md:w-1/2 lg:mb-0 bg-blue-500">
                        <img src="{{ URL('images/jobseeker.jpg') }}" alt=""
                            class="relative z-40 object-cover w-full md:h-96">
                    </div>
                    <div class="w-full py-6 px-6 mb-10 md:w-1/2 lg:mb-0">
                        <h2 class="md:text-2xl text-3xl font-bold mb-4">The Job Seeker</h2>
                        <div class="w-16 mb-4 border-b-2 border-blue-500"></div>
                        <p class="mt-4 leading-loose">As a valued member of our community, a Job Seeker is an
                            individual actively searching for opportunities within our local service marketplace. Job
                            Seekers play a vital role in connecting with employers who are seeking their specific skills
                            and expertise.</p>
                    </div>
                </div>

                <!-- Roles -->

                <div class="lg:flex border rounded-md shadow-md border-blue-500">
                    <div class="w-full py-6 px-6 mb-10 md:w-1/2 lg:mb-0">
                        <h2 class="md:text-2xl text-3xl font-bold mb-4">The Employer</h2>
                        <div class="w-16 mb-4 border-b-2 border-blue-500"></div>
                        <p class="mt-4 leading-loose">Welcome to the role of an Employer in our thriving community!
                            Employers are the driving force behind the success of our local service marketplace. As an
                            Employer, you have the exciting opportunity to connect with talented individuals and build a
                            team that meets your specific needs.</p>
                    </div>
                    <div class="relative w-full h-full md:w-1/2 lg:mb-0 bg-blue-500">
                        <img src="{{ URL('images/employer.jpg') }}" alt=""
                            class="relative z-40 object-cover w-full md:h-96 ">
                    </div>
                </div>

        </section>
        <!-- End: Roles Section -->

        <!-- Start: Workers Section -->
        <a id="top"></a>
        <section class="relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">

            <div class="container xl:max-w-6xl mx-auto px-4">

                <!-- Start: Heading-->
                <div class="text-center mx-auto mb-12 lg:px-20">
                    <h2 class=" leading-normal mb-4 text-4xl font-bold text-black">Available Worker</h2>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">With their services</p>
                </div>
                <!-- End: Heading -->

                <!-- Your updated form -->
                <form class="mb-12 w-full" action="{{ route('workers.sort') }}#top" method="get">
                    <div class="flex relative">
                        <!-- Your existing button -->
                        <button id="dropdown-button" onclick="toggleDropdown()"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                            type="button">
                            @if (request()->has('category'))
                                {{ $categories->firstWhere('id', request('category'))->name }}
                            @else
                                All categories
                            @endif
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown content -->
                        <div id="dropdown-content"
                            class="hidden absolute z-10 mt-10 bg-white border border-gray-300 rounded-lg shadow-md p-3">
                            <!-- Add "All categories" option -->
                            <a href="{{ route('workers.sort') }}#top"
                                class="block text-sm font-medium text-gray-900 hover:bg-gray-200 p-2">All
                                categories</a>
                            <!-- Add your dynamic categories here -->
                            @foreach ($categories as $category)
                                <a href="{{ route('workers.sort', ['category' => $category->id]) }}#top"
                                    class="block text-sm font-medium text-gray-900 hover:bg-gray-200 p-2">{{ $category->name }}</a>
                            @endforeach
                        </div>

                        <!-- Your updated search input and button -->
                        <div class="relative w-full">
                            <input type="search" id="search-dropdown" name="search"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search for Workers, Category..." required value="{{ old('search') }}" />
                            <button type="submit"
                                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-500 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                                onclick="scrollToElement('top')">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>

                <script>
                    function toggleDropdown() {
                        var dropdownContent = document.getElementById('dropdown-content');
                        dropdownContent.classList.toggle('hidden');
                    }

                    // Function to scroll to a specific element by ID
                    function scrollToElement(elementId) {
                        var element = document.getElementById(elementId);
                        if (element) {
                            element.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                </script>

                <!-- Start: Worker Section Row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">

                    @foreach ($workerUsers->take(6) as $worker)
                        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                            data-wow-duration="1s"
                            style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">

                            <!-- Worker Profile -->
                            <div
                                class="py-8 px-12 mb-12 border border-blue-500 transform transition duration-300 ease-in-out hover:-translate-y-2">
                                <div class="flex flex-col items-center pb-10">
                                    @if ($worker->avatar == 'avatar.png')
                                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                            src="https://ui-avatars.com/api/?name={{ urlencode($worker->name) }}&color=7F9CF5&background=EBF4FF"
                                            alt="{{ $worker->name }}" />
                                    @else
                                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                            src="{{ asset('storage/users-avatar/' . basename($worker->avatar)) }}"
                                            alt="{{ $worker->name }}">
                                    @endif

                                    <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $worker->name }}</h5>
                                    <span class="text-sm text-gray-500">
                                        {{ optional($worker->category)->name }}
                                    </span>

                                    <div class="flex mt-4 md:mt-6">
                                        <a href="{{ route('app.workerprofile', ['worker' => $worker->id]) }}"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            View Profile
                                        </a>
                                        <a href=""
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 ms-3">
                                            Message
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Worker Profile -->

                        </div>
                    @endforeach

                    <!-- See More Jobs Button -->
                    <div class="w-full flex justify-center">
                        <a href="{{ route('app.jobListing') }}"
                            class="w-64 sm:w-auto bg-blue-500 font-medium text-white hover:border hover:border-blue-500 hover:bg-transparent hover:text-blue-500 rounded-lg inline-flex items-center justify-center px-4 py-2.5">See
                            More Workers</a>
                    </div>
                </div>
                <!-- end row -->



            </div>

            </div>

            </div>
            <!-- End: Heading -->
            </div>
        </section>
        <!-- End: Workers Section -->

        <!-- Start: Services Section -->
        <!-- component -->
        <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">

                <!-- Start: Services Section Title -->
                <header class="text-center mx-auto mb-12 lg:px-20">
                    <h2 class="text-4xl leading-normal mb-2 font-bold text-black">Services</h2>
                </header>
                <!-- Start: Services Section Title -->

                <!-- Start: Service Section Row -->

                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp "
                        data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-blue-50 transform transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border
                            hover:bg-transparent
                            hover:border-blue-500
                            hover:text-blue-500
                            hover:rounded-xl
                            ">
                            <div class="inline-block mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.16113 4.46924C5.58508 2.04529 9.44716 1.93599 12.0008 4.14133C14.5528 1.93599 18.4149 2.04529 20.8388 4.46924C23.2584 6.88884 23.3716 10.7414 21.1785 13.2952L13.4142 21.0862C12.6686 21.8318 11.4809 21.8657 10.6952 21.1879L10.5858 21.0862L2.82141 13.2952C0.628282 10.7414 0.741522 6.88884 3.16113 4.46924ZM4.57534 5.88345C2.86819 7.5906 2.81942 10.3281 4.42902 12.0942L4.57534 12.2474L12 19.672L17.3026 14.368L13.7677 10.8332L12.7071 11.8939C11.5355 13.0654 9.636 13.0654 8.46443 11.8939C7.29286 10.7223 7.29286 8.82279 8.46443 7.65122L10.5656 5.54872C8.85292 4.17762 6.37076 4.24042 4.7286 5.73712L4.57534 5.88345ZM13.0606 8.71188C13.4511 8.32135 14.0843 8.32135 14.4748 8.71188L18.7168 12.9538L19.4246 12.2474C21.1819 10.4901 21.1819 7.64081 19.4246 5.88345C17.7174 4.1763 14.9799 4.12752 13.2139 5.73712L13.0606 5.88345L9.87864 9.06543C9.51601 9.42806 9.49011 9.99991 9.80094 10.3924L9.87864 10.4796C10.2413 10.8423 10.8131 10.8682 11.2056 10.5573L11.2929 10.4796L13.0606 8.71188Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold">Approved Services</h3>
                            <p>In our community, services are approved not only by the
                                administration
                                but also by the community!</p>
                        </div>
                        <!-- end service block -->
                    </div>
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".1s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-blue-50 transform transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border
                            hover:bg-transparent
                            hover:border-blue-500
                            hover:text-blue-500
                            hover:rounded-xl
                            ">
                            <div class="inline-block mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14 8V4H5V20H19V9H16V13.6195C16 14.4641 15.5544 15.2529 14.8125 15.7215L12 17.4978L9.18747 15.7215C8.4456 15.2529 8 14.4641 8 13.6195V8H14ZM21 8V20.9932C21 21.5501 20.5552 22 20.0066 22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM10 13.6195C10 13.7698 10.0872 13.9242 10.2554 14.0305L12 15.1323L13.7446 14.0305C13.9128 13.9242 14 13.7698 14 13.6195V10H10V13.6195Z">
                                    </path>
                                </svg>

                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold">Verified Documents</h3>
                            <p>In our community, documents are verified before any transactions
                                happen to keep a safe and secure local area!</p>
                        </div>
                        <!-- end service block -->
                    </div>
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-blue-50 transform transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border
                            hover:bg-transparent
                            hover:border-blue-500
                            hover:text-blue-500
                            hover:rounded-xl
                            ">
                            <div class="inline-block mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM4 18.3851L5.76282 17H20V5H4V18.3851ZM11 13H13V15H11V13ZM11 7H13V12H11V7Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold">Feedbacks</h3>
                            <p>In our community, your feedbacks matters to us and we'll always
                                hear
                                you out if you have concerns or request!</p>
                        </div>
                        <!-- end service block -->
                    </div>
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-blue-50 transform transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border
                            hover:bg-transparent
                            hover:border-blue-500
                            hover:text-blue-500
                            hover:rounded-xl
                            ">
                            <div class="inline-block mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17 9.2L22.2133 5.55071C22.4395 5.39235 22.7513 5.44737 22.9096 5.6736C22.9684 5.75764 23 5.85774 23 5.96033V18.0397C23 18.3158 22.7761 18.5397 22.5 18.5397C22.3974 18.5397 22.2973 18.5081 22.2133 18.4493L17 14.8V19C17 19.5523 16.5523 20 16 20H2C1.44772 20 1 19.5523 1 19V5C1 4.44772 1.44772 4 2 4H16C16.5523 4 17 4.44772 17 5V9.2ZM17 12.3587L21 15.1587V8.84131L17 11.6413V12.3587ZM3 6V18H15V6H3ZM5 8H7V10H5V8Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold">Monitoring</h3>
                            <p>Not only do we monitor your documents, feedbacks, services, we
                                also
                                monitor on how well the community interact with each other</p>
                        </div>
                        <!-- end service block -->
                    </div>
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".1s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-blue-50 transform transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border
                             hover:bg-transparent
                            hover:border-blue-500
                            hover:text-blue-500
                            hover:rounded-xl
                            ">
                            <div class="inline-block mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M6 10V20H19V10H6ZM18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16ZM7 11H9V13H7V11ZM7 14H9V16H7V14ZM7 17H9V19H7V17Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold ">Secure</h3>
                            <p>We secure the safety of every individual that will be working or
                                employing each other. We prioritize security overall along with monitoring.</p>
                        </div>
                        <!-- end service block -->
                    </div>
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-blue-50 transform transition-all duration-300 ease-in-out hover:-translate-y-2 hover:border
                            hover:bg-transparent
                            hover:border-blue-500
                            hover:text-blue-500
                            hover:rounded-xl
                            ">
                            <div class="inline-block mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M5 3V19H21V21H3V3H5ZM20.2929 6.29289L21.7071 7.70711L16 13.4142L13 10.415L8.70711 14.7071L7.29289 13.2929L13 7.58579L16 10.585L20.2929 6.29289Z">
                                    </path>
                                </svg>

                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold">Growth</h3>
                            <p>In our community, every individual matters, we secure, hear, and
                                talk
                                to one another in order to have an efficient growth of the community!
                            </p>
                        </div>
                        <!-- end service block -->
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- End: Services Section -->

        <!-- Start: Apply Now Section -->
        <section class="relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">
                @auth
                    @if (auth()->user()->is_verified)
                        <!-- User is verified, hide the Apply Now Section -->
                    @else
                        <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                            <h5 class="mb-2 text-3xl font-bold">Apply Now</h5>
                            <p class="mb-5 text-base text-gray-500 sm:text-lg">Interested in joining our community?</p>
                            <div
                                class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                                <a href="{{ route('app.applyJobseeker') }}"
                                    class="w-full sm:w-auto bg-blue-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM13 16.083V20H17.6586C16.9423 17.9735 15.1684 16.4467 13 16.083ZM11 20V16.083C8.83165 16.4467 7.05766 17.9735 6.34141 20H11ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.2104 11 16 9.21043 16 7C16 4.78957 14.2104 3 12 3C9.78957 3 8 4.78957 8 7C8 9.21043 9.78957 11 12 11Z"
                                            fill="rgba(255,255,255,1)"></path>
                                    </svg>
                                    <div class="text-left rtl:text-right">
                                        <div class="mb-1 text-xs">Apply as</div>
                                        <div class="-mt-1 font-sans text-sm font-semibold">Job Seeker</div>
                                    </div>
                                </a>
                                <a href="{{ route('app.applyEmployer') }}"
                                    class="w-full sm:w-auto bg-blue-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM4 16V19H20V16H4ZM4 14H20V7H4V14ZM9 3V5H15V3H9ZM11 11H13V13H11V11Z"
                                            fill="rgba(255,255,255,1)"></path>
                                    </svg>
                                    <div class="text-left rtl:text-right">
                                        <div class="mb-1 text-xs">Apply as</div>
                                        <div class="-mt-1 font-sans text-sm font-semibold">Employer</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @else
                    <!-- User is not authenticated, show the Apply Now Section -->
                    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                        <h5 class="mb-2 text-3xl font-bold">Apply Now</h5>
                        <p class="mb-5 text-base text-gray-500 sm:text-lg">Interested in joining our community?</p>
                        <div
                            class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                            <a href="{{ route('app.applyEmployer') }}"
                                class="w-full sm:w-auto bg-blue-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                                <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM13 16.083V20H17.6586C16.9423 17.9735 15.1684 16.4467 13 16.083ZM11 20V16.083C8.83165 16.4467 7.05766 17.9735 6.34141 20H11ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.2104 11 16 9.21043 16 7C16 4.78957 14.2104 3 12 3C9.78957 3 8 4.78957 8 7C8 9.21043 9.78957 11 12 11Z"
                                        fill="rgba(255,255,255,1)"></path>
                                </svg>
                                <div class="text-left rtl:text-right">
                                    <div class="mb-1 text-xs">Apply as</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">Job Seeker</div>
                                </div>
                            </a>
                            <a href="{{ route('app.applyEmployer') }}"
                                class="w-full sm:w-auto bg-blue-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                                <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM4 16V19H20V16H4ZM4 14H20V7H4V14ZM9 3V5H15V3H9ZM11 11H13V13H11V11Z"
                                        fill="rgba(255,255,255,1)"></path>
                                </svg>
                                <div class="text-left rtl:text-right">
                                    <div class="mb-1 text-xs">Apply as</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">Employer</div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </section>
        <!-- End: Apply Now Section -->

        <x-footer />

    </main>
    <script>
        function scrollToBrowseSection() {
            var browseSection = document.getElementById('browse');
            browseSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</x-app-layout>
