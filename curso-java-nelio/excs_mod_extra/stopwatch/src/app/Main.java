package app;

import java.util.Timer;
import java.util.TimerTask;

public class Main {
    public static void main(String[] args) {

        TimerTask startCount = new TimerTask() {
            int hour = 0;
            int minute = 0;
            int second = 0;

            @Override
            public void run() {
                second++;
                System.out.println(second);
            }
        };

        Timer timer = new Timer();
        long delay = 1000;
        long intervalPeriod = 1000;

        timer.scheduleAtFixedRate(startCount, delay, intervalPeriod);
    }
}
