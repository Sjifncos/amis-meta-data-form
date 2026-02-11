@extends('layouts.body')
@section('title', 'AMIS Student Metadata Form')
@section('content')

@section('content')
    @include('layouts.header')

{{-- Main Content --}}
<main class="px-4 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">

        {{-- Form Header --}}
        <div class="bg-gray-50 border-b border-[#850038] px-6 sm:px-8 py-6 sm:py-8 text-center">
            <h2 class="font-palatino text-xl sm:text-2xl md:text-3xl font-bold text-[#850038]"> 
                Student Information Update Form
            </h2>
        </div>

        {{-- Form Content --}}
        <div class="px-6 sm:px-8 py-8 sm:py-12">

            {{-- Introduction --}}
            <div class="space-y-5 mb-8 text-black text-sm sm:text-base leading-relaxed text-justify">
                 <p>
                    To ensure the accuracy and completeness of University records, 
                    students are requested to review and update their personal and academic information using this form. 
                    The information collected will be used solely for official University purposes, including academic administration, 
                    student services, and institutional reporting.
                </p>
                <p>
                    Students are expected to provide information that is current, accurate, and complete. 
                    Keeping records up to date helps the University communicate effectively with students and ensures the proper delivery 
                    of academic and administrative services.
                </p>
                <p>
                    All information submitted through this form will be handled in accordance with applicable data privacy policies and regulations. 
                    Students are encouraged to complete this form promptly and to review their entries carefully before submission.
                </p>
                <p>
                    Before proceeding, please take time to read the 
                    <a target="_blank" href="https://our.upcebu.edu.ph/information/privacy-notice-for-students/"
                        class="text-blue-600 hover:text-blue-800 underline font-medium">
                    University of the Philippines Privacy Notice for Students
                    </a>
                        and indicate your agreement.
                </p>
            </div>

            {{-- Agreement --}}
            <div class="mb-12 flex items-start gap-4">
                <input
                    type="checkbox"
                    id="agreement"
                    class="mt-1 w-5 h-5 accent-[#0E6021] rounded cursor-pointer">

                <label for="agreement" class="text-black-700 text-sm sm:text-base cursor-pointer">
                    I agree to the
                    <a target="_blank"
                       href="https://our.upcebu.edu.ph/information/privacy-notice-for-students/"
                       class="text-blue-600 hover:text-blue-800 underline font-medium">
                        UP Privacy Notice for Students
                    </a>
                    <span class="text-red-600">*</span>
                </label>
            </div>

            {{-- Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-3 justify-end">
                <button
                    id="saveBtn"
                    class="w-full sm:w-auto px-8 py-3 border-2 border-gray-400 text-gray-700 font-semibold 
                        rounded hover:bg-gray-50">
                    Save
                </button>
                <button
                    id="nextBtn"
                    data-url="AccessVerification"
                    disabled
                    class="w-full sm:w-auto px-8 py-3 bg-[#850038] text-white font-semibold rounded hover:bg-[#FFAD0D] 
                        disabled:opacity-50 disabled:cursor-not-allowed">
                    Next
                </button>
            </div>

        </div>
    </div>
</main>
@endsection