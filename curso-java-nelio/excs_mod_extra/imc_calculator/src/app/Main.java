package app;

import util.ImcCalculator;

import java.util.Locale;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Locale.setDefault(Locale.US);
        Scanner scanner = new Scanner(System.in);

        System.out.print("Informe seu peso: ");
        double weight = scanner.nextDouble();
        System.out.print("Informe sua altura: ");
        double height = scanner.nextDouble();

        double imc = ImcCalculator.calc(weight, height);

        System.out.printf("IMC = %.2f (%s)", imc, ImcCalculator.rate(imc));
    }
}
