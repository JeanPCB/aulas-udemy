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

                if(isUnitFull(second)) {
                    increaseSec();
                }

                if(isUnitFull(minute)) {
                    increaseMin();
                }

                System.out.printf("%d : %d : %d%n", hour, minute, second);
            }

            public boolean isUnitFull(int timeUnit) {
                return timeUnit > 59;
            }

            public void increaseSec() {
                second = 0;
                minute++;
            }

            public void increaseMin() {
                minute = 0;
                hour++;
            }
        };

        Timer timer = new Timer();
        long delay = 1000;
        long intervalPeriod = 1000;
        timer.scheduleAtFixedRate(startCount, delay, intervalPeriod);
    }
}
