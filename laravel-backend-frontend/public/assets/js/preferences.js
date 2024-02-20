document.getElementById("preferencesLink").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("preferencesForm").classList.toggle("hidden");
});

const maxTokensSlider = document.getElementById('maxTokens');
const maxTokensValueDisplay = document.getElementById('maxTokensValue');
const temperatureSlider = document.getElementById('temperature');
const temperatureValueDisplay = document.getElementById('temperatureValue');

maxTokensSlider.addEventListener('input', function() {
    maxTokensValueDisplay.textContent = this.value;
});

temperatureSlider.addEventListener('input', function() {
    temperatureValueDisplay.textContent = this.value;
});