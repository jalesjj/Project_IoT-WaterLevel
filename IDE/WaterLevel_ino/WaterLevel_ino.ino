// include library untuk koneksi ke wifi
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>

// inisialisasi pin sensor
#define triggerPin 5 //pin D1
#define echoPin 4  //pin D2

// siapkan variable untuk sensor HC-SR04
long durasi;
int jarak; // tambahkan tanda titik koma

// konfigurasi wifi
const char* ssid = "Keyboardss";
const char* password = "ikbenblij";

// ip server tempat aplikasi berjalan
const char* server = "192.168.249.146";

// pin untuk lampu LED
#define ledPin 2 //pin D4

void setup() {
  Serial.begin(9600);
  pinMode(echoPin, INPUT);
  pinMode(triggerPin, OUTPUT);
  pinMode(ledPin, OUTPUT);

  // koneksi ke wifi
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password); 

  // uji koneksi wifi
  while (WiFi.status() != WL_CONNECTED) 
  {
    Serial.print(".");
    digitalWrite(ledPin, LOW);
    delay(500);
  }

  // apabila sudah terkoneksi
  digitalWrite(ledPin, HIGH);
}

void loop() {
  // membaca nilai jarak sensor HC-SR04
  digitalWrite(triggerPin, LOW);
  delayMicroseconds(2);
  digitalWrite(triggerPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(triggerPin, LOW);

  // baca durasi waktu gelombang dipancarkan
  durasi = pulseIn(echoPin, HIGH);

  // hitung jarak dalam cm
  jarak = durasi * 0.034 / 2; // menghasilkan jarak dalam cm
  
  // cetak jarak ke Serial Monitor
  Serial.println(jarak);

  //kirim data ke database
  WiFiClient client;
  String Link; 
  HTTPClient http;
  Link = "http://"+String(server)+"/waterlevel/kirimdata.php?tinggi=" + String(jarak);
  http.begin(client, Link);
  http.GET();
  http.end();

  delay(500);
}