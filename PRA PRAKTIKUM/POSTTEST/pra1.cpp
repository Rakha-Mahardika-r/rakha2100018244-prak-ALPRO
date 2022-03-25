#include<iostream>
using namespace std;
int main() {
	int a,b,c,d;
	cout<<"KALKULATOR"<<endl;
	cout<<"1. PENJUMLAHAN"<<endl;
	cout<<"2. PENGURANGAN"<<endl;
	cout<<"3. PERKALIAN"<<endl;
	cout<<"4. PEMBAGIAN"<<endl;
	cout<<"SILAHKAN PILIH NOMOR YANG ANDA PILIH : "; cin>>a;
	cout<<"MASUKKAN BILANGAN PERTAMA : "; cin>>b;
	cout<<"MASUKKAN BILANGAN KEDUA : "; cin>>c;
	cout<<endl;
	cout<<"===================================="<<endl;
	if(a==1){
		d = b+c;
		cout<<"MAKA HASIL DARI "<<b<<" + "<<c<<" = "<<d<<endl;	
	}else if(a==2){
		d = b-c;
		cout<<"MAKA HASIL DARI "<<b<<" - "<<c<<" = "<<d<<endl;	
	}else if(a==3){
		d = b*c;
		cout<<"MAKA HASIL DARI "<<b<<" * "<<c<<" = "<<d<<endl;	
	}else if(a==4){
		d = b/c;
		cout<<"MAKA HASIL DARI "<<b<<" / "<<c<<" = "<<d<<endl;	
	}else{
		cout<<"OPERATOR YANG ANDA MASUKKAN SALAH"<<endl;
	}
	return 0;
}
