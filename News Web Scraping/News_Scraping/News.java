package News_Scraping;


import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.io.UnsupportedEncodingException;
import java.util.List;
import java.util.concurrent.TimeUnit;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.WebDriverWait;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author B
 */
public class News {
     public static void main(String[] args) throws InterruptedException, FileNotFoundException, UnsupportedEncodingException 
     {
         // Create a new instance of the Firefox driver
         System.setProperty("webdriver.chrome.driver", "C:\\Chrome\\chromedriver.exe");
         WebDriver driver;
         driver = new ChromeDriver();
         //Launch the some site
         driver.get("https://www.dailynews.co.zw/articles/news");
         //driver.get("https://www.foxnews.com/ ");
         
       
        PrintWriter writer = new PrintWriter("C://News/new.txt", "UTF-8");
         List <WebElement> newsDaily= driver.findElements(By.className("article-row"));
         //List <WebElement> foxNews=driver.findElements(By.xpath("//*[@id=\"wrapper\"]/div[2]/div[1]/main/article/div/div/div[1]/p[8]/text()[2]"));
         
        
 for(int i=0;i<newsDaily.size();i++){
  String news=newsDaily.get(i).getText();
  System.out.println(news);
        writer.append("Daily news");
        writer.append(news+'\n');
       writer.println(news);
        
       
 
 }
// for(int i=0;i<foxNews.size();i++){
//  String fox=foxNews.get(i).getText();
//  System.out.println(fox);
//        writer.append("Daily news");
//        writer.append(fox+'\n');
//       writer.println(fox);
//        
//       
// 
// }  // Close the driver
 writer.close();
          
        

         

}
}

