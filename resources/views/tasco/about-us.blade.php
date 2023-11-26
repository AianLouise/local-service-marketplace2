<x-app-layout>
    <title>{{ isset($pageTitle) ? $pageTitle : 'Tasco' }}</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            About Us
        </h2>

        <style>
            .teamimg:hover{
                border-radius: 2rem;  
                border: rgb(98, 98, 255) 1px solid;
                width: 12rem;  
                height: auto;
                padding: 1rem;
                background-color: white;
                transition: width 2s, height 1s, color 2s, margin-top 2s, padding 1s, border 2s, border-radius 0.5s, transform 2s;
                color: gray;
                z-index: 4;
            }

            .teamimg2:hover{
                border-radius: 2rem;  
                border: rgb(98, 98, 255) 1px solid;
                width: 12rem;  
                transition: width 4s, height 2s, color 2s, margin-top 2s, border 2s, border-radius 0.5s, z-index 1s, transform 2s;
                color: gray;
                z-index: 4;
            }

            .teamimg{
                width: 9rem;
                border-radius: 30rem;
                border: white;
                padding: 2rem;
                background-color: transparent;
                color: transparent;
                z-index: 1;
                padding: 0;
            }

            .teamimg2{
                width: 8rem;
                border-radius: 30rem;
                border: white;
                color: transparent;
                z-index: 1;
                padding: 0;
            }

        </style>
    </x-slot>

<main class="flex flex-wrap flex-row -mx-4 justify-center">
    <div class="py-12">
        <div class="max-w-2xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-4xl font-bold mb-4 text-gray-800">Welcome to TasCo</h1>

                    <p class="text-gray-700 mb-6">
                        TasCo is a dedicated platform that aims to streamline customer service communication
                        and provide efficient solutions for both customers and businesses.
                    </p>

                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Our Mission</h2>

                    <p class="text-gray-700 mb-6">
                        At TasCo, our mission is to create a seamless and user-friendly experience for both
                        customers and businesses. We strive to enhance communication channels, resolve
                        queries promptly, and foster positive interactions.
                    </p>

                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Key Features</h2>

                    <ul class="list-disc list-inside text-gray-700 mb-6">
                        <li>Efficient and organized inbox for managing customer inquiries.</li>
                        <li>User-friendly interface for both customers and customer service representatives.</li>
                        <li>Quick and easy reply system to address customer concerns promptly.</li>
                        <li>Secure and reliable communication platform.</li>
                    </ul>

                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Contact Us</h2>

                    <p class="text-gray-700 mb-6">
                        We value your feedback and are here to assist you. If you have any questions, suggestions,
                        or concerns, please feel free to contact our customer support team at
                        <a href="mailto:support@tasco.com" class="text-blue-500">support@tasco.com</a>.
                    </p>

                    <p class="text-gray-700">
                        Thank you for choosing TasCo for your customer service needs.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-xl max-h-md sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center p-10">
                <h1 class="text-4xl font-bold mb-2 text-gray-800">Our TasCo Team</h1>
                <div class="grid grid-cols-3 text-center pt-16">
                    <div class="teamimg transition-all">
                    <img src="{{ asset('images/Alfaro.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                        <span class="">Alfaro Aian Louise</span>
                        <br>
                        <span class="font-bold p-4">Developer</span>
                     </div>
                     <div class="teamimg transition-all">
                        <img src="{{ asset('images/Capili.JPG') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                            <span class="">Capili Dana Maxine</span>
                            <br>
                            <span class="font-bold p-4">Developer</span>
                         </div>
                         <div class="teamimg transition-all">
                            <img src="{{ asset('images/Castro.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                                <span class="">Castro Shania Nicole</span>
                                <br>
                                <span class="font-bold p-4">Documents</span>
                             </div>
                             <div class="teamimg transition-all">
                                <img src="{{ asset('images/Bautista.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                                    <span class="">Bautista Jo Ann</span>
                                    <br>
                                    <span class="font-bold p-4">Researcher</span>
                                 </div>
                                 <div class="teamimg transition-all">
                                    <img src="{{ asset('images/Gonzales.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                                        <span class="">Gonzales Emmanual Louise</span>
                                        <br>
                                        <span class="font-bold p-4">Documents</span>
                                     </div>
                                     <div class="teamimg transition-all">
                                        <img src="{{ asset('images/Casupang.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                                            <span class="">Casupang Joshua</span>
                                            <br>
                                            <span class="font-bold p-4">Researcher</span>
                                         </div>
                                         <div class="teamimg transition-all">
                                            <img src="{{ asset('images/Dizon.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                                                <span class="">Dizon Joshua</span>
                                                <br>
                                                <span class="font-bold p-4">Documents</span>
                                             </div>
                                             <div class="teamimg transition-all">
                                                <img src="{{ asset('images/Maglalang.jpg') }}" alt="" class="teamimg2 ease-in-out shadow-xl">
                                                    <span class="">Maglalang MR Rey</span>
                                                    <br>
                                                    <span class="font-bold p-4">Developer</span>
                                                 </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</main>    
</x-app-layout>
