package util;

public class ImcCalculator {
    public static double calc(double weight, double height) {
        return weight / (height * 2);
    }

    public static String rate(double imc) {
        String rate = null;

        if (imc < 18.5) {
            rate = "Abaixo do peso";
        } else if (imc >= 18.5 && imc < 25) {
            rate = "Peso normal";
        } else if (imc >= 25 && imc < 30) {
            rate = "Sobrepeso";
        } else if (imc >= 30 && imc < 35) {
            rate = "Obesidade grau 1";
        } else if (imc >= 35 && imc < 40) {
            rate = "Obesidade grau 2";
        } else {
            rate = "Obesidade grau 3";
        }

        return rate;
    }
}
