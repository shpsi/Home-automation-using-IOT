#include <Wire.h>
#include <ESP8266WiFi.h>
#include <BH1750.h>
BH1750 lightMeter;
int node_id=1;
const char* ssid     = "CC3";
const char* password = "";
const char* host = "172.20.43.132";
#define LED 2
int lxM=1500;
int lxm = 30;
int ledPinR = 3;
int ledPinG = 6;
int ledPinB = 5;
int stat=1;
void setup() {
  // This function is responsible for wifi & LED connections
  pinMode(LED,OUTPUT);
  Serial.begin(115200);
  Wire.begin(4,5);
  lightMeter.begin();
  Serial.println(F("SMART STREET LIGHT"));
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password); 
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(1000);
    Serial.print(".");
  } 
  Serial.println("");
  Serial.println("WiFi connected");   
}

void loop() {  
  uint16_t luxInput = lightMeter.readLightLevel();
  //
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed 1");
    return;
  }
  String url = "http://172.20.43.132/smartLight/smartLightLocal/getMinLux.php?&nId=" + String(node_id);
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
  delay(1000);
  int cnt=0;
  int result=0;
  while(client.available()){
    String line = client.readStringUntil('\r');
    cnt=cnt+1;
    if(cnt==9){
      String num;
      for(int i=1;i<line.length();++i) 
        num=num+line[i];
      int i, len;
      len = num.length();
      for(i=0; i<len; i++){
        result = result * 10 + ( num[i] - '0' );
      } 
      break;
    }
  }
  lxm=result;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed 1");
    return;
  }
  url = "http://172.20.43.132/smartLight/smartLightLocal/getMaxLux.php?&nId=" + String(node_id);
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
  delay(1000);
  cnt=0;
  result=0;
  while(client.available()){
    String line = client.readStringUntil('\r');
    cnt=cnt+1;
    if(cnt==9){
      String num;
      for(int i=1;i<line.length();++i) 
        num=num+line[i];
      int i, len;
      len = num.length();
      for(i=0; i<len; i++){
        result = result * 10 + ( num[i] - '0' );
      } 
      break;
    }
  }
  lxM=result;
  //
  Serial.println("lxm is "+String(lxm)+ " and lxM is "+String(lxM));
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed 1");
    return;
  }
  url = "http://172.20.43.132/smartLight/smartLightLocal/getLux.php?&nId=" + String(node_id);
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
  delay(1000);
  cnt=0;
  result=0;
  while(client.available()){
    String line = client.readStringUntil('\r');
    cnt=cnt+1;
    if(cnt==9){
      String num;
      for(int i=1;i<line.length();++i) 
        num=num+line[i];
      int i, len;
      len = num.length();
      for(i=0; i<len; i++){
        result = result * 10 + ( num[i] - '0' );
      } 
      break;
    }
  }
  Serial.println("prev Lux is " + String (result) +"and new Lux is "+ String(luxInput));
  if( luxInput!=result){ 
    String url1 = "http://172.20.43.132/smartLight/smartLightLocal/setChanged.php?&nId=" + String(node_id) + "&changed=1";
    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
      Serial.println("connection failed 2");
      return;
    }
    client.print(String("GET ") + url1 + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
    delay(1000);
  }
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed 3");
    return;
  }
  String url3 = "http://172.20.43.132/smartLight/smartLightLocal/getIsOrder.php?&nId=" + String(node_id);
  client.print(String("GET ") + url3 + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
  delay(1000);
  cnt=0;
  result=0;
  while(client.available()){
    String line = client.readStringUntil('\r');
    cnt=cnt+1;
    if(cnt==9){
      String num;
      for(int i=1;i<line.length();++i) 
        num=num+line[i];
      int i, len;
      len = num.length();
      for(i=0; i<len; i++){
        result = result * 10 + ( num[i] - '0' );
      } 
      break;
    }
  }
  Serial.println("onOff is " + String(result));
  if(result==0){
    Serial.println("turning off light from interface");
    analogWrite(LED,0);
    String url41 = "http://172.20.43.132/smartLight/smartLightLocal/setonOff.php?&nId=" + String(node_id) + "&onOff=0";
    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
       Serial.println("connection failed 2");
       return;
    }
    client.print(String("GET ") + url41 + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
    delay(1000);
  }   
  else{
    url = "http://172.20.43.132/smartLight/smartLightLocal/setLux.php?&nId=" + String(node_id) + "&Lux="+ String(luxInput);
    if (!client.connect(host, httpPort)) {
      Serial.println("connection failed 4");
      return;
    }
    client.print(String("GET ") + url + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
    delay(1000);
    int luxOutput;
    luxOutput = map(luxInput, 0, lxM, 0, 255);
    if(luxInput<lxM&&luxInput>=lxm){     
      analogWrite(LED,255-luxOutput);        
      Serial.println("breakpoint 1\t\t");
        String url41 = "http://172.20.43.132/smartLight/smartLightLocal/setonOff.php?&nId=" + String(node_id) + "&onOff=1";
        WiFiClient client;
        const int httpPort = 80;
        if (!client.connect(host, httpPort)) {
         Serial.println("connection failed 2");
          return;
        }
        client.print(String("GET ") + url41 + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
        delay(1000);         
    }
    else if(luxInput<lxm && luxInput>=0){
      Serial.println("breakpoint 2\t\t"); 
        analogWrite(LED,255);
        String url41 = "http://172.20.43.132/smartLight/smartLightLocal/setonOff.php?&nId=" + String(node_id) + "&onOff=1";
        WiFiClient client;
        const int httpPort = 80;
        if (!client.connect(host, httpPort)) {
          Serial.println("connection failed 2");
          return;
        }
        client.print(String("GET ") + url41 + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
        delay(1000); 
    }
    else{
      analogWrite(LED,0);
      Serial.println("breakpoint 3\t\t");
      String url41 = "http://172.20.43.132/smartLight/smartLightLocal/setonOff.php?&nId=" + String(node_id) + "&onOff=0";
      WiFiClient client;
      const int httpPort = 80;
      if (!client.connect(host, httpPort)) {
        Serial.println("connection failed 2");
        return;
      }
      client.print(String("GET ") + url41 + " HTTP/1.1\r\n" +"Host: " + host + "\r\n" +"Connection: close\r\n\r\n");
      delay(1000);
    }
  }
  Serial.println("Loop ended ");
  delay(1000);
}
