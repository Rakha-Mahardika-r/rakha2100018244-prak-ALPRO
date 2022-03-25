#include<iostream>
#include<math.h>
#include<conio.h>
using namespace std;

class Hitung {
	friend ostream& operator<<(ostream&, const Hitung&);
	friend istream& operator>>(istream&, Hitung& );
	public:
		Hitung();
		void hitung_jumlahnya(){ jumlah = (sqrt(((x2-x1)*(x2-x1))+((y2-y1)*(y2-y1))));
		}
	private:
		int x1,y1,x2,y2;
		float jumlah;
};

Hitung::Hitung() {
	cout<<"Mencari jarak antara 2 titik\n";
	cout<<"Selamat berkarya\n";
}

istream& operator>>(istream& in, Hitung& masukan){
	cout<<"Masukkan nilai X1 : ";
	in >> masukan.x1;
	cout<<"Masukkan nilai Y1 : ";
	in >> masukan.y1;
	cout<<"Masukkan nilai X2 : ";
	in >> masukan.x2;
	cout<<"Masukkan nilai Y2 : ";
	in >> masukan.y2;
	return in;
}

ostream& operator<<(ostream& out, const Hitung& keluaran) {
	out<< "Nilai x1 : "<<keluaran.x1<<endl;
	out<< "Nilai y1 : "<<keluaran.y1<<endl;
	out<< "Nilai x2 : "<<keluaran.x2<<endl;
	out<< "Nilai y2 : "<<keluaran.y2<<endl;
	out<< "Jarak antara titik A dengan titik B : "<<keluaran.jumlah<<endl;
	return out;
}

main(){
	Hitung X;
	cin >> X;
	X.hitung_jumlahnya();
	cout<<X;
	getch();
	return 0;
}
