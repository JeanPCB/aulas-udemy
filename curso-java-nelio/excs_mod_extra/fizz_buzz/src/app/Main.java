package app;

public class Main {
    public static void main(String[] args) {
        for(int i = 0; i <= 100; i++) {
            System.out.printf("%d - %s%n", i, fizzBuzz(i));
        }
    }

    public static String fizzBuzz(int num) {
        if(num % 3 == 0 && num % 5 == 0) {
            return "FizzBuzz";
        } else if (num % 3 == 0) {
            return "Fizz";
        } else if(num % 5 == 0) {
            return "Buzz";
        }
        return Integer.toString(num);
    }
}
