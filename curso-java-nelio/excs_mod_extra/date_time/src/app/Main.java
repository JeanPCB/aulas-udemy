package app;

import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.time.format.FormatStyle;

public class Main {
    public static void main(String[] args) {
        LocalDateTime date = LocalDateTime.now();
        LocalTime time = LocalTime.now();
        DateTimeFormatter datePattern = DateTimeFormatter.ofLocalizedDate(FormatStyle.FULL);
        DateTimeFormatter timePattern = DateTimeFormatter.ofPattern("HH:mm:ss");

        String formattedDate = date.format(datePattern);
        String formattedTime = time.format(timePattern);
        System.out.printf("%s\n%s",formattedDate, formattedTime);
    }
}
