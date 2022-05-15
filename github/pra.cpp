#include <conio.h>
#include <iostream>
#include <string>

using namespace std;

int main(){
	
	int a, b, n;
	float hasil;
	
	cout<<"SILAHKAN PILIH MENU DIBAWAH INI"<<endl;
	cout<<"1. Penjumlahan"<<endl;
	cout<<"2. Pengurangan"<<endl;
	cout<<"3. Perkalian"<<endl;
	cout<<"4. Pembagian"<<endl;
	cout<<endl;
	
	cout<<"Masukan Pilihan : ";
	cin>>n;
	cout<<"Masukan Bilangan pertama : ";
	cin>>a;
	cout<<"Masukan Bilangan kedua : ";
	cin>>b;
	if(n==1){
		hasil = a + b;
		cout<<a<<" + "<<b<<" = "<<hasil;
	}
	else if(n==2){
		hasil = a - b;
		cout<<a<<" - "<<b<<" = "<<hasil;
	}
	else if(n ==3){
		hasil = a * b;
		cout<<a<<" x "<<b<<" = "<<hasil;
	}
	else if(n==4){
		hasil = a / b;
		cout<<a<<" / "<<b<<" = "<<hasil;
	}
	return 0;
}
	
	
