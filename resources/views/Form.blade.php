@extends('layouts.body')
@section('title', 'Student Meta-Data Form')
@section('content')

{{-- Header --}}
@section('content')
    @include('layouts.header')
<!-- Tabs -->
        @section('content')
            @include('layouts.Tabs')
<script>
    const civilStatus = document.getElementById('civilstatus');
    const marriageSection = document.getElementById('marriagesection');
    const marriageDate = document.getElementById('marriagedate');

    function toggleMarriagesection() {
        const value = civilStatus.value;

        if (value === 'single' || value === 'noans' || value === 'livin' || value==='select' || value==='annuled' || value==='separated' || value==='widowed') 
        {
            marriageSection.classList.add('hidden');
            marriageDate.removeAttribute('required');
            marriageDate.value = '';
        } else {
            marriageSection.classList.remove('hidden');
            marriageDate.setAttribute('required', 'required');
        }
    }

    civilStatus.addEventListener('change', toggleMarriagesection);

    // Run on page load (important for old values)
    toggleMarriagesection();
</script>
@endsection