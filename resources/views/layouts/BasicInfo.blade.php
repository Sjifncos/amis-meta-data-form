 <!-- Main Content -->
<div class="w-full max-w-2xl lg:max-w-5xl xl:max-w-6xl 
                bg-white rounded-lg rounded-t-none shadow-2xl 
                p-8 md:p-12 
                mx-auto -mt-[1px]"> 
        <h2 class="font-palatino new roman sm:text-xl md:text-2xl lg:text-3xl font-bold text-[#850038] mb-6 text-center">
                Basic Information
        </h2>
            <!-- Form Content -->
    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        @csrf
        <!-- Degree Program (full row) -->
        <div class="col-span-1 md:col-span-2">
            <label for="degreeprogram" class="font-medium">
                Degree Program
            </label>
            <select id="degreeprogram" name="degreeprogram" required
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-1">
                <option value="" disabled selected>Please Select</option>
                <option value="AA Sports Studies">AA Sports Studies</option>
                <option value="B Fine Arts (Product Design)">B Fine Arts (Product Design)</option>
                <option value="B Fine Arts (Studio Arts)">B Fine Arts (Studio Arts)</option>
                <option value="B Physical Education">B Physical Education</option>
                <option value="B Sports Science">B Sports Science</option>
                <option value="BA Communication">BA Communication</option>
                <option value="BA Political Science">BA Political Science</option>
                <option value="BA Psychology">BA Psychology</option>
                <option value="BA Psychology (2005 curriculum)">BA Psychology (2005 curriculum)</option>
                <option value="BS Accountancy">BS Accountancy</option>
                <option value="BS Biology">BS Biology</option>
                <option value="BS Biology (2005 curriculum)">BS Biology (2005 curriculum)</option>
                <option value="BS Computer Science">BS Computer Science</option>
                <option value="BS Management">BS Management</option>
                <option value="BS Management (Finance)">BS Management (Finance)</option>
                <option value="BS Management (Marketing)">BS Management (Marketing)</option>
                <option value="BS Mathematics">BS Mathematics</option>
                <option value="BS Statistics">BS Statistics</option>
                <option value="C Fine Arts (Product Design)">C Fine Arts (Product Design)</option>
                <option value="C Fine Arts (Studio Arts)">C Fine Arts (Studio Arts)</option>
                <option value="Master in Public Affairs (Agrarian and Rurban Development Studies)">Master in Public Affairs (Agrarian and Rurban Development Studies)</option>
                <option value="Master in Public Affairs (Education Management)">Master in Public Affairs (Education Management)</option>
                <option value="Master in Public Affairs (Strategic Planning and Public Policy)">Master in Public Affairs (Strategic Planning and Public Policy)</option>
                <option value="Master of Arts in Communication and Media">Master of Arts in Communication and Media</option>
                <option value="Master of Business Administration">Master of Business Administration</option>
                <option value="Master of Education (Biology)">Master of Education (Biology)</option>
                <option value="Master of Education (Chemistry)">Master of Education (Chemistry)</option>
                <option value="Master of Education (English as a Second Language)">Master of Education (English as a Second Language)</option>
                <option value="Master of Education (Filipino)">Master of Education (Filipino)</option>
                <option value="Master of Education (Mathematics)">Master of Education (Mathematics)</option>
                <option value="Master of Education (Physics)">Master of Education (Physics)</option>
                <option value="Master of Education (Social Studies)">Master of Education (Social Studies)</option>
                <option value="Master of Science in Computer Science">Master of Science in Computer Science</option>
                <option value="Master of Science in Environmental Science">Master of Science in Environmental Science</option>
                <option value="Master of Science in Environmental Studies">Master of Science in Environmental Studies</option>
                <option value="Master of Science in Mathematics (Applied Mathematics)">Master of Science in Mathematics (Applied Mathematics)</option>
                <option value="Master of Science in Mathematics (Mathematics Education)">Master of Science in Mathematics (Mathematics Education)</option>
                <option value="Master of Science in Mathematics (Pure Mathematics)">Master of Science in Mathematics (Pure Mathematics)</option>
                <option value="Professional Master in Data Science (Computing)">Professional Master in Data Science (Computing)</option>
            </select>
        </div>

        <!-- First Name -->
        <div class="relative w-full">
            <input required id="firstname" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="firstname" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                First/Given Name <span class="text-red-500 ml-1">*</span>
            </label>
        </div>

        <!-- Middle Name -->
        <div class="relative w-full">
            <input required id="middlename" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="middlename" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Middle Name
            </label>
        </div>

        <!-- Last Name -->
        <div class="relative w-full">
            <input required id="lastname" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="lastname" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Last Name <span class="text-red-500 ml-1">*</span>
            </label>
        </div>

        <!-- Name Suffix -->
        <div class="relative w-full">
            <input required id="namesuffix" type="text" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
            <label for="namesuffix" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white px-1 text-sm text-gray-500 pointer-events-none transition-all duration-150 peer-focus:top-0 peer-focus:left-2 peer-focus:text-xs peer-focus:text-[#0E6021] peer-valid:top-0 peer-valid:left-2 peer-valid:text-xs peer-valid:text-[#0E6021]">
                Name Suffix
            </label>
        </div>
        <!-- Birth Date -->
        <div class="relative w-full">
            <label for="dob" class="font-medium">Birth Date</label>
            <input required type="date" id="dob" name="dob" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2"/>
        </div>

        <!-- Sex at Birth -->
        <div class="relative w-full">
            <label for="sexatbirth" class="font-medium">Sex at Birth</label>
            <select id="sexatbirth" name="sexatbirth" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors mt-2">
                <option disabled selected>Please Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

    <!-- Birth Place + Civil Status Row -->
    <div class="md:col-span-1 flex flex-col w-full">
        <label for="birthplace" class="font-medium">
            Birth Place
        </label>
        <input required id="birthplace" type="text" 
            class="peer w-full px-4 py-3 text-base bg-white outline-none
                    border-2 border-gray-300 rounded-md
                    focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                    transition-colors mt-2"/>
        <p class="text-[12px] text-gray-500 mt-1">ex. Cebu City</p>
    </div>

    <div class="md:col-span-1 flex flex-col w-full">
        <label for="civilstatus" class="font-medium">
            Civil Status
        </label>
        <select id="civilstatus" name="civilstatus" required
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-md
                focus:outline-none focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021]
                transition-colors mt-2">
            <option value="select" disabled selected>Please Select</option>
            <option value="single">Single (never married)</option>
            <option value="married">Married</option>
            <option value="separated">Separated (legally or de facto)</option>
            <option value="annuled">Annulled / Marriage declared null and void</option>
            <option value="widowed">Widowed</option>
            <option value="livin">Living with partner / Cohabiting</option>
            <option value="noans">Prefer not to answer</option>
        </select>
    </div>
        <div id="marriagesection" class="col-span-1 md:col-span-2 hidden">

        <!-- Marriage Date -->
        <div class="mb-6">
            <label for="marriagedate" class="text-base sm:text-lg md:text-xl font-regular text-[#850038]">
                Marriage Date
            </label>
            <input required type="date" id="marriagedate" name="marriagedate" class="peer w-full px-4 py-3 text-base bg-white outline-none border-2 border-gray-300 rounded-md focus:border-[#0E6021] focus:ring-1 focus:ring-[#0E6021] transition-colors"/>
        </div>

        <!-- Article 370 Info + Preferred Name -->
        <div class="col-span-1 md:col-span-2 text-justify">
        <p>
            Under <span class="font-semibold"> Article 370</span> of the Civil Code of the Philippines, 
            a married woman may choose how her name will appear after marriage. 
            While marriage does not legally require a change in name, the law allows a woman to:
        </p>

        <ol class="list-decimal pl-6 mt-3 space-y-3 marker:text-[#850038]">
            <li id="fullmaidenname">
                Retain her full maiden name 
                <span class="font-semibold">(Sharon Gamboa Cuneta)</span>
            </li>
            <li id="hyphenatedsurname">
                Use a hyphenated surname, combining her maiden surname and her husband’s surname 
                <span class="font-semibold">(Sharon Gamboa Cuneta-Pangilinan)</span>
                
            </li>
            <li id="husbandsurname"> 
                Adopt her husband’s surname by placing it after her maiden first name and surname
                <spann class="font-semibold">(Sharon Cuneta Pangilinan)</span> 
            </li>
        </ol>

        <p class="mt-3">
            Please select one of the following options to help us record your preferred name format 
            for official and academic purposes.
        </p>
        <p class="mt-6 font-bold">
            Preferred Name <span class="text-red-500 ml-1">*</span>
        </p>
    <div class="mt-3 space-y-3">
        <label class="flex items-start gap-2 text-justify">
            <input type="radio" name="name_format" class="mt-1 accent-[#0E6021]">
            <span>
                Full maiden name (First name, Middle name, Surname)
            </span>
        </label>

        <label class="flex items-start gap-2 text-justify">
            <input type="radio" name="name_format" class="mt-1 accent-[#0E6021]">
            <span>
                Hyphenated surname (First name, Middle name, Surname-Husband's Surname)
            </span>
        </label>

        <label class="flex items-start gap-2 text-justify">
            <input type="radio" name="name_format" class="mt-1 accent-[#0E6021]">
            <span>
                Husband's surname (First name, Surname, Husband's Surname)
            </span>
        </label>
    </div> 
        
    </div>
        </div>
            @include('layouts.button')
</div>