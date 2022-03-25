#include<iostream>
using namespace std;

int main(){
	int data, perawat, dokter, kontrol, obat;
	cout<<"Pasien datang kerumah sakit"<<endl;
	cout<<"Apakah pasien memiliki data ? (ya=1) : ";
	cin>>data;
	if (data==1){
		cout<<"Pasien diarahkan ke perawat"<<endl;
	}
	else{
		cout<<"Pasien mengisi formulir data diri"<<endl;
	}
	cout<<"Apakah pasien memiliki perawat ? (ya=1) : ";
	cin>>perawat;
	if (perawat=1){
		cout<<"Pasien melakukan cek detak jantung, tekanan darah, berat badan, dan pengukuran lain yang relevan"<<endl;
	}
	else{
		cout<<"Pasien diminta menunggu di ruang tungggu "<<endl;
	}
	cout<<"Apakah dokter nya tersedia ? (ya=1)";
	cin>>dokter;
	if (dokter==1){
		cout<<"Pasien langsung diperiksa "<<endl;
	}
	else{
		cout<<"Pasien diminta menunggu diruang tunggu "<<endl;
	}
	cout<<"Apakah pasien membutuh kan kontrol ? (ya=1)";
	cin>>kontrol;
	if(kontrol==1){
		cout<<"Dokter membuat daftar kontrol "<<endl;
	}
	else{
		cout<<"Dokter akan meresepkan obat "<<endl;
	}
	cout<<"Dokter memutuskan apakah pasien butuh obat ? (ya=1)";
	cin>>obat;
	if (obat==1){
		cout<<"Dokter meresepakan obat "<<endl;
		cout<<"Pasien diminita membayar/ menebus obat"<<endl;
	}
	else{
		cout<<endl;
	}
	cout<<"Pasien meninggalkan rumah sakit"<<endl;
	return 0;
}
