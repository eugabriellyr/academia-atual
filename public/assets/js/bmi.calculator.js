/*--------------------------------------------------
    BMI Calculator
---------------------------------------------------*/
function calculateBMI(){
    var weight = document.bmiCalc.weight.value
    var height = document.bmiCalc.height.value

    if(weight > 0 && height > 0){
        var finalBmi = (weight/(height*height))*10000;
        document.bmiCalc.bmi.value = new Number(finalBmi).toFixed(2)

        if(finalBmi < 18.5){
            document.bmiCalc.meaning.value = "IMC Abaixo do peso"
        }

        if(finalBmi > 18.5 && finalBmi < 25){
            document.bmiCalc.meaning.value = "IMC normal "
        }

        if(finalBmi > 25 && finalBmi < 30){
            document.bmiCalc.meaning.value = "IMC acima do peso BMI"
        }

        if(finalBmi > 30 && finalBmi < 35){
            document.bmiCalc.meaning.value = "IMC obeso"
        }

        if(finalBmi > 35){
            document.bmiCalc.meaning.value = "IMC extremamente obeso"
        }

    }else{
        alert ("Please fill in all fields.")
    }
}
