#include <DHT_U.h>
#include <DHT.h>


#include <DHT.h>
#define DHTPIN 2
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);

void setup(){
  Serial.begin(9600);
  dht.begin();
}

void loop(){
  delay(1000);
  float h = dht.readHumidity();
  float t = dht.readTemperature();
  float f = dht.readTemperature(true);
  if(isnan(h)||isnan(t)||isnan(f)){
    Serial.print("Error");
    return;
  }
  float hif = dht.computeHeatIndex(f,h);
  float hic = dht.computeHeatIndex(t,h,false);
  Serial.print("Humedad: ");
  Serial.print(h);
  Serial.print("%\t");
  Serial.print("Temperatura: ");
  Serial.print(t);
  Serial.print("*c ");
  Serial.print(f);
  Serial.print("*f\t");
  Serial.print("Indice de calor:");
  Serial.print(hic);
  Serial.print("*C ");
  Serial.print(hif);
  Serial.println("f");
}
