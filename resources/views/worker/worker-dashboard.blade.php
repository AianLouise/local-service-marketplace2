<x-app-layout>
    <title>{{ isset($pageTitle) ? $pageTitle : 'Tasco' }}</title>

    <style>
        .template {
            background-color: #fff;
            margin-top: 1rem;
            text-align: left;
            /* width: 60%; */
            height: auto;
            margin-left: 30rem;
        }

        .span-left {
            margin-left: 1.5rem;
        }

        .titleinfo {
            font-weight: bold;
            color: rgb(96, 165, 250)
        }

        #modal,
        #editModal,
        #verify-modal {
            /* padding: 5em; */
            /* max-width: 20rem; */
            top: 40%;
            left: 45%;
            right: 50%;
            /* & > *{
            margin: 0 0 0 0.5rem 0;
        } */
        }
    </style>


    <main class="bg-blue-50">
        <div class="grid grid-cols-2 p-4">
            <!-- Left Column (Calendar) -->
            <div class="flex-1 mb-4 md:mb-0 p-10 pt-4">
                <div id='full-calendar' class="bg-white p-4 shadow-md rounded-md"></div>
            </div>

            <!-- Right Column (Upcoming Schedule) -->
            <div class="flex-1 bg-white p-6 rounded-md divide-y mb-10 mt-4 mr-10">
                <div class="flex justify-between mb-3 items-start">
                    <h2 class="font-medium2 mb-4 text-start">Upcoming Schedule</h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-md text-start">
                        <thead>
                            <tr class="border-b">
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Event</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Start Date</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    End Date</th>
                            </tr>
                        </thead>
                        <tbody {{-- id="upcoming-schedule-table" --}}>
                            <!-- Placeholder for upcoming events -->
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">Upcoming
                                    Event 1</td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">2023-12-10
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">2023-12-12
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">Upcoming
                                    Event 2</td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">2023-12-15
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">2023-12-17
                                </td>
                            </tr>
                            <!-- Add more placeholder events as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div>
            <!-- Center Column (Accepted Job) -->
            <div class="flex-1 bg-white p-4 rounded-md md:mx-4 mb-4">
                <div>
                    <h2 class="font-medium2 mb-4 text-start">Accepted Job</h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-md text-start">
                        <thead>
                            <tr>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Project Title</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Project Description</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Category</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Employer</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Start Date</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    End Date</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="border-b px-6 py-3 text-center text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody id="hiring-application-table">
                            @foreach ($hiringForms as $hiringForm)
                                @if ($hiringForm->status === 'Accepted')
                                    <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->projectTitle }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->projectDescription }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            @php
                                                $workerCategory = $hiringForm->worker ? $hiringForm->worker->category->name : 'N/A';
                                                echo $workerCategory;
                                            @endphp
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->employer->name ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->startDate }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->endDate }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->status }}</td>
                                        <!-- Action Column -->
                                        <td
                                            class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800 text-center">
                                            <a class="open-button text-blue-500" data-id="{{ $hiringForm->id }}"
                                                style="cursor: pointer;">View</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($hiringForms as $hiringForm)
                        <dialog class="content-center shadow-lg rounded-lg m-auto" id="nameModal-{{ $hiringForm->id }}"
                            style="width: 80vw; max-width: 800px; overflow-y: auto;">
                            <div class="text-center grid divide-gray-200 w-full">
                                <div class="bg-white shadow-md p-8 w-full text-center rounded-lg">
                                    <form method="POST" action="" class="overflow-hidden">
                                        @csrf
                                        <!-- Form heading -->
                                        <h1 class="text-lg font-semibold mb-1">Job Hiring Form</h1>

                                        <!-- Worker Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5">
                                            <h2 class="text-sm font-semibold mb-2">Worker Details</h2>

                                            <div class="w-full mb-2">
                                                <label for="workerJobTitle"
                                                    class="block text-xs font-medium text-gray-700">Job Title</label>
                                                <input type="text" name="workerJobTitle" id="workerJobTitle"
                                                    placeholder="Enter worker's job title"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                    value="{{ optional($hiringForm->worker->category)->name }}"
                                                    disabled>
                                            </div>

                                            <div class="w-full mb-2">
                                                <label for="workerFullName"
                                                    class="block text-xs font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="workerFullName" id="workerFullName"
                                                    placeholder="Enter worker's full name"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                    value="{{ isset($hiringForm->worker) ? $hiringForm->worker->name : '' }}"
                                                    disabled>
                                            </div>

                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="workerEmail"
                                                        class="block text-xs font-medium text-gray-700">Email</label>
                                                    <input type="text" name="workerEmail" id="workerEmail"
                                                        placeholder="Enter worker's email"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                        value="{{ isset($hiringForm->worker) ? $hiringForm->worker->email : '' }}"
                                                        disabled>
                                                </div>

                                                <div class="w-1/2 ml-1">
                                                    <label for="workerPhone"
                                                        class="block text-xs font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="workerPhone" id="workerPhone"
                                                        placeholder="Enter worker's phone number"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                        value="{{ isset($hiringForm->worker) ? $hiringForm->worker->phone : '' }}"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Project Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Project Details</h2>
                                            <div class="w-full mb-2">
                                                <label for="projectTitle"
                                                    class="block text-xs font-medium text-gray-700">Project
                                                    Title</label>
                                                <input type="text" name="projectTitle" id="projectTitle"
                                                    placeholder="Enter project title"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required
                                                    value="{{ isset($hiringForm) ? $hiringForm->projectTitle : '' }}">
                                            </div>

                                            <div class="w-full mb-2">
                                                <label for="projectDescription"
                                                    class="block text-xs font-medium text-gray-700">Project
                                                    Description</label>
                                                <textarea name="projectDescription" id="projectDescription" placeholder="Enter project description"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" rows="4" required>{{ isset($hiringForm) ? $hiringForm->projectDescription : '' }}</textarea>
                                            </div>

                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="startDate"
                                                        class="block text-xs font-medium text-gray-700">Start
                                                        Date</label>
                                                    <input type="text" name="startDate" id="startDate"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        placeholder="Select start date" required
                                                        value="{{ isset($hiringForm) ? $hiringForm->startDate : '' }}">
                                                </div>
                                                <div class="w-1/2 ml-1">
                                                    <label for="endDate"
                                                        class="block text-xs font-medium text-gray-700">End
                                                        Date</label>
                                                    <input type="text" name="endDate" id="endDate"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        placeholder="Select end date" required
                                                        value="{{ isset($hiringForm) ? $hiringForm->endDate : '' }}">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Employer Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Employer Details</h2>

                                            <!-- Full Name -->
                                            <div class="w-full mb-2">
                                                <label for="employerFullName"
                                                    class="block text-xs font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="employerFullName" id="employerFullName"
                                                    placeholder="Enter employer's full name"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs"
                                                    value="{{ isset($hiringForm->employer) ? $hiringForm->employer->name : '' }}"
                                                    required>
                                            </div>

                                            <!-- Email -->
                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="employerEmail"
                                                        class="block text-xs font-medium text-gray-700">Email</label>
                                                    <input type="text" name="employerEmail" id="employerEmail"
                                                        placeholder="Enter employer's email"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        value="{{ isset($hiringForm->employer) ? $hiringForm->employer->email : '' }}"
                                                        required>
                                                </div>

                                                <!-- Phone -->
                                                <div class="w-1/2 ml-1">
                                                    <label for="employerPhone"
                                                        class="block text-xs font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="employerPhone" id="employerPhone"
                                                        placeholder="Enter employer's phone number"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        value="{{ isset($hiringForm->employer) ? $hiringForm->employer->phone : '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Scope of Work section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Scope of Work</h2>
                                            <div class="w-full mb-2">
                                                <label for="scopeOfWork"
                                                    class="block text-xs font-medium text-gray-700">Briefly describe
                                                    the
                                                    tasks and responsibilities of the worker.</label>
                                                <textarea name="scopeOfWork" id="scopeOfWork" placeholder="Enter scope of work"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" rows="4" required>{{ isset($hiringForm) ? $hiringForm->scopeOfWork : '' }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Payment Terms section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Payment Terms</h2>

                                            <!-- Total Payment -->
                                            <div class="w-full mb-2">
                                                <label for="totalPayment"
                                                    class="block text-xs font-medium text-gray-700">Total
                                                    Payment</label>
                                                <input type="text" name="totalPayment" id="totalPayment"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs"
                                                    placeholder="Enter total payment" required
                                                    value="{{ isset($hiringForm) ? $hiringForm->totalPayment : '' }}">
                                            </div>

                                            <!-- Payment Frequency -->
                                            <div class="w-full mb-2">
                                                <label for="paymentFrequency"
                                                    class="block text-xs font-medium text-gray-700">Payment
                                                    Frequency</label>
                                                <select name="paymentFrequency" id="paymentFrequency"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required>
                                                    <option value="hourly"
                                                        {{ isset($hiringForm) && $hiringForm->paymentFrequency === 'hourly' ? 'selected' : '' }}>
                                                        Hourly</option>
                                                    <option value="perMilestone"
                                                        {{ isset($hiringForm) && $hiringForm->paymentFrequency === 'perMilestone' ? 'selected' : '' }}>
                                                        Per Milestone</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>

                                            <!-- Payment Method -->
                                            <div class="w-full mb-2">
                                                <label for="paymentMethod"
                                                    class="block text-xs font-medium text-gray-700">Payment
                                                    Method</label>
                                                <select name="paymentMethod" id="paymentMethod"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required>
                                                    <option value="bankTransfer"
                                                        {{ isset($hiringForm) && $hiringForm->paymentMethod === 'bankTransfer' ? 'selected' : '' }}>
                                                        Bank Transfer</option>
                                                    <option value="cash"
                                                        {{ isset($hiringForm) && $hiringForm->paymentMethod === 'cash' ? 'selected' : '' }}>
                                                        Cash</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="mt-2">
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded text-xs">
                                                Accept
                                            </button>

                                            <button type="button" onclick="rejectApplicationForm()"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs">
                                                Reject
                                            </button>
                                        </div>

                                        <script>
                                            function rejectApplicationForm() {
                                                // Add your logic for rejecting the application
                                                console.log('Rejecting application');
                                                // You can also perform additional actions as needed
                                            }
                                        </script>

                                    </form>
                                </div>

                                <!-- Load flatpickr script after the form -->
                                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                                <script>
                                    flatpickr('#startDate, #endDate', {
                                        dateFormat: 'Y-m-d', // Store the date in Y-m-d format
                                        altInput: true, // Create an alternate input field
                                        altFormat: 'F j, Y', // Format for the alternate input field (displayed in the textbox)
                                        // Add other Flatpickr options as needed
                                    });
                                </script>
                            </div>
                        </dialog>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add click event listener to open-button
                const openButtons = document.querySelectorAll('.open-button');
                openButtons.forEach((openButton) => {
                    openButton.addEventListener('click', () => {
                        const hiringFormId = openButton.getAttribute('data-id');
                        const modalId = `nameModal-${hiringFormId}`;
                        const modal = document.getElementById(modalId);
                        modal.showModal();
                    });
                });

                // Add click event listener to close the dialog when clicking outside
                const modals = document.querySelectorAll('dialog');
                modals.forEach((modal) => {
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) {
                            modal.close();
                        }
                    });
                });
            });
        </script>

        <div>
            <!-- Center Column (Hiring Application) -->
            <div class="flex-1 bg-white p-4 rounded-md md:mx-4">
                <div>
                    <h2 class="font-medium2 mb-4 text-start">Hiring Applications</h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-md text-start">
                        <thead>
                            <tr>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Project Title</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Project Description</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Category</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Employer</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Start Date</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    End Date</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="border-b px-6 py-3 text-center text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody id="hiring-application-table">
                            @foreach ($hiringForms as $hiringForm)
                                <tr class="border-b">
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        {{ $hiringForm->projectTitle }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        {{ $hiringForm->projectDescription }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        @php
                                            $workerCategory = $hiringForm->worker ? $hiringForm->worker->category->name : 'N/A';
                                            echo $workerCategory;
                                        @endphp
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        {{ $hiringForm->employer->name ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        {{ $hiringForm->startDate }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        {{ $hiringForm->endDate }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                        {{ $hiringForm->status }}</td>
                                    <!-- Action Column -->
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800 text-center">
                                        <a class="open-button text-blue-500" data-id="{{ $hiringForm->id }}"
                                            style="cursor: pointer;">View</a>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($hiringForms as $hiringForm)
                        <dialog class="content-center shadow-lg rounded-lg m-auto"
                            id="nameModal-{{ $hiringForm->id }}"
                            style="width: 80vw; max-width: 800px; overflow-y: auto;">
                            <div class="text-center grid divide-gray-200 w-full">
                                <div class="bg-white shadow-md p-8 w-full text-center rounded-lg">
                                    <form method="POST" action="" class="overflow-hidden">
                                        @csrf
                                        <!-- Form heading -->
                                        <h1 class="text-lg font-semibold mb-1">Job Hiring Form</h1>

                                        <!-- Worker Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5">
                                            <h2 class="text-sm font-semibold mb-2">Worker Details</h2>

                                            <div class="w-full mb-2">
                                                <label for="workerJobTitle"
                                                    class="block text-xs font-medium text-gray-700">Job Title</label>
                                                <input type="text" name="workerJobTitle" id="workerJobTitle"
                                                    placeholder="Enter worker's job title"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                    value="{{ optional($hiringForm->worker->category)->name }}"
                                                    disabled>
                                            </div>

                                            <div class="w-full mb-2">
                                                <label for="workerFullName"
                                                    class="block text-xs font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="workerFullName" id="workerFullName"
                                                    placeholder="Enter worker's full name"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                    value="{{ isset($hiringForm->worker) ? $hiringForm->worker->name : '' }}"
                                                    disabled>
                                            </div>

                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="workerEmail"
                                                        class="block text-xs font-medium text-gray-700">Email</label>
                                                    <input type="text" name="workerEmail" id="workerEmail"
                                                        placeholder="Enter worker's email"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                        value="{{ isset($hiringForm->worker) ? $hiringForm->worker->email : '' }}"
                                                        disabled>
                                                </div>

                                                <div class="w-1/2 ml-1">
                                                    <label for="workerPhone"
                                                        class="block text-xs font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="workerPhone" id="workerPhone"
                                                        placeholder="Enter worker's phone number"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                        value="{{ isset($hiringForm->worker) ? $hiringForm->worker->phone : '' }}"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Project Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Project Details</h2>
                                            <div class="w-full mb-2">
                                                <label for="projectTitle"
                                                    class="block text-xs font-medium text-gray-700">Project
                                                    Title</label>
                                                <input type="text" name="projectTitle" id="projectTitle"
                                                    placeholder="Enter project title"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required
                                                    value="{{ isset($hiringForm) ? $hiringForm->projectTitle : '' }}">
                                            </div>

                                            <div class="w-full mb-2">
                                                <label for="projectDescription"
                                                    class="block text-xs font-medium text-gray-700">Project
                                                    Description</label>
                                                <textarea name="projectDescription" id="projectDescription" placeholder="Enter project description"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" rows="4" required>{{ isset($hiringForm) ? $hiringForm->projectDescription : '' }}</textarea>
                                            </div>

                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="startDate"
                                                        class="block text-xs font-medium text-gray-700">Start
                                                        Date</label>
                                                    <input type="text" name="startDate" id="startDate"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        placeholder="Select start date" required
                                                        value="{{ isset($hiringForm) ? $hiringForm->startDate : '' }}">
                                                </div>
                                                <div class="w-1/2 ml-1">
                                                    <label for="endDate"
                                                        class="block text-xs font-medium text-gray-700">End
                                                        Date</label>
                                                    <input type="text" name="endDate" id="endDate"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        placeholder="Select end date" required
                                                        value="{{ isset($hiringForm) ? $hiringForm->endDate : '' }}">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Employer Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Employer Details</h2>

                                            <!-- Full Name -->
                                            <div class="w-full mb-2">
                                                <label for="employerFullName"
                                                    class="block text-xs font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="employerFullName" id="employerFullName"
                                                    placeholder="Enter employer's full name"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs"
                                                    value="{{ isset($hiringForm->employer) ? $hiringForm->employer->name : '' }}"
                                                    required>
                                            </div>

                                            <!-- Email -->
                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="employerEmail"
                                                        class="block text-xs font-medium text-gray-700">Email</label>
                                                    <input type="text" name="employerEmail" id="employerEmail"
                                                        placeholder="Enter employer's email"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        value="{{ isset($hiringForm->employer) ? $hiringForm->employer->email : '' }}"
                                                        required>
                                                </div>

                                                <!-- Phone -->
                                                <div class="w-1/2 ml-1">
                                                    <label for="employerPhone"
                                                        class="block text-xs font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="employerPhone" id="employerPhone"
                                                        placeholder="Enter employer's phone number"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        value="{{ isset($hiringForm->employer) ? $hiringForm->employer->phone : '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Scope of Work section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Scope of Work</h2>
                                            <div class="w-full mb-2">
                                                <label for="scopeOfWork"
                                                    class="block text-xs font-medium text-gray-700">Briefly describe
                                                    the
                                                    tasks and responsibilities of the worker.</label>
                                                <textarea name="scopeOfWork" id="scopeOfWork" placeholder="Enter scope of work"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" rows="4" required>{{ isset($hiringForm) ? $hiringForm->scopeOfWork : '' }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Payment Terms section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Payment Terms</h2>

                                            <!-- Total Payment -->
                                            <div class="w-full mb-2">
                                                <label for="totalPayment"
                                                    class="block text-xs font-medium text-gray-700">Total
                                                    Payment</label>
                                                <input type="text" name="totalPayment" id="totalPayment"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs"
                                                    placeholder="Enter total payment" required
                                                    value="{{ isset($hiringForm) ? $hiringForm->totalPayment : '' }}">
                                            </div>

                                            <!-- Payment Frequency -->
                                            <div class="w-full mb-2">
                                                <label for="paymentFrequency"
                                                    class="block text-xs font-medium text-gray-700">Payment
                                                    Frequency</label>
                                                <select name="paymentFrequency" id="paymentFrequency"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required>
                                                    <option value="hourly"
                                                        {{ isset($hiringForm) && $hiringForm->paymentFrequency === 'hourly' ? 'selected' : '' }}>
                                                        Hourly</option>
                                                    <option value="perMilestone"
                                                        {{ isset($hiringForm) && $hiringForm->paymentFrequency === 'perMilestone' ? 'selected' : '' }}>
                                                        Per Milestone</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>

                                            <!-- Payment Method -->
                                            <div class="w-full mb-2">
                                                <label for="paymentMethod"
                                                    class="block text-xs font-medium text-gray-700">Payment
                                                    Method</label>
                                                <select name="paymentMethod" id="paymentMethod"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required>
                                                    <option value="bankTransfer"
                                                        {{ isset($hiringForm) && $hiringForm->paymentMethod === 'bankTransfer' ? 'selected' : '' }}>
                                                        Bank Transfer</option>
                                                    <option value="cash"
                                                        {{ isset($hiringForm) && $hiringForm->paymentMethod === 'cash' ? 'selected' : '' }}>
                                                        Cash</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="mt-2">
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded text-xs">
                                                Accept
                                            </button>

                                            <button type="button" onclick="rejectApplicationForm()"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs">
                                                Reject
                                            </button>
                                        </div>

                                        <script>
                                            function rejectApplicationForm() {
                                                // Add your logic for rejecting the application
                                                console.log('Rejecting application');
                                                // You can also perform additional actions as needed
                                            }
                                        </script>

                                    </form>
                                </div>

                                <!-- Load flatpickr script after the form -->
                                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                                <script>
                                    flatpickr('#startDate, #endDate', {
                                        dateFormat: 'Y-m-d', // Store the date in Y-m-d format
                                        altInput: true, // Create an alternate input field
                                        altFormat: 'F j, Y', // Format for the alternate input field (displayed in the textbox)
                                        // Add other Flatpickr options as needed
                                    });
                                </script>
                            </div>
                        </dialog>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add click event listener to open-button
                const openButtons = document.querySelectorAll('.open-button');
                openButtons.forEach((openButton) => {
                    openButton.addEventListener('click', () => {
                        const hiringFormId = openButton.getAttribute('data-id');
                        const modalId = `nameModal-${hiringFormId}`;
                        const modal = document.getElementById(modalId);
                        modal.showModal();
                    });
                });

                // Add click event listener to close the dialog when clicking outside
                const modals = document.querySelectorAll('dialog');
                modals.forEach((modal) => {
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) {
                            modal.close();
                        }
                    });
                });
            });
        </script>



        <div>
            <!-- Center Column (Accepted Job) -->
            <div class="flex-1 bg-white p-4 rounded-md md:mx-4 mb-4 mt-4">
                <div>
                    <h2 class="font-medium2 mb-4 text-start">Completed</h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-md text-start">
                        <thead>
                            <tr>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Project Title</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Project Description</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Category</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Employer</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Start Date</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    End Date</th>
                                <th
                                    class="border-b px-6 py-3 text-left text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="border-b px-6 py-3 text-center text-xs font-medium2 text-gray-800 uppercase tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody id="hiring-application-table">
                            @foreach ($hiringForms as $hiringForm)
                                @if ($hiringForm->status === 'Completed')
                                    <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->projectTitle }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->projectDescription }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            @php
                                                $workerCategory = $hiringForm->worker ? $hiringForm->worker->category->name : 'N/A';
                                                echo $workerCategory;
                                            @endphp
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->employer->name ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->startDate }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->endDate }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800">
                                            {{ $hiringForm->status }}</td>
                                        <!-- Action Column -->
                                        <td
                                            class="px-6 py-4 whitespace-nowrap font-medium2 text-sm text-gray-800 text-center">
                                            <a class="open-button text-blue-500" data-id="{{ $hiringForm->id }}"
                                                style="cursor: pointer;">View</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($hiringForms as $hiringForm)
                        <dialog class="content-center shadow-lg rounded-lg m-auto"
                            id="nameModal-{{ $hiringForm->id }}"
                            style="width: 80vw; max-width: 800px; overflow-y: auto;">
                            <div class="text-center grid divide-gray-200 w-full">
                                <div class="bg-white shadow-md p-8 w-full text-center rounded-lg">
                                    <form method="POST" action="" class="overflow-hidden">
                                        @csrf
                                        <!-- Form heading -->
                                        <h1 class="text-lg font-semibold mb-1">Job Hiring Form</h1>

                                        <!-- Worker Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5">
                                            <h2 class="text-sm font-semibold mb-2">Worker Details</h2>

                                            <div class="w-full mb-2">
                                                <label for="workerJobTitle"
                                                    class="block text-xs font-medium text-gray-700">Job Title</label>
                                                <input type="text" name="workerJobTitle" id="workerJobTitle"
                                                    placeholder="Enter worker's job title"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                    value="{{ optional($hiringForm->worker->category)->name }}"
                                                    disabled>
                                            </div>

                                            <div class="w-full mb-2">
                                                <label for="workerFullName"
                                                    class="block text-xs font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="workerFullName" id="workerFullName"
                                                    placeholder="Enter worker's full name"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                    value="{{ isset($hiringForm->worker) ? $hiringForm->worker->name : '' }}"
                                                    disabled>
                                            </div>

                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="workerEmail"
                                                        class="block text-xs font-medium text-gray-700">Email</label>
                                                    <input type="text" name="workerEmail" id="workerEmail"
                                                        placeholder="Enter worker's email"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                        value="{{ isset($hiringForm->worker) ? $hiringForm->worker->email : '' }}"
                                                        disabled>
                                                </div>

                                                <div class="w-1/2 ml-1">
                                                    <label for="workerPhone"
                                                        class="block text-xs font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="workerPhone" id="workerPhone"
                                                        placeholder="Enter worker's phone number"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs text-center"
                                                        value="{{ isset($hiringForm->worker) ? $hiringForm->worker->phone : '' }}"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Project Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Project Details</h2>
                                            <div class="w-full mb-2">
                                                <label for="projectTitle"
                                                    class="block text-xs font-medium text-gray-700">Project
                                                    Title</label>
                                                <input type="text" name="projectTitle" id="projectTitle"
                                                    placeholder="Enter project title"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required
                                                    value="{{ isset($hiringForm) ? $hiringForm->projectTitle : '' }}">
                                            </div>

                                            <div class="w-full mb-2">
                                                <label for="projectDescription"
                                                    class="block text-xs font-medium text-gray-700">Project
                                                    Description</label>
                                                <textarea name="projectDescription" id="projectDescription" placeholder="Enter project description"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" rows="4" required>{{ isset($hiringForm) ? $hiringForm->projectDescription : '' }}</textarea>
                                            </div>

                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="startDate"
                                                        class="block text-xs font-medium text-gray-700">Start
                                                        Date</label>
                                                    <input type="text" name="startDate" id="startDate"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        placeholder="Select start date" required
                                                        value="{{ isset($hiringForm) ? $hiringForm->startDate : '' }}">
                                                </div>
                                                <div class="w-1/2 ml-1">
                                                    <label for="endDate"
                                                        class="block text-xs font-medium text-gray-700">End
                                                        Date</label>
                                                    <input type="text" name="endDate" id="endDate"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        placeholder="Select end date" required
                                                        value="{{ isset($hiringForm) ? $hiringForm->endDate : '' }}">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Employer Details section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Employer Details</h2>

                                            <!-- Full Name -->
                                            <div class="w-full mb-2">
                                                <label for="employerFullName"
                                                    class="block text-xs font-medium text-gray-700">Full Name</label>
                                                <input type="text" name="employerFullName" id="employerFullName"
                                                    placeholder="Enter employer's full name"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs"
                                                    value="{{ isset($hiringForm->employer) ? $hiringForm->employer->name : '' }}"
                                                    required>
                                            </div>

                                            <!-- Email -->
                                            <div class="flex mb-2">
                                                <div class="w-1/2 mr-1">
                                                    <label for="employerEmail"
                                                        class="block text-xs font-medium text-gray-700">Email</label>
                                                    <input type="text" name="employerEmail" id="employerEmail"
                                                        placeholder="Enter employer's email"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        value="{{ isset($hiringForm->employer) ? $hiringForm->employer->email : '' }}"
                                                        required>
                                                </div>

                                                <!-- Phone -->
                                                <div class="w-1/2 ml-1">
                                                    <label for="employerPhone"
                                                        class="block text-xs font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="employerPhone" id="employerPhone"
                                                        placeholder="Enter employer's phone number"
                                                        class="mt-1 p-2 w-full border rounded-md text-xs"
                                                        value="{{ isset($hiringForm->employer) ? $hiringForm->employer->phone : '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Scope of Work section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Scope of Work</h2>
                                            <div class="w-full mb-2">
                                                <label for="scopeOfWork"
                                                    class="block text-xs font-medium text-gray-700">Briefly describe
                                                    the
                                                    tasks and responsibilities of the worker.</label>
                                                <textarea name="scopeOfWork" id="scopeOfWork" placeholder="Enter scope of work"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" rows="4" required>{{ isset($hiringForm) ? $hiringForm->scopeOfWork : '' }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Payment Terms section -->
                                        <div class="bg-blue-100 p-10 rounded-lg pt-5 pb-5 mt-2">
                                            <h2 class="text-sm font-semibold mb-2">Payment Terms</h2>

                                            <!-- Total Payment -->
                                            <div class="w-full mb-2">
                                                <label for="totalPayment"
                                                    class="block text-xs font-medium text-gray-700">Total
                                                    Payment</label>
                                                <input type="text" name="totalPayment" id="totalPayment"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs"
                                                    placeholder="Enter total payment" required
                                                    value="{{ isset($hiringForm) ? $hiringForm->totalPayment : '' }}">
                                            </div>

                                            <!-- Payment Frequency -->
                                            <div class="w-full mb-2">
                                                <label for="paymentFrequency"
                                                    class="block text-xs font-medium text-gray-700">Payment
                                                    Frequency</label>
                                                <select name="paymentFrequency" id="paymentFrequency"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required>
                                                    <option value="hourly"
                                                        {{ isset($hiringForm) && $hiringForm->paymentFrequency === 'hourly' ? 'selected' : '' }}>
                                                        Hourly</option>
                                                    <option value="perMilestone"
                                                        {{ isset($hiringForm) && $hiringForm->paymentFrequency === 'perMilestone' ? 'selected' : '' }}>
                                                        Per Milestone</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>

                                            <!-- Payment Method -->
                                            <div class="w-full mb-2">
                                                <label for="paymentMethod"
                                                    class="block text-xs font-medium text-gray-700">Payment
                                                    Method</label>
                                                <select name="paymentMethod" id="paymentMethod"
                                                    class="mt-1 p-2 w-full border rounded-md text-xs" required>
                                                    <option value="bankTransfer"
                                                        {{ isset($hiringForm) && $hiringForm->paymentMethod === 'bankTransfer' ? 'selected' : '' }}>
                                                        Bank Transfer</option>
                                                    <option value="cash"
                                                        {{ isset($hiringForm) && $hiringForm->paymentMethod === 'cash' ? 'selected' : '' }}>
                                                        Cash</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="mt-2">
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded text-xs">
                                                Accept
                                            </button>

                                            <button type="button" onclick="rejectApplicationForm()"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs">
                                                Reject
                                            </button>
                                        </div>

                                        <script>
                                            function rejectApplicationForm() {
                                                // Add your logic for rejecting the application
                                                console.log('Rejecting application');
                                                // You can also perform additional actions as needed
                                            }
                                        </script>

                                    </form>
                                </div>

                                <!-- Load flatpickr script after the form -->
                                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                                <script>
                                    flatpickr('#startDate, #endDate', {
                                        dateFormat: 'Y-m-d', // Store the date in Y-m-d format
                                        altInput: true, // Create an alternate input field
                                        altFormat: 'F j, Y', // Format for the alternate input field (displayed in the textbox)
                                        // Add other Flatpickr options as needed
                                    });
                                </script>
                            </div>
                        </dialog>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add click event listener to open-button
                const openButtons = document.querySelectorAll('.open-button');
                openButtons.forEach((openButton) => {
                    openButton.addEventListener('click', () => {
                        const hiringFormId = openButton.getAttribute('data-id');
                        const modalId = `nameModal-${hiringFormId}`;
                        const modal = document.getElementById(modalId);
                        modal.showModal();
                    });
                });

                // Add click event listener to close the dialog when clicking outside
                const modals = document.querySelectorAll('dialog');
                modals.forEach((modal) => {
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) {
                            modal.close();
                        }
                    });
                });
            });
        </script>


    </main>


    <!-- Add this line to your existing code -->
    <script src='{{ asset('node_modules/@fullcalendar/core/main.js') }}'></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Set the base URL for AJAX requests
            var SITEURL = "{{ url('/') }}";

            // Setup CSRF headers for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Initialize FullCalendar
            var calendar = $('#full-calendar').fullCalendar({
                editable: true,
                events: SITEURL + "/fullcalender",
                displayEventTime: false,
                editable: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                dayRender: function(date, cell) {
                    // Get today's date
                    var today = new Date();

                    // Check if the current cell represents today's date
                    if (date.isSame(today, 'day')) {
                        cell.css('background-color', 'rgb(239 246 255)');
                        cell.css('color', 'white'); // Set text color to white for better visibility
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                        $.ajax({
                            url: SITEURL + "/fullcalenderAjax",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                type: 'add'
                            },
                            type: "POST",
                            success: function(data) {
                                displayMessage("Event Created Successfully");
                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                    $.ajax({
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                            title: event.title,
                            start: start,
                            end: end,
                            id: event.id,
                            type: 'update'
                        },
                        type: "POST",
                        success: function(response) {
                            displayMessage("Event Updated Successfully");
                        }
                    });
                },
                eventClick: function(event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            success: function(response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event Deleted Successfully");
                            }
                        });
                    }
                }
            });

            // Display a Toastr success message
            function displayMessage(message) {
                toastr.success(message, 'Event');
            }
        });

        // Function to update the upcoming schedule table
        function updateUpcomingSchedule(schedule) {
            var upcomingScheduleTable = document.querySelector('#upcoming-schedule-table');
            upcomingScheduleTable.innerHTML = '';

            schedule.forEach(function(event) {
                var row = upcomingScheduleTable.insertRow();
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);

                cell1.textContent = event.title;
                cell2.textContent = event.start;
                cell3.textContent = event.end;
            });
        }

        // Placeholder data for upcoming schedule
        var placeholderUpcomingSchedule = [{
                title: 'Upcoming Event 1',
                start: '2023-12-10',
                end: '2023-12-12'
            },
            {
                title: 'Upcoming Event 2',
                start: '2023-12-15',
                end: '2023-12-17'
            },
            // Add more placeholder events as needed
        ];

        // Update the upcoming schedule with placeholder data
        updateUpcomingSchedule(placeholderUpcomingSchedule);
    </script>
</x-app-layout>
