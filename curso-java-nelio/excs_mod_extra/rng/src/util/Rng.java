package util;

public class Rng {
    public static int generator(int min, int max) {
        return (int) Math.round(Math.random() * (max - min) + min);
    }
}
