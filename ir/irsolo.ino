int infra = 7;
int valor = 0;
int cont = 0;
int var = 0;
int val = 0;


void setup() {
  Serial.begin(9600);
  pinMode(infra, INPUT);

}

void loop() {
  
 int val = 0;
 var = digitalRead(infra);
  Serial.println(var);
  delay(2000);
}
