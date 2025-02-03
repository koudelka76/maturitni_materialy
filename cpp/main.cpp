#include "vodafone.h"
#include <string>
#include <iostream>
#include <vector>
using namespace std;

struct Ucet{
    string jmenoZakaznika;
    MobilniSluzba* mobilniSluzba;
};

vector<Ucet> seznamUctu;

int main() {
    MobilniSluzba neomezene;
    InternetovaSluzba stovka("Data",699,26,100);

    stovka.jeDlouhodoba();
   // stovka.vypisInformace();

    seznamUctu.push_back({"Pepa",&stovka});
    seznamUctu.push_back({"Karel",&neomezene});
/*
    for(const auto& u: seznamUctu){
        cout <<"Zákazník: " << u.jmenoZakaznika << ", ";
        u.mobilniSluzba->vypisInformace();
    }*/
    return 0;
}
