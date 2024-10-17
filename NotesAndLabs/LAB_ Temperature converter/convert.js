window.addEventListener("DOMContentLoaded", domLoaded);

function domLoaded() {
    const cInput = document.getElementById('cInput');
    const fInput = document.getElementById('fInput');
    const convertButton = document.getElementById('convertButton');
    const errorMessage = document.getElementById('errorMessage');

    cInput.addEventListener('input', function () {
        fInput.value = '';
        errorMessage.innerHTML = '';
    });

    fInput.addEventListener('input', function () {
        cInput.value = '';
        errorMessage.innerHTML = '';
    });

    convertButton.addEventListener('click', function () {
      let cValue = parseFloat(cInput.value);
      let fValue = parseFloat(fInput.value);
  
      if (!isNaN(cValue)) {
          let convertedF = convertCtoF(cValue);
          fInput.value = convertedF;
          updateImage(convertedF);
      } else if (!isNaN(fValue)) {
          let convertedC = convertFtoC(fValue);
          cInput.value = convertedC;
          updateImage(fValue);
      } else if (isNaN(cValue)) {
         errorMessage.innerHTML = cInput.value + ' is not a number';
      } else if(isNaN(fValue)) {
          errorMessage.innerHTML = fInput.value + ' is not a number';
      } 
  });
}

function convertCtoF(degreesCelsius) {
    return (degreesCelsius * 9/5) + 32;
}

function convertFtoC(degreesFahrenheit) {
    return (degreesFahrenheit - 32) * 5/9;
}

function updateImage(fahrenheit) {
    const weatherImage = document.getElementById('weatherImage');
    if (fahrenheit < 32) {
        weatherImage.src = 'cold.png';
    } else if (fahrenheit <= 50) {
        weatherImage.src = 'cool.png';
    } else {
        weatherImage.src = 'warm.png';
    }
}




