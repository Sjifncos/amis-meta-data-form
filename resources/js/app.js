 tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                        palatino: ['Palatino Linotype', 'Palatino', 'serif'],
                    },
                },
            },
        }

const agreementCheckbox = document.getElementById('agreement');
const nextBtn = document.getElementById('nextBtn');

    agreementCheckbox.addEventListener('change', function () {
        nextBtn.disabled = !this.checked;
    });

   nextBtn.addEventListener('click', function () {
    if (agreementCheckbox.checked) {
        window.location.href = this.dataset.url;
    }
});
const form = document.querySelector('form');
const studentNumberInput = document.getElementById('studentNumber');

